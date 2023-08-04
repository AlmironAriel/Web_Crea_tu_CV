<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nocturno.css">
    <link rel="stylesheet" href="./css/iframe.css">
    <link rel="stylesheet" href="/http://localhost/web%20crea%20tu%20cv/Web_Crea_tu_CV/css/iframe.css">
    <link href="./assets/fontawesome-free-6.4.0-web/css/all.css" rel="stylesheet">
    <title>Formulario</title>
</head>

<body>
    <div class="aside">
        <ul>
            <li>
                <a href="#dp">DATOS PERSONALES</a>
            </li>
            <li>
                <span><a href="#da">Datos Adicionales</a></span>
            </li>
            <li>
                <a href="#pe">PERFIL</a>
            </li>
            <LI>
                <a href="#el">EXPERIENCIA LABORAL</a>
            </LI>
            <li>
                <span><a href="#ele">Experiencia Extra</a></span>
            </li>
            <li>
                <a href="#hab">HABILIDADAES</a>
            </li>
            <LI>
                <span><a href="#habit">Habilidades IT</a></span>
            </LI>
            <li>
                <a href="#fa">FORMACION ACADEMICA</a>
            </li>
            <li>
                <span><a href="#cu">Cursos</a></span>
            </li>
            <li>
                <a href="#id">IDIOMAS</a>
            </li>
            <li>
                <a href="#dis">DISPONIBILIDAD</a>
            </li>
            <li>
                <a href="#sitioweb">SITIO Y RED SOCIAL</a>
            </li>
            <li>
                <a href="#ref">REFERENCIAS</a>
            </li>
            <a href="Index.html" class="action_btn cancel_btn">CANCELAR</a>
        </ul>
    </div>

    <!-- fin de side bar -->

    <main class="container">
        <!-- icono boton de modo nocturno -->
        <div class="modo" id="modo">
            <i class="fa-solid fa-toggle-on fa-xs"></i>
        </div>
        <div class="title">
            <!-- fin de icono de modo nocturno -->

            <h1 class="title_1">CREA TU PROPIO CV </h1>
            <h2 class="subtitle_1">En Pocos y Simples Pasos!</h2>
        </div>

        <!-- Div para mostrar el mensaje de éxito (oculto inicialmente) -->
        <div id="mensajeExito" style="display: none; background-color: #4CAF50; color: white; padding: 10px;">
            <h2>Datos ingresados correctamente</h2>
            <p>Los datos se guardaron correctamente en el sistema.</p>
        </div>

        <!-- Div para mostrar el mensaje de éxito (oculto inicialmente) -->
        <div id="mensajeExitoAdicionales" style="display: none; background-color: #4CAF50; color: white; padding: 10px;">
            <h2>Datos ingresados correctamente</h2>
            <p>Los datos se guardaron correctamente en el sistema.</p>
        </div>

        <form id="dataForm" method="post">
            <h2 class="h2">DATOS PERSONALES</h2>
            <div class="datos_personales" id="dp">
                <div class="columna_1">
                    <div class="field">
                        <label class="label" for="name">Nombre(s)</label>
                        <input id="name" type="text" name="name" placeholder="Juan Esteban">
                        <div id="check_nombre" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_nombre_error" class="errores">Ingrese un nombre valido</div>
                    </div>
                    <div class="field">
                        <label class="label" for="iapellido">Apellido</label>
                        <input id="apellido" type="text" name="apellido" placeholder="Gonzales">
                        <div id="check_apellido" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_apellido_error" class="errores">Ingrese un apellido valido</div>
                    </div>
                    <div class="field">
                        <div class="label" for="dni">DNI</div>
                        <input type="numbre" name="dni" id="dni" placeholder="00000000">
                        <div id="check_dni" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_dni_error" class="errores">Ingrese un DNI valido</div>
                    </div>
                    <div class="field">
                        <div class="label" for="estado_civil">Estado Civil</div>
                        <select name="estado_civil" id="estado_civil">
                            <option value="">Estado Civil</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                        </select>
                        <div id="check_estado_civil" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_estado_civil_error" class="errores">Ingrese un estado civil valido</div>
                    </div>
                </div>
                <div class="columna_2">
                    <div class="field">
                        <div class="label" for="iemail">Direccion de Correo Electronico</div>
                        <input id="email" type="text" name="email" placeholder="Ejemplo@gmai.com">
                        <div id="check_email" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_email_error" class="errores">Ingrese un email valido</div>
                    </div>
                    <div class="field">
                        <div class="label" for="cuil">Cuil</div>
                        <input id="cuil" type="text" name="cuil" placeholder="00-00000000-0">
                        <div id="check_cuil" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_cuil_error" class="errores">Ingrese un cuil valido</div>
                    </div>
                </div>
            </div>


            <!-- informacion adicional -->
            <details>
                <summary class="mas" id="da">Editar Infomacion Adicional V</summary>
                <div class="informacion_adicional">
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="tel">Numero de Telefono</div>
                            <input type="tel" id="tel" name="tel">
                            <div id="check_tel" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_tel_error" class="errores">Ingrese un telefono valido</div>
                        </div>
                        <div class="field">
                            <div class="label" for="tel_alt">Telefono Alternativo</div>
                            <input type="tel_alt" id="tel_alt" name="tel_alt">
                            <div id="check_telAlt" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_telAlt_error" class="errores">Ingrese un telefono valido</div>
                        </div>
                        <div class="field">
                            <div class="label" for="cod_postal">Codigo Postal</div>
                            <input type="number" id="cod_postal" name="cod_postal">
                            <div id="check_cp" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_cp_error" class="errores">Ingrese un telefono valido</div>
                        </div>
                        <div class="field">
                            <div class="label" for="fech_nac">Fecha de Nacimiento</div>
                            <input type="date" id="fech_nac" name="fech_nac" required format="DD-MM-YYYY">
                            <div id="check_nacimiento" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_nacimiento_error" class="errores">Ingrese una fecha valida</div>
                        </div>
                    </div> <!-- termina la columna 1-->

                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="dir">Direccion</div>
                            <input type="text" id="dir" name="dir">
                            <div id="check_dir" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_dir_error" class="errores">Ingrese una direccion valida</div>
                        </div>
                        <div class="field">
                            <div class="label" for="nacionalidad">Nacionalidad</div>
                            <input type="text" id="nac" name="nac">
                            <div id="check_nac" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_nac_error" class="errores">Ingrese un telefono valido</div>
                        </div>
                        <div class="field">
                            <div class="label" for="ciudad">Provincia</div>
                            <input type="text" id="ciudad" name="ciudad">
                            <div id="check_ciudad" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_ciudad_error" class="errores">Ingrese una ciudad valida</div>
                        </div>
                        <div class="field">
                            <div class="label" for="localidad">Localidad</div>
                            <input type="text" id="localidad" name="localidad">
                            <div id="check_localidad" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_ciudad_error" class="errores">Ingrese una localidad valida</div>
                        </div>
                        <div class="field">
                            <div class="label">Genero</div>
                            <select id="genero" name="genero">
                                <option value="">Seleccione su genero</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <div id="check_genero" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_genero_error" class="errores">Ingrese un genero valido</div>
                        </div>
                        <div class="field">
                            <div class="label" for="web">Sitio Web</div>
                            <input type="text" id="web" name="web">
                        </div>
                    </div>
                </div>
            </details>

            <!-- PERFIL -->
            <div class="perfil" id="pe">
                <h2 class="h2">PERFIL</h2>
                <P class="txt_info">Los reclutadores y gerentes de RRHH pasan un promedio de 6 segundos mirando un
                    curriculum. <br>
                    Mantenelo corto pero conciso. Escribi sobre vos y tu experiencia en tres o cuatro oraciones.</P>
                <textarea class="text_area" name="info_perfil" id="info_perfil" cols="20" rows="5" placeholder="Describa aqui su perfil laboral"></textarea>
                <div id="check_perfil" class="check"><i class="fa-regular fa-circle-check"></i></div>
                <div id="mensaje_perfil_error" class="errores">Ingrese un perfil valido</div>
            </div>

            <!-- EXPERIENCIA LABORAL -->
            <h2 class="h2" id="el">EXPERIENCIA LABORAL</h2>
            <p> El historial laboral es, por supuesto, de gran importancia para muchos puestos. La empresa a la que postulas obtendrá una buena impresión de tus competencias.</p>
            <div class="experiencia_laboral">
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="empleo">Titulo del Empleo</div>
                        <input type="text" id="empleo" name="empleo[]">
                        <div id="check_empleo" class="check"><i class="fa-regular fa-circle-check"></i></div>
                        <div id="mensaje_empleo_error" class="errores">Ingrese un empleo valido</div>
                    </div>
                    <div class="field">
                        <div class="label" for="ciudad_empleo">Ciudad/Region</div>
                        <input type="text" id="ciudad_empleo" name="ciudad_empleo[]">
                    </div>
                </div>
                <div class="columna_2">
                    <div class="field">
                        <div class="label" for="empresa_empleo">Empresa</div>
                        <input type="text" id="empresa_empleo" name="empresa_empleo[]">
                    </div>
                    <div class="periodo_empleo">
                        <div class="field">
                            <div class="label" for="desde_empleo">Periodo</div>
                            <input type="date" id="desde_empleo" name="desde_empleo[]">
                            <input type="date" id="hasta_empleo" name="hasta_empleo[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="label" for="descripcion_lab">DESCRIPCION</div>
                <P class="txt_info">Describa aquí su experiencia laboral. Haga énfasis en puestos y tareas desempeñadas.
                    Describa sus logros y el enfoque de sus desempeños anteriores</P>
            </div>
            <div class="tinymce-container">
                <textarea class="text_area tinymce" name="descripcion_lab[]" id="descripcion_lab" cols="20" rows="5" placeholder="Describa aqui su perfil laboral"></textarea>
            </div>
            <!-- Experiencia laboral extra 1 -->
            <details>
                <summary class="mas" id="ele">Agregar Mas Experiencia Laboral</summary>
                <div class="experiencia_laboral">
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="empleo">Titulo del Empleo</div>
                            <input type="text" id="empleo1" name="empleo[]">
                        </div>
                        <div class="field">
                            <div class="label" for="ciudad_empleo_2">Ciudad/Region</div>
                            <input type="text" id="ciudad_empleo_2" name="ciudad_empleo[]">
                        </div>
                    </div>
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="empresa_empleo">Empresa</div>
                            <input type="text" id="empresa_empleo" name="empresa_empleo[]">
                        </div>
                        <div class="periodo_empleo">
                            <div class="field">
                                <div class="label" for="desde_empleo_2">Periodo</div>
                                <input type="date" id="desde_empleo_2" name="desde_empleo[]">
                                <input type="date" id="hasta_empleo_2" name="hasta_empleo[]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label" for="descripcion_lab">DESCRIPCION</div>
                    <P class="txt_info">Describa aquí su experiencia laboral. Haga énfasis en puestos y tareas desempeñadas.
                        Describa sus logros y el enfoque de sus desempeños anteriores</P>
                </div>
                <div class="tinymce-container">
                    <textarea class="text_area tinymce" name="descripcion_lab[]" id="descripcion_lab" cols="20" rows="5" placeholder="Describa aqui su perfil laboral"></textarea>
                </div> <!-- EXPEIENCIA LABORAL EXTRA 3 -->
                <details>
                    <summary class="mas">Agregar Mas Experiencia Laboral</summary>
                    <div class="experiencia_laboral">
                        <div class="columna_1">
                            <div class="field">
                                <div class="label" for="empleo">Titulo del Empleo</div>
                                <input type="text" id="empleo2" name="empleo[]">
                            </div>
                            <div class="field">
                                <div class="label" for="ciudad_empleo_3">Ciudad/Region</div>
                                <input type="text" id="ciudad_empleo_3" name="ciudad_empleo[]">
                            </div>
                        </div>
                        <div class="columna_2">
                            <div class="field">
                                <div class="label" for="empresa_empleo_3">Empresa</div>
                                <input type="text" id="empresa_empleo_3" name="empresa_empleo[]">
                            </div>
                            <div class="periodo_empleo">
                                <div class="field">
                                    <div class="label" for="desde_empleo_3">Periodo</div>
                                    <input type="date" id="desde_empleo_3" name="desde_empleo[]">
                                    <input type="date" id="hasta_empleo_3" name="hasta_empleo[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="label" for="descripcion_lab">DESCRIPCION</div>
                        <P class="txt_info">Describa aquí su experiencia laboral. Haga énfasis en puestos y tareas desempeñadas.
                            Describa sus logros y el enfoque de sus desempeños anteriores</P>
                    </div>
                    <div class="tinymce-container">
                        <textarea class="text_area tinymce" name="descripcion_lab[]" id="descripcion_lab" cols="20" rows="5" placeholder="Describa aqui su perfil laboral"></textarea>
                    </div> <!-- EXPERIENCIA LABORAL EXTRA 4 -->
                    <details>
                        <summary class="mas">Agregar Mas Experiencia Laboral</summary>
                        <div class="experiencia_laboral">
                            <div class="columna_1">
                                <div class="field">
                                    <div class="label" for="empleo_4">Titulo del Empleo</div>
                                    <input type="text" id="empleo3" name="empleo[]">
                                </div>
                                <div class="field">
                                    <div class="label" for="ciudad_empleo_4">Ciudad/Region</div>
                                    <input type="text" id="ciudad_empleo_4" name="ciudad_empleo[]">
                                </div>
                            </div>
                            <div class="columna_2">
                                <div class="field">
                                    <div class="label" for="empresa_empleo_4">Empresa</div>
                                    <input type="text" id="empresa_empleo_4" name="empresa_empleo[]">
                                </div>
                                <div class="periodo_empleo">
                                    <div class="field">
                                        <div class="label" for="desde_empleo_4">Periodo</div>
                                        <input type="date" id="desde_empleo_4" name="desde_empleo[]">
                                        <input type="date" id="hasta_empleo_4" name="hasta_empleo[]">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="field">
                            <div class="label" for="descripcion_lab">DESCRIPCION</div>
                            <P class="txt_info">Describa aquí su experiencia laboral. Haga énfasis en puestos y tareas desempeñadas.
                                Describa sus logros y el enfoque de sus desempeños anteriores</P>
                        </div>
                        <div class="tinymce-container">
                            <textarea class="text_area tinymce" name="descripcion_lab[]" id="descripcion_lab" cols="20" rows="5" placeholder="Describa aqui su perfil laboral"></textarea>
                        </div>
                    </details>
                </details>
            </details>
            <!-- FIN DE HOJAS DE EXPERIENCIA LABORAL -->

            <!-- HABILIDADES -->
            <div class="habilidad wrap">
                <H2 class="H2" id="hab">HABILIDADES</H2>
                <p class="txt_info">Por habilidades se entiende un lado más práctico. Son cosas en las que eres bueno y que has demostrado en la práctica. ¿Aún no tienes una determinada habilidad? Entonces, en la mayoría de los casos, esto se puede enseñar. Las habilidades se ajustan a tu currículum en la sección de experiencia y pueden ser cualquier cosa: por ejemplo, puedes ser muy bueno con Photoshop o escribir a la velocidad de la luz. Pero también cosas como ser capaz de conducir una carretilla elevadora o saber poner moqueta son ejemplos de habilidades. </p>
                <div class="field">
                    <div class="label" for="habilidad">Agregar una Habilidad</div>
                    <input type="text" id="habilidad" name="habilidad[]">
                </div>
                <details>
                    <summary class="mas">Agregar otra habilidad</summary>
                    <div class="field">
                        <div class="label" for="habilidad ">Agregar una Habilidad</div>
                        <input type="text" id="habilidad" name="habilidad[]">
                    </div>
                    <details>
                        <summary class="mas">Agregar otra habilidad</summary>
                        <div class="field">
                            <div class="label" for="habilidad">Agregar una Habilidad</div>
                            <input type="text" id="habilidad" name="habilidad[]">
                        </div>
                        <details>
                            <summary class="mas">Agregar otra habilidad</summary>
                            <div class="field">
                                <div class="label" for="habilidad">Agregar una Habilidad</div>
                                <input type="text" id="habilidad" name="habilidad[]">
                            </div>
                            <details>
                                <summary class="mas">Agregar otra habilidad</summary>
                                <div class="field">
                                    <div class="label" for="habilidad">Agregar una Habilidad</div>
                                    <input type="text" id="habilidad" name="habilidad[]">
                                </div>
                            </details>
                        </details>
                    </details>
                </details>
            </div> <!--FIN DE HABILIDADES-->

            <!-- HABILIDADAES IT -->
            <h2 class="h2" id="habit">HABILIDADES IT</h2>
            <P class="text_info"> Las habilidades que están relacionadas con big data incluyen habilidades efectivas para resolver problemas, habilidades de manejo de datos y comprensión de lenguajes de programación.</P>
            <div class="habilidades_it">
                <div class="field">
                    <label class="label" for="habilidad_it">Agregar Habilidad IT</label>
                    <input type="text" id="hab_it" name="hab_it[]" placeholder="Ej: Power Point">
                </div>
            </div>
            <details>
                <summary class="mas">Agregar Mas Habilidades IT</summary>
                <div class="habilidades_it">
                    <div class="field">
                        <label class="label" for="habilidad_it_2">Agregar Habilidad IT</label>
                        <input type="text" id="hab_it_2" name="hab_it[]" placeholder="Ej: Power Point">
                    </div>
                </div>
                <details>
                    <summary class="mas">Agregar Mas Habilidades IT</summary>
                    <div class="habilidades_it">
                        <div class="field">
                            <label class="label" for="habilidad_it_3">Agregar Habilidad IT</label>
                            <input type="text" id="hab_it_3" name="hab_it[]" placeholder="Ej: Power Point">
                        </div>
                    </div>
                    <details>
                        <summary class="mas">Agregar Mas Habilidades IT</summary>
                        <div class="habilidades_it">
                            <div class="field">
                                <label class="label" for="habilidad_it_4">Agregar Habilidad IT</label>
                                <input type="text" id="hab_it_4" name="hab_it[]" placeholder="Ej: Power Point">
                            </div>
                        </div>
                        <details>
                            <summary class="mas">Agregar Mas Habilidades IT</summary>
                            <div class="habilidades_it">
                                <div class="field">
                                    <label class="label" for="habilidad_it_4">Agregar Habilidad IT</label>
                                    <input type="text" id="hab_it_4" name="hab_it[]" placeholder="Ej: Power Point">
                                </div>
                            </div>
                        </details>
                    </details>
                </details>
            </details>


            <!-- EDUCACION -->
            <h2 class="h2" id="fa">FORMACION ACADEMICA</h2>
            <P class="txt_info">Estudios realizados, indicando fechas, centro, y lugar donde se han realizado. Formación complementaria: Estudios y seminarios que amplian y complementan tu formación reglada, indicando las fechas, el centro y el lugar donde fueron realizados.</P>
            <div class="educacion">
                <!-- columna 1 -->
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="instituto">Instituto</div>
                        <input type="text" id="instituto" name="instituto[]">
                    </div>
                    <div class="field">
                        <div class="label" for="carrera">carrera</div>
                        <input type="text" id="carrera" name="carreras[]">
                    </div>
                    <div class="field">
                        <div class="label" for="localidad_insti">Localidad</div>
                        <input type="text" id="localidad_insti" name="localidad_insti[]">
                    </div>
                </div>
                <!-- columna 2 -->
                <div class="columna_2">
                    <div class="field">
                        <div class="label" for="grado">Grado</div>
                        <select name="grado_instituto[]" id="grado_instituto">
                            <option value="">Grado</option>
                            <option value="secundario">secundario</option>
                            <option value="terciario">Terciario</option>
                            <option value="universitario">Universitario</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label" for="">Estado</div>
                        <select name="estado_carrera[]" id="estado_carrera">
                            <option value="">Estado</option>
                            <option value="en_curso">En Curso</option>
                            <option value="terminado">Terminado</option>
                            <option value="incompleto">Incompleto</option>
                        </select>
                    </div>
                    <div class="periodo_empleo">
                        <div class="field">
                            <div class="label" for="periodo_cursado">Periodo</div>
                            <input type="date" id="cursado_desde" name="cursado_desde[]">
                            <input type="date" id="cursado_hasta" name="cursado_hasta[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="label" for="desc_educacion">DESCRIPCION</div>
                <P class="txt_info">Describa aquí su eduacion y las caracteristicas y/o especializaciones de su carrera</P>
            </div>
            <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="20" rows="5" placeholder="Describa aqui su educacion"></textarea>

            <!-- educacion 2 -->
            <details>
                <summary class="mas">Agregar Educacion</summary>
                <div class="educacion">
                    <!-- columna 1 -->
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="instituto2">Instituto</div>
                            <input type="text" id="instituto2" name="instituto[]">
                        </div>
                        <div class="field">
                            <div class="label" for="carrera2">carrera</div>
                            <input type="text" id="carrera2" name="carreras[]">
                        </div>
                        <div class="field">
                            <div class="label" for="localidad_insti">Localidad</div>
                            <input type="text" id="localidad_insti" name="localidad_insti[]">
                        </div>
                    </div>
                    <!-- columna 2 -->
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="grado">Grado</div>
                            <select name="grado_instituto[]" id="grado_instituto">
                                <option value="">Grado</option>
                                <option value="secundario">secundario</option>
                                <option value="terciario">Terciario</option>
                                <option value="universitario">Universitario</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label" for="">Estado</div>
                            <select name="estado_carrera[]" id="estado_carrera">
                                <option value="">Estado</option>
                                <option value="en_curso">En Curso</option>
                                <option value="terminado">Terminado</option>
                                <option value="incompleto">Incompleto</option>
                            </select>
                        </div>
                        <div class="periodo_empleo">
                            <div class="field">
                                <div class="label" for="periodo_cursado">Periodo</div>
                                <input type="date" id="cursado_desde" name="cursado_desde[]">
                                <input type="date" id="cursado_hasta" name="cursado_hasta[]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label" for="desc_educacion">DESCRIPCION</div>
                    <P class="txt_info">Describa aquí su eduacion y las caracteristicas y/o especializaciones de su carrera</P>
                </div>
                <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="20" rows="5" placeholder="Describa aqui su educacion"></textarea>
                <details>
                    <summary class="mas">Agregar Educacion</summary>
                    <div class="educacion">
                        <!-- columna 1 -->
                        <div class="columna_1">
                            <div class="field">
                                <div class="label" for="instituto">Instituto</div>
                                <input type="text" id="instituto" name="instituto[]">
                            </div>
                            <div class="field">
                                <div class="label" for="carrera">carrera</div>
                                <input type="text" id="carrera" name="carreras[]">
                            </div>
                            <div class="field">
                                <div class="label" for="localidad_insti">Localidad</div>
                                <input type="text" id="localidad_insti" name="localidad_insti[]">
                            </div>
                        </div>
                        <!-- columna 2 -->
                        <div class="columna_2">
                            <div class="field">
                                <div class="label" for="grado">Grado</div>
                                <select name="grado_instituto[]" id="grado_instituto">
                                    <option value="">Grado</option>
                                    <option value="secundario">secundario</option>
                                    <option value="terciario">Terciario</option>
                                    <option value="universitario">Universitario</option>
                                </select>
                            </div>
                            <div class="field">
                                <div class="label" for="">Estado</div>
                                <select name="estado_carrera[]" id="estado_carrera">
                                    <option value="">Estado</option>
                                    <option value="en_curso">En Curso</option>
                                    <option value="terminado">Terminado</option>
                                    <option value="incompleto">Incompleto</option>
                                </select>
                            </div>
                            <div class="periodo_empleo">
                                <div class="field">
                                    <div class="label" for="periodo_cursado">Periodo</div>
                                    <input type="date" id="cursado_desde" name="cursado_desde[]">
                                    <input type="date" id="cursado_hasta" name="cursado_hasta[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="field">
                        <div class="label" for="desc_educacion">DESCRIPCION</div>
                        <P class="txt_info">Describa aquí su eduacion y las caracteristicas y/o especializaciones de su carrera</P>
                    </div>
                    <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="20" rows="5" placeholder="Describa aqui su educacion"></textarea>
                    <details>
                        <summary class="mas">Agregar Educacion</summary>
                        <div class="educacion">
                            <!-- columna 1 -->
                            <div class="columna_1">
                                <div class="field">
                                    <div class="label" for="instituto">Instituto</div>
                                    <input type="text" id="instituto" name="instituto[]">
                                </div>
                                <div class="field">
                                    <div class="label" for="carrera">carrera</div>
                                    <input type="text" id="carrera" name="carreras[]">
                                </div>
                                <div class="field">
                                    <div class="label" for="localidad_insti">Localidad</div>
                                    <input type="text" id="localidad_insti" name="localidad_insti[]">
                                </div>
                            </div>
                            <!-- columna 2 -->
                            <div class="columna_2">
                                <div class="field">
                                    <div class="label" for="grado">Grado</div>
                                    <select name="grado_instituto[]" id="grado_instituto">
                                        <option value="">Grado</option>
                                        <option value="secundario">secundario</option>
                                        <option value="terciario">Terciario</option>
                                        <option value="universitario">Universitario</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <div class="label" for="">Estado</div>
                                    <select name="estado_carrera[]" id="estado_carrera">
                                        <option value="">Estado</option>
                                        <option value="en_curso">En Curso</option>
                                        <option value="terminado">Terminado</option>
                                        <option value="incompleto">Incompleto</option>
                                    </select>
                                </div>
                                <div class="periodo_empleo">
                                    <div class="field">
                                        <div class="label" for="periodo_cursado">Periodo</div>
                                        <input type="date" id="cursado_desde" name="cursado_desde[]">
                                        <input type="date" id="cursado_hasta" name="cursado_hasta[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="field">
                            <div class="label" for="desc_educacion">DESCRIPCION</div>
                            <P class="txt_info">Describa aquí su eduacion y las caracteristicas y/o especializaciones de su carrera</P>
                        </div>
                        <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="20" rows="5" placeholder="Describa aqui su educacion"></textarea>
                        <details>
                            <summary class="mas">Agregar Educacion</summary>

                        </details>
                    </details>
                </details>
            </details>
            <!-- BLOQUE DE EDUCACION -->

            <!-- FIN DE EDUCACION  -->

            <h2 class="h2" id="cu">CURSOS</h2>
            <p class="txt_info">La formación complementaria que demuestran los cursos es una forma de añadir valor inmediato a tu currículum y, posicionarte como un candidato con conocimientos académicos a la altura de las necesidades de casi cualquier empleo, y también, demostrarle a los seleccionadores de talento que no eres de los que se conforman con los aprendizajes básicos, sino que vas siempre un paso más allá para adquirir nuevas habilidades o actualizarte con las tendencias de tu sector profesional.</p>
            <div class="curso">
                <!-- columna 1 -->
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="nom_curso">Nombre del Curso</div>
                        <input type="text" id="nomb_curso" name="nomb_curso[]">
                    </div>
                    <div class="field">
                        <div class="label" for="perdiodo_curso">Periodo (desde)</div>
                        <input type="date" id="perdiodo_curso_desde" name="perdiodo_curso_desde[]">
                    </div>
                </div>
                <!-- columna 2 -->
                <div class="columna_2">
                    <div class="field">
                        <div class="label" for="intituto_curso">Instituto/ Centro Educativo</div>
                        <input type="text" id="instituto_curso" name="instituto_curso[]">
                    </div>
                    <div class="periodo_empleo">
                        <div class="field">
                            <div class="label" for="periodo_curso">(Hasta)</div>
                            <input type="date" id="perdiodo_curso_hasta" name="perdiodo_curso_hasta[]">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="field">
                <div class="label" for="desc_curso">DESCRIPCION</div>
                <P class="txt_info">Describa aquí su curso</P>
            </div>
            <textarea class="text_area" name="desc_curso[]" id="desc_curso" cols="20" rows="5" placeholder="Describa aqui su educacion"></textarea>
            <!-- educacion 2 -->
            <details>
                <summary class="mas">Agregar Curso</summary>
                <div class="curso">
                    <!-- columna 1 -->
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="nom_curso_2">Nombre del Curso</div>
                            <input type="text" id="nomb_curso_2" name="nomb_curso[]">
                        </div>
                        <div class="field">
                            <div class="label" for="perdiodo_curso_2">Periodo (desde)</div>
                            <input type="date" id="perdiodo_curso_desde_2" name="perdiodo_curso_desde[]">
                        </div>
                    </div>
                    <!-- columna 2 -->
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="intituto_curso_2">Instituto</div>
                            <input type="text" id="instituto_curso_2" name="instituto_curso[]">
                        </div>
                        <div class="periodo_empleo">
                            <div class="field">
                                <div class="label" for="periodo_curso_2">(Hasta)</div>
                                <input type="date" id="perdiodo_curso_hasta_2" name="perdiodo_curso_hasta[]">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="field">
                    <div class="label" for="desc_curso">DESCRIPCION</div>
                    <P class="txt_info">Describa aquí su curso</P>
                </div>
                <textarea class="text_area" name="desc_curso[]" id="desc_curso" cols="20" rows="5" placeholder="Describa aqui su educacion"></textarea>
            </details>

            <!-- IDIOMAS -->
            <h2 class="h2" id="id">IDIOMAS</h2>
            <p class="text_info">Dentro de la sección de idiomas del currículum, no basta con listar los idiomas que conozcamos. Los responsables de recursos humanos también deberán hacerse una idea de cual es tu nivel respecto a cada lengua que hables.</p>
            <div class="idiomas">
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="idioma">Idioma</div>
                        <select name="idioma[]">
                            <option value="">Seleccione un Idioma</option>
                            <option value="ingles">Ingles</option>
                            <option value="frances">Frances</option>
                            <option value="portugues">Portugues</option>
                            <option value="aleman">Aleman</option>
                            <option value="chino">Chino</option>
                            <option value="coreano">Coreano</option>
                            <option value="japones">Japones</option>
                        </select>
                    </div>
                </div>
                <div class="columna_2">
                    <div class="field">
                        <div class="label" for="nivel_idioma">Nivel</div>
                        <select name="idioma_nivel[]">
                            <option value="">Nivel</option>
                            <option value="nativo">Nativo</option>
                            <option value="basico">Basico</option>
                            <option value="intermedio">Intermedio</option>
                            <option value="avanzado">Avanzado</option>
                            <option value="a1">A1</option>
                            <option value="a2">A2</option>
                            <option value="b1">B1</option>
                            <option value="b2">B2</option>
                            <option value="c1">C1</option>
                            <option value="c2">C2</option>
                        </select>
                    </div>
                </div>
            </div>
            <details>
                <summary class="mas">Agregar Mas Idiomas</summary>
                <div class="idiomas">
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="idioma_2">Idioma</div>
                            <select name="idioma[]">
                                <option value="">Seleccione un Idioma</option>
                                <option value="ingles">Ingles</option>
                                <option value="frances">Frances</option>
                                <option value="portugues">Portugues</option>
                                <option value="aleman">Aleman</option>
                                <option value="chino">Chino</option>
                                <option value="coreano">Coreano</option>
                                <option value="japones">Japones</option>
                            </select>
                        </div>
                    </div>
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="nivel_idioma_2">Nivel</div>
                            <select name="idioma_nivel[]">
                                <option value="">Nivel</option>
                                <option value="nativo">Nativo</option>
                                <option value="basico">Basico</option>
                                <option value="intermedio">Intermedio</option>
                                <option value="avanzado">Avanzado</option>
                                <option value="a1">A1</option>
                                <option value="a2">A2</option>
                                <option value="b1">B1</option>
                                <option value="b2">B2</option>
                                <option value="c1">C1</option>
                                <option value="c2">C2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <details>
                    <summary class="mas">Agregar Mas Idiomas</summary>
                    <div class="idiomas">
                        <div class="columna_1">
                            <div class="field">
                                <div class="label" for="idioma_3">Idioma</div>
                                <select name="idioma[]">
                                    <option value="">Seleccione un Idioma</option>
                                    <option value="ingles">Ingles</option>
                                    <option value="frances">Frances</option>
                                    <option value="portugues">Portugues</option>
                                    <option value="aleman">Aleman</option>
                                    <option value="chino">Chino</option>
                                    <option value="coreano">Coreano</option>
                                    <option value="japones">Japones</option>
                                </select>
                            </div>
                        </div>
                        <div class="columna_2">
                            <div class="field">
                                <div class="label" for="nivel_idioma_3">Nivel</div>
                                <select name="idioma_nivel[]">
                                    <option value="">Nivel</option>
                                    <option value="nativo">Nativo</option>
                                    <option value="basico">Basico</option>
                                    <option value="intermedio">Intermedio</option>
                                    <option value="avanzado">Avanzado</option>
                                    <option value="a1">A1</option>
                                    <option value="a2">A2</option>
                                    <option value="b1">B1</option>
                                    <option value="b2">B2</option>
                                    <option value="c1">C1</option>
                                    <option value="c2">C2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <details>
                        <summary class="mas">Agregar Mas Idiomas</summary>
                        <div class="idiomas">
                            <div class="columna_1">
                                <div class="field">
                                    <div class="label" for="idioma_4">Idioma</div>
                                    <select name="idioma[]">
                                        <option value="">Seleccione un Idioma</option>
                                        <option value="ingles">Ingles</option>
                                        <option value="frances">Frances</option>
                                        <option value="portugues">Portugues</option>
                                        <option value="aleman">Aleman</option>
                                        <option value="chino">Chino</option>
                                        <option value="coreano">Coreano</option>
                                        <option value="japones">Japones</option>
                                    </select>
                                </div>
                            </div>
                            <div class="columna_2">
                                <div class="field">
                                    <div class="label" for="nivel_idioma_4">Nivel</div>
                                    <select name="idioma_nivel[]">
                                        <option value="">Nivel</option>
                                        <option value="nativo">Nativo</option>
                                        <option value="basico">Basico</option>
                                        <option value="intermedio">Intermedio</option>
                                        <option value="avanzado">Avanzado</option>
                                        <option value="a1">A1</option>
                                        <option value="a2">A2</option>
                                        <option value="b1">B1</option>
                                        <option value="b2">B2</option>
                                        <option value="c1">C1</option>
                                        <option value="c2">C2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <details>
                            <summary class="mas">Agregar Mas Idiomas</summary>

                        </details>
                    </details>
                </details>
            </details>

            <!-- DISPONIBILIDAD -->
            <h2 class="h2" id="dis">DISPONIBILIDAD</h2>
            <div class="field">
                <input type="text">
            </div>

            <!-- SITIO WEB Y REDES SOCIALES -->
            <h2 class="h2" id="sitioweb">SITIOS WEB & REDES SOCIALES</h2>
            <div class="sitio_web">
                <div class="field">
                    <div class="label" for="nom_link">Nombre del Enlace</div>
                    <input type="text" name="nom_link[]">
                </div>
                <div class="field">
                    <div class="label" for="dir_link">Direccion de Enlace</div>
                    <input type="text" name="dir_link[]">
                </div>
            </div>
            <details>
                <summary class="mas">Agregar Sitio Web/ Red Social</summary>
                <div class="sitio_web">
                    <div class="field">
                        <div class="label" for="nom_link_2">Nombre del Enlace</div>
                        <input type="text" name="nom_link[]">
                    </div>
                    <div class="field">
                        <div class="label" for="dir_link_2">Direccion de Enlace</div>
                        <input type="text" name="dir_link[]">
                    </div>
                </div>
                <details>
                    <summary class="mas">Agregar Sitio Web/ Red Social</summary>
                    <div class="sitio_web">
                        <div class="field">
                            <div class="label" for="nom_link">Nombre del Enlace</div>
                            <input type="text" name="nom_link[]">
                        </div>
                        <div class="field">
                            <div class="label" for="dir_link">Direccion de Enlace</div>
                            <input type="text" name="dir_link[]">
                        </div>
                    </div>
                </details>
            </details>

            <!-- REFERENCIAS -->
            <h2 class="h2" id="ref">REFERENCIAS</h2>
            <div class="referencias">
                <div class="columna_1">
                    <div class="field">
                        <label class="label" for="referncia_contacto">Contacto</label>
                        <input type="text" id="ref_cont" name="ref_cont[]">
                    </div>
                    <div class="field">
                        <div class="label" for="correo_contacto">Correo Electronico</div>
                        <input type="text" id="cont_mail" name="cont_mail[]">
                    </div>
                </div>
                <div class="columna_2">
                    <div class="field">
                        <label class="label" for="empresa_contacto">Empresa</label>
                        <input type="text" id="emp_cont" name="emp_cont[]">
                    </div>
                    <div class="field">
                        <div class="label" for="tel_cont">Telefono</div>
                        <input type="text" id="tel_cont" name="tel_cont[]">
                    </div>
                </div>
            </div>
            <details>
                <summary class="mas">Agregar Otro Contacto de Referencia</summary>
            </details>
            </div>
            <div class="field buttn-send">
                <input type="submit" class="enviar action_btn" id="enviar" name="register"></input>
            </div>
        </form>
    </main>
    <!--
