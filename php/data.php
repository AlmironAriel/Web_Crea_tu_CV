<?php

// Obtén los datos del formulario

//datos personales
if (isset($_POST['name']) && !empty($_POST['name'])) {
    $nombre = $_POST['name'];
}
if (isset($_POST['apellido']) && !empty($_POST['apellido'])) {
    $apellido = $_POST['apellido'];
}
if (isset($_POST['dni']) && !empty($_POST['dni'])) {
    $dni = $_POST['dni'];
} else {
    $dni = '';
}
if (isset($_POST['cuil']) && !empty($_POST['cuil'])) {
    $cuil = $_POST['cuil'];
}
if (isset($_POST['estado_civil']) && !empty($_POST['estado_civil'])) {
    $estado_civil = $_POST['estado_civil'];
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['tel']) && !empty($_POST['tel'])) {
    $tel = $_POST['tel'];
}
if (isset($_POST['tel_alt']) && !empty($_POST['tel_alt'])) {
    $tel_alt = $_POST['tel_alt'];
}
if (isset($_POST['cod_postal']) && !empty($_POST['cod_postal'])) {
    $cod_postal = $_POST['cod_postal'];
}
if (isset($_POST['fech_nac']) && !empty($_POST['fech_nac'])) {
    $fech_nac = $_POST['fech_nac'];
}
if (isset($_POST['nac']) && !empty($_POST['nac'])) {
    $nac = $_POST['nac'];
}
if (isset($_POST['dir']) && !empty($_POST['dir'])) {
    $dir = $_POST['dir'];
}
if (isset($_POST['ciudad']) && !empty($_POST['ciudad'])) {
    $ciudad = $_POST['ciudad'];
}
if (isset($_POST['localidad']) && !empty($_POST['localidad'])) {
    $localidad = $_POST['localidad'];
}
if (isset($_POST['genero']) && !empty($_POST['genero'])) {
    $genero = $_POST['genero'];
}
if (isset($_POST['web']) && !empty($_POST['web'])) {
    $web = $_POST['web'];
} else {
    $web = '';
}
if (isset($_POST['info_perfil']) && !empty($_POST['info_perfil'])) {
    $info_perfil = $_POST['info_perfil'];
}

//datos laborales
if (isset($_POST['empleo']) && !empty($_POST['empleo'])) {
    $empleos = $_POST['empleo'];
}
if (isset($_POST['ciudad_empleo']) && !empty($_POST['ciudad_empleo'])) {
    $ciudadEmpleos = $_POST['ciudad_empleo'];
}
if (isset($_POST['empresa_empleo']) && !empty($_POST['empresa_empleo'])) {
    $empresaEmpleos = $_POST['empresa_empleo'];
}
if (isset($_POST['desde_empleo']) && !empty($_POST['desde_empleo'])) {
    $desdeEmpleos = $_POST['desde_empleo'];
}
if (isset($_POST['hasta_empleo']) && !empty($_POST['hasta_empleo'])) {
    $hastaEmpleos = $_POST['hasta_empleo'];
}
if (isset($_POST['descripcion_lab']) && !empty($_POST['descripcion_lab'])) {
    $descripcion_lab = $_POST['descripcion_lab'];
}


//datos educacion
if (isset($_POST['instituto']) && !empty($_POST['instituto'])) {
    $institutos = $_POST['instituto'];
}
if (isset($_POST['carreras']) && !empty($_POST['carreras'])) {
    $carreras = $_POST['carreras'];
}
if (isset($_POST['localidad_insti']) && !empty($_POST['localidad_insti'])) {
    $localidad_instis = $_POST['localidad_insti'];
}
if (isset($_POST['grado_instituto']) && !empty($_POST['grado_instituto'])) {
    $grado_institutos = $_POST['grado_instituto'];
}
if (isset($_POST['estado_carrera']) && !empty($_POST['estado_carrera'])) {
    $estado_carreras = $_POST['estado_carrera'];
}
if (isset($_POST['cursado_desde']) && !empty($_POST['cursado_desde'])) {
    $cursado_desde = $_POST['cursado_desde'];
}
if (isset($_POST['cursado_hasta']) && !empty($_POST['cursado_hasta'])) {
    $cursado_hasta = $_POST['cursado_hasta'];
}
if (isset($_POST['desc_educacion']) && !empty($_POST['desc_educacion'])) {
    $desc_educacion = $_POST['desc_educacion'];
}

