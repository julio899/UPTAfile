<?php //header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>UPTAFILE 2013 - UPTA MARACAY</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-responsive.css">
<!-- para las Ñ y acentos -->
<!--<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> -->
<!-- archivos usados para el silder-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>silder/css/style.css" />
<script type="text/javascript"src="<?php echo base_url();?>silder/js/jquery-1.8.2.js" ></script>
<script type="text/javascript"src="<?php echo base_url();?>silder/js/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript"src="<?php echo base_url();?>silder/js/jquery-ui-tabs-rotate.js" ></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>


	<style>
body,header,footer,html{
	cursor: url('<?php echo base_url()."img/Normal.cur";?>'),default;
}
*{
	cursor: url('<?php echo base_url()."img/Normal.cur";?>'),auto;
}

a:hover,input[type='bottom'],input[type='submit'],input[type="checkbox"]:focus,input[type="checkbox"],label{
cursor: url('<?php echo base_url()."img/Link.cur";?>'),auto;	
}
textarea,input[type='text'],input[type='email'],input[type='password']{
cursor: url('<?php echo base_url()."img/text.cur";?>'),default;	
}

#cabecera{
min-height: 70px;
}
#contenido{
	margin-top: 120px;
}
.navbar-inverse .nav .active > a{
	background-color: orange;
}

.navbar-inverse .nav .active:hover > a{
	background-color: #00f0f0;
}
ul.nav>li:hover{
	background-color: #11f100;
}

#silder{
	width: 700px;
	height: 200px;
	background-color: #f1f1f1;
}
.login_contenedor{
	position: absolute;
	float:right;
	margin-left: 700px;
	width: 350px;
}
 
.identificacion{
	background-color:transparent;
	min-height: 50px;
	width: 450px;
	text-align: center;

/*background: rgba(255,255,255,0.3);*/
padding: 10px;
}
#div_noticias{
	margin-top: 10px;
}
.div_twitter{
	margin-top: 10px;
	min-height: 300px;
}
.slogan{
	float: left;
	position: absolute;
	margin-left: 0px;
	margin-top: 45px;
	text-align: center;
	color: white;
	font-family: monospace;
	font-style: oblique;
}
.box-txt{
	text-align: justify;
	text-indent:30px;
	border-spacing: inherit;
	background-color: #eeeeee;
	padding-left: 15px;
	padding-right: 15px;

}
.banda-title{
	background-color: white;
}
.row2not{
	margin-top: 10px;
}
#btnExit{
	float: left;
	position: absolute;
	top: 0px;
	left: 280px;

}
div.barra-opciones{
background:transparent;
margin-top: 25px;
height: 40px;
}
#barra-opt{
position: relative;
left: 0;
display: block;
float: left;
margin:0;
list-style: none;
margin-top: 5px;
}
#barra-opt>li{
	float: left;
	padding: 5px;
}
#barra-opt>li:hover{
	background-color: orange;
}
#barra-opt>li>a{
	margin-left: 3px;
	margin-right: 3px;
	color:white;	

}

#barra-opt>li>a:hover{
	color:white;
}
div#contenedor_docente{
	margin-top: 150px;
}

div#contenedor_docente{
	background: url('<?php echo base_url();?>img/page-bg.png') repeat center top;
	padding-top: 20px;
	padding-bottom: 20px;
}

div#pantalla_docente{
	background-color: #f1f1f1;
	min-height: 200px;
	margin-right: 10px;
	border: 1px;
	border-radius: 5px;
	box-shadow: 1px 2px 1px silver;
	padding: 10px;

}
div.bloque-noticia,div.bloque-contenido{

position: relative;
margin: 15px 0;
padding: 15px 19px 14px;
background-color: #ddf;
border: 1px solid #ddd;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;

}
div.bloque-noticia:after {
content: "Noticia";
position: absolute;
top: -1px;
left: -1px;
padding: 3px 7px;
font-size: 12px;
font-weight: bold;
background-color: #f5f5f5;
border: 1px solid #ddd;
color: #9da0a4;
-webkit-border-radius: 4px 0 4px 0;
-moz-border-radius: 4px 0 4px 0;
border-radius: 4px 0 4px 0;
}

div.bloque-contenido:after {
content: "Contenido";
position: absolute;
top: -1px;
left: -1px;
padding: 3px 7px;
font-size: 12px;
font-weight: bold;
background-color: #f5f5f5;
border: 1px solid #ddd;
color: #9da0a4;
-webkit-border-radius: 4px 0 4px 0;
-moz-border-radius: 4px 0 4px 0;
border-radius: 4px 0 4px 0;
}

