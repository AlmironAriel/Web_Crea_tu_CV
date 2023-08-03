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

//datos idiomas
if (isset($_POST['idioma']) && !empty($_POST['idioma'])) {
    $idiomas = $_POST['idioma'];
}
if (isset($_POST['idioma_nivel']) && !empty($_POST['idioma_nivel'])) {
    $nivel_idiomas = $_POST['idioma_nivel'];
}


$datos = array();
$experiencias = array();
$laborales = array();
$arr_habilidades = array();
$arr_habilidadesIT = array();
$arr_educacion = array();
$arr_cursos = array();
$ultimaPersona = array();
$datosPersonalesLaborales = array();
$datos_combinados = array();

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

if (isset($web)) {
    $ultimaPersona["web"] = $web;
} else {
    $ultimaPersona["web"] = "";
}

if (isset($info_perfil)) {
    $ultimaPersona["info_perfil"] = $info_perfil;
}



// Nombre del archivo CSV
$nombre_archivo = 'datos.csv';

function leerDatosDesdeCSV($nombre_archivo)
{
    $datos = array();
    $experiencia = array();

    if (($gestor = fopen($nombre_archivo, "r")) !== FALSE) {
        // Leer las columnas de la cabecera y descartarlas
        $cabecera = fgetcsv($gestor);

        // Verificar si la cabecera se leyó correctamente
        if (!is_array($cabecera)) {
            fclose($gestor);
            return $datos;
        }

        // Obtener el índice de la columna de LABORALES
        $indiceLabores = is_array($cabecera) ? array_search('LABORALES', $cabecera) : false;
        // Obtener el índice de la columna de LABORALES y EDUCACION
        $indiceEducacion = array_search('EDUCACION', $cabecera);

        $indiceCursos = is_array($cabecera) ? array_search('CURSOS', $cabecera) : false;

        $indiceIdiomas = array_search('IDIOMAS', $cabecera);

        // Leer cada fila del archivo CSV y cargar los datos en el array
        while (($fila = fgetcsv($gestor)) !== FALSE) {
            $dni = $fila[2];

            // Verificar si el DNI ya existe en el array de datos
            if (!isset($datos[$dni])) {
                $datos[$dni] = array(
                    'nombre' => $fila[0],
                    'apellido' => $fila[1],
                    'dni' => $dni,
                    'cuil' => isset($fila[3]) ? $fila[3] : '',
                    'estado_civil' => isset($fila[4]) ? $fila[4] : '',
                    'email' => isset($fila[5]) ? $fila[5] : '',
                    'tel' => isset($fila[6]) ? $fila[6] : '',
                    'tel_alt' => isset($fila[7]) ? $fila[7] : '',
                    'fech_nac' => isset($fila[8]) ? $fila[8] : '',
                    'cod_postal' => isset($fila[9]) ? $fila[9] : '',
                    'dir' => isset($fila[10]) ? $fila[10] : '',
                    'nac' => isset($fila[11]) ? $fila[11] : '',
                    'ciudad' => isset($fila[12]) ? $fila[12] : '',
                    'localidad' => isset($fila[13]) ? $fila[13] : '',
                    'genero' => isset($fila[14]) ? $fila[14] : '',
                    'experiencias' => array(),
                    'educacion' => array(),
                    'cursos' => array(),
                    'idiomas' => array(),
                );
            }
            // Si existe, agregamos la experiencia laboral solo si no se ha agregado previamente
            if (isset($indiceLabores) && isset($fila[$indiceLabores]) && !empty(trim($fila[$indiceLabores]))) {
                $experiencias_laborales_str = $fila[$indiceLabores];

                // Dividir las experiencias laborales si están en una sola celda separadas por ";"
                $experiencias_laborales = explode('|', $experiencias_laborales_str);

                // Procesar cada experiencia laboral por separado
                foreach ($experiencias_laborales as $experiencia_laboral) {
                    // Obtener los datos individuales de cada experiencia laboral
                    $experiencia_data = explode(',', $experiencia_laboral);

                    $empresaEmpleo = isset($experiencia_data[0]) ? $experiencia_data[0] : '';
                    $empleo = isset($experiencia_data[1]) ? $experiencia_data[1] : '';
                    $desdeEmpleo = isset($experiencia_data[2]) ? $experiencia_data[2] : '';
                    $hastaEmpleo = isset($experiencia_data[3]) ? $experiencia_data[3] : '';
                    $descripcion = isset($experiencia_data[4]) ? $experiencia_data[4] : '';

                    // Crear el arreglo con los datos de la experiencia laboral
                    $experiencia = array(
                        'empresaEmpleo' => $empresaEmpleo,
                        'empleo' => $empleo,
                        'desdeEmpleo' => $desdeEmpleo,
                        'hastaEmpleo' => $hastaEmpleo,
                        'descripcion' => $descripcion
                    );

                    // Agregar la experiencia laboral al arreglo $experiencias
                    $datos[$dni]['experiencias'][] = $experiencia;
                }
            }

            if (isset($indiceEducacion) && isset($fila[$indiceEducacion]) && !empty(trim($fila[$indiceEducacion]))) {
                // Obtener la cadena de la columna EDUCACION
                $educacion_str = $fila[$indiceEducacion];

                // Convertir la cadena en un array de datos de educación
                $educaciones = array_map('trim', explode(',', $educacion_str));

                if (!empty(array_filter($educaciones))) {
                    // Obtener los datos individuales de educación si existen
                    $maximoNivel = isset($educaciones[0]) ? $educaciones[0] : '';
                    $tituloSecundario = isset($educaciones[1]) ? $educaciones[1] : '';
                    $tituloTerciarioUniversitario = isset($educaciones[2]) ? $educaciones[2] : '';
                    $nombreTituloTerciario = isset($educaciones[3]) ? $educaciones[3] : '';
                    $nombreTituloUniversitario = isset($educaciones[4]) ? $educaciones[4] : '';

                    // Crear el arreglo con los datos de educación
                    $educacion = array(
                        'maximoNivel' => $maximoNivel,
                        'tituloSecundario' => $tituloSecundario,
                        'tituloTerciarioUniversitario' => $tituloTerciarioUniversitario,
                        'nombreTituloTerciario' => $nombreTituloTerciario,
                        'nombreTituloUniversitario' => $nombreTituloUniversitario,
                    );

                    // Sobrescribir los datos de educación de la persona
                    $datos[$dni]['educacion'] = $educacion;
                }
            }

            if (isset($indiceCursos) && isset($fila[$indiceCursos]) && !empty(trim($fila[$indiceCursos]))) {
                $cursos_str = $fila[$indiceCursos];

                // Convertir la cadena en un array de datos de cursos
                $cursos_array = array_map('trim', explode('|', $cursos_str));

                // Limpiar los cursos existentes antes de agregar nuevos cursos
                $datos[$dni]['cursos'] = array();

                // Procesar cada curso por separado
                foreach ($cursos_array as $curso_str) {
                    // Obtener los datos individuales de cada curso
                    $curso_data = explode(',', $curso_str);

                    $nomb_curso = isset($curso_data[0]) ? $curso_data[0] : '';
                    $desde_curso = isset($curso_data[1]) ? $curso_data[1] : '';
                    $instituto_curso = isset($curso_data[2]) ? $curso_data[2] : '';
                    $hasta_curso = isset($curso_data[3]) ? $curso_data[3] : '';
                    $desc_curso = isset($curso_data[4]) ? $curso_data[4] : '';

                    // Crear el arreglo con los datos del curso
                    $curso = array(
                            'nomb_curso' => $nomb_curso,
                            'desde_curso' => $desde_curso,
                            'instituto_curso' => $instituto_curso,
                            'hasta_curso' => $hasta_curso,
                            'desc_curso' => $desc_curso
                        );

                    // Agregar el curso al arreglo de cursos
                    $datos[$dni]['cursos'][] = $curso;
                }
            }

            // Agregar idiomas si existen
            if ($indiceIdiomas !== false && isset($fila[$indiceIdiomas])) {
                $idiomas_str = $fila[$indiceIdiomas];
                $idiomas_data = explode('|', $idiomas_str);

                foreach ($idiomas_data as $idioma_data) {
                    $idioma_nivel = explode(',', $idioma_data);

                    $idioma = isset($idioma_nivel[0]) ? $idioma_nivel[0] : '';
                    $nivel = isset($idioma_nivel[1]) ? $idioma_nivel[1] : '';

                    if (!empty($idioma)) {
                        $idioma_nivel = array(
                            'idioma' => $idioma,
                            'nivel' => $nivel,
                        );

                        $datos[$dni]['idiomas'][] = $idioma_nivel;
                    }
                }
            }
        }
        fclose($gestor);
    }
    return $datos;
}

