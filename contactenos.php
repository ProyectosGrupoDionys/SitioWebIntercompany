<?php
	$destino= "soporteti@grupodionys.com.pe";
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$telefono=$_POST["telefono"];
 	$mensaje=$_POST["mensaje"];

	$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje ;
	mail($destino, "Consultas(Pagina Intercompany & Señor de Huanca SAC)", $contenido);
	header("Location:index.html");
 ?>