div.bloque-noticia:before,div.bloque-contenido:before {
content: "UPTA - Maracay, Edo. Aragua";
position: absolute;
bottom: -1px;
right: -1px;
padding: 3px 7px;
font-size: 12px;
font-weight: bold;
background-color: #f5f5f5;
border: 1px solid #ddd;
color: #9da0a4;
-webkit-border-radius: 4px 0 4px 0;
-moz-border-radius: 4px 0 4px 0;
border-radius: 4px 0 4px 0;
}

div.fecha{
position: absolute;
bottom: -1px;
left: -1px;
padding: 3px 7px;
font-size: 12px;
font-weight: bold;
background-color: #f5f5f5;
border: 1px solid #ddd;
color: #9da0a4;
-webkit-border-radius: 4px 0 4px 0;
-moz-border-radius: 4px 0 4px 0;
border-radius: 4px 0 4px 0;
}

div.bloque-noticia>p{
	margin-left: 15px;
	margin-bottom: 15px;
	text-indent: 20px;
}
div.bloque-contenido>p{
	margin-left: 15px;
	margin-bottom: 15px;
	text-indent: 20px;
}
select{
	height: 50px;
	font-size: 20px;
	padding: 5px;
	border-radius: 5px;
}
input.borde[type=text]{
width: 278px;
margin: 5px;
padding: 0 10px;
width: 200px;
height: 34px;
color: #404040;
background: white;
border: 1px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 2px;
outline: 5px solid #eff4f7;
-moz-outline-radius: 3px;
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}
select.borde{
margin: 5px;
color: #404040;
background: white;
border: 1px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 2px;
outline: 5px solid #eff4f7;
-moz-outline-radius: 3px;
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}
select.borde:focus{
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}
textarea{
margin: 5px;
color: #404040;
background: white;
border: 1px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 2px;
outline: 5px solid #eff4f7;
-moz-outline-radius: 3px;
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}

#msj_email{
	width: 600px;
margin: 5px;
color: #404040;
background: white;
border: 1px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 2px;
outline: 5px solid #eff4f7;
-moz-outline-radius: 3px;
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);

}
#comentario_usuario{
resize:none;
width: 520px;
margin: 5px;
color: black;
font-style: italic;
font-family:'Courier New','monospace','sans-serif','Monaco',sans-serif;
background: white;
border: 1px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 2px;
outline: 5px solid #eff4f7;
-moz-outline-radius: 3px;
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);

}

input.borde[type=text]:focus{
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}	

input[type=file]{
	padding: 10px;
	width: 800px;
}	

div.archivo{
	background: url('http://ktuxca.com/UPTA/img/page-bg.png') repeat center top;
position: relative;
margin: 15px 0;
padding: 15px 19px 14px;
border: 1px solid #ddd;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
div.archivo:after {
content: "Si desea enviar un archivo o varios archivos en un archivo comprimido Seleccionelo en este apartado.";
position: absolute;
top: -1px;
left: -1px;
padding: 3px 7px;
font-size: 12px;
font-weight: bold;
background-color: #f5f5f5;
border: 1px solid #ddd;
color: #9da0a4;
-webkit-border-radius: 4px 0 4px 0;
-moz-border-radius: 4px 0 4px 0;
border-radius: 4px 0 4px 0;
}

#msj_email:focus{
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}
#comentario_usuario:focus{
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}

#titulo{
	width: 600px;
}
div#ver_contenido{
	margin-top: 110px;
	margin-left: 15px;
	margin-right: 15px;
	border: 2px solid gray;
	border-style: dotted;
	padding: 25px;
	border-radius: 5px;
	box-shadow: 2px 2px 5px #999;
}	
div#contenedor_comentarios{
	border: 1px solid gray;
	border-style: dotted;
	margin-top: 25px;
	margin-bottom: 25px;	
	padding-top: 10px;


}
div.comentario-individual{
	background-color: transparent;
	margin: 0px;
	padding-top: 5px;
	padding-bottom: 5px;
	border-bottom:1px solid gray; 
	border-bottom-style: double;
}
div.caja-fecha-comentario-individual{
	background-color:rgb(221, 221, 255);
	padding: 5px;
}