function guardarDatosEnCSV($nombre_archivo, $datos)
{
    if (!function_exists('eliminar_caracteres_especiales')) {
        function eliminar_caracteres_especiales($text)
        {
            // Eliminar las etiquetas HTML y obtener solo el contenido
            $text = strip_tags($text);

            // Reemplazar los saltos de línea con un espacio en blanco
            $text = str_replace(array("\r\n", "\r", "\n"), ' ', $text);

            // Reemplazar '&nbsp;' con un espacio en blanco
            $text = str_replace('&nbsp;', ' ', $text);

            // Eliminar espacios en blanco innecesarios
            $text = trim(preg_replace('/\s+/', ' ', $text));

            return $text;
        }
    }

    // Eliminar el elemento con la clave vacía [""] del arreglo $datos
    unset($datos[""]);

    // Verificar si el archivo está vacío
    $archivo_vacio = true;

    // Abre el archivo CSV en modo de escritura
    $archivo_csv = fopen($nombre_archivo, 'w');

    // Escribir la cabecera solo si el archivo no existe

    $cabecera = array(
        'NOMBRE', 'APELLIDO', 'DNI', 'CUIL', 'ESTADO CIVIL', 'EMAIL', 'TELEFONO', 'TELEFONO ALT',
        'FECHA NACIMIENTO', 'COD POSTAL', 'DIRECCION', 'NACIONALIDAD', 'CIUDAD', 'LOCALIDAD', 'GENERO'
    );

    $cabecera[] = 'LABORALES';

    $cabecera[] = 'EDUCACION';

    $cabecera[] = 'CURSOS';

    $cabecera[] = 'IDIOMAS';

    fputcsv($archivo_csv, $cabecera);

    foreach ($datos as $dni => $persona) {
        $educacionString = '';
        if (isset($persona['educacion']) && is_array($persona['educacion'])) {
            $educacionArray = $persona['educacion'];

            // Crear una cadena con los valores de educación
            $educacionString = implode(', ', $educacionArray);
        }

        if (isset($persona['cursos']) && is_array($persona['cursos'])) {
            $cursosFormatted = implode('|', array_map(function ($curso) {
                // Verificar si existe la clave 'desc_curso' en el array $curso
                if (isset($curso['desc_curso'])) {
                    $curso['desc_curso'] = eliminar_caracteres_especiales($curso['desc_curso']);
                }
                return implode(',', array_map('eliminar_caracteres_especiales', array_values($curso)));
            }, $persona['cursos']));
        } else {
            $cursosFormatted = '';
        }

        $idiomasString = '';
        if (isset($persona['idiomas']) && is_array($persona['idiomas'])) {
            $idiomasArray = $persona['idiomas'];
            $idiomasString = implode('|', array_map(function ($idioma) {
                return implode(',', array_map('eliminar_caracteres_especiales', array_values($idioma)));
            }, $idiomasArray));
        }
        // Guardar los datos personales en el arreglo $fila_persona
        $fila_persona = array(
            isset($persona['nombre']) ? $persona['nombre'] : '',
            isset($persona['apellido']) ? $persona['apellido'] : '',
            isset($persona['dni']) ? $persona['dni'] : '',
            isset($persona['cuil']) ? $persona['cuil'] : '',
            isset($persona['estado_civil']) ? $persona['estado_civil'] : '',
            isset($persona['email']) ? $persona['email'] : '',
            isset($persona['tel']) ? $persona['tel'] : '',
            isset($persona['tel_alt']) ? $persona['tel_alt'] : '',
            isset($persona['fech_nac']) ? $persona['fech_nac'] : '',
            isset($persona['cod_postal']) ? $persona['cod_postal'] : '',
            isset($persona['dir']) ? $persona['dir'] : '',
            isset($persona['nac']) ? $persona['nac'] : '',
            isset($persona['ciudad']) ? $persona['ciudad'] : '',
            isset($persona['localidad']) ? $persona['localidad'] : '',
            isset($persona['genero']) ? $persona['genero'] : '',
            isset($persona['experiencias']) ? implode('|', array_map(function ($experiencia) {
                // Eliminar caracteres especiales de la descripción
                $experiencia['descripcion'] = eliminar_caracteres_especiales($experiencia['descripcion']);
                return implode(',', array_map('eliminar_caracteres_especiales', array_values($experiencia)));
            }, $persona['experiencias'])) : '',
            isset($educacionString) ? $educacionString : '',
            isset($persona['cursos']) ? $cursosFormatted : '',
            isset($idiomasString) ? $idiomasString : '',
        );

        // Escribir la fila en el archivo CSV usando fputcsv
        fputcsv($archivo_csv, $fila_persona);
    }

    // Cierra el archivo CSV
    fclose($archivo_csv);
}

