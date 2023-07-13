<?php


// Obtén los datos del formulario

//datos personales
if(isset($_POST['name']) && !empty($_POST['name'])){$nombre = $_POST['name'];}
if(isset($_POST['apellido']) && !empty($_POST['apellido'])){$apellido = $_POST['apellido'];}
if(isset($_POST['dni']) && !empty($_POST['dni'])){$dni = $_POST['dni'];}
if(isset($_POST['cuil']) && !empty($_POST['cuil'])){$cuil = $_POST['cuil'];}
if(isset($_POST['estado_civil']) && !empty($_POST['estado_civil'])){$estado_civil = $_POST['estado_civil'];}
if(isset($_POST['email']) && !empty($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['tel']) && !empty($_POST['tel'])){$tel = $_POST['tel'];}
if(isset($_POST['tel_alt']) && !empty($_POST['tel_alt'])){$tel_alt = $_POST['tel_alt'];}
if(isset($_POST['cod_postal']) && !empty($_POST['cod_postal'])){$cod_postal = $_POST['cod_postal'];}
if(isset($_POST['fech_nac']) && !empty($_POST['fech_nac'])){$fech_nac = $_POST['fech_nac'];}
if(isset($_POST['nac']) && !empty($_POST['nac'])){$nac = $_POST['nac'];}
if(isset($_POST['dir']) && !empty($_POST['dir'])){$dir = $_POST['dir'];}
if(isset($_POST['ciudad']) && !empty($_POST['ciudad'])){$ciudad = $_POST['ciudad'];}
if(isset($_POST['genero']) && !empty($_POST['genero'])){$genero = $_POST['genero'];}
if(isset($_POST['localidad']) && !empty($_POST['localidad'])){$localidad = $_POST['localidad'];}
if(isset($_POST['web']) && !empty($_POST['web'])){$web = $_POST['web'];}
if(isset($_POST['info_perfil']) && !empty($_POST['info_perfil'])){$info_perfil = $_POST['info_perfil'];}

//datos laborales
if(isset($_POST['empleo']) && !empty($_POST['empleo'])){$empleos = $_POST['empleo'];}
if(isset($_POST['ciudad_empleo']) && !empty($_POST['ciudad_empleo'])){$ciudadEmpleos = $_POST['ciudad_empleo'];}
if(isset($_POST['empresa_empleo']) && !empty($_POST['empresa_empleo'])){$empresaEmpleos = $_POST['empresa_empleo'];}
if(isset($_POST['desde_empleo']) && !empty($_POST['desde_empleo'])){$desdeEmpleos = $_POST['desde_empleo'];}
if(isset($_POST['hasta_empleo']) && !empty($_POST['hasta_empleo'])){$hastaEmpleos = $_POST['hasta_empleo'];}

//datos educacion
if(isset($_POST['instituto']) && !empty($_POST['instituto'])){$institutos = $_POST['instituto'];}
if(isset($_POST['carreras']) && !empty($_POST['carreras'])){$carreras = $_POST['carreras'];}
if(isset($_POST['localidad_insti']) && !empty($_POST['localidad_insti'])){$localidad_instis = $_POST['localidad_insti'];}
if(isset($_POST['grado_instituto']) && !empty($_POST['grado_instituto'])){$grado_institutos = $_POST['grado_instituto'];}
if(isset($_POST['estado_carrera']) && !empty($_POST['estado_carrera'])){$estado_carreras = $_POST['estado_carrera'];}
if(isset($_POST['cursado_desde']) && !empty($_POST['cursado_desde'])){$cursado_desde = $_POST['cursado_desde'];}
if(isset($_POST['cursado_hasta']) && !empty($_POST['cursado_hasta'])){$cursado_hasta = $_POST['cursado_hasta'];}
if(isset($_POST['desc_educacion']) && !empty($_POST['desc_educacion'])){$desc_educacion = $_POST['desc_educacion'];}




//datos habilidades
if(isset($_POST['habilidad']) && !empty($_POST['habilidad'])){$habilidades = $_POST['habilidad'];}
//datos habilidades IT
if(isset($_POST['hab_it']) && !empty($_POST['hab_it'])){$habilidadesIT = $_POST['hab_it'];}


$datos = array();
$experiencias = array();
$arr_habilidades = array();
$arr_habilidadesIT = array();
$arr_educacion = array();

//=========================================================
//VALIDACION DE DATOS PERSONALES
//=========================================================

if(!empty($nombre)){
    $datos["nombre"] = $nombre;
}

if (!empty($apellido)) {
    $datos["apellido"] = $apellido;
}

if (!empty($dni)) {
    $datos["dni"] = $dni;
}

