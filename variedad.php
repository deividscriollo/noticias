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
<!-- Navbar
================================================== -->
<audio src="audios/inicio.mp3" type="audio/mpeg" id="audioInicio"></audio>
<audio src="audios/tecnologia.mp3" type="audio/mpeg" id="audioTecnologia"></audio>
<audio src="audios/ciencia.mp3" type="audio/mpeg" id="audioCiencia"></audio>
<audio src="audios/variedades.mp3" type="audio/mpeg" id="audioVariedades"></audio>
<!---->
<audio src="audios/audio_10.mp3" type="audio/mpeg" id="sonido_10"></audio>
<audio src="audios/audio_10_1.mp3" type="audio/mpeg" id="sonido_10_1"></audio>
<audio src="audios/audio_11.mp3" type="audio/mpeg" id="sonido_11"></audio>
<audio src="audios/audio_11_1.mp3" type="audio/mpeg" id="sonido_11_1"></audio>
<audio src="audios/audio_12.mp3" type="audio/mpeg" id="sonido_12"></audio>
<audio src="audios/audio_12_1.mp3" type="audio/mpeg" id="sonido_12_1"></audio>
<!---->
<audio src="audios/este_sitio.mp3" type="audio/mpeg" id="audioEste_sitio"></audio>
<audio src="audios/galeria.mp3" type="audio/mpeg" id="audioGaleria"></audio>
<audio src="audios/buena_a.mp3" type="audio/mpeg" id="audioBuena_a"></audio>
<audio src="audios/records.mp3" type="audio/mpeg" id="audioRecords"></audio>
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
					<li class="dropdown primary" id="tecnologia" data-audio="audioTecnologia">
					<a href="tecnologia.php"><i class="icon-star icon-white"></i> TECNOLOGÍA</a></li>
					<li class="dropdown danger " id="ciencia" data-audio="audioCiencia">
					<a href="ciencia.php"><i class="icon-leaf icon-white"></i> CIENCIA</a></li>
					<li class="dropdown inverse active" id="variedades" data-audio="audioVariedades">
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
<div class="jumbotron subhead dcv" id="overview">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h3><i class="m-icon-big-swapright m-icon-white"></i> VARIEDADES</h3>				
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
				<h3 class="heading-success" ><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Este Sitio</h3>				
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
						<div class="item" id="records" data-audio="audioRecords">
							<div class="testimonial">
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
							<img src="imagenes/img_10.png" alt="" id="audio_10" data-audio="sonido_10"/>
							<div class="caption" id="audio_10_1" data-audio="sonido_10_1">
								<h3 class="heading-success" >Problemas en el Polo</h3>
								<div class="texto">
									<span>Si piensas en el Polo Norte como una superficie sólida de hielo vas a llevarte una sorpresa. Este mes se ha derretido y es ahora un enorme lago de agua muy, muy fría. Suena terrible, pero en realidad no es tan serio como en principio parece.</span>
								</div>
							</div>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<img src="imagenes/img_11.png" alt="" id="audio_11" data-audio="sonido_11" />
							<div class="caption" id="audio_11_1" data-audio="sonido_11_1">
<h3 class="heading-success">rerrr<h3>
								<div class="texto">
<span>pppppppppppppppppppppppppppppppp weriu e weporuwoe wer</span>
								</div>
							</div>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<img src="imagenes/img_12.png" alt="" id="audio_12" data-audio="sonido_12" />
							<div class="caption" id="audio_12_1" data-audio="sonido_12_1">
								<h3 class="heading-success" >Vuelo de Aves</h3>
								<div class="texto">
									<span>Un grupo de investigadores británicos ha dado con la respuesta científica a uno de los fenómenos más curiosos que a veces vemos surcar el cielo: bandadas de pájaros en formación en V. ¿Por qué en esa forma en concreto y no otra? La conclusión a la que han llegado se resume en dos palabras: aerodinámica y eficiencia. Se sabía que era así, pero ahora lo han probado científicamente. Un hallazgo que se podría aplicar al diseño de la Robótica.</span>
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