//datos cursos
if (isset($_POST['nomb_curso']) && !empty($_POST['nomb_curso'])) {
    $nomb_cursos = $_POST['nomb_curso'];
}
if (isset($_POST['perdiodo_curso_desde']) && !empty($_POST['perdiodo_curso_desde'])) {
    $perdiodo_cursos_desde = $_POST['perdiodo_curso_desde'];
}
if (isset($_POST['instituto_curso']) && !empty($_POST['instituto_curso'])) {
    $instituto_cursos = $_POST['instituto_curso'];
}
if (isset($_POST['perdiodo_curso_hasta']) && !empty($_POST['perdiodo_curso_hasta'])) {
    $perdiodo_cursos_hasta = $_POST['perdiodo_curso_hasta'];
}
if (isset($_POST['desc_curso']) && !empty($_POST['desc_curso'])) {
    $desc_cursos = $_POST['desc_curso'];
}

//datos habilidades
if (isset($_POST['habilidad']) && !empty($_POST['habilidad'])) {
    $habilidades = $_POST['habilidad'];
}
//datos habilidades IT
if (isset($_POST['hab_it']) && !empty($_POST['hab_it'])) {
    $habilidadesIT = $_POST['hab_it'];
}


$datos = array();
$experiencias = array();
$arr_habilidades = array();
$arr_habilidadesIT = array();
$arr_educacion = array();
$arr_cursos = array();
$ultimaPersona = array();
$datosPersonalesLaborales = array();

//=========================================================
//VALIDACION DE DATOS PERSONALES
//=========================================================

function validarNombreApellido($nombreApellido)
{
    // Verifica si el nombre o apellido contiene solo letras y tiene al menos dos caracteres
    // Permitimos un segundo nombre opcional entre paréntesis (por ejemplo: Juan Pablo)
    if (preg_match("/^[a-zA-Z]+\s?(\([a-zA-Z]+\))?\s?[a-zA-Z]+$/", $nombreApellido)) {
        return true; // Nombre o apellido válido
    } else {
        return false; // Nombre o apellido inválido
    }
}

if (!empty($nombre)) {
    if (!validarNombreApellido($nombre)) {
        $ultimaPersona['nombre'] = 'No Valido';
    } else {
        $ultimaPersona['nombre'] = $nombre;
    };
}

if (!empty($apellido)) {
    if (!validarNombreApellido($apellido)) {
        $ultimaPersona['apellido'] = 'No Valido';
    } else {
        $ultimaPersona['apellido'] = $apellido;
    }
}

function validarDNI($dni)
{
    // Verificar si el DNI contiene solo números y tiene una longitud válida (por ejemplo, 8 dígitos)
    if (preg_match("/^[0-9]{8}$/", $dni)) {
        return true; // DNI válido
    } else {
        return false; // DNI inválido
    }
}

if (!empty($dni)) {
    if (validarDNI($dni)) {
        $ultimaPersona['dni'] = $dni;
    } else {
        $ultimaPersona['dni'] = 'No Valido';
    }
}

