<?php
$to="ofertaacademica@uccuyo.edu.ar";
/*Your Email*/
$subject="Consulta - Oferta Educativa 2020 - 2021";
/*Issue*/
$date=date("l, F jS, Y");
$time=date("h:i A");

$email  = $_REQUEST['email'];
$name   = $_REQUEST['nombreApellido'];
$course = $_REQUEST['course'];


$msg="
	
	Consulta desde el sitio de la Oferta Educativa  <br/>
	
	[ Nombre y Apellido ]: <b>$name</b><br/>
	[ Email ]: <b>$email</b><br/>
	[ Consulta ]: <b>$course</b><br/>
	
	";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$to="ofertaacademica@uccuyo.edu.ar";
	
//dirección del remitente 
$headers .= "From: ".$name."<".$email.">\n"; 
	
if($email=="") {
echo "<div class='alert alert-danger'>
		  <a class='close' data-dismiss='alert'>×</a>
		  <strong>Error!</strong> Por favor llena todos los campos.
	  </div>";
} else {
	if (mail($to,$subject,$msg,$headers)){
		echo "<div class='alert alert-success'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Gracias por tu consulta!</strong>
		  </div>";
	}else echo "<div><a class='close' data-dismiss='alert'>×</a> <strong>Error!</strong> No se pudo enviar el email.</div>";

}
?>
