<?php


// Obtén los datos del formulario
if(isset($_POST['name']) && !empty($_POST['name'])){$nombre = $_POST['name'];}
if(isset($_POST['apellido']) && !empty($_POST['apellido'])){$nombre = $_POST['apellido'];}
if(isset($_POST['dni']) && !empty($_POST['dni'])){$nombre = $_POST['dni'];}
if(isset($_POST['cuil']) && !empty($_POST['cuil'])){$nombre = $_POST['cuil'];}
if(isset($_POST['estado_civil']) && !empty($_POST['estado_civil'])){$estado_civil = $_POST['estado_civil'];}
if(isset($_POST['email']) && !empty($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['tel']) && !empty($_POST['tel'])){$tel = $_POST['tel'];}
if(isset($_POST['cod_postal']) && !empty($_POST['cod_postal'])){$cod_postal = $_POST['cod_postal'];}
if(isset($_POST['fech_nac']) && !empty($_POST['fech_nac'])){$fech_nac = $_POST['fech_nac'];}
if(isset($_POST['nac']) && !empty($_POST['nac'])){$nac = $_POST['nac'];}
if(isset($_POST['dir']) && !empty($_POST['dir'])){$dir = $_POST['dir'];}
if(isset($_POST['ciudad']) && !empty($_POST['ciudad'])){$ciudad = $_POST['ciudad'];}
if(isset($_POST['genero']) && !empty($_POST['genero'])){$genero = $_POST['genero'];}
if(isset($_POST['nac']) && !empty($_POST['nac'])){$nac = $_POST['nac'];}
if(isset($_POST['nac']) && !empty($_POST['nac'])){$nac = $_POST['nac'];}
if(isset($_POST['nac']) && !empty($_POST['nac'])){$nac = $_POST['nac'];}


if(isset($_POST['empleo']) && !empty($_POST['empleo'])){$empleos = $_POST['empleo'];}
if(isset($_POST['ciudad_empleo']) && !empty($_POST['ciudad_empleo'])){$ciudadEmpleos = $_POST['ciudad_empleo'];}
if(isset($_POST['empresa_empleo']) && !empty($_POST['empresa_empleo'])){$empresaEmpleos = $_POST['empresa_empleo'];}
if(isset($_POST['desde_empleo']) && !empty($_POST['desde_empleo'])){$desdeEmpleos = $_POST['desde_empleo'];}
if(isset($_POST['hasta_empleo']) && !empty($_POST['hasta_empleo'])){$hastaEmpleos = $_POST['hasta_empleo'];}

$experiencias = array();

// Itera sobre los datos ingresados y crea un array de experiencias laborales
for ($i = 0; $i < count($empleos); $i++) {
  $empleo = trim($empleos[$i]);
  $ciudadEmpleo = trim($ciudadEmpleos[$i]);
  $empresaEmpleo = trim($empresaEmpleos[$i]);
  $desdeEmpleo = trim($desdeEmpleos[$i]);
  $hastaEmpleo = trim($hastaEmpleos[$i]);

    if (!empty($empleo) && !empty($ciudadEmpleo) && !empty($empresaEmpleo) && !empty($desdeEmpleo) && !empty($hastaEmpleo)) {

  // Aquí puedes realizar las operaciones necesarias con los datos de cada experiencia laboral, como almacenarlos en una base de datos

  $experiencias[] = array(
    'empleo' => $empleo,
    'ciudadEmpleo' => $ciudadEmpleo,
    'empresaEmpleo' => $empresaEmpleo,
    'desdeEmpleo' => $desdeEmpleo,
    'hastaEmpleo' => $hastaEmpleo
    
  );
}
}

// Envía una respuesta al cliente con el array de experiencias laborales
$response = array('status' => 'success', 'message' => 'Experiencias laborales agregadas con éxito','nombre'=>$nombre, 'experiencias' => $experiencias);


echo json_encode($response);
