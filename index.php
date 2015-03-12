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
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="selectivizr.js"></script>
	<![endif]-->
	<!-- Portfolio hover -->
	<script src="assets/js/hover/jquery-hover-effect.js"></script>
	<script src="assets/js/hover/setting.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="js/jquery-ui.js"></script>

	<!-- fav and touch icons -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="shortcut icon" href="assets/ico/icon.fw.png" />
	<link rel="stylesheet" href="css/estilos.css" />
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
<audio src="audios/viber.mp3" type="audio/mpeg" id="audioViber"></audio>
<audio src="audios/rakuten.mp3" type="audio/mpeg" id="audioRakuten"></audio>
<audio src="audios/red_5g.mp3" type="audio/mpeg" id="audioRed_5g"></audio>
<audio src="audios/mudarse_correa.mp3" type="audio/mpeg" id="audioMudarse_correa"></audio>
<audio src="audios/windows_xp.mp3" type="audio/mpeg" id="audioWindows_xp"></audio>
<audio src="audios/microsoft.mp3" type="audio/mpeg" id="audioMicrosoft"></audio>
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
					<li class="dropdown inverse" id="login" data-audio="">
					<a href="#"><i class="icon-user icon-white"></i> LOGIN</a></li>
					<li class="dropdown success active" id="inicio" data-audio="audioInicio">
					<a href="index.php"><i class="icon-home icon-white"></i> INICIO</a></li>
					
					<li class="dropdown primary" id="tecnologia" data-audio="audioTecnologia">
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
<section id="intro">
<div class="jumbotron masthead">
	<div class="container">
		<div class="row">
			<div class="span12">
				<!-- Place somewhere in the <body> of your page -->
				<div id="mainslider" class="flexslider">
					<ul class="slides">
						<li data-thumb="assets/img/slides/flexslider/img1.jpg">
						<img src="assets/img/slides/flexslider/img1.jpg" alt="" />
						<div class="flex-caption primary">
							<h3>Noticias</h3>
						</div>
						</li>
						<li data-thumb="assets/img/slides/flexslider/img2.jpg">
						<img src="assets/img/slides/flexslider/img2.jpg" alt="" />
						<div class="flex-caption warning">
							<h2>Tecnología</h2>
							
						</div>
						</li>
						<li data-thumb="assets/img/slides/flexslider/img3.jpg">
						<img src="assets/img/slides/flexslider/img3.jpg" alt="" />
						<div class="flex-caption success">
							<h2>Ciencia</h2>
							
						</div>
						</li>
						<li data-thumb="assets/img/slides/flexslider/img4.jpg">
						<img src="assets/img/slides/flexslider/img4.jpg" alt="" />
						<div class="flex-caption danger">
							<h2>Variedad</h2>
							
						</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="span4">
				
			</div>
		</div>
	</div>
</div>
</section>

