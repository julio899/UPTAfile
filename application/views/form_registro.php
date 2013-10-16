<style type="text/css" media="screen">
div.form_registro{
	margin-left: 30%;
	margin-top: 100px;
	width: 50%;
}
input{
	margin:10px;
	width: 300px;
}	

</style>
<div class="form_registro">

      <h3>Informaci&oacute;n de Registro UPTA</h3>
         
          <?php if(isset($error)){
          	echo "<div class=\"alert alert-error\">$error</div>";
          }else{

          			echo "<pre>Bienvenido al Registro</pre>";
          }?>
          <form id="formu" class="form-inline" action="<?php echo current_url()."/verificacion";?>" method="post">
          		

          		<div class="control-group">
				    <label class="control-label" for="inputNombre">Nombre</label>
				    <div class="controls">
				    <input name="campo_nombre" type="text" id="inputNombre" placeholder="Su Nombre" required="required">
					</div>
				</div>

          		<div class="control-group">
				    <label class="control-label" for="inputApellido">Apellido</label>
				    <div class="controls">
				    <input name="campo_apellido" type="text" id="inputApellido" placeholder="Apellido" required="required">
					</div>
				</div>

          		<div class="control-group">
				    <label class="control-label" for="inputEmail">Correo Electronico</label>
				    <div class="controls">
				      <input name="campo_email" type="email" id="inputEmail" placeholder="correo@dominio.com" required="required">
				    </div>
				</div>

          		<div class="control-group">
				    <label class="control-label" for="inputClave">Contrase&ntilde;a</label>
          			<div class="controls">
				    <input name="campo_clave" type="password" id="inputClave" required="required">
				   	</div>
				</div>
          		<div class="control-group">
				    <label class="control-label" for="inputReClave">Repita la Contrase&ntilde;a</label>
          			<div class="controls">
				    <input name="campo_reclave" type="password" id="inputReClave" required="required">
				   	</div>
				</div>

				<div class="control-group">
					<label for="trayecto">Trayecto</label>
						<div class="controls">
							    <select name="campo_trayecto" id="trayecto" multiple="multiple">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								</select>
						</div>
				</div>

				<input type="submit" class="btn-large btn-primary" name="" value="REGISTRAR">

          </form>	
      </div>
</div>