
<div id="contenido" class="container">
	<?php if(isset($error)){
				echo "
						<div class=\"row\">
							<div class=\"span12 alert alert-error\">";
				echo '<i class="icon-warning-sign"></i> '.strtoupper($error);

				echo "</div>
						</div>";
					}//fin si hay algun error

					if($this->session->flashdata('status')){

				echo "<div class=\"row\"><div class=\"span12 alert alert-success\">";
				echo $this->session->flashdata('status');

				echo "</div>
						</div>";
					}
	?>

			<div class="row">
				<div class="span8">


				<div class="row">
						<div class="span8">

					
		<!-- Inicio del silder -->	

		<div id="featured" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
		  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
	        <li class="ui-tabs-nav-item ui-state-default ui-corner-top" id="nav-fragment-1" role="tab" tabindex="0" aria-controls="fragment-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#fragment-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><img src="<?php echo base_url();?>silder/img/image1-small.jpg" alt=""><span>Desarrollo Contribuido</span></a></li>
	        <li class="ui-tabs-nav-item ui-state-default ui-corner-top" id="nav-fragment-2" role="tab" tabindex="-1" aria-controls="fragment-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#fragment-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><img src="<?php echo base_url();?>silder/img/image2-small.jpg" alt=""><span>Diseñando Creativamente</span></a></li>
	        <li class="ui-tabs-nav-item ui-state-default ui-corner-top" id="nav-fragment-3" role="tab" tabindex="-1" aria-controls="fragment-3" aria-labelledby="ui-id-3" aria-selected="false"><a href="#fragment-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><img src="<?php echo base_url();?>silder/img/image3-small.jpg" alt=""><span>Uso de Nuevas Tecnologias</span></a></li>
	        <li class="ui-tabs-nav-item ui-state-default ui-corner-top ui-tabs-active ui-state-active" id="nav-fragment-4" role="tab" tabindex="-1" aria-controls="fragment-4" aria-labelledby="ui-id-4" aria-selected="false"><a href="#fragment-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4"><img src="<?php echo base_url();?>silder/img/image4-small.jpg" alt=""><span>Midiendo Expectativa</span></a></li>
			
	      </ul>

	    <!-- First Content -->
	    <div id="fragment-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" style="display: none;" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">
			<img src="<?php echo base_url();?>silder/img/image1.jpg" alt="">
			 <div class="info">
				<h2><a href="#">Desarrollo Contribuido</a></h2>
				<p>Compartiendo conocimientos, Desarrollo contribuido. <a href="#">Leer Mas...</a></p>
			 </div>
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide ui-widget-content ui-corner-bottom" style="display: none;" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true">
			<img src="<?php echo base_url();?>silder/img/image2.jpg" alt="">
			 <div class="info">
				<h2><a href="#">Dise&ntilde;ando Creativamente</a></h2>
				<p>Diseño Creativo... <a href="#"> Leer M&aacute;s...</a></p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide ui-widget-content ui-corner-bottom" style="display: none;" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true">
			<img src="<?php echo base_url();?>silder/img/image3.jpg" alt="">
			 <div class="info">
				<h2><a href="#">Uso de Herramientas Tecnologicas</a></h2>
				<p>Robustes y Velocidad...<a href="#"> Leer M&aacute;s...</a></p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide ui-widget-content ui-corner-bottom" style="display: block; opacity: 0.5975451610080641;" aria-labelledby="ui-id-4" role="tabpanel" aria-expanded="false" aria-hidden="true">
			<img src="<?php echo base_url();?>silder/img/image4.jpg" alt="">
			 <div class="info">
				<h2><a href="#">Midiendo Espectativas</a></h2>
				<p>Insentivando el Desarrollo y Creatividad.<a href="#"> Leer M&aacute;s...</a></p>
	         </div>
	    </div>
		
		

		</div>

		<!-- Fin del Silder -->


						</div>
				</div>

					
					<div class="row-fluid" id="div_noticias">
						<!-- apartado para las noticias-->
						
								
						<?php
							if (isset($contenidos)) {
								for ($i=0; $i < count($contenidos); $i++) {
									echo '<div class="row"><div class="span12 box-txt">';
									echo '<h4 class="banda-title">'.$contenidos[$i]['titulo'].'</h4>';
									echo '<p>'.nl2br($contenidos[$i]['contenido']).'</p>';
									echo '<p><a class="btn btn-large btn-success" href="'.base_url().index_page().'/contenido/ver_contenido/'.$contenidos[$i]['id'].'">Ver Detalles »</a></p>';
									
									echo '</div></div><hr>';
								}

							}
						?>
								
						<!--
								<div class="row row2not">

								<div class="span6 box-txt">
						          <h4 class="banda-title">Información </h4>
						          <p>se describe y detalla el sitio, fecha, hora y lugar del evento donde se llevara a cabo dicha actividad.</p>
						          <p><a class="btn btn-success" href="#">Ver Detalles »</a></p>
						        </div>

								<div class="span6 box-txt">
						          <h4 class="banda-title">Actividades Suspendidas</h4>
						          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						          <p><a class="btn btn-success" href="#">Ver Detalles »</a></p>
						        </div>
						        </div>


								<div class="row row2not">
								<div class="span6 box-txt">
						          <h4 class="banda-title">Algun Evento X</h4>
						          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						          <p><a class="btn btn-success" href="#">Ver Detalles »</a></p>
						        </div>

								<div class="span6 box-txt">
						          <h4 class="banda-title">Alguna cosa </h4>
						          <p>se describe y detalla el sitio, fecha, hora y lugar del evento donde se llevara a cabo dicha actividad. 
						          	podria colocarse cualquier otra  cosa  no lo se  algo.
						          </p>
						          <p><a class="btn btn-success" href="#">Ver Detalles »</a></p>
						        </div>

						        </div>


						    -->
						

					</div>
				</div>


					<!-- INICIO DE BARRA LATERAL -->
					<div class="span4">
						<h4 class="featurette-heading">Ahora estamos en.<br><span class="muted">Twitter Siguenos.</span></h4>
							<pre>Conectado a Twitter</pre>
						<div class="div_twitter">
							<a class="twitter-timeline" href="https://twitter.com/UPTAFILE" data-widget-id="357354960985415680">Tweets por @UPTAFILE</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

							<!--
								<a class="twitter-timeline" href="https://twitter.com/UPTAFILE" data-widget-id="304342775846010881">Tweets por @UPTAFILE</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>		
											-->					

						</div>
						
					</div>
					<!--FIN DE BARRA LATERAL -->
						
					</div>
				</div>
			</div>
