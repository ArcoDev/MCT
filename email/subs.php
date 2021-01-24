<?php
$destino = "arcosax0794@gamil.com";
$subs = $_POST["subs"];

$contenidoEmail = "Correo: " . $subs;
mail($destino, "Contacto", $contenidoEmail);