// Cargar datos actuales desde el archivo CSV solo si existen datos previos
if (filesize($nombre_archivo) > 0) {
    $datos = leerDatosDesdeCSV($nombre_archivo);
} else {
    $datos = array(); // Inicializamos $datos como un array vacío
}

// Función para combinar los datos personales y las experiencias laborales
function combinarDatosPersonalesLaborales($datosPersonales, $laborales)
{
    // Si no hay experiencias laborales, simplemente devuelve los datos personales
    if (empty($laborales)) {
        return $datosPersonales;
    }

    // Combinar los datos personales con las experiencias laborales
    $datosPersonales['experiencias'] = $laborales;

    return $datosPersonales;
}

if (!empty($nombre) && !empty($apellido) && !empty($dni) && !empty($cuil) && !empty($estado_civil) && !empty($email)) {

    // Verificar si ya existe un dato con el mismo dni
    if (isset($datos[$dni])) {
        // Actualizar los datos de la persona existente
        $datos[$dni]['nombre'] = $nombre;
        $datos[$dni]['apellido'] = $apellido;
        $datos[$dni]['dni'] = $dni;
        $datos[$dni]['cuil'] = $cuil;
        $datos[$dni]['estado_civil'] = $estado_civil;
        $datos[$dni]['email'] = $email;

        isset($tel) ? $datos[$dni]['tel'] = $tel : '';
        isset($tel_alt) ? $datos[$dni]['tel_alt'] = $tel_alt : '';
        isset($fech_nac) ? $datos[$dni]['fech_nac'] = $fech_nac : '';
        isset($cod_postal) ? $datos[$dni]['cod_postal'] = $cod_postal : '';
        isset($dir) ? $datos[$dni]['dir'] = $dir : '';
        isset($nac) ? $datos[$dni]['nac'] = $nac : '';
        isset($ciudad) ? $datos[$dni]['ciudad'] = $ciudad : '';
        isset($localidad) ? $datos[$dni]['localidad'] = $localidad : '';
        isset($genero) ? $datos[$dni]['genero'] = $genero : '';
        isset($web) ? $datos[$dni]['web'] = $web : '';
        isset($info_perfil) ? $datos[$dni]['info_perfil'] = $info_perfil : '';
    } else {
        // Agregar una nueva persona al array
        $datos[$dni] = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'cuil' => $cuil,
            'estado_civil' => $estado_civil,
            'email' => $email,
            'tel' => isset($_POST['tel']) ? $_POST['tel'] : '',
            'tel_alt' => isset($_POST['tel_alt']) ? $_POST['tel_alt'] : '',
            'fech_nac' => isset($_POST['fech_nac']) ? $_POST['fech_nac'] : '',
            'cod_postal' => isset($_POST['cod_postal']) ? $_POST['cod_postal'] : '',
            'dir' => isset($_POST['dir']) ? $_POST['dir'] : '',
            'nac' => isset($_POST['nac']) ? $_POST['nac'] : '',
            'ciudad' => isset($_POST['ciudad']) ? $_POST['ciudad'] : '',
            'localidad' => isset($_POST['localidad']) ? $_POST['localidad'] : '',
            'genero' => isset($_POST['genero']) ? $_POST['genero'] : '',
            'web' => isset($_POST['web']) ? $_POST['web'] : '',
            'info_perfil' => isset($_POST['info_perfil']) ? $_POST['info_perfil'] : '',
            'experiencias' => array()
        );
    }
}