function validarCUIL($cuil)
{
    // Eliminar los guiones del CUIL para obtener solo los dígitos numéricos
    $cuilSinGuiones = str_replace('-', '', $cuil);

    // Verificar si el CUIL tiene el formato correcto (11 dígitos numéricos)
    if (preg_match("/^\d{11}$/", $cuilSinGuiones)) {
        // Verificar el número de verificación del CUIL
        $suma = 0;
        $coeficientes = array(5, 4, 3, 2, 7, 6, 5, 4, 3, 2);
        for ($i = 0; $i < 10; $i++) {
            $suma += $cuilSinGuiones[$i] * $coeficientes[$i];
        }
        $resto = $suma % 11;
        $verificadorCalculado = 11 - $resto;
        if ($verificadorCalculado == 11) {
            $verificadorCalculado = 0;
        } elseif ($verificadorCalculado == 10) {
            $verificadorCalculado = 9;
        }

        // Verificar si el número de verificación es correcto
        if ($cuilSinGuiones[10] == $verificadorCalculado) {
            return true; // CUIL válido
        }
    }

    return false; // CUIL inválido
}


if (!empty($cuil)) {
    if (validarCUIL($cuil)) {
        $ultimaPersona['cuil'] = $cuil;
    } else {
        $ultimaPersona['cuil'] = 'No Valido';
    }
}

if (!empty($estado_civil)) {
    $ultimaPersona['estado_civil'] = $estado_civil;
}

function validarEmail($email)
{
    // Verificar si el email tiene un formato válido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // Email válido
    } else {
        return false; // Email inválido
    }
}

if (!empty($email)) {
    if (validarEmail($email)) {
        $ultimaPersona['email'] = $email;
    } else {
        $ultimaPersona['email'] = 'No Valido';
    }
}

if (!empty($tel)) {
    $ultimaPersona['tel'] = $tel;
}

if (!empty($tel_alt)) {
    $ultimaPersona['tel_alt'] = $tel_alt;
}

if (!empty($cod_postal)) {
    $ultimaPersona['cod_postal'] = $cod_postal;
}

if (!empty($fech_nac)) {
    // Validar el formato de la fecha (DD/MM/AAAA)
    $fechaValida = false;
    $fechaFormateada = '';

    // Verificar si la fecha se puede analizar correctamente
    if (strtotime($fech_nac)) {
        $fechaValida = true;
        $fechaFormateada = date('d/m/Y', strtotime($fech_nac));
    }

    if ($fechaValida) {
        $ultimaPersona['fech_nac'] = $fechaFormateada;
    }
}

if (!empty($nac)) {
    $ultimaPersona['nac'] = $nac;
}

if (!empty($dir)) {
    $ultimaPersona['dir'] = $dir;
}

if (!empty($ciudad)) {
    $ultimaPersona['ciudad'] = $ciudad;
}


if (!empty($localidad)) {
    $ultimaPersona['localidad'] = $localidad;
}
if (!empty($genero)) {
    $ultimaPersona['genero'] = $genero;
}

if (!empty($web)) {
    $ultimaPersona["web"] = $web;
} else {
    $ultimaPersona["web"] = '';
}

if (!empty($info_perfil)) {
    $ultimaPersona["info_perfil"] = $info_perfil;
}



// Nombre del archivo CSV
$nombre_archivo = 'datos.csv';

// Función para leer los datos actuales desde el archivo CSV y cargarlos en el array $datos
function leerDatosDesdeCSV($nombre_archivo)
{
    $datos = array();
    if (($gestor = fopen($nombre_archivo, "r")) !== FALSE) {
        // Leer las columnas de la cabecera y descartarlas
        fgetcsv($gestor);

        // Leer cada fila del archivo CSV y cargar los datos en el array
        while (($fila = fgetcsv($gestor)) !== FALSE) {
            $dni = $fila[2];
            $datos[$dni] = array(
                'nombre' => $fila[0],
                'apellido' => $fila[1],
                'dni' => $fila[2],
                'cuil' => $fila[3],
                'estado_civil' => $fila[4],
                'email' => $fila[5],
                'tel' => $fila[6],
                'tel_alt' => $fila[7],
                'fech_nac' => $fila[8],
                'cod_postal' => $fila[9],
                'dir' => $fila[10],
                'nac' => $fila[11],
                'ciudad' => $fila[12],
                'localidad' => $fila[13],
                'genero' => $fila[14],

                // Agregar más campos según corresponda a tu CSV
            );
        }
        fclose($gestor);
    }
    return $datos;
}

