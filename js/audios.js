$(document).on("ready",inicio);
function inicio (){
	$("#inicio").on("mouseenter",mouseEnter);
	$("#tecnologia").on("mouseenter",mouseEnter);
	$("#ciencia").on("mouseenter",mouseEnter);
	$("#variedades").on("mouseenter",mouseEnter);
	$("#viber").on("mouseenter",mouseEnter);
	$("#rakuten").on("mouseenter",mouseEnter);
	$("#rakuten").on("mouseleave",mouseLeave);
	$("#red_5g").on("mouseenter",mouseEnter);
	$("#mudarse_correa").on("mouseenter",mouseEnter);
	$("#mudarse_correa").on("mouseleave",mouseLeave);
	$("#windows_xp").on("mouseenter",mouseEnter);
	$("#microsoft").on("mouseenter",mouseEnter);
	$("#microsoft").on("mouseleave",mouseLeave);
	$("#ropa_inteligente").on("mouseenter",mouseEnter);
	$("#en_el_catalogo").on("mouseenter",mouseEnter);
	$("#en_el_catalogo").on("mouseleave",mouseLeave);
	$("#descubrimientos").on("mouseenter",mouseEnter);
	$("#cientificos").on("mouseenter",mouseEnter);
	$("#cientificos").on("mouseleave",mouseLeave);
	$("#parque_yasuni").on("mouseenter",mouseEnter);
	$("#yasuni").on("mouseenter",mouseEnter);
	$("#yasuni").on("mouseleave",mouseLeave);
	$("#inodoro").on("mouseenter",mouseEnter);
	$("#inodoro_inteligente").on("mouseenter",mouseEnter);
	$("#inodoro_inteligente").on("mouseleave",mouseLeave);
	$("#celulas").on("mouseenter",mouseEnter);
	$("#celulas_inteligentes").on("mouseenter",mouseEnter);
	$("#celulas_inteligentes").on("mouseleave",mouseLeave);
	$("#cafe").on("mouseenter",mouseEnter);
	$("#cafe_ca").on("mouseenter",mouseEnter);
	$("#cafe_ca").on("mouseleave",mouseLeave);
	$("#polo").on("mouseenter",mouseEnter);
	$("#polo_pro").on("mouseenter",mouseEnter);
	$("#polo_pro").on("mouseleave",mouseLeave);
	$("#tecnologiaPotable").on("mouseenter",mouseEnter);
	$("#tecnologia_potable").on("mouseenter",mouseEnter);
	$("#tecnologia_potable").on("mouseleave",mouseLeave);
	$("#vuelo").on("mouseenter",mouseEnter);
	$("#vuelo_aves").on("mouseenter",mouseEnter);
	$("#vuelo_aves").on("mouseleave",mouseLeave);
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
	dialog = $( "#frm_cambios" ).dialog({
		autoOpen: true,
	    height: 550,
	    width: 600,
	    modal: true,              
    });
	dialog = $( "#frm_login" ).dialog({
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
    		if($("#txt_loginUsuario").val() == "Admin" && $("#txt_loginPass").val() == "admin"){

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

 
}
function mouseEnter(e){
	var audio = $(this).context.dataset.audio;
	$("#"+audio)[0].play();
}
function mouseLeave(e){
	var audio = $(this).context.dataset.audio;
	$("#"+audio)[0].pause();
}

