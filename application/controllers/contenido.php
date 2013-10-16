<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenido extends CI_Controller {
	public function index()
	{

	}

public function EnviarComentario(){

		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('comentario', 'Comentario', 'trim|required|min_length[5]|max_length[2500]|xss_clean');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('cabecera');
			$error=array('error'=>validation_errors());
			
			echo "<div id=\"contenido\" class=\"container\">";
			echo "<pre>Falto informacion para poderse registrar</pre><div class=\"alert alert-error\">";
			echo validation_errors();
			echo "</div></div>"; 

			$this->load->view('pie_pagina');

		}else{
			$this->load->model('data');
			//$comentario = filter_var($this->input->post('comentario'),FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
			$comentario = filter_var($this->input->post('comentario'),FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_ENCODE_AMP);
			/*
			$comentario = preg_replace('*', ' ',$this->input->post('comentario'));
			$comentario = preg_replace(')', ' ',$comentario);
			$comentario = preg_replace('(', ' ',$comentario);
			$comentario = preg_replace(';', ' ',$comentario);
			$comentario = preg_replace('`', ' ',$comentario);*/
			$datos_usuario=$this->session->userdata('datos_usuario');
			$id_contenido=$this->session->userdata('contenido_seleccionado');
			$data=array('idu'=>$datos_usuario['idu'],'idc'=>$id_contenido,'comentario'=>$comentario);

			/*var_dump($comentario);
			echo "<br><hr>";
			var_dump($datos_usuario);
			echo "<br><hr>";
			var_dump($id_contenido);*/
			//
			//var_dump($this->data->insertar_comentario_contenido($data));

			//si devuelve el valor 1 nos inserto el comentario
			if($this->data->insertar_comentario_contenido($data)==1){
				 redirect('/contenido/ver_contenido/'.$id_contenido, 'refresh');					
				}else{
					// en caso que no nos haya insertado el comentario
					
					}/*fin del else sino inserto el comentario*/



		}
}

	public function ver_contenido($x=''){
		$this->load->model('data');
		$this->load->view('cabecera');
		$this->session->set_userdata('contenido_seleccionado',$x);
		$publicacion=$this->data->obtener_contenido_id($x);
		$full_name=$this->data->nombre_apellido($publicacion[0]['idu']);
		$comentarios=$this->data->obtener_comentarios_contenido($x);
		$data=array('publicacion'=>$publicacion,'autor'=>$full_name,'comentarios'=>$comentarios);
		if($full_name==-1){	
			$this->load->view('errores/error_404.php');
			//echo "<br><br><br><br><br><br><div class=\"row\"><h1>El contenido no Existe o ya ha sido Eliminado.</h1></div>";
		}else{
			$this->load->view('detallar_contenido',$data);
		}
/*
		echo '<div id="ver_contenido">';
		//var_dump($this->data->obtener_contenido_id($x));
		?>
		<div id="contenedor_noticias" class="row">
		<!-- Barra lateral  de OPCIONES -->
		<div class="span2">
			<!--<ul class="nav nav-list bs-docs-sidenav affix-top">
	          <li class="active"><a href="#typography"><i class="icon-info-sign"></i> Actualizar Mi Informaci&oacute;n</a></li>
	          <li class=""><a href="#code"><i class="icon-exclamation-sign"></i> Modificar Contenidos</a></li>
	          <li class=""><a href="#tables"><i class="icon-eye-open"></i> Visualizar Comentarios</a></li>
	        </ul>-->
		</div>
		<!-- fin de barra de opciones-->


			<div class="span10">
				<h1>Detalle de Publicaci&oacute;n</h1>
				<div class="bloque-contenido"><h3 class="breadcrumb">
					<a href=""><?php echo utf8_decode($publicacion[0]['titulo']);?></a>  

					<span class="divider">/</span> Publicado por<i class="icon-briefcase"></i> <?php echo utf8_decode(utf8_encode(strtoupper($full_name['nombre']." ".$full_name['apellido']))); ?></h3>
					<p><?php echo nl2br(utf8_decode($publicacion[0]['contenido']));
							 if(isset($publicacion[0]['nombre_archivo'])){
							 	if(strlen($publicacion[0]['nombre_archivo'])>3){
									echo '<br><center><a href="'.base_url().'archivos/'.$publicacion[0]['idu'].'/'.$publicacion[0]['nombre_archivo'].'" class="btn btn-info" TARGET = "_blank">Click Aqui para Descargar Archivo</a></center>';
							  	}							 			
							 }
					?>
					</p><div class="fecha">Fecha: <?php echo $publicacion[0]['fecha']?></div>
				
				</div>			
			</div>
	</div>

	<?

		echo "</div>";*/
		$this->load->view('pie_pagina');
	}
}
