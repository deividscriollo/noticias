// Variable que contiene los textos que se encuentren en los <span> dentro
    // de la clase "texto"
	var arrayText=Array();
	
    $(document).ready(function(){
		// bucle por todos los objetos con el class texto
		$(".texto").each(function(){
			
			// apuntador al primer span dentro de la clase .texto
			var firstDiv=$(this).find("span:first-child");
			
			// revisamos que el texto sea superior a 100 caracteres para
			// cortarlo
			if(firstDiv.html().length>100)
			{
				// añadimos el texto entero en un array de JavaScript
				arrayText.push(firstDiv.html());
				
				// ponemos el texto cortado a 100 caracteres
				firstDiv.html(firstDiv.html().substr(0,100)+"...");
				
				// Agregamos un span que nos permitira visualizar más texto
				// La clase "cortado", unicamente nos identifica si estamos
				// viendo el contenido entero o cortado.
				// Añadimos un id con el indice del array, para posteriormente
				// poder mostrar el texto completo.
				$(this).append("<span class='mas cortado' id='"+(arrayText.length-1)+"'>"+'<a class="btn btn-success"> <span class="m-icon-big-swapright m-icon-white"></span></a>'+"</span>");
			}
			
			// mostramos el contenido de la clase texto (por defecto esta con
			// display:none;
			$(this).show();
		});
		
		// Evento que se ejecuta cuando se pulsa la clase mas
		$(".texto .mas").click(function(){
		
			// Si disponemos de la clase "menos" quiere decir que estamos
			// mostrando el contenido cortado
			if($(this).hasClass("cortado"))
			{
				// añadimos al <span> anterior al pulsado el contenido entero
				// del array de valores. Para saber el indice del array 
				// obtenemos el id del span donde se ha hecho click.
				$(this).prev("span").html(arrayText[$(this).attr("id")]);
				
				// modificamos el texto a "(menos)" y eliminamos la clase "cortado"
				$(this).html('<a class="btn btn-success"> <span class="m-icon-big-swapleft m-icon-white"></span></a>').removeClass("cortado");
			}else{
				// añadimos al <span> anterior al pulsado el contenido cortado
				// del array de valores. Para saber el indice del array 
				// obtenemos el id del span donde se ha hecho click.
				$(this).prev("span").html(arrayText[$(this).attr("id")].substr(0,100)+"...");
				
				// modificamos el texto a "(mas)" y añadimos la clase "cortado"
				$(this).html('<a class="btn btn-success"> <span class="m-icon-big-swapright m-icon-white"></span></a>').addClass("cortado");
			}
		});
	});