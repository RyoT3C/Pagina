<?php 
$nombre = $_POST["nombre"]; 
$apellido = $_POST["apellido"]; 
$email = $_POST["email"]; 
echo "Hola " . $nombre . " " . $apellido . ", Te has registrado con el siguiente correo electrónico: " . $email . "."; 
?>
