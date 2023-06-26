<?php
$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$estadoCivil = $_POST['estado_civil'];
$email = $_POST['email'];
$cuil = $_POST['cuil'];
$empleoAct = $_POST['empleo_actual'];
$tel = $_POST['tel'];
$codPostal = $_POST['cod_postal'];
$fechan = $_POST['fech_nac'];
$nacionalidad = $_POST['nac'];
$direccion = $_POST['dir'];
$ciudad = $_POST['ciudad'];
$genero = $_POST['genero'];


$data = array("nombre"=>$nombre,'apellido'=>$apellido,"dni"=>$dni,'estadoCivil'=>$estadoCivil,'email'=>$email,'cuil'=>$cuil,'empleoAct'=>$empleoAct,'tel'=>$tel,'codPostal'=>$codPostal,'fechan'=>$fechan,'nacionalidad'=>$nacionalidad,'direccion',$direccion,'ciudad'=>$ciudad,'genero'=>$genero);

echo json_encode($data, JSON_PRETTY_PRINT);
?>

