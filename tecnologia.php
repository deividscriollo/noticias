<!DOCTYPE html>
<html lang="es">
<head>

	<title>notiecuador.net</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Noticias Ecuador.Net" />

	<!-- Llamado de styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="assets/css/docs.css" rel="stylesheet" />
	<link href="assets/css/prettyPhoto.css" rel="stylesheet" />
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet" />
	<link href="assets/css/flexslider.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/color/success.css" rel="stylesheet" />
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="assets/js/jquery-1.8.2.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/google-code-prettify/prettify.js"></script>
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/jquery.elastislide.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/jquery.tweet.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/application.js"></script>
	<script src="js/audios.js"></script>

	<!-- Efecto renderizado -->
	<script src="assets/js/contenido.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="selectivizr.js"></script>
	<![endif]-->
	<!-- Portfolio hover -->
	<script src="assets/js/hover/jquery-hover-effect.js"></script>
	<script src="assets/js/hover/setting.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="assets/ico/icon.fw.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<header>
<audio src="audios/inicio.mp3" type="audio/mpeg" id="audioInicio"></audio>
<audio src="audios/tecnologia.mp3" type="audio/mpeg" id="audioTecnologia"></audio>
<audio src="audios/ciencia.mp3" type="audio/mpeg" id="audioCiencia"></audio>
<audio src="audios/variedades.mp3" type="audio/mpeg" id="audioVariedades"></audio>
<!---->
<audio src="audios/audio_4.mp3" type="audio/mpeg" id="sonido_4"></audio>
<audio src="audios/audio_4_1.mp3" type="audio/mpeg" id="sonido_4_1"></audio>
<audio src="audios/audio_5.mp3" type="audio/mpeg" id="sonido_5"></audio>
<audio src="audios/audio_5_1.mp3" type="audio/mpeg" id="sonido_5_1"></audio>
<audio src="audios/audio_6.mp3" type="audio/mpeg" id="sonido_6"></audio>
<audio src="audios/audio_6_1.mp3" type="audio/mpeg" id="sonido_6_1"></audio>
<!---->
<audio src="audios/este_sitio.mp3" type="audio/mpeg" id="audioEste_sitio"></audio>
<audio src="audios/galeria.mp3" type="audio/mpeg" id="audioGaleria"></audio>
<audio src="audios/buena_a.mp3" type="audio/mpeg" id="audioBuena_a"></audio>
<audio src="audios/records.mp3" type="audio/mpeg" id="audioRecords"></audio>
<!-- Navbar
================================================== -->
<div class="navbar navbar-fixed-top" style="background: red!important;">
	<div class="navbar-inner">
		<div class="container">
			<!-- logo -->
			<a class="brand logo" href="index.php">
			<img src="assets/img/logo.png" alt="" />
			</a>
			<!-- end logo -->
			<!-- top menu -->
			<div>
				<nav>
				<ul class="nav topnav">					
					<li class="dropdown success " id="inicio" data-audio="audioInicio">
					<a href="index.php"><i class="icon-home icon-white"></i> INICIO</a></li>
					
					<li class="dropdown primary active" id="tecnologia" data-audio="audioTecnologia">
					<a href="tecnologia.php"><i class="icon-star icon-white"></i> TECNOLOGÍA</a></li>
					<li class="dropdown danger" id="ciencia" data-audio="audioCiencia">
					<a href="ciencia.php"><i class="icon-leaf icon-white"></i> CIENCIA</a></li>
					
					<li class="dropdown inverse" id="variedades" data-audio="audioVariedades">
					<a href="variedad.php"><i class="icon-camera icon-white"></i> VARIEDADES</a></li>
				</ul>
				</nav>
			</div>
			<!-- end menu -->
		</div>
	</div>
</div>
</header>

<section id="subintro">
<div class="jumbotron subhead dct" id="overview">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h3><i class="m-icon-big-swapright m-icon-white"></i> TECNOLOGÍA</h3>				
			</div>			
		</div>
	</div>
