<main>
	<div class="cover" id="home">
		<div class="cover-degrade">
			<div class="encuadre">
				<div class="cover-texto">
				¡Bienvenido a Factor RH Creativo!
				<div class="cover-texto-parrafo">
					<?php 
					date_default_timezone_set('America/Argentina/Buenos_Aires');
					//echo date("G:i:s");
					if ((date("G") < 9)){
						echo "En estos momentos no estamos atendiendo. <br>Nuestro horario es de martes a sábados de 9 a 18.";
					} 
					else if ((date("G") > 18)){
						echo "En estos momentos no estamos atendiendo. <br>Nuestro horario es de martes a sábados de 9 a 18.";
					} 
					else{
						echo "Podés venir, estamos abiertos hasta las 6 de la tarde!";
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<article class="encuadre">
			<div id="contenedor-home" style="margin-top: 20px; margin-bottom: 20px;">
				<h1 style="font-size: 40px;">¿Por donde estamos?</h1>
				<div id="home-descripcion">
					<p>Estamos en Melincué al 3137 en el barrio de Villa del Parque.</p>
					<p>Los colectivos que te pueden acercar son el 24, 47, 84, 124 y el 134.</p>
				</div>
				<div id="ver-mapa" onclick="VerMapa()">Ver mapa</div>
				<div id="ocultar-mapa" onclick="OcultarMapa()" style="display: none;">Ocultar mapa</div>
				<div id="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3284.068358471385!2d-58.493291!3d-34.602432900000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6245bc68d1f%3A0xc6f5d0b589570008!2sMelincu%C3%A9+3137!5e0!3m2!1sen!2s!4v1400684290987" width="100%" height="450" frameborder="0" style="border:0"></iframe></div>
			</div>
		</article>
</main>