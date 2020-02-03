<?php

/*$destinatario = "info@arkanacoworking.com"; */
$destinatario = "alvareztaborda@hotmail.com";
$asunto = $asunto;
$cuerpo = ' 
<html> 
<head> 
   <title>'.$asunto.'</title> 
</head> 
<body> 
	<div class="card mb-3 container-fluid pt-5 mt-5" style="max-width: 80%;">
	  <div class="card-header bg-success text-white">
	  	<h2>SOLICITUD DE INFORMACIÓN ARKANA COWORKING</h2>
	  </div> 
	  <div class="card-body">
	    <h4 class="card-title">Un posible cliente potencial, solicitad información de los servicios que presta Arkana Coworking.</h4>
	    <p><strong>Nombre: </strong>'.$nombre.'</p>
	    <p><strong>Correo: </strong>'.$correo.'</p>
	    <p><strong>Asunto: </strong>'.$asunto.'</p>
	    <p><strong>Mensaje: </strong></p>
	    <p style="text-align: justify; width: 100%;">'.$mensaje.'</p>
	  </div>
	</div>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Arkana Coworking <contactanos@arkanacoworking.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: info@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: contactanos@arkanacoworking.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);