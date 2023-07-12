<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nocturno.css">
    <!-- <link rel="stylesheet" href="./css/iframe.css"> -->
    <link rel="stylesheet" href="http://localhost/web%20crea%20tu%20cv/Web_Crea_tu_CV/css/iframe.css">
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

        <form id="dataForm" method="post">
            <h2 class="h2">DATOS PERSONALES</h2>
            <div class="datos_personales" id="dp">
                <div class="columna_1">
                    <div class="field">
                        <label class="label" for="iname">Nombre(s)</label>
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
                            <option value="#">Estado Civil</option>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                        </select>
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
                            <div class="label" for="tel">Telefono Alternativo</div>
                            <input type="tel_alt" id="tel_alt" name="tel_alt">
                            <div id="check_tel" class="check"><i class="fa-regular fa-circle-check"></i></div>
                            <div id="mensaje_tel_error" class="errores">Ingrese un telefono valido</div>
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
                            <div class="label" for="ciudad">Ciudad</div>
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
                                <option name="#">Seleccione su genero</option>
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
                <textarea  class="text_area" name="info_perfil" id="info_perfil" cols="20" rows="5" placeholder="Describa aqui su perfil laboral"></textarea>
            </div>

            <!-- EXPERIENCIA LABORAL -->
            <h2 class="h2" id="el">EXPERIENCIA LABORAL</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae optio neque possimus aliquid consectetur
                quae amet inventore et velit, at facilis similique dolorem ipsam nihil! Suscipit non temporibus eius
                voluptate!</p>
            <div class="experiencia_laboral">
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="empleo_1">Titulo del Empleo</div>
                        <input type="text" id="empleo" name="empleo[]">
                    </div>
                    <div class="field">
                        <div class="label" for="localidad_empleo_1">Localidad</div>
                        <input type="text" id="localidad_empleo_1" name="localidad_empleo_1[]">
                    </div>
                </div>
                <div class="columna_2">
                    <div class="field">
                        <div class="label" for="empresa_empleo_1">Empresa</div>
                        <input type="text" id="empresa_empleo_1" name="empresa_empleo_1[]">
                    </div>
                    <div class="periodo_empleo">
                        <div class="field">
                            <div class="label" for="desde_empleo_1">Periodo</div>
                            <input type="date" id="desde_empleo_1" name="desde_empleo_[]">
                            <input type="date" id="hasta_empleo_1" name="hasta_empleo_[]">
                        </div>
                    </div>
                </div>
                <!-- PAGINA LABORAL EXTRA 2 -->
            </div>
            <details>
                <summary class="mas" id="ele">Agregar Mas Experiencia Laboral</summary>
                <div class="experiencia_laboral">
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="empleo_2">Titulo del Empleo</div>
                            <input type="text" id="empleo" name="empleo[]">
                        </div>
                        <div class="field">
                            <div class="label" for="loalidad_empleo_2">Localidad</div>
                            <input type="text" id="loalidad_empleo_2" name="loalidad_empleo_2[]">
                        </div>
                    </div>
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="empresa_empleo_2">Empresa</div>
                            <input type="text" id="empresa_empleo_2" name="empresa_empleo_2[]">
                        </div>
                        <div class="periodo_empleo">
                            <div class="field">
                                <div class="label" for="desde_empleo_2">Periodo</div>
                                <input type="date" id="desde_empleo_2" name="desde_empleo_2[]">
                                <input type="date" id="hasta_empleo_2" name="hasta_empleo_2[]">
                            </div>
                        </div>
                    </div>
                    <!-- EXPEIENCIA LABORAL EXTRA 3 -->
                </div>
                <details>
                    <summary class="mas">Agregar Mas Experiencia Laboral</summary>
                    <div class="experiencia_laboral">
                        <div class="columna_1">
                            <div class="field">
                                <div class="label" for="empleo_3">Titulo del Empleo</div>
                                <input type="text" id="empleo_3" name="empleo_3[]">
                            </div>
                            <div class="field">
                                <div class="label" for="localidad_empleo_3">Localidad</div>
                                <input type="text" id="localidad_empleo_3" name="localidad_empleo_3[]">
                            </div>
                        </div>
                        <div class="columna_2">
                            <div class="field">
                                <div class="label" for="empresa_empleo_3">Empresa</div>
                                <input type="text" id="empresa_empleo_3" name="empresa_empleo_3[]">
                            </div>
                            <div class="periodo_empleo">
                                <div class="field">
                                    <div class="label" for="desde_empleo_3">Periodo</div>
                                    <input type="date" id="desde_empleo_3" name="desde_empleo3[]">
                                    <input type="date" id="hasta_empleo_3" name="hasta_empleo3[]">
                                </div>
                            </div>
                        </div>
                        <!-- EXPERIENCIA LABORAL EXTRA 4 -->
                    </div>
                    <details>
                        <summary class="mas">Agregar Mas Experiencia Laboral</summary>
                        <div class="experiencia_laboral">
                            <div class="columna_1">
                                <div class="field">
                                    <div class="label" for="empleo_4">Titulo del Empleo</div>
                                    <input type="text" id="empleo_4" name="empleo_4[]">
                                </div>
                                <div class="field">
                                    <div class="label" for="localidad_empleo_4">Localidad</div>
                                    <input type="text" id="localidad_empleo_4" name="localidad_empleo_4[]">
                                </div>
                            </div>
                            <div class="columna_2">
                                <div class="field">
                                    <div class="label" for="empresa_empleo_4">Empresa</div>
                                    <input type="text" id="empresa_empleo_4" name="empresa_empleo_4[]">
                                </div>
                                <div class="periodo_empleo">
                                    <div class="field">
                                        <div class="label" for="desde_empleo_4">Periodo</div>
                                        <input type="date" id="desde_empleo_4" name="desde_empleo_4[]">
                                        <input type="date" id="hasta_empleo_4" name="hasta_empleo_4[]">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </details>
                </details>
            </details>
            <!-- FIN DE HOJAS DE EXPERIENCIA LABORAL -->

            <!-- HABILIDADES -->
            <div class="habilidad wrap">
                <H2 class="H2" id="hab">HABILIDADES</H2>
                <p class="txt_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam minus expedita,
                    repellendus harum nobis atque laborum consequatur quo blanditiis officia voluptates magni, dolorum
                    voluptatibus libero tempore commodi dolores amet recusandae.</p>
                <div class="field">
                    <div class="label" for="habilidad">Agregar una Habilidad</div>
                    <input type="text" id="habilidad" name="habilidad[]">
                </div>
                <details>
                    <summary class="mas">Agregar otra habilidad</summary>
                    <div class="field">
                        <div class="label" for="habilidad_2">Agregar una Habilidad</div>
                        <input type="text" id="habilidad_2" name="hablidad_2[]">
                    </div>
                    <details>
                        <summary class="mas">Agregar otra habilidad</summary>
                        <div class="field">
                            <div class="label" for="habilidad_3">Agregar una Habilidad</div>
                            <input type="text" id="habilidad_3" name="hablidad_3[]">
                        </div>
                        <details>
                            <summary class="mas">Agregar otra habilidad</summary>
                            <div class="field">
                                <div class="label" for="habilidad_4">Agregar una Habilidad</div>
                                <input type="text" id="habilidad_4" name="hablidad_4[]">
                            </div>
                            <details>
                                <summary class="mas">Agregar otra habilidad</summary>
                                <div class="field">
                                    <div class="label" for="habilidad_5">Agregar una Habilidad</div>
                                    <input type="text" id="habilidad_5" name="hablidad_5[]">
                                </div>
                            </details>
                        </details>
                    </details>
                </details>
            </div> <!--FIN DE HABILIDADES-->

            <!-- HABILIDADAES IT -->
            <h2 class="h2" id="habit">HABILIDADES IT</h2>
            <P class="text_info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatem itaque
                libero quasi quo. Impedit incidunt dolorum quibusdam amet, dicta facilis iusto est esse! Beatae
                voluptatibus fugiat iure voluptas. Nostrum!</P>
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
                        <input type="text" id="hab_it_2" name="hab_it_2[]" placeholder="Ej: Power Point">
                    </div>
                </div>
                <details>
                    <summary class="mas">Agregar Mas Habilidades IT</summary>
                    <div class="habilidades_it">
                        <div class="field">
                            <label class="label" for="habilidad_it_3">Agregar Habilidad IT</label>
                            <input type="text" id="hab_it_3" name="hab_it_3[]" placeholder="Ej: Power Point">
                        </div>
                    </div>
                    <details>
                        <summary class="mas">Agregar Mas Habilidades IT</summary>
                        <div class="habilidades_it">
                            <div class="field">
                                <label class="label" for="habilidad_it_4">Agregar Habilidad IT</label>
                                <input type="text" id="hab_it_4" name="hab_it_4[]" placeholder="Ej: Power Point">
                            </div>
                        </div>
                        <details>
                            <summary class="mas">Agregar Mas Habilidades IT</summary>

                        </details>
                    </details>
                </details>
            </details>


            <!-- EDUCACION -->
            <h2 class="h2" id="fa">FORMACION ACADEMICA</h2>
            <P class="txt_info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni quod, reprehenderit
                numquam aliquid fuga fugit natus sapiente rerum sequi, autem sint nobis ab facere nostrum ipsa amet non
                eaque blanditiis?</P>
            <div class="educacion">
                <!-- columna 1 -->
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="instituto">Instituto</div>
                        <input type="text" id="instituto" name="instituto[]">
                    </div>
                    <div class="field">
                        <div class="label" for="carrera">carrera</div>
                        <input type="text" id="carrera" name="carrera">
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
                            <option value="#">Grado</option>
                            <option value="secundario">Secunadario</option>
                            <option value="terciario">Terciario</option>
                            <option value="universitario">Universitario</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label" for="">Estado</div>
                        <select name="estado_carrera[]" id="estado_carrera">
                            <option value="#">Estado</option>
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
            <label for="">Descripcion</label>
            <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="" rows="" placeholder="Describa qui su educacion"></textarea>
            <!-- educacion 2 -->
            <details>
                <summary class="mas">Agregar Educacion</summary>
                <div class="educacion">
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="instituto_2">Instituto</div>
                            <input type="text" id="instituto_2" name="instituto_2[]">
                        </div>
                        <div class="field">
                            <div class="label" for="localidad_insti_2">Localidad</div>
                            <input type="text" id="localidad_insti_2" name="localidad_insti_2[]">
                        </div>
                    </div>
                    <!-- columna 2 -->
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="grado_2">Grado</div>
                            <input type="text" id="grado_2" name="grado_2[]">
                        </div>
                        <div class="periodo_empleo">
                            <div class="field">
                                <div class="label" for="periodo_cursado_2">Periodo</div>
                                <input type="date" id="cursado_desde_2" name="cursado_desde_2[]">
                                <input type="date" id="cursado_hasta_2" name="cursado_hasta_2[]">
                            </div>
                        </div>
                    </div>
                </div>
                <label for="">Descripcion</label>
                <textarea class="text_area" name="desc_educacion_2[]" id="desc_educacion_2" cols="" rows="" placeholder="Describa qui su educacion"></textarea>
                <details>
                    <summary class="mas">Agregar Educacion</summary>
                    <div class="educacion">
                        <!-- columna 1 -->
                        <div class="columna_1">
                            <div class="field">
                                <div class="label" for="instituto_3">Instituto</div>
                                <input type="text" id="instituto_3" name="instituto_3[]">
                            </div>
                            <div class="field">
                                <div class="label" for="localidad_insti_3">Localidad</div>
                                <input type="text" id="localidad_insti_3" name="localidad_insti_3[]">
                            </div>
                        </div>
                        <!-- columna 2 -->
                        <div class="columna_2">
                            <div class="field">
                                <div class="label" for="grado_3">Grado</div>
                                <input type="text" id="grado_3" name="grado_3[]">
                            </div>
                            <div class="periodo_empleo">
                                <div class="field">
                                    <div class="label" for="periodo_cursado_3">Periodo</div>
                                    <input type="date" id="cursado_desde_3" name="cursado_desde_3[]">
                                    <input type="date" id="cursado_hasta_3" name="cursado_hasta_3[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <label for="">Descripcion</label>
                    <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="" rows="" placeholder="Describa qui su educacion"></textarea>
                    <details>
                        <summary class="mas">Agregar Educacion</summary>
                        <div class="educacion">
                            <!-- columna 1 -->
                            <div class="columna_1">
                                <div class="field">
                                    <div class="label" for="instituto_4">Instituto</div>
                                    <input type="text" id="instituto_4" name="instituto_4[]">
                                </div>
                                <div class="field">
                                    <div class="label" for="localidad_insti_4">Localidad</div>
                                    <input type="text" id="localidad_insti_4" name="localidad_insti_4[]">
                                </div>
                            </div>
                            <!-- columna 2 -->
                            <div class="columna_2">
                                <div class="field">
                                    <div class="label" for="grado_4">Grado</div>
                                    <input type="text" id="grado_4" name="grado_4[]">
                                </div>
                                <div class="periodo_empleo">
                                    <div class="field">
                                        <div class="label" for="periodo_cursado_4">Periodo</div>
                                        <input type="date" id="cursado_desde_4" name="cursado_desde_4[]">
                                        <input type="date" id="cursado_hasta_4" name="cursado_hasta_4[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <label for="">Descripcion</label>
                        <textarea class="text_area" name="desc_educacion[]" id="desc_educacion" cols="" rows="" placeholder="Describa qui su educacion"></textarea>
                        <details>
                            <summary class="mas">Agregar Educacion</summary>

                        </details>
                    </details>
                </details>
            </details>
            <!-- BLOQUE DE EDUCACION -->

            <!-- FIN DE EDUCACION  -->

            <h2 class="h2" id="cu">CURSOS</h2>
            <p class="txt_info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, mollitia magni
                incidunt, laboriosam et rerum aut voluptatem culpa voluptatibus dolores beatae aspernatur amet
                provident! Nesciunt vel delectus soluta voluptas quo.</p>
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
            <label for="">Descripcion</label>
            <textarea class="text_area" name="desc_curso[]" id="desc_curso" cols="" rows="" placeholder="Describa aqui su curso"></textarea>
            <!-- educacion 2 -->
            <details>
                <summary class="mas">Agregar Curso</summary>
                <div class="curso">
                    <!-- columna 1 -->
                    <div class="columna_1">
                        <div class="field">
                            <div class="label" for="nom_curso_2">Nombre del Curso</div>
                            <input type="text" id="nomb_curso_2" name="nomb_curso_2[]">
                        </div>
                        <div class="field">
                            <div class="label" for="perdiodo_curso_2">Periodo (desde)</div>
                            <input type="date" id="perdiodo_curso_desde_2" name="perdiodo_curso_desde_2[]">
                        </div>
                    </div>
                    <!-- columna 2 -->
                    <div class="columna_2">
                        <div class="field">
                            <div class="label" for="intituto_curso_2">Instituto</div>
                            <input type="text" id="instituto_curso_2" name="instituto_curso_2[]">
                        </div>
                        <div class="periodo_empleo">
                            <div class="field">
                                <div class="label" for="periodo_curso_2">(Hasta)</div>
                                <input type="date" id="perdiodo_curso_hasta_2" name="perdiodo_curso_hasta_2[]">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <label for="">Descripcion</label>
                <textarea class="text_area" name="desc_curso_2[]" id="desc_curso_2" cols="" rows="" placeholder="Describa aqui su curso"></textarea>
            </details>

            <!-- IDIOMAS -->
            <h2 class="h2" id="id">IDIOMAS</h2>
            <p class="text_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laudantium fugit
                animi, autem est eaque? Unde natus inventore facilis officiis, culpa esse fuga iure iusto sit, deleniti
                rem consectetur velit.
            </p>
            <div class="idiomas">
                <div class="columna_1">
                    <div class="field">
                        <div class="label" for="idioma">Idioma</div>
                        <select name="idioma" []>
                            <option>Seleccione un Idioma</option>
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
                        <select name="idioma" []>
                            <option value="#">Nivel</option>
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
                            <select name="idioma" []>
                                <option>Seleccione un Idioma</option>
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
                            <select name="idioma" []>
                                <option value="#">Nivel</option>
                                <option value="nativo">nativo</option>
                                <option value="Avanzado">Avanzado</option>
                                <option value="Competente">Competente</option>
                                <option value="Conversacional">Conversacional</option>
                                <option value="Principiante">Principiante</option>
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
                                <select name="idioma" []>
                                    <option>Seleccione un Idioma</option>
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
                                <select name="idioma" []>
                                    <option value="#">Nivel</option>
                                    <option value="nativo">nativo</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Competente">Competente</option>
                                    <option value="Conversacional">Conversacional</option>
                                    <option value="Principiante">Principiante</option>
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
                                    <select name="idioma" []>
                                        <option>Seleccione un Idioma</option>
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
                                    <select name="idioma" []>
                                        <option value="#">Nivel</option>
                                        <option value="nativo">nativo</option>
                                        <option value="Avanzado">Avanzado</option>
                                        <option value="Competente">Competente</option>
                                        <option value="Conversacional">Conversacional</option>
                                        <option value="Principiante">Principiante</option>
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
                    <input type="text" name="nom_link">
                </div>
                <div class="field">
                    <div class="label" for="dir_link">Direccion de Enlace</div>
                    <input type="text" name="dir_link">
                </div>
            </div>
            <details>
                <summary class="mas">Agregar Sitio Web/ Red Social</summary>
                <div class="sitio_web">
                    <div class="field">
                        <div class="label" for="nom_link_2">Nombre del Enlace</div>
                        <input type="text" name="nom_link">
                    </div>
                    <div class="field">
                        <div class="label" for="dir_link_2">Direccion de Enlace</div>
                        <input type="text" name="dir_link">
                    </div>
                </div>
                <details>
                    <summary class="mas">Agregar Sitio Web/ Red Social</summary>
                    <div class="sitio_web">
                        <div class="field">
                            <div class="label" for="nom_link">Nombre del Enlace</div>
                            <input type="text" name="nom_link">
                        </div>
                        <div class="field">
                            <div class="label" for="dir_link">Direccion de Enlace</div>
                            <input type="text" name="dir_link">
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
                <input type="submit" class="enviar action_btn" id="enviar"></input>
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
                                <h1 id="nombreModal">JORGE</h1> <br>
                                <h1 id="apellidoModal">ALVAREZ RODRIGUEZ</h1>

                                <!-- informacion de contacto  -->
                                <div class="info_contacto">
                                    <h4 class="title">INFO CONTACTO</h4>
                                    <ul>
                                        <li>Fecha de nacimiento: <span id="nacimientoModal">20/06/2002</span></li>
                                        <li>Genero: <span id="genero"></span></li>
                                        <li>Estado civil: <span id="estado_civilModal">Soltero</span></li>
                                        <li>DNI: <span id="dniModal">94485324</span></li>
                                        <li>Direccion: <span id="dirModal">Lincoln</span></li>
                                        <li>Localidad: <span id="localidad">moreno</span></li>
                                        <li>Ciudad: <span id="ciudad">Buenos Aires</span></li>
                                        <li>Nacionalidad: <span id="nacionalidad">Argentino</span></li>
                                        <li>Email: <span id="emailModal"></span>
                                        </li>
                                        <li>Tel: <span id="telModal">1189237483</span></li>
                                        <li>Tel alt: <span id="telefono_alternativo">1137387464</span></li>
                                        <li>Sitio: <span id="sitio_web">JorgeAlvarezportafolio.com.ar</span></li>
                                    </ul>
                                </div>

                                <!-- habilidades  -->
                                <div class="habilidades">
                                    <h4 class="title">HABILIDADES</h4>
                                    <ul>
                                        <li><span id="habilidad_1">Resolucion de problemas</span></li>
                                        <li><span id="habilidad_2">Capacidad de análisis</span></li>
                                        <li><span id="habilidad_3">Trabajo en equipo</span></li>
                                        <li><span id="habilidad_4">Flexibilidad y adaptabilidad</span></li>
                                        <li><span id="habilidad_5"></span></li>
                                        <li><span id="habilidad_6"></span></li>
                                    </ul>
                                </div>

                                <!-- habilidades it -->
                                <div class="habilidades_it">
                                    <h4 class="title">HABILIDADES IT</h4>
                                    <ul>
                                        <li><span id="habilidad_it_1">HTML 5</span></li>
                                        <li><span id="habilidad_it_2">CSS</span></li>
                                        <li><span id="habilidad_it_3">JavaScript</span></li>
                                        <li><span id="habilidad_it_4">PHP</span></li>
                                        <li><span id="habilidad_it_5"></span></li>
                                        <li><span id="habilidad_it_6"></span></li>
                                    </ul>
                                </div>

                                <!-- IDIOMAS  -->
                                <div class="idiom">
                                    <h4 class="title">IDIOMAS</h4>
                                    <ul>
                                        <li><span id="idioma" class="bold">Frances</span><span> : </span><span id="nivel">Intermedio</span></li>
                                        <li><span id="idioma" class="bold">Aleman</span><span> : </span><span id="nivel">Basico</span></li>
                                        <li><span id="idioma" class="bold"></span><span> </span><span id="nivel"></span></li>
                                        <li><span id="idioma" class="bold"></span><span> </span><span id="nivel"></span></li>
                                    </ul>

                                </div>
                            </div>

                        </aside>
                        <!-- seccion  -->
                        <section class="maine">
                            <!-- perfil  -->
                            <div class="cv_perfil">
                                <h4 class="main_title">PERFIL</h4>
                                <p id="perfil_descripcion">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Veniam iure iste molestiae accusamus illum quasi incidunt pariatur velit
                                    necessitatibus tenetur, reiciendis ipsum modi neque itaque consequuntur molestias
                                    delectus inventore? Officia!</p>
                            </div>

                            <!-- experiencia laboral  -->
                            <h4 class="main_title">EXPERIENCIA LABORAL</h4>
                            <div class="expe_laboral">
                                <div class="exp_lab">
                                    <div class="info">
                                        <span id="fech_ini">20/07/2003</span><span> - </span><span id="fech_fin">30/06/2009</span> <br>
                                        <span id="empresa">LA SERENISIMA</span> <br>
                                        <strong>RUBRO:</strong><span id="rubro">SISTEMAS</span>
                                        <span> </span> <br>
                                        <!-- <strong>PUESTO:</strong><span id="rubro">Desarrollador Web</span> -->
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title titulo_empleo">DESARROLLADOR WEB</h4>
                                        <div id="p_descripcion">
                                            * Desarrollador de páginas y sitios funcionales <br>
                                                e intuitivos para el usuario. <br>
                                            * Trabajo con distintas bases de datos y contextos <br>
                                                back-end y front-end <br>
                                            * Uso de diferentes lenguajes de programacion y de herramientas de desarrollo apropiadas a cada proyecto.
                                        </div>
                                    </div>
                                </div>
                                <!-- experiencia laboral extra  -->
                                <div class="exp_lab">
                                    <div class="info">
                                        <span id="fech_ini">02/2015</span><span> - </span><span id="fech_fin">07/2021</span> <br>
                                        <span id="empresa" class="bold">SOFTWARE INC.</span> <br>
                                        <strong>RUBRO:</strong><span id="rubro">SISTEMAS</span>
                                        <span> </span> <br>
                                        <!-- <strong>PUESTO:</strong><span id="rubro">TESTER DE SOFTWARE</span> -->
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title titulo_empleo">TESTER DE SOFTWARE</h4>
                                        <div id="p_descripcion">
                                            * Redaccion de informes sobre los problemas y mejoras del producto final.
                                            <br>
                                            * Ejecucion de pruebas manuales para pruebas funcionales y no funcionales.
                                            <br>
                                            * Control y seguimiento de la calidad deñl producto.
                                            <br>
                                            * Desarrollo y ejecucion de planes de prueba y procedimientos de garantia de calidad del software.
                                        </div>
                                    </div>
                                </div>
                                <!--fin de experiencia laboral-->
                            </div>
                            <!-- FORMACION ACADEMICA  -->

                            <h4 class="main_title">FORMACION ACADEMICA</h4>
                            <div class="formacion_academica">
                                <div class="form_acad">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini">02/2023</span><span> - </span><span id="fech_fin">04/2039</span></span> <br>
                                        <span id="instituto" class="bold">UTN-Argentina Programa</span> <br>
                                        <span id="carrera">ANALISTA DE TESTING QA: Testing de Software</span> <br>
                                        <!-- <span id="estado">INCOMPLETO</span> no se si es relevante -->
                                        <span id="ciudad">Moreno</span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion">Tecnicatura especializada en analisis de sistemas computacionales y tester de calidad de productos de software</div>
                                    </div>
                                </div>

                                <div class="form_acad">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini">03/2022</span><span> - </span><span id="fech_fin">07/2023</span></span> <br>
                                        <span id="instituto" class="bold">I.S.F.T 179 Dr. Carlos Pellegrini</span> <br>
                                        <span id="carrera">ANALISTA DE SISTEMAS</span> <br>
                                        <span id="estado">En Curso</span>
                                        <span id="ciudad">Moreno</span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion">Tecnicatura Superior en Analisis de Sistemas y programacion básica. Formacion en lenguajes de programacion como Python y lenguajes de servidor como PHP.</div>
                                    </div>
                                </div>

                                <div class="form_acad">
                                    <div class="info">
                                        <span id="periodo"><span id="fech_ini">02/2012</span><span> - </span><span id="fech_fin">12/2018</span></span> <br>
                                        <span id="instituto" class="bold">Instituto Juan XXIII.</span> <br>
                                        <span id="carrera">Bachillerato en Ciencias naturales</span> <br>
                                        <span id="estado">Secunadario Completo</span>
                                        <span id="ciudad">Moreno</span>
                                    </div>
                                    <div class="descripcion">
                                        <h4 class="exp_title">DESCRIPCION</h4>
                                        <div id="p_descripcion">Tecnicatura Superior en Analisis de Sistemas y programacion básica. Formacion en lenguajes de programacion como Python y lenguajes de servidor como PHP.</div>
                                    </div>
                                </div>
                            </div> <!--Fin de informacion academica-->


                            <!-- CURSOS  -->
                            <h4 class="main_title">CURSOS</h4>
                            <div class="cursos">

                                <div class="info">
                                    <span id="periodo"><span id="fech_ini">07/2009</span><span> - </span><span id="fech_fin">05/2010</span></span> <br>
                                    <span id="curso_insituto" class="bold">Educacion IT</span>
                                </div>
                                <div class="descripcion">
                                    <h4 class="exp_title">DESCRIPCION</h4>
                                    <div id="p_descripcion">
                                        Curso presencial con certificado en Maquetacion Web y Diseño de interfaces UI. CSS avanzado
                                        y programacion orientada a web con Javascript.
                                    </div>
                                </div>
                            </div>

                            <!-- REFERENCIAS  -->
                            <h4 class="main_title">REFERENCIAS</h4>
                            <div class="referencias">

                                <div class="info">
                                    <span class="contacto bold">Esteban Reyes</span> <br>
                                    <span class="empresa_contacto">Software Inc.</span>
                                </div>
                                <div class="descripcion">
                                    <span id="">StebanReyes@GMAIL.COM</span>
                                    <span id="tel-contacto">1165748292</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="./js/nocturno.js"></script>
    <script src="./ajax/jquery.js"></script>
    <script src="./ajax/ajax.js"></script>
    <script src="./js/conversor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>