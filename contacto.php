<div class="cover" id="contacto">
	<div class="cover-degrade">
		<div class="encuadre">
			<div class="cover-texto">
				Nos importa lo que pensás
				<div class="cover-texto-parrafo" id="contacto">¿Dudas de algun servicio? ¿Algún comentario o sugerencia que quisieras que tomemos en cuenta? ¡Escribinos! <br>¡Te contestaremos a la brevedad!</div>
				
				<!-- Formulario -->
				<form id="correo-formulario" name="contact">
					<div>
						<input name="nombre" id="campo-nombre" type="text" class="correo-campo" placeholder="Nombre..."/>
						<input name="telefono" id="campo-telefono" type="number" maxlength="8" pattern="[0-9]*" class="correo-campo" placeholder="Teléfono..." style="-moz-appearance: textfield;" />
						<input name="email" id="campo-correo" type="email" class="correo-campo" placeholder="E-mail..."/>
						<textarea name="mensaje" id="campo-mensaje" placeholder="Mensaje..."></textarea>
					</div>
					<!-- Este bloque informa los campos no completados o con valores erroneos -->
					<div class="correo-error" style="display: none;"><div class="correo-error-titulo">No se puede enviar el mail</div></div>
					<!-- Este bloque confirma el envío del correo -->
					<div id="correo-informacionenviado" class="hide">
						<p></p>
					</div>
					<!-- Enviar  -->
					<div id="c_btns">
						<input name="send" onclick="EnvioCorreo()" type="button" value="Enviar" class="boton-enviar" id="correo-enviar"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Levanta jQuery -->
<script type="text/javascript"src="http://code.jquery.com/jquery-1.10.2.min.js"></script>