//=========================================================
//VALIDACION DE DATOS LABORALES
//=========================================================

if (isset($_POST['empleo']) && is_array($_POST['empleo'])) {

    // Construir el array $laborales con el formato adecuado
    $experiencias = array();
    $laborales = array();
    $dni = isset($_POST['dni']) ? $_POST['dni'] : '';

    // Itera sobre los datos ingresados y crea un array de experiencias laborales
    for ($i = 0; $i < count($empleos); $i++) {
        $empleo = isset($empleos[$i]) ? trim($empleos[$i]) : '';
        $ciudadEmpleo = isset($ciudadEmpleos[$i]) ? trim($ciudadEmpleos[$i]) : '';
        $empresaEmpleo = isset($empresaEmpleos[$i]) ? trim($empresaEmpleos[$i]) : '';
        $desdeEmpleo = isset($desdeEmpleos[$i]) ? trim($desdeEmpleos[$i]) : '';
        $hastaEmpleo = isset($hastaEmpleos[$i]) ? trim($hastaEmpleos[$i]) : '';
        $descripcion = isset($descripcion_lab[$i]) ? trim($descripcion_lab[$i]) : '';

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


        if (!empty($empleo) || !empty($ciudadEmpleo) || !empty($empresaEmpleo) || !empty($desdeEmpleo) || !empty($hastaEmpleo) || !empty($descripcion)) {
            // Aca se realizan las operaciones necesarias con los datos de cada experiencia laboral, como almacenarlos en una base de datos
            // Eliminar las etiquetas HTML y codificar el texto para evitar problemas de seguridad
            $descripcion_sin_etiquetas = strip_tags($descripcion);

            // Verificar si ya existe una experiencia laboral con el mismo empleo y descripción
            $experiencias = isset($datos[$dni]['experiencias']) ? $datos[$dni]['experiencias'] : array();
            $existe_experiencia = false;
            foreach ($experiencias as $experiencia) {
                if ($experiencia['empleo'] === $empleo && $experiencia['descripcion'] === $descripcion && $experiencia['ciudadEmpleo'] === $ciudadEmpleo && $experiencia['empresaEmpleo'] === $empresaEmpleo) {
                    $existe_experiencia = true;
                    break;
                }
            }

            // Si no existe, agregamos la nueva experiencia laboral
            if (!$existe_experiencia) {
                $datos[$dni]['experiencias'][] = array(
                    'empleo' => $empleo,
                    'ciudadEmpleo' => $ciudadEmpleo,
                    'empresaEmpleo' => $empresaEmpleo,
                    'desdeEmpleo' => $desdeEmpleo,
                    'hastaEmpleo' => $hastaEmpleo,
                    'descripcion' => $descripcion_sin_etiquetas
                );
            }

            $laborales[] = array(
                'empleo' => $empleo,
                'ciudadEmpleo' => $ciudadEmpleo,
                'empresaEmpleo' => $empresaEmpleo,
                'desdeEmpleo' => $desdeEmpleo,
                'hastaEmpleo' => $hastaEmpleo,
                'descripcion' => $descripcion
            );
        }
    }
}


