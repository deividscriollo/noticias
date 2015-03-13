$(document).on("ready",inicio);
function inicio (){
	$("#inicio").on("mouseenter",mouseEnter);
	$("#tecnologia").on("mouseenter",mouseEnter);
	$("#ciencia").on("mouseenter",mouseEnter);
	$("#variedades").on("mouseenter",mouseEnter);
	/*----------*/
	$("#audio_1").on("mouseenter",mouseEnter);
	$("#audio_1_1").on("mouseenter",mouseEnter);
	$("#audio_1_1").on("mouseleave",mouseLeave);
	$("#audio_2").on("mouseenter",mouseEnter);
	$("#audio_2_1").on("mouseenter",mouseEnter);
	$("#audio_2_1").on("mouseleave",mouseLeave);
	$("#audio_3").on("mouseenter",mouseEnter);
	$("#audio_3_1").on("mouseenter",mouseEnter);
	$("#audio_3_1").on("mouseleave",mouseLeave);
	$("#audio_4").on("mouseenter",mouseEnter);
	$("#audio_4_1").on("mouseenter",mouseEnter);
	$("#audio_4_1").on("mouseleave",mouseLeave);
	$("#audio_5").on("mouseenter",mouseEnter);
	$("#audio_5_1").on("mouseenter",mouseEnter);
	$("#audio_5_1").on("mouseleave",mouseLeave);
	$("#audio_6").on("mouseenter",mouseEnter);
	$("#audio_6_1").on("mouseenter",mouseEnter);
	$("#audio_6_1").on("mouseleave",mouseLeave);
	$("#audio_7").on("mouseenter",mouseEnter);
	$("#audio_7_1").on("mouseenter",mouseEnter);
	$("#audio_7_1").on("mouseleave",mouseLeave);
	$("#audio_8").on("mouseenter",mouseEnter);
	$("#audio_8_1").on("mouseenter",mouseEnter);
	$("#audio_8_1").on("mouseleave",mouseLeave);
	$("#audio_9").on("mouseenter",mouseEnter);
	$("#audio_9_1").on("mouseenter",mouseEnter);
	$("#audio_9_1").on("mouseleave",mouseLeave);
	$("#audio_10").on("mouseenter",mouseEnter);
	$("#audio_10_1").on("mouseenter",mouseEnter);
	$("#audio_10_1").on("mouseleave",mouseLeave);
	$("#audio_11").on("mouseenter",mouseEnter);
	$("#audio_11_1").on("mouseenter",mouseEnter);
	$("#audio_11_1").on("mouseleave",mouseLeave);
	$("#audio_12").on("mouseenter",mouseEnter);
	$("#audio_12_1").on("mouseenter",mouseEnter);
	$("#audio_12_1").on("mouseleave",mouseLeave);
	/*-------------*/
	$("#este_sitio").on("mouseenter",mouseEnter);
	$("#galeria").on("mouseenter",mouseEnter);
	$("#buena_a").on("mouseenter",mouseEnter);
	$("#buena_a").on("mouseleave",mouseLeave);
	$("#records").on("mouseenter",mouseEnter);
	$("#records").on("mouseleave",mouseLeave);
	///////////////////////////////////////	
	$("#login").click(function(){
		$( "#frm_login" ).dialog('open');
	});	
	$("#frm_cambios").dialog({
		autoOpen: false,
	    height: 550,
	    width: 600,
	    modal: true,              
    });
	$( "#frm_login" ).dialog({
      autoOpen: false,
      height: 180,
      width: 330,
      modal: true,              
    });
    //////////////////
    $("#btn_loginLimpiar").click(function(){
    	$("#txt_loginUsuario").val("");
    	$("#txt_loginPass").val("");
    	$("#txt_loginUsuario").focus();
    });
    $("#btn_loginIngreso").click(function (){
    	if($("#txt_loginUsuario").val() != "" && $("#txt_loginPass").val() != ""){
    		if($("#txt_loginUsuario").val() == "admin" && $("#txt_loginPass").val() == "admin"){
    			$( "#frm_login" ).dialog('close');
    			$("#frm_cambios").dialog('open');    			
    		}else{
    			alert("Datos incorrectos");
    			$( "#frm_login" ).effect("shake");
    			$("#txt_loginUsuario").val("");
		    	$("#txt_loginPass").val("");
		    	$("#txt_loginUsuario").focus();
    		}
    	}else{
    		alert("Indique un usuario u contraseña");
    	}
    });
    /////////////// 
    $("#btn_limpiar").click(function(){
    	$("#frm_cambios").dialog('close');    			
    });
    $("#btn_guardar").click(function (){
    	$("#frm_cambios").submit(function(e){
			var formObj = $(this);
			var formURL = formObj.attr("action");
			if(window.FormData !== undefined){	
				var formData = new FormData(this);												
				formURL=formURL;  			
				$.ajax({
	    			url: formURL,
					type: "POST",
					data:  formData,
					mimeType:"multipart/form-data",
					contentType: false,
		    		cache: false,
					processData:false,
					success: function(data, textStatus, jqXHR){
		    			location.reload();
				    },
				  	error: function(jqXHR, textStatus, errorThrown) {
	    			} 	        
   				});
    			e.preventDefault();
    		}
    	}); 
    });
}
function mouseEnter(e){
	var audio = $(this).context.dataset.audio;
	$("#"+audio)[0].play();	
}
function mouseLeave(e){
	var audio = $(this).context.dataset.audio;
	$("#"+audio)[0].pause();
}

