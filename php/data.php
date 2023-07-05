<?php
$nombre= $_POST['name'];
$apellido = $_POST['apellido'];
$dni= $_POST['dni'];
$estado_civil = $_POST['estado_civil'];
$email = $_POST['email'];



$data = array("nombre" => $nombre, 'apellido' => $apellido, "dni"=>$dni, "estadoCivil"=>$estado_civil,"email"=>$email);

echo json_encode($data, JSON_PRETTY_PRINT);
?>
