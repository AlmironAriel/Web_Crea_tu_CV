<?php
$nombre= $_POST['name'];
$apellido = $_POST['apellido'];
$dni= $_POST['dni'];
$estado_civil = $_POST['estado_civil'];
$email = $_POST['email'];
$cuil = $_POST['cuil'];



$data = array("nombre" => $nombre, 'apellido' => $apellido, "dni"=>$dni, "estadoCivil"=>$estado_civil,"email"=>$email,"cuil"=>$cuil);

echo json_encode($data, JSON_PRETTY_PRINT);

$file_handle = fopen('/home/tutsplus/files/tmp.txt', 'w');
?>