//=========================================================
//VALIDACION DE HABILIDADES
//=========================================================

if (isset($habilidades)) {

    for ($i = 0; $i < count($habilidades); $i++) {
        $habilidad = trim($habilidades[$i]);

        $arr_habilidades[] = array(
            'habilidad' => $habilidad,
        );
    }
}


//=========================================================
//VALIDACION DE HABILIDADES IT
//=========================================================
if (isset($habilidadesIT)) {

    for ($i = 0; $i < count($habilidadesIT); $i++) {
        $habilidadIT = trim($habilidadesIT[$i]);

        $arr_habilidadesIT[] = array(
            'habilidadit' => $habilidadIT,
        );
    }
}

//=========================================================
//VALIDACION DE DATOS EDUCATIVOS
//=========================================================

if (isset($_POST['dni']) && !empty($_POST['dni'])) {
    $dni = $_POST['dni'];

    if (isset($datos[$dni])) {

        if (isset($_POST['instituto']) && is_array($_POST['instituto']) && !empty($_POST['instituto'])) {
            $educaciones = array();

            $maximoNivel = '';
            $tituloSecundario = '';
            $tituloTerciarioUniversitario = '';
            $nombreTituloTerciario = '';
            $nombreTituloUniversitario = '';
            $carreraUniversitario = '';
            $carreraTerciario = '';
            $seEncontroSecundario = false;
            $arr_educacion = array();

            for ($i = 0; $i < count($institutos); $i++) {
                $instituto = isset($institutos[$i]) ? trim($institutos[$i]) : '';
                $carrera = isset($carreras[$i]) ? trim($carreras[$i]) : '';
                $localidad_insti = isset($localidad_instis[$i]) ? trim($localidad_instis[$i]) : '';
                $grado_instituto = isset($grado_institutos[$i]) ? trim($grado_institutos[$i]) : '';
                $estado_carrera = isset($estado_carreras[$i]) ? trim($estado_carreras[$i]) : '';
                $desde = isset($cursado_desde[$i]) ? trim($cursado_desde[$i]) : '';
                $hasta = isset($cursado_hasta[$i]) ? trim($cursado_hasta[$i]) : '';
                $desc = isset($desc_educacion[$i]) ? trim($desc_educacion[$i]) : '';

                // Verificar si la fecha se puede analizar correctamente
                if (strtotime($desde)) {
                    $fechaValidaDesde = true;
                    $fechaFormateadaDesde = date('d/m/Y', strtotime($desde));
                }
                if (strtotime($hasta)) {
                    $fechaValidaHasta = true;
                    $fechaFormateadaHasta = date('d/m/Y', strtotime($hasta));
                }

                if ($fechaValidaDesde) {
                    $desde = $fechaFormateadaDesde;
                }

                if ($fechaValidaHasta) {
                    $hasta = $fechaFormateadaHasta;
                }



                if (
                    !empty($instituto) || !empty($carrera) || !empty($localidad_insti) || !empty($grado_instituto) || !empty($estado_carrera) && !empty($desde)
                    && !empty($hasta) && !empty($desc)
                ) {


                    $educacion = array(
                        'instituto' => $instituto,
                        'carrera' => $carrera,
                        'localidad' => $localidad_insti,
                        'grado' => $grado_instituto,
                        'estado' => $estado_carrera,
                        'desde' => $desde,
                        'hasta' => $hasta,
                        'descripcion' => $desc
                    );
                    $arr_educacion[] = $educacion;

                    // Asignar los nombres de las carreras según el mayor nivel alcanzado
                    if ($grado_instituto === 'universitario' || $grado_instituto === 'terciario') {
                        // El máximo nivel será "Universitario" o "Terciario" si ya no se había asignado un máximo nivel antes
                        if (!$maximoNivel || ($grado_instituto === 'universitario' && $maximoNivel === 'terciario')) {
                            $maximoNivel = $grado_instituto;
                        }

                        // Asignar el nombre de la carrera al título universitario o terciario
                        if ($grado_instituto === 'universitario') {
                            $carreraUniversitario = $carrera;
                            // Si hay una educación universitaria, entonces la carrera universitaria también será el título universitario
                            $tituloTerciarioUniversitario = $carreraUniversitario;
                        } elseif ($grado_instituto === 'terciario') {
                            $carreraTerciario = $carrera;
                            // Si hay una educación terciaria, entonces la carrera terciaria será el título terciario
                            $nombreTituloTerciario = $carreraTerciario;
                        }
                    } elseif ($grado_instituto === 'secundario') {
                        // Si el máximo nivel aún no ha sido asignado, será "Secundario"
                        if (!$maximoNivel) {
                            $maximoNivel = 'secundario';
                        }

                        // Asignar el nombre de la carrera al título secundario solo si aún no se ha encontrado una educación secundaria
                        if (!$seEncontroSecundario) {
                            $tituloSecundario = $carrera;
                            $seEncontroSecundario = true;
                        }
                    }
                }
            }
            // Verificar si aún no se ha asignado el título secundario y si el máximo nivel no es "Secundario"
            if (!$tituloSecundario && $maximoNivel !== 'secundario') {
                // Asignar los datos de educación con grado secundario como título secundario
                if (isset($arr_educacion[0]['carrera'])) {
                    $tituloSecundario = $arr_educacion[0]['carrera'];
                }
            }

            // Asignar los nombres de las carreras según el mayor nivel alcanzado
            if ($maximoNivel === 'universitario') {
                $tituloTerciarioUniversitario = $carreraUniversitario;
                $nombreTituloUniversitario = $carreraUniversitario;
            } elseif ($maximoNivel === 'terciario') {
                $tituloTerciarioUniversitario = $carreraTerciario;
                $nombreTituloTerciario = $carreraTerciario;
            }

            // Verificar si ya existe una experiencia laboral con el mismo empleo y descripción
            $educaciones = isset($datos[$dni]['educacion']) ? $datos[$dni]['educacion'] : array();

            // aca se realizan las operaciones necesarias con los datos academicos, como almacenarlos en una base de datos
            $datos[$dni]['educacion'] = array(
                'maximoNivel' => $maximoNivel,
                'tituloSecundario' => $tituloSecundario,
                'tituloTerciarioUniversitario' => $tituloTerciarioUniversitario,
                'nombreTituloTerciario' => $nombreTituloTerciario,
                'nombreTituloUniversitario' => $nombreTituloUniversitario,
            );
        }
    }
}