function guardarDatosEnCSV($nombre_archivo, $datos)
{
    // Eliminar datos duplicados manteniendo solo las últimas entradas
    $datos = array_unique($datos, SORT_REGULAR);

    $archivo_csv = fopen($nombre_archivo, 'w');

    // Verificar si el archivo está vacío, en cuyo caso escribiremos la cabecera
    $columnas = array('NOMBRE', 'APELLIDO', 'DNI', 'CUIL', 'ESTADO CIVIL', 'EMAIL', 'TELEFONO', 'TELEFONO ALT', 'FECHA NACIMIENTO', 'COD.POSTAL', 'DIRECCION', 'NACIONALIDAD', 'CIUDAD', 'LOCALIDAD', 'GENERO', 'WEB', 'INFO PERFIL', 'EMPLEO', 'EMPRESA', 'CIUDAD EMPRESA', 'PERIODIO DESDE', 'PERIODO HASTA', 'DESCRIPCION');
    fputcsv($archivo_csv, $columnas);

    // Recorrer el array y escribir los datos en el archivo CSV
    foreach ($datos as $dni => $persona) {
        $fila = array($persona['nombre'], $persona['apellido'], $persona['dni'], $persona['cuil'], $persona['estado_civil'], $persona['email'], isset($persona['tel']) ? $persona['tel'] : '', isset($persona['tel_alt']) ? $persona['tel_alt'] : '', isset($persona['fech_nac']) ? $persona['fech_nac'] : '', isset($persona['cod_postal']) ? $persona['cod_postal'] : '', isset($persona['dir']) ? $persona['dir'] : '', isset($persona['nac']) ? $persona['nac'] : '', isset($persona['ciudad']) ? $persona['ciudad'] : '', isset($persona['localidad']) ? $persona['localidad'] : '', isset($persona['genero']) ? $persona['genero'] : '', isset($persona['web']) ? $persona['web'] : '', isset($persona['info_perfil']) ? $persona['info_perfil'] : '', isset($persona['empleo']) ? $persona['empleo'] : '', isset($persona['ciudadEmpleo']) ? $persona['ciudadEmpleo'] :'', isset($persona['desdeEmpleo']) ? $persona['desdeEmpleo'] : '', isset($persona['empresaEmpleo']) ? $persona['empresaEmpleo'] : '', isset($persona['hastaEmpleo']) ? $persona['hastaEmpleo'] : '', isset($persona['descripcion']) ? $persona['descripcion'] : '');
        fputcsv($archivo_csv, $fila);
    }

    fclose($archivo_csv);
}


// Cargar datos actuales desde el archivo CSV solo si existen datos previos
if (filesize($nombre_archivo) > 0) {
    $datos = leerDatosDesdeCSV($nombre_archivo);
} else {
    $datos = array(); // Inicializamos $datos como un array vacío
}