div.caja-comentario-individual{
	/*background-color: rgb(245, 245, 245);*/
	background:none repeat scroll 0% 0% rgb(240, 234, 221);
	padding-top: 10px;
	padding-left: 5px;
	padding-bottom: 10px;
}
div.caja-comentario-individual>p{
	text-indent: 40px;
	font-family: 'Alegreya',serif;
	font-size: 1.4em;
	font-style: oblique;
	padding-left: 10px;
	padding-right: 10px;
}
div.caja-fecha-comentario-individual>label{
	text-indent: 10px;
	font-style: oblique;
	font-family: 'tahoma',serif;
}
</style>



</head>
<body>
		<header>
			
			<div  class="navbar navbar-fixed-top navbar-inverse">
			<div id="cabecera" class="navbar-inner navbar-inverse">
				<div class="container">
									<a class="brand" href="<?php echo base_url();?>">UPTA-File 2013</a>

							<ul class="nav">
								<li <?php if(isset($GLOBALS['pagina_inicio'])){ echo 'class="active"';} ?> ><a href="<?php echo base_url();?>">Inicio</a></li>
								<li <?php if(isset($GLOBALS['pagina_noticias'])){ echo 'class="active"';} ?> ><a href="<?php echo base_url().index_page().'/noticias';?>">Noticias</a></li>
								<li><a target="_blank" href="https://twitter.com/UPTAFILE">Twitter</a></li>
								<li <?php if(isset($GLOBALS['pagina_contactos'])){ echo 'class="active"';} ?> ><a href="<?php echo base_url().index_page().'/contactos';?>">Contactos</a></li>

								<?php 
								if($this->session->userdata('datos_usuario'))
								{
										$data=$this->session->userdata('datos_usuario');
								}

								if(isset($data['tipo'])&&$data['tipo']=='D'){   ?>
          						<li <?php if(isset($GLOBALS['pagina_panel_docente'])){ echo 'class="active"';} ?> ><a href="<?php echo base_url().index_page().'/docente';?>"> Panel Docente</a></li>
          						<?php 		}//fin del if  ?>

							</ul>
							<div class="slogan"><p>Innovando Ideas Creativas...</p></div>

							<?php 
								if($this->session->userdata('datos_usuario')){
										$data=$this->session->userdata('datos_usuario');
										?>
											
							<div class="login_contenedor">
									<div class="alert alert-success">
										<b>Bienvenido </b><?php echo strtoupper($data['nombre']." ".$data['apellido'])."<br>Te has identificado como ".$data['usuario']; ?>
										
									</div>
									<a id="btnExit" class="btn btn-danger" href="<?php echo base_url().index_page().'/identificacion/desconectarse';?>">Salir</a>
							</div>
										<?php
									}else{
							?>
							<div class="login_contenedor">
								<form class="form-horizontal identificacion form-search" action="<?php echo base_url().index_page()."/identificacion";?>" method="POST">
									<input type="text" name="usuario" class="input-small search-query" id="user" placeholder="Usuario" required="required"/>
									<input type="password" name="clave" class="input-small"  id="pass" placeholder="Clave" required="required"/>
									<input type="submit" class="btn btn-primary" value="Entrar"/>
									<a href="<?php echo base_url().index_page().'/registro';?>" class="btn btn-warning">Registro</a>
								</form>
							</div>
							<?php 
										}//en caso que no se haya logueado
							?>


				</div><!--Fin del header -->


				<?php if($this->session->userdata('datos_usuario')){
							$userData=$this->session->userdata('datos_usuario');
							//condicional Muestra esta Barra si es un Docente
							if($userData['tipo']=='D'){
					?>
				<!--inicio de la barra de opciones -->
				<div class="container barra-opciones">
						<ul id="barra-opt">	
							<li><i class="icon-file icon-white"></i><a href="<?php echo base_url().index_page().'/docente/crear_contenido';?>" >Crear Contenido</a></li>
							<li><i class="icon-envelope icon-white"></i><a href="<?php echo base_url().index_page().'/docente/notificar';?>" title="Informar via E-Mail">Notificar por Correo</a></li>
							<li><i class="icon-bullhorn icon-white"></i><a href="<?php echo base_url().index_page().'/docente/crear_noticia';?>" title="Informar de Eventos o Actividades">Generar Noticia</a></li>
							<!--<li><i class="icon-comment icon-white"></i><a href="#">Responder a Comentarios	</a></li>-->
							<li><a href="#"></a></li>
						</ul>	
				</div>
				<?php
							}//fin del condicional si el tipo de usuario es 'D' un Docente


			}//fin de la barra si encuentra datos de usuario?>
				<!--FIN de la barra de opciones -->

			</div>
		</div>
		</header>