//=========================================================
//VALIDACION DE DATOS cursos
//=========================================================
if (isset($_POST['dni']) && !empty($_POST['dni'])) {
    $dni = $_POST['dni'];

    if (isset($datos[$dni])) {
        if (isset($_POST['nomb_curso']) && is_array($_POST['nomb_curso'])) {

            $cursos = array();
            for ($i = 0; $i < count($nomb_cursos); $i++) {
                $nomb_curso = isset($nomb_cursos[$i]) ? trim($nomb_cursos[$i]) : '';
                $perdiodo_curso_desde = isset($perdiodo_cursos_desde[$i]) ? trim($perdiodo_cursos_desde[$i]) : '';
                $instituto_curso = isset($instituto_cursos[$i]) ? trim($instituto_cursos[$i]) : '';
                $perdiodo_curso_hasta = isset($perdiodo_cursos_hasta[$i]) ? trim($perdiodo_cursos_hasta[$i]) : '';
                $desc_curso = isset($desc_cursos[$i]) ? trim($desc_cursos[$i]) : '';

                if (!empty($nomb_curso) && !empty($perdiodo_curso_desde) && !empty($instituto_curso) && !empty($perdiodo_curso_hasta) && !empty($desc_curso)) {

                    // Verificar si ya existe una experiencia laboral con el mismo empleo y descripción
                    
                        $cursos = array(
                            'curso' => $nomb_curso,
                            'desde' => $perdiodo_curso_desde,
                            'instituto' => $instituto_curso,
                            'hasta' => $perdiodo_curso_hasta,
                            'descripcion' => $desc_curso
                        );

                    // Agregar el nuevo curso a la persona correspondiente en $datos
                    $datos[$dni]['cursos'][] = $cursos;

                    $arr_cursos[] = array(
                        'curso' => $nomb_curso,
                        'desde' => $perdiodo_curso_desde,
                        'instituto' => $instituto_curso,
                        'hasta' => $perdiodo_curso_hasta,
                        'descripcion' => $desc_curso
                    );
                }
            }
        }
    }
}



