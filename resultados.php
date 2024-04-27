<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$domicilio = $_POST['domicilio'];
$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$fecha_n = $_POST['fecha_n'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

echo 'Nombre: '. $nombre;
echo '<br>';
echo 'Apellido: '. $apellido;
echo '<br>';
echo 'Documento: '. $documento;
echo '<br>';
echo 'Domicilio: '. $domicilio;
echo '<br>';
echo 'Localidad: '. $localidad;
echo '<br>';
echo 'Provincia: '. $provincia;
echo '<br>';
echo 'Fecha de nacimiento: '. $fecha_n;
echo '<br>';
echo 'Telefono: '. $telefono;
echo '<br>';
echo 'Email: '. $email;