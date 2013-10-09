<div id="ver_contenido">

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
					<a href=""><?php echo utf8_decode(utf8_encode($publicacion[0]['titulo']));?></a>  

					<span class="divider">/</span> Publicado por <i class="icon-briefcase"></i> <?php echo utf8_decode(utf8_encode(strtoupper($autor['nombre']." ".$autor['apellido']))); ?></h3>
					<p><?php echo nl2br(utf8_decode(utf8_encode($publicacion[0]['contenido'])));
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

<!-- Inicio de los comentarios -->
<?php
		if (isset($this->session->userdata['datos_usuario'])) {
		$datos_session=$this->session->userdata['datos_usuario'];
?>
		<!-- <div id="contenedor_comentario_noticias" class="row">
		</div>-->
				<?php 
						if(isset($comentarios)){
							//var_dump($comentarios);
							if(count($comentarios)>0){
								?>
						<div id="contenedor_comentarios">
								<?php
								for ($p=0; $p < count($comentarios); $p++) { 
									# recorrrmos los comentarios para imprimirlos
									?>
									<div class="row comentario-individual">
									
									<div class="span2 caja-fecha-comentario-individual">
										<label><?php 
									if($comentarios[$p]['tipo']=='D'){
															echo '<i class="icon-briefcase"></i> '.$comentarios[$p]['nombre_apellido'];
													}else{
															echo '<i class="icon-user"></i> '.$comentarios[$p]['nombre_apellido'];
													}
													
													?></label>
										<pre>Fecha: <?php echo date_format(date_create($comentarios[$p]['fecha']), 'd-m-Y H:i:s');?></pre>
									</div>

									<div class="span10 caja-comentario-individual"><p><?php echo nl2br($comentarios[$p]['comentario']);?></p></div>
									</div>
									<?
								}/*fin del for*/
								?>
						</div><!--Cierre del bloque de comentarios -->
								<?php
							}
						}
				?>

	<div class="row">
		<hr>
		<?php 
		
			//var_dump($datos_session);
			if($datos_session['tipo']=='D'||$datos_session['tipo']=='E'){
				$tipo_cuenta="";
				if($datos_session['tipo']=='D'){$tipo_cuenta="DOCENTE";}else{$tipo_cuenta="ESTUDIANTE";}
					echo "<div class=\"span2\">Tipo de Cuenta: ".$tipo_cuenta."<br><br> Bienvenido <br>".$datos_session['nombre']." ".$datos_session['apellido']."</div>";
					//echo "<div class=\"span10\"><pre>Si deseas realizar un comentario o hacer una consulta sobre el contenido lo puede realizar en esta secci&oacute;n.</pre> </div>";
				?>
				<div class="span10">
				<center>
					<pre>Si deseas realizar un comentario o hacer una consulta sobre el contenido lo puede realizar en esta secci&oacute;n.</pre>
					<form action="<?php echo base_url().index_page().'/contenido/EnviarComentario';?>" method="POST">
					<textarea id="comentario_usuario" class="borde" rows="4" name="comentario" placeholder="Escriba Aqui su comenario o Consulta..." required="required"></textarea>
					<input type="submit" class="btn btn-success btn-large" value="CONFIRMAR" onclick="confirm('Esta Seguro de enviar este comentario?');">
					</form>
				</center>
				</div>
				<?
			}
		}else{

		}
		?>

	</div>
</div>