if (!empty($nombre) && !empty($apellido) && !empty($dni) && !empty($cuil) && !empty($estado_civil) && !empty($email)) {

    // Verificar si ya existe un dato con el mismo dni
    if (isset($datos[$dni])) {
        // Actualizar los datos de la persona existente
        $datos[$dni]['nombre'] = $nombre;
        $datos[$dni]['apellido'] = $apellido;
        $datos[$dni]['cuil'] = $cuil;
        $datos[$dni]['estado_civil'] = $estado_civil;
        $datos[$dni]['email'] = $email;
        // Actualizar más campos según corresponda
    } else {
        // Agregar una nueva persona al array
        $datos[$dni] = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'cuil' => $cuil,
            'estado_civil' => $estado_civil,
            'email' => $email,
            // Agregar más campos según corresponda
        );
    }

    if (isset($datos[$dni]) && !empty($tel) || !empty($tel_alt) || !empty($cod_postal) || !empty($fech_nac) || !empty($dir) || !empty($nac) || !empty($ciudad) || !empty($localidad) || !empty($genero) || !empty($web)) {
        isset($tel) ? $datos[$dni]['tel'] = $tel : '';
        isset($tel_alt) ? $datos[$dni]['tel_alt'] = $tel_alt : '';
        isset($cod_postal) ? $datos[$dni]['cod_postal'] = $cod_postal : '';
        if (isset($fech_nac)) {
            if (!empty($fech_nac)) {
                // Validar el formato de la fecha (DD/MM/AAAA)
                $fechaValida = false;
                $fechaFormateada = '';

                // Verificar si la fecha se puede analizar correctamente
                if (strtotime($fech_nac)) {
                    $fechaValida = true;
                    $fechaFormateada = date('d/m/Y', strtotime($fech_nac));
                }

                if ($fechaValida) {
                    $datos[$dni]['fech_nac'] = $fechaFormateada;
                }
            }
        }
        isset($dir) ? $datos[$dni]['dir'] = $dir : '';
        isset($nac) ? $datos[$dni]['nac'] = $nac : '';
        isset($ciudad) ? $datos[$dni]['ciudad'] = $ciudad : '';
        isset($localidad) ? $datos[$dni]['localidad'] = $localidad : '';
        isset($genero) ? $datos[$dni]['genero'] = $genero : '';
        isset($web) ? $datos[$dni]['web'] = $web : '';
    }

    if (isset($datos[$dni]) && !empty($info_perfil)) {
        $datos[$dni]['info_perfil'] = $info_perfil;
    }

    // Guardar los datos actualizados en el archivo CSV
    guardarDatosEnCSV($nombre_archivo, $datos);

    // Obtener la última persona ingresada o actualizada
    $ultimaPersona = $datos[$dni];
}


//=========================================================
//VALIDACION DE DATOS LABORALES
//=========================================================

if (!empty($empleos)) {


    // Itera sobre los datos ingresados y crea un array de experiencias laborales
    for ($i = 0; $i < count($empleos); $i++) {
        $empleo = trim($empleos[$i]);
        $ciudadEmpleo = trim($ciudadEmpleos[$i]);
        $empresaEmpleo = trim($empresaEmpleos[$i]);
        $desdeEmpleo = trim($desdeEmpleos[$i]);
        $hastaEmpleo = trim($hastaEmpleos[$i]);
        $descripcion = trim($descripcion_lab[$i]);

        $fechaValidaDesde = false;
        $fechaValidaHasta = false;
        $fechaFormateadaDesde = '';
        $fechaFormateadaHasta = '';

        // Verificar si la fecha se puede analizar correctamente
        if (strtotime($desdeEmpleo)) {
            $fechaValidaDesde = true;
            $fechaFormateadaDesde = date('d/m/Y', strtotime($desdeEmpleo));
        }
        if (strtotime($hastaEmpleo)) {
            $fechaValidaHasta = true;
            $fechaFormateadaHasta = date('d/m/Y', strtotime($hastaEmpleo));
        }

        if ($fechaValidaDesde) {
            $desdeEmpleo = $fechaFormateadaDesde;
        }

        if ($fechaValidaHasta) {
            $hastaEmpleo = $fechaFormateadaHasta;
        }

        // Eliminar las etiquetas HTML y codificar el texto para evitar problemas de seguridad
        $descripcion = htmlspecialchars($descripcion);

        if (!empty($empleo) || !empty($ciudadEmpleo) || !empty($empresaEmpleo) || !empty($desdeEmpleo) || !empty($hastaEmpleo) || !empty($descripcion)) {
            // Aca se realizan las operaciones necesarias con los datos de cada experiencia laboral, como almacenarlos en una base de datos
            $experiencias[] = array(
                'dni' => $dni,
                'empleo' => $empleo,
                'ciudadEmpleo' => $ciudadEmpleo,
                'empresaEmpleo' => $empresaEmpleo,
                'desdeEmpleo' => $desdeEmpleo,
                'hastaEmpleo' => $hastaEmpleo,
                'descripcion' => $descripcion
            );
        }
    }


    // Guardar los datos actuales desde el archivo CSV solo si existen datos previos
    if (filesize($nombre_archivo) > 0) {
        $datos = leerDatosDesdeCSV($nombre_archivo);
    } else {
        $datos = array(); // Inicializamos $datos como un array vacío
    }

    // Verificar si hay datos en $experiencias para agregar al archivo CSV
    if (!empty($experiencias)) {
        foreach ($experiencias as $experiencia) {
            $dni = $experiencia['dni'];

            // Eliminar las etiquetas HTML y codificar el texto de descripción para evitar problemas de seguridad
            $experiencia['descripcion'] = strip_tags($experiencia['descripcion']);
            $experiencia['descripcion'] = htmlspecialchars($experiencia['descripcion']);


            // Verificar si el DNI existe en $datos
            if (isset($datos[$dni])) {
                // Fusionar los datos de $datos y $experiencia para cada DNI
                $datos[$dni] = array_merge($datos[$dni], $experiencia);
            }
        }

        // Guardar los datos actualizados (con las experiencias) en el archivo CSV
        guardarDatosEnCSV($nombre_archivo, $datos);
    }
    }




