<?php
/* VARIABLES */
$destino = "arcosax0794@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$tel = $_POST["tel"];
$ciudad = $_POST["ciudad"];
$mensaje = $_POST["mensaje"];

$contenidoEmail = "Nombre: " . $nombre .
    "\nCorreo: " . $correo .
    "\nTeléfono: " . $tel .
    "\nCiudad: " . $ciudad .
    "\nMesnaje: " . $mensaje;
mail($destino, "Contacto", $contenidoEmail);
header("Location:../includes/gracias.html");
