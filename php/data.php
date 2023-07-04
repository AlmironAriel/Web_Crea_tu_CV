<?php
$nombre= $_POST['name'];
$apellido = $_POST['apellido'];





$data = array("nombre" => $nombre, 'apellido' => $apellido);

echo json_encode($data, JSON_PRETTY_PRINT);
?>