//=========================================================
//VALIDACION DE DATOS idomas
//=========================================================

if (isset($_POST['idioma']) && !empty($_POST['idioma']) && isset($_POST['idioma_nivel']) && !empty($_POST['idioma_nivel'])) {
    $dni = $_POST['dni'];
    $idioma_nivel = array();
    for ($i = 0; $i <= count($idiomas); $i++) {
        $idioma = isset($idiomas[$i]) ? trim($idiomas[$i]) : '';
        $nivel_idioma = isset($nivel_idiomas[$i]) ? trim($nivel_idiomas[$i]) : '';

        if (!empty($idioma) && !empty($nivel_idioma)) {

            $datos[$dni]['idiomas'] = array(
                'idioma' => $idioma,
                'nivel' => $nivel_idioma
            );
            $idioma_nivel[] = array(
                'idioma' => $idioma,
                'nivel' => $nivel_idioma
            );
        }
    }
}

// Comprobar si $laborales es un array antes de llamar a la función
if (is_array($laborales) && !empty($laborales)) {
    $datos[$dni] = combinarDatosPersonalesLaborales($datos[$dni], $laborales);
}

// Guardar los datos actualizados en el archivo CSV
guardarDatosEnCSV($nombre_archivo, $datos);



// Envía una respuesta al cliente con el array de experiencias laborales
$response = array('status' => 'success', 'message' => 'Experiencias laborales agregadas con éxito', 'idiomas' => $idioma_nivel, 'cursos' => $arr_cursos, 'educacion' => $arr_educacion, 'habilidadesit' => $arr_habilidadesIT, 'habilidades' => $arr_habilidades, 'datos' => $ultimaPersona, 'experiencias' => $laborales);


echo json_encode($response);