if (!empty($cuil)) {
    $datos["cuil"] = $cuil;
}
if (!empty($estado_civil)) {
    $datos["estado_civil"] = $estado_civil;
}

if (!empty($email)) {
    $datos["email"] = $email;
}

if (!empty($tel)) {
    $datos["tel"] = $tel;
}

if (!empty($tel_alt)) {
    $datos["tel_alt"] = $tel_alt;
}

if (!empty($cod_postal)) {
    $datos["cod_postal"] = $cod_postal;
}

if (!empty($fech_nac)) {
    $datos["fech_nac"] = $fech_nac;
}

if (!empty($nac)) {
    $datos["nac"] = $nac;
}

if (!empty($dir)) {
    $datos["dir"] = $dir;
}

if (!empty($ciudad)) {
    $datos["ciudad"] = $ciudad;
}

if (!empty($genero)) {
    $datos["genero"] = $genero;
}

if (!empty($localidad)) {
    $datos["localidad"] = $localidad;
}

if (!empty($web)) {
    $datos["web"] = $web;
}

if (!empty($info_perfil)) {
    $datos["info_perfil"] = $info_perfil;
}

//=========================================================
//VALIDACION DE DATOS LABORALES
//=========================================================



// Itera sobre los datos ingresados y crea un array de experiencias laborales
for ($i = 0; $i < count($empleos); $i++) {
  $empleo = trim($empleos[$i]);
  $ciudadEmpleo = trim($ciudadEmpleos[$i]);
  $empresaEmpleo = trim($empresaEmpleos[$i]);
  $desdeEmpleo = trim($desdeEmpleos[$i]);
  $hastaEmpleo = trim($hastaEmpleos[$i]);

    if (!empty($empleo) || !empty($ciudadEmpleo) || !empty($empresaEmpleo) || !empty($desdeEmpleo) || !empty($hastaEmpleo)) {

  // Aca se realizan las operaciones necesarias con los datos de cada experiencia laboral, como almacenarlos en una base de datos

  $experiencias[] = array(
    'empleo' => $empleo,
    'ciudadEmpleo' => $ciudadEmpleo,
    'empresaEmpleo' => $empresaEmpleo,
    'desdeEmpleo' => $desdeEmpleo,
    'hastaEmpleo' => $hastaEmpleo
    
  );
}
}

//=========================================================
//VALIDACION DE HABILIDADES
//=========================================================

for($i = 0; $i < count($habilidades); $i++){
    $habilidad = trim($habilidades[$i]);

    if(!empty($habilidad)){
        $arr_habilidades[]= array(
            'habilidad' => $habilidad,
        );
    }
}

//=========================================================
//VALIDACION DE HABILIDADES IT
//=========================================================


for ($i = 0; $i < count($habilidadesIT); $i++) {
    $habilidadIT = trim($habilidadesIT[$i]);

    if (!empty($habilidadIT)) {
        $arr_habilidadesIT[] = array(
            'habilidadit' => $habilidadIT,
        );
    }
}

//=========================================================
//VALIDACION DE DATOS EDUCATIVOS
//=========================================================



for ($i = 0; $i < count($institutos); $i++) {
    $instituto = trim($institutos[$i]);
    $carrera = trim($carreras[$i]);
    $localidad_insti= trim($localidad_instis[$i]);
    $grado_instituto= trim($grado_institutos[$i]);
    $estado_carrera = trim($estado_carreras[$i]);
    $desde = trim($cursado_desde[$i]);
    $hasta= trim($cursado_hasta[$i]);
    $desc = trim($desc_educacion[$i]);

    if ( !empty($instituto) || !empty($carrera)  || !empty($localidad_insti) || !empty($grado_instituto) || !empty($estado_carrera)|| !empty($desde)
        || !empty($hasta) || !empty($desc)){
     

        // aca se realizan las operaciones necesarias con los datos academicos, como almacenarlos en una base de datos

        $arr_educacion[] = array(
            'instituto' => $instituto,
            'carrera' => $carrera,
            'localidad' => $localidad_insti,
            'grado' => $grado_instituto,
            'estado' => $estado_carrera,
            'desde' => $desde,
            'hasta' => $hasta,
            'descripcion' => $desc
        );
    }
}


// Envía una respuesta al cliente con el array de experiencias laborales
$response = array('status' => 'success', 'message' =>'Experiencias laborales agregadas con éxito','educacion'=>$arr_educacion,'habilidadesit'=>$arr_habilidadesIT,'habilidades' =>$arr_habilidades,'datos'=>$datos, 'experiencias' => $experiencias);


echo json_encode($response);