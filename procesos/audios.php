<?php 
	ini_set('post_max_size', '10000M');
	ini_set('upload_max_filesize', '10000M');

	/*imagen*/		
	move_uploaded_file($_FILES['txt_iamgen']['tmp_name'], "../imagenes/".$_POST['radio_n1'].".png");
	/*audio*/
	$temp = "";
	if($_POST['radio_n1'] == 'img_1'){
		$temp = "audio_1";
	}else{
		if($_POST['radio_n1'] == 'img_2'){
			$temp = "audio_2";
		}else{
			if($_POST['radio_n1'] == 'img_3'){
				$temp = "audio_3";
			}else{
				if($_POST['radio_n1'] == 'img_4'){
					$temp = "audio_4";
				}else{
					if($_POST['radio_n1'] == 'img_5'){
						$temp = "audio_5";
					}else{
						if($_POST['radio_n1'] == 'img_6'){
							$temp = "audio_6";
						}else{
							if($_POST['radio_n1'] == 'img_7'){
								$temp = "audio_7";
							}else{
								if($_POST['radio_n1'] == 'img_8'){
									$temp = "audio_8";
								}else{
									if($_POST['radio_n1'] == 'img_9'){
										$temp = "audio_9";
									}else{
										if($_POST['radio_n1'] == 'img_10'){
											$temp = "audio_10";
										}else{
											if($_POST['radio_n1'] == 'img_11'){
												$temp = "audio_11";
											}else{
												if($_POST['radio_n1'] == 'img_12'){
													$temp = "audio_12";
												}	
											}	
										}	
									}	
								}	
							}	
						}	
					}
				}	
			}
		}	
	}	
	move_uploaded_file($_FILES['txt_audio_titulo']['tmp_name'], "../audios/".$temp.".mp3");
	/*descripcion*/
	$temp_1 = "";
	if($_POST['radio_n1'] == 'img_1'){
		$temp_1 = "audio_1_1";
	}else{
		if($_POST['radio_n1'] == 'img_2'){
			$temp_1 = "audio_2_1";
		}else{
			if($_POST['radio_n1'] == 'img_3'){
				$temp_1 = "audio_3_1";
			}else{
				if($_POST['radio_n1'] == 'img_4'){
					$temp_1 = "audio_4_1";
				}else{
					if($_POST['radio_n1'] == 'img_5'){
						$temp_1 = "audio_5_1";
					}else{
						if($_POST['radio_n1'] == 'img_6'){
							$temp_1 = "audio_6_1";
						}else{
							if($_POST['radio_n1'] == 'img_7'){
								$temp_1 = "audio_7_1";
							}else{
								if($_POST['radio_n1'] == 'img_8'){
									$temp_1 = "audio_8_1";
								}else{
									if($_POST['radio_n1'] == 'img_9'){
										$temp_1 = "audio_9_1";
									}else{
										if($_POST['radio_n1'] == 'img_10'){
											$temp_1 = "audio_10_1";
										}else{
											if($_POST['radio_n1'] == 'img_11'){
												$temp_1 = "audio_11_1";
											}else{
												if($_POST['radio_n1'] == 'img_12'){
													$temp_1 = "audio_12_1";
												}	
											}	
										}	
									}	
								}	
							}	
						}	
					}
				}	
			}
		}	
	}	
	move_uploaded_file($_FILES['txt_audio_descripcion']['tmp_name'], "../audios/".$temp_1.".mp3");
	/*titulo*/
	if($_POST['radio_n1'] == 'img_1'){	
		$fila = 193;	 			
		$archivo = "../index.php";	
		$new = '<h3>'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 195;
		$new_1 = $_POST['txt_descripcion'];
	}
	if($_POST['radio_n1'] == 'img_2'){	
		$fila = 202;	 		 	
		$archivo = "../index.php";	
		$new = '<h3>'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 204;
		$new_1 = $_POST['txt_descripcion'];
	}
	if($_POST['radio_n1'] == 'img_3'){	
		$fila = 212;	 		 	
		$archivo = "../index.php";	
		$new = '<h3>'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 214;
		$new_1 = $_POST['txt_descripcion'];
	}
	if($_POST['radio_n1'] == 'img_4'){	
		$fila = 158;	 		 	
		$archivo = "../tecnologia.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 160;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}	
	if($_POST['radio_n1'] == 'img_5'){	
		$fila = 170;	 		 	
		$archivo = "../tecnologia.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 172;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}	
	if($_POST['radio_n1'] == 'img_6'){	
		$fila = 181;	 		 	
		$archivo = "../tecnologia.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 183;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}
	if($_POST['radio_n1'] == 'img_7'){	
		$fila = 154;	 		 	
		$archivo = "../ciencia.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 156;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}
	if($_POST['radio_n1'] == 'img_8'){	
		$fila = 165;	 		 	
		$archivo = "../ciencia.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 167;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}
	if($_POST['radio_n1'] == 'img_9'){	
		$fila = 176;	 		 	
		$archivo = "../ciencia.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 178;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}	
	if($_POST['radio_n1'] == 'img_10'){	
		$fila = 156;	 		 	
		$archivo = "../variedad.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 158;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}	
	if($_POST['radio_n1'] == 'img_11'){	
		$fila = 167;	 		 	
		$archivo = "../variedad.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 169;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}	
	if($_POST['radio_n1'] == 'img_12'){	
		$fila = 178;	 		 	
		$archivo = "../variedad.php";	
		$new = '<h3 class="heading-success">'.$_POST['txt_titulo'].'<h3>';
		$fila_1 = 180;
		$new_1 = '<span>'.$_POST['txt_descripcion'].'</span>';
	}	
  	$abrir =fopen($archivo,'r+'); 	
  	$contenido = fread($abrir , filesize($archivo));
	fclose($abrir);
	$contenido2 = explode("\r\n", $contenido);
	$contenido2[$fila] = $new;
	$contenido2[$fila_1] = $new_1;
	$nuevo = implode("\r\n", $contenido2);    		
	$abrir = fopen($archivo, 'w+');
	fwrite($abrir, $nuevo);
	fclose($abrir);  
	/*descripcion*/	
	

?>