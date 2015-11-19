<div class="cover" id="contacto">
	<div class="cover-degrade">
		<div class="encuadre">
			<div class="cover-texto">
				Reportar un error en el sitio
				<div class="cover-texto-parrafo" id="contacto">¿Hay algo que se ha roto en el sitio?<br>¡Informalo al administrador! Intentará solucionar tu reporte a la brevedad.</div>
				
				<!-- Formulario -->
				<form id="correo-formulario" name="contact">
					<div>
						<input name="nombre" id="campo-nombre" type="text" class="correo-campo" placeholder="Nombre..."/>
						<input name="email" id="campo-correo" type="email" class="correo-campo" placeholder="E-mail..."/>
						<textarea name="mensaje" id="campo-mensaje" placeholder="Describí el error que encontraste en el sitio"></textarea>
					</div>
					<!-- Este bloque informa los campos no completados o con valores erroneos -->
					<div class="correo-error" style="display: none;"><div class="correo-error-titulo">No se puede enviar el mail</div></div>
					<!-- Este bloque confirma el envío del correo -->
					<div id="correo-informacionenviado" class="hide">
						<p></p>
					</div>
					<!-- Enviar  -->
					<div id="c_btns">
						<input name="send" onclick="EnvioWebmaster()" type="button" value="Enviar bug" class="boton-enviar" id="correo-enviar"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Levanta jQuery -->
<script type="text/javascript"src="http://code.jquery.com/jquery-1.10.2.min.js"></script>