</div>
</section>
<section id="maincontent">
<div class="container">
	<div class="row">
		<div class="span4">
			
			<div class="row" id="este_sitio" data-audio="audioEste_sitio">
				<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Este Sitio</h3>				
			</div>
			<div class="row">
				<h3 class="heading-success" id="galeria" data-audio="audioGaleria"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Galería</h3>
				<div id="myCarousel" class="carousel slide testimonials">
					<div class="carousel-inner">
						<div class="item active" id="buena_a" data-audio="audioBuena_a">
							<div class="testimonial">
								<img src="assets/img/gal1.fw.png" alt="" />
								<blockquote>
									<p>
										 Buena Alimentacion, cuando hablamos de colores generalmente encontramos mayor variedad en frutas y hortalizas.
									</p>
								</blockquote>
								
							</div>
						</div>
						<div class="item">
							<div class="testimonial" id="records" data-audio="audioRecords">
								<img src="assets/img/gal2.fw.png" alt="" />
								<blockquote>
									<p>
										 ¡Récords, competencias y mucha comida!.<br>
										 Siempre decimos que la comida entra por los ojos y no es una frase errónea..
									</p>
								</blockquote>
								
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
		<div class="span8">			
			 <ul class="thumbnails">
					<li class="span4">
						<div class="thumbnail">
							<img src="imagenes/img_4.png" alt="" id="audio_4" data-audio="sonido_4"/>
							<div class="caption" id="audio_4_1" data-audio="sonido_4_1">
								<h3 class="heading-success">Crean Ropa Inteligente</h3>	
								<div class="texto" >
									<span>En el catálogo de un operador de telefonía podemos esperar encontrar exclusivamente a teléfonos inteligentes y dispositivos similares, pero como pensaron que no era suficiente, por lo que se lanzaron a colaborar con Toray, una empresa centrada en el desarrollo de equipos basados en textiles, y hoy anuncian los primeros productos de esta colaboración entre las dos empresas.</span>
								</div>
								
							</div>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<img src="imagenes/img_5.png" alt="" id="audio_5" data-audio="sonido_5"/>
							<div class="caption" id="audio_5_1" data-audio="sonido_5_1">
								<h3 class="heading-success" >Descubrimiento</h3>
								<div class="texto" >
									<span>Científicos de la Universidad de Columbia han dado un paso importante en la lucha contra un problema estético muy común: la calvicie. La técnica consiste en un trasplante celular que, por primera vez es capaz de generar nuevos cabellos.</span>
								</div>
							</div>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<img src="imagenes/img_6.png" alt="" id="audio_6" data-audio="sonido_6"/>
							<div class="caption" id="audio_6_1" data-audio="sonido_6_1">
								<h3 class="heading-success" >Parque Nacional Yasuni ITT</h3>
								<div class="texto">
									<span>De acuerdo a estudios científicos, el Parque Yasuní ubicado en la Región amazónica ecuatoriana, en las provincias de Orellana y Pastaza, es la región de mayor diversidad biológica del mundo. El 20 de noviembre 1979 se declaró al Yasuní como Parque Nacional. Esta declaración se la hace por existir en su interior una riqueza natural que debe ser preservada.</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
		</div>
	</div>
</div>
</section>
<!-- Footer
================================================== -->
<footer class="footer">
<div class="verybottom">
	<div class="container">
		<div class="row">
			<div class="span6">
				<p>
					&copy; notiecuador.net - Todos los derechos reservados.
				</p>
			</div>
			<div class="span6">
				<p class="pull-right">
					Diseñado por <a href="http://notiecuador.com">notiecuador.net</a>
				</p>
			</div>
		</div>
	</div>
</div>
</footer>
<script>
(function(){
// Append a close trigger for each block
$('.box-tile .content').append('<span class="close">x</span>');
// Show window
function showContent(elem){
hideContent();
elem.find('.content').addClass('expanded');
elem.addClass('cover');
}
// Reset all
function hideContent(){
$('.box-tile  .content').removeClass('expanded');
$('.box-tile  li').removeClass('cover');
}
// When a li is clicked, show its content window and position it above all
$('.box-tile  li').click(function() {
showContent($(this));
});
// When tabbing, show its content window using ENTER key
$('.box-tile  li').keypress(function(e) {
if (e.keyCode == 13) {
showContent($(this));
}
});
// When right upper close element is clicked  - reset all
$('.box-tile  .close').click(function(e) {
e.stopPropagation();
hideContent();
});
// Also, when ESC key is pressed - reset all
$(document).keyup(function(e) {
if (e.keyCode == 27) {
hideContent();
}
});
})();
</script>
</body>
</html>