//=========================================================
//VALIDACION DE HABILIDADES
//=========================================================

for ($i = 0; $i < count($habilidades); $i++) {
    $habilidad = trim($habilidades[$i]);

    if (!empty($habilidad)) {
        $arr_habilidades[] = array(
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
    $localidad_insti = trim($localidad_instis[$i]);
    $grado_instituto = trim($grado_institutos[$i]);
    $estado_carrera = trim($estado_carreras[$i]);
    $desde = trim($cursado_desde[$i]);
    $hasta = trim($cursado_hasta[$i]);
    $desc = trim($desc_educacion[$i]);

    if (
        !empty($instituto) || !empty($carrera)  || !empty($localidad_insti) || !empty($grado_instituto) || !empty($estado_carrera) || !empty($desde)
        || !empty($hasta) || !empty($desc)
    ) {


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

//=========================================================
//VALIDACION DE DATOS cursos
//=========================================================

for ($i = 0; $i < count($nomb_cursos); $i++) {
    $nomb_curso = trim($nomb_cursos[$i]);
    $perdiodo_curso_desde = trim($perdiodo_cursos_desde[$i]);
    $instituto_curso = trim($instituto_cursos[$i]);
    $perdiodo_curso_hasta = trim($perdiodo_cursos_hasta[$i]);
    $desc_curso = trim($desc_cursos[$i]);

    if (!empty($nomb_curso) || !empty($perdiodo_curso_desde) || !empty($instituto_curso) || !empty($perdiodo_curso_hasta) || !empty($desc_curso)) {

        // Aca se realizan las operaciones necesarias con los datos de cada experiencia laboral, como almacenarlos en una base de datos

        $arr_cursos[] = array(
            'curso' => $nomb_curso,
            'desde' => $perdiodo_curso_desde,
            'instituto' => $instituto_curso,
            'hasta' => $perdiodo_curso_hasta,
            'descripcion' => $desc_curso

        );
    }
}




// Envía una respuesta al cliente con el array de experiencias laborales
$response = array('status' => 'success', 'message' => 'Experiencias laborales agregadas con éxito', 'cursos' => $arr_cursos, 'educacion' => $arr_educacion, 'habilidadesit' => $arr_habilidadesIT, 'habilidades' => $arr_habilidades, 'datos' => $ultimaPersona, 'experiencias' => $experiencias);


echo json_encode($response);
