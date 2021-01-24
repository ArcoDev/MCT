<?php
/* VARIABLES */
$destino = "arcosax0794@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$ciudad = $_POST["ciudad"];
$whats = $_POST["whats"];

$contenidoEmail = "Nombre: " . $nombre .
    "\nCorreo: " . $correo .
    "\nCiudad: " . $ciudad .
    "\nWhatsapp: " . $whats;
mail($destino, "Contacto", $contenidoEmail);
header("Location:../includes/gracias.html");
