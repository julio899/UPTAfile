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

			$datos_usuario=$this->session->userdata('datos_usuario');
			$id_contenido=$this->session->userdata('contenido_seleccionado');
			$data=array('idu'=>$datos_usuario['idu'],'idc'=>$id_contenido,'comentario'=>$comentario);

			//si devuelve el valor 1 nos inserto el comentario
			if($this->data->insertar_comentario_contenido($data)==1){
				 redirect('/contenido/ver_contenido/'.$id_contenido, 'refresh');					
				}else{
					// en caso que no nos haya insertado el comentario
						echo "<div id=\"contenido\" class=\"container\">";
						echo "<pre>Registrar su Comentario</pre><div class=\"alert alert-error\">";
						echo "</div></div>"; 
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
				}else{
					$this->load->view('detallar_contenido',$data);
				}
			
		$this->load->view('pie_pagina');
	}
}
