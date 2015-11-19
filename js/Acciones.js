function Home() {
    //setTimeout (location.href="index.php", 1);
    url = "home";
	CargarPaginaSeccion();
};
function AcercaDe() {
    //setTimeout (location.href="index.php?pagina=club", 1);
	url = "acercade";
	CargarPaginaSeccion();
};
function Servicios() {
    //setTimeout (location.href="index.php?pagina=proyectos", 1);
    url = "servicios";
	CargarPaginaSeccion();
};
function Proyectos() {
    //setTimeout (location.href="index.php?pagina=proyectos", 1);
    url = "proyectos";
	CargarPaginaSeccion();
};
function Galeria() {
    //setTimeout (location.href="index.php?pagina=galeria", 1);
    url = "galeria";
	CargarPaginaSeccion();
};
function Contacto() {
    //setTimeout (location.href="index.php?pagina=contacto", 1);
    url = "contacto";
	CargarPaginaSeccion();
};
function Webmaster() {
    //setTimeout (location.href="index.php?pagina=contacto", 1);
    url = "webmaster";
	CargarPaginaSeccion();
};


function HaciaArriba() {
	$('html, body').animate({scrollTop:0}, 500);
}

function VerMapa(){
	$("#ocultar-mapa").css("display", "inline-block");
	$("#ver-mapa").css("display", "none");
	$("#mapa").css("display", "block");
}
function OcultarMapa(){
	$("#ocultar-mapa").css("display", "none");
	$("#ver-mapa").css("display", "inline-block");
	$("#mapa").css("display", "none");
}

function Galeria_AbrirVistaPrevia(){
	$("#vista-previa").fadeIn();
	//$("#vista-previa").show(); 
	$("body").css("overflow", "hidden");
}
function Galeria_CerrarVistaPrevia(){
	$("#vista-previa").fadeOut();
	//$("#vista-previa").hide(); 
	$("body").css("overflow", "inherit");
}