========================================================================================================
                                 VENTANA MODAL PARA VISTA PREVIA
======================================================================================================== -->
    <div class="vista_previa">
        <h2>VISTA PREVIA</h2>
        <div class="field">
            <input type="radio" name="modal" id="abrir_modal">
            <label class="abrir_modal" for="abrir_modal" id="abrirModal">Abrir</label>
            <input type="radio" name="modal" id="cerrar_modal">
            <label for="cerrar_modal">X</label>
            <div id="modal">
                <!-- <iframe src="cv_maqueta.html"> -->

                <div class="iframe">
                    <div id="resume" class="contain">
                        <!-- aside  -->
                        <aside class="side">
                            <!-- foto  -->


                            <div class="aside_padding">
                                <!-- nombre titulo  -->
                                <h1 id="nombreModal"></h1> <br>
                                <h1 id="apellidoModal"></h1>

                                <!-- informacion de contacto  -->
                                <div class="info_contacto">
                                    <h4 class="title">INFO CONTACTO</h4>
                                    <ul>
                                        <li>Fecha de nacimiento: <span id="nacimientoModal"></span></li>
                                        <li>Genero: <span id="generoModal"></span></li>
                                        <li>Estado civil: <span id="estado_civilModal"></span></li>
                                        <li>DNI: <span id="dniModal"></span></li>
                                        <li>Direccion: <span id="dirModal"></span></li>
                                        <li>Localidad: <span id="localidadModal"></span></li>
                                        <li>Provincia: <span id="ciudadModal"></span></li>
                                        <li>Nacionalidad: <span id="nacionalidadModal"></span></li>
                                        <li>Email: <span id="emailModal"></span>
                                        </li>
                                        <li>Tel: <span id="telModal"></span></li>
                                        <li>Tel alt: <span id="telAltModal"></span></li>
                                        <li id="li1">Sitio: <span id="sitio_webModal"></span></li>
                                    </ul>
                                </div>

                                <!-- habilidades  -->
                                <div class="habilidades">
                                    <h4 class="title">HABILIDADES</h4>
                                    <ul id="container_habilidades">
                                        <li><span id="habilidad_1"></span></li>
                                        <li><span id="habilidad_2"></span></li>
                                        <li><span id="habilidad_3"></span></li>
                                        <li><span id="habilidad_4"></span></li>
                                    </ul>
                                </div>

                                <!-- habilidades it -->
                                <div class="habilidades_it">
                                    <h4 class="title">HABILIDADES IT</h4>
                                    <ul id="container_habilidadesIT">
                                        <li><span id="habilidad_it_1">NO POSEE HABILIDADES IT</span></li>
                                        <li><span id="habilidad_it_2"></span></li>
                                        <li><span id="habilidad_it_3"></span></li>
                                        <li><span id="habilidad_it_4"></span></li>
                                    </ul>
                                </div>

                                <!-- IDIOMAS  -->
                                <div class="idiom">
                                    <h4 class="title">IDIOMAS</h4>
                                    <ul id="container_idiomas">
                                        <li><span id="idioma" class="bold"></span><span> : </span><span id="nivel"></span></li>
                                        <li><span id="idioma" class="bold"></span><span> : </span><span id="nivel"></span></li>
                                        <li><span id="idioma" class="bold"></span><span> : </span><span id="nivel"></span></li>
                                        <li><span id="idioma" class="bold"></span><span> : </span><span id="nivel"></span></li>
                                    </ul>

                                </div>
                            </div>

                        </aside>
                        <!-- seccion  -->
                        <section class="maine">
                            <!-- perfil  -->
                            <div class="cv_perfil">
                                <h4 class="main_title">PERFIL</h4>
                                <p id="perfil_descripcion"></p>
                            </div>

                            <!-- experiencia laboral  -->
                            <h4 class="main_title">EXPERIENCIA LABORAL</h4>
                            <div id="expe_laboral" class="expe_laboral">
                                <div class="exp_lab">
                                    <div class="info">
                                        <span id="fech_ini"></span><span> - </span><span id="fech_fin"></span> <br>
                                        <span id="empresa"></span> <br>
                                        <strong>PUESTO:</strong><span id="rubro"></span>
                                        <span> </span> <br>
                                        <!-- <strong>PUESTO:</strong><span id="rubro">Desarrollador Web</span> -->
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title titulo_empleo"></h4>
                                        <div id="p_descripcion">
                                        </div>
                                    </div>
                                </div>
                                <!-- experiencia laboral extra  -->
                                <div class="exp_lab">
                                    <div class="info">
                                        <span id="fech_ini"></span><span> - </span><span id="fech_fin"></span> <br>
                                        <span id="empresa" class="bold"></span> <br>
                                        <strong>PUESTO:</strong><span id="empleoModal-2"></span>
                                        <span> </span> <br>
                                        <!-- <strong>PUESTO:</strong><span id="rubro">TESTER DE SOFTWARE</span> -->
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title titulo_empleo"></h4>
                                        <div id="p_descripcion">

                                        </div>
                                    </div>
                                </div>
                                <!--fin de experiencia laboral-->
                            </div>
                            <!-- FORMACION ACADEMICA  -->

                            <h4 class="main_title">FORMACION ACADEMICA</h4>
                            <div id="formacion_academica" class="formacion_academica">
                                <div class="form_acad">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini"></span><span> - </span><span id="fech_fin"></span></span> <br>
                                        <span id="instituto" class="bold"></span> <br>
                                        <span id="carrera"></span> <br>
                                        <!-- <span id="estado">INCOMPLETO</span> no se si es relevante -->
                                        <span id="ciudad"></span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion"></div>
                                    </div>
                                </div>

                                <div class="form_acad">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini"></span><span> - </span><span id="fech_fin"></span></span> <br>
                                        <span id="instituto" class="bold"></span> <br>
                                        <span id="carrera"></span> <br>
                                        <span id="estado"></span>
                                        <span id="ciudad"></span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion"></div>
                                    </div>
                                </div>

                                <div class="form_acad">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini"></span><span> - </span><span id="fech_fin"></span></span> <br>
                                        <span id="instituto" class="bold"></span> <br>
                                        <span id="carrera"></span> <br>
                                        <span id="estado"></span>
                                        <span id="ciudad"></span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion"></div>
                                    </div>
                                </div>
                            </div> <!--Fin de informacion academica-->


                            <!-- CURSOS  -->
                            <h4 class="main_title">CURSOS</h4>
                            <div id="cursos_contenedor">
                                <div class="cursos">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini"></span><span> - </span><span id="fech_fin"></span></span> <br>
                                        <span id="curso_insituto" class="bold"></span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- REFERENCIAS  -->
                            <div id="refContainer">
                                <h4 class="main_title"></h4>
                                <div class="referencias">

                                    <div class="info">
                                        <span class="contacto bold" id='contactoModal'></span> <br>
                                        <span class="empresa_contacto" id='empresaContactoModal'></span>
                                    </div>
                                    <div class="descripcion">
                                        <span id="emailContactoModal"></span>
                                        <span id="telContactoModal"></span>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </div> <!--FIN DEL CONTENEDOR-->
                </div> <!--fin de div iframe-->

                <!-- </iframe> -->
                <input type="button" id="pdfConversor" class="enviar" value="PDF"></input>
            </div>
        </div>
        <iframe id="preview" class="preview" style="display: none;"></iframe>
    </div>
    </div>
    <script src="./ajax/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/nocturno.js"></script>
    <script src="./js/conversor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.0/tinymce.min.js" integrity="sha512-hMjDyb/4G3SapFEM71rK+Gea0+ZEr9vDlhBTyjSmRjuEgza0Ytsb67GE0aSpRMYW++z6kZPPcnddwlUG6VKm9w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./ajax/ajax.js"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>