<section id="bottom">
<div class="container">
	<div class="row">
		<div class="span3">
			
			<div class="row" id="este_sitio" data-audio="audioEste_sitio">
				<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Este Sitio</h3>				
			</div>
			<div class="row">
				<h3 class="heading-success" id="galeria" data-audio="audioGaleria"><span class="btn btn-large btn-success" ><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Galería</h3>
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
		<div class="span9">
			<div class="container">	
				<div class="row">				
					<div class="span3">
						<div class="well well-primary box">
							<img src="assets/img/icons/box-1-white.png" alt="" id="viber" data-audio="audioViber" />
							<h3>COMPRA VIBER</h3>
							<p id="rakuten" data-audio="audioRakuten">
								 Rakuten, el gigante japonés de comercio electrónico

								(  una especie de Amazon local) ha comprado Viber

								por 900 millones de dólares.
							</p>							
						</div>
					</div>
					<div class="span3">
						<div class="well well-success box">
							<img src="assets/img/icons/box-2-white.png" alt="" id="red_5g" data-audio="audioRed_5g" />
							<h3>RED 5G</h3>
							<p id="mudarse_correa" data-audio="audioMudarse_correa">
								 Mudarse a Corea del Sur en el año 2020 será una muy buena idea. El Ministerio de Educación, Ciencia y Tecnología del país ha anunciado que se invertirán $1500 millones de dólares para desarrollar una nueva tecnología 5G

							</p>
							
						</div>
					</div>
					<div class="span3">
						<div class="well well-warning box">
							<img src="assets/img/icons/box-3-white.png" alt="" id="windows_xp" data-audio="audioWindows_xp" />
							<h3>WINDOWS XP</h3>
							<p id="microsoft" data-audio="audioMicrosoft">
								 Microsoft hace tiempo que nos viene avisando que en este año 2014 cerrará por completo la puerta a Windows XP tras más de 12 años de servicio.
							</p>
							
						</div>
					</div>
				</div>					
			</div>
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
	<div id="frm_login" title="Ingreso de Usuarios">
        <div>
          <span>Usuario <i class="icon-user icon"></i></span>
          <input type="text" id="txt_loginUsuario" name="txt_loginUsuario" class="" placeholder="Usuario"  autofocus>
        </div>
        <div>
          <span>Accesos <i class="icon-lock icon"> </i> </span>
          <input type ="password" id="txt_loginPass" name="txt_loginPass" class="" placeholder="Contraseña" >
        </div>
        <div class="" style="text-align:center">
          <button class="btn btn-primary" id="btn_loginIngreso" type="button">
          <i class="icon-check icon-white"></i> Ingreso</button>
          <button class="btn btn-primary" type="button" id="btn_loginLimpiar">
          <i class="icon-check icon-white"></i> Limpiar</button>
        </div>        
    </div>
    <form id="frm_cambios" title="Sleccione la noticia a modificar">
    	<div id="nivel_1">
	    	<h3>INICIO</h3>
	    	<h3>TECNOLOGIA</h3>
	    	<h3>CIENCIA</h3>
	    	<h3>VARIEDADES</h3>
    	</div>
    	<div id="nivel_2">
    		<div>
    			<input type="radio" name="radio_n1" id="noticia_1" /> Noticia 1
    			<input type="radio" name="radio_n1" id="noticia_2" /> Noticia 2
    			<input type="radio" name="radio_n1" id="noticia_3" /> Noticia 3
    		</div>
    		<div>
    			<input type="radio" name="radio_n1" id="noticia_4" /> Noticia 1
    			<input type="radio" name="radio_n1" id="noticia_5" /> Noticia 2
    			<input type="radio" name="radio_n1" id="noticia_6" /> Noticia 3
    		</div>
    		<div>
    			<input type="radio" name="radio_n1" id="noticia_7" /> Noticia 1
    			<input type="radio" name="radio_n1" id="noticia_8" /> Noticia 2
    			<input type="radio" name="radio_n1" id="noticia_9" /> Noticia 3
    		</div>    	
    		<div>
    			<input type="radio" name="radio_n1" id="noticia_10" /> Noticia 1
    			<input type="radio" name="radio_n1" id="noticia_11" /> Noticia 2
    			<input type="radio" name="radio_n1" id="noticia_12" /> Noticia 3
    		</div>      		
    	</div>
    	<br />
    	<br />
    	<div id="nuevo">
	    	<div>    			
	          	<h4>Nuevo Título</h4>
	        	<input type ="text" id="txt_titulo" name="txt_titulo" class="" placeholder="Nuevo Título de la noticia" >        
	    	</div>  
	    	<div>    			
	          	<h4>Nueva Imagén</h4>
	        	<input type ="file" id="txt_iamgen" name="txt_iamgen" class="" accept="image/*" >        
	    	</div>  
	    	<div>    			
	          	<h4>Nuevo Audio Título</h4>
	        	<input type ="file" id="txt_audio_titulo" name="txt_audio_titulo" class=""  accept="audio/*">        
	    	</div>  		
	    	<div>    			
	          	<h4>Nueva descripción</h4>
	        	<textarea id="txt_descripcion" rows="6" cols="10" name="txt_descripcion" class="" placeholder="Nueva Descripcion de la noticia" ></textarea>        
	    	</div>  		
	    	<div>    			
	          	<h4>Nuevo Audio Descripción</h4>
	        	<input type ="file" id="txt_audio_descripcion" name="txt_audio_descripcion" class="" placeholder=""  accept="audio/*">        
	    	</div>  		
        </div>
        <br><br>
        <div class="" style="text-align:center">
          <button class="btn btn-primary" id="btn_guardar" type="submit">
          <i class="icon-check icon-white"></i> Guardar Cambios</button>
          <button class="btn btn-primary" type="button" id="btn_limpiar">
          <i class="icon-check icon-white"></i> Limpiar</button>
        </div>      
    </form>
</html>