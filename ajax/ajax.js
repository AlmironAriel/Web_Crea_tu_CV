$(document).ready(function () {
    const reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    const expr_cuil = /^\d{2}-\d{8}-\d{1}$/;
    const expr_tel = /^\d{10}$/;
    const expr_dir = /^[a-zA-Z0-9\s]+$/;
    const expr_cp = /^\d{4}$/;
    var timeoutId; // Variable para almacenar el ID del timeout

    $('#dataForm').on('input', 'input[name^="name"], input[name^="apellido"], input[name^="email"], input[name^="cuil"], input[name^="dni"],input[name^= "tel"],input[name^= "tel_alt"], input[name^= "dir"], input[name^= "cod_postal"], input[name^= "fech_nac"], select[name^= "genero"],input[name^= "nac"], input[name^= "ciudad"], input[name^= "localidad"], textarea[name^= "info_perfil"], select[name^="estado_civil"]', function () {
        clearTimeout(timeoutId); // Reinicia el temporizador en cada entrada de datos
        var formData = $('#dataForm').serialize();

        timeoutId = setTimeout(function () {
            $.ajax({
                type: 'POST',
                url: './php/data.php',
                data: formData,
                success: function (response) {
                    var datos = JSON.parse(response);
                    console.log(datos);

                    function validarName(nombre) {
                        if (nombre && nombre !== "No Valido" && nombre.trim().length > 2 && /^[A-Z].*/g.test(nombre) && nombre[0] === nombre[0].toUpperCase()) {
                            nombre = nombre.toUpperCase();
                            $('#mensaje_nombre_error').fadeOut();
                            $('#check_nombre').fadeIn();
                            $('#name').css({
                                'border': '3px solid green'
                            });
                            $('#nombreModal').html(nombre);
                        } else {
                            $('#mensaje_nombre_error').fadeIn();
                            $('#check_nombre').fadeOut();
                            $('#name').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.nombre) {
                        validarName(datos.datos.nombre);

                    }

                    function validarApellido(apellido) {
                        if (apellido && apellido !== "No Valido" && apellido.trim().length > 2 && /^[A-Z].*/g.test(apellido) && apellido[0] === apellido[0].toUpperCase()) {
                            apellido = apellido.toUpperCase();
                            $('#mensaje_apellido_error').fadeOut();
                            $('#check_apellido').fadeIn();
                            $('#apellido').css({
                                'border': '3px solid green'
                            });
                            $('#apellidoModal').html(apellido);
                        } else {
                            $('#mensaje_apellido_error').fadeIn();
                            $('#check_apellido').fadeOut();
                            $('#apellido').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.apellido) {
                        validarApellido(datos.datos.apellido);

                    }


                    function validarDni(dni) {
                        if (dni && dni.trim().length > 2 && /^[0-9].*/g.test(dni)) {
                            $('#mensaje_dni_error').fadeOut();
                            $('#check_dni').fadeIn();
                            $('#dni').css({
                                'border': '3px solid green'
                            });
                            $('#dniModal').html(dni);
                        } else {
                            $('#mensaje_dni_error').fadeIn();
                            $('#check_dni').fadeOut();
                            $('#dni').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.dni) {
                        validarDni(datos.datos.dni);

                    }

                    function validarEmail(email) {
                        if (email == "" || email == "No Valido") {
                            $('#mensaje_email_error').fadeIn();
                            $('#check_email').fadeOut();
                            $('#email').css({
                                'border': '3px solid red'
                            });

                        } else {
                            $('#mensaje_email_error').fadeOut();
                            $('#check_email').fadeIn();
                            $('#email').css({
                                'border': '3px solid green'
                            });
                            $('#emailModal').html(email);
                        }

                    }

                    if (datos.datos.email) {
                        validarEmail(datos.datos.email);

                    }

                    function validarCuil(cuil) {
                        if (!cuil || !expr_cuil.test(cuil)) {
                            $('#mensaje_cuil_error').fadeIn();
                            $('#check_cuil').fadeOut();
                            $('#cuil').css({
                                'border': '3px solid red'
                            });

                        } else {
                            $('#mensaje_cuil_error').fadeOut();
                            $('#check_cuil').fadeIn();
                            $('#cuil').css({
                                'border': '3px solid green'
                            });
                            $('#cuilModal').html(cuil);
                        }
                    }

                    if (datos.datos.cuil) {
                        validarCuil(datos.datos.cuil);

                    }

                    function validarTel(tel) {
                        const tel_limpio = tel.replace(/\s+/g, '').replace(/-/g, '');
                        if (tel_limpio && tel_limpio.trim().length > 2 && /^[0-9].*/g.test(tel_limpio) && expr_tel.test(tel_limpio)) {
                            $('#mensaje_tel_error').fadeOut();
                            $('#check_tel').fadeIn();
                            $('#tel').css({
                                'border': '3px solid green'
                            });
                            $('#telModal').html(tel);
                        } else {
                            $('#mensaje_tel_error').fadeIn();
                            $('#check_tel').fadeOut();
                            $('#tel').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.tel) {
                        validarTel(datos.datos.tel);

                    }




                    function validarDir(dir) {
                        if (dir && expr_dir.test(dir)) {
                            $('#mensaje_dir_error').fadeOut();
                            $('#check_dir').fadeIn();
                            $('#dir').css({
                                'border': '3px solid green'
                            });
                            $('#dirModal').html(dir);
                        } else {
                            $('#mensaje_dir_error').fadeIn();
                            $('#check_dir').fadeOut();
                            $('#dir').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.dir) {

                        validarDir(datos.datos.dir);
                    }


                    function validarCp(cp) {
                        if (cp && expr_cp.test(cp)) {
                            $('#mensaje_cp_error').fadeOut();
                            $('#check_cp').fadeIn();
                            $('#cod_postal').css({
                                'border': '3px solid green'
                            });
                            $('#cpModal').html(cp);
                        } else {
                            $('#mensaje_cp_error').fadeIn();
                            $('#check_cp').fadeOut();
                            $('#cod_postal').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.cod_postal) {
                        validarCp(datos.datos.cod_postal);

                    }


                    function validarDate(fecha_n) {
                        if (fecha_n) {
                            $('#mensaje_nacimiento_error').fadeOut();
                            $('#check_nacimiento').fadeIn();
                            $('#fech_nac').css({
                                'border': '3px solid green'
                            });
                            $('#nacimientoModal').html(fecha_n);
                        } else {
                            $('#mensaje_nacimiento_error').fadeIn();
                            $('#check_nacimiento').fadeOut();
                            $('#fech_nac').css({
                                'border': '3px solid red'
                            });
                        }

                    }

                    if (datos.datos.fech_nac) {

                        validarDate(datos.datos.fech_nac);
                    }


                    function validarGenero(genero) {
                        if (genero && genero == 'Masculino' || genero == 'Femenino') {
                            $('#mensaje_genero_error').fadeOut();
                            $('#check_genero').fadeIn();
                            $('#genero').css({
                                'border': '3px solid green'
                            });
                            $('#generoModal').html(genero);
                        } else {
                            $('#mensaje_genero_error').fadeIn();
                            $('#check_genero').fadeOut();
                            $('#genero').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.genero) {
                        validarGenero(datos.datos.genero);

                    }


                    function validarNac(nac) {
                        if (nac) {
                            $('#mensaje_nac_error').fadeOut();
                            $('#check_nac').fadeIn();
                            $('#nac').css({
                                'border': '3px solid green'
                            });
                            $('#nacionalidadModal').html(nac);
                        } else {
                            $('#mensaje_nac_error').fadeIn();
                            $('#check_nac').fadeOut();
                            $('#nac').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.nac) {
                        validarNac(datos.datos.nac);

                    }

                    function validarCiudad(ciudad) {
                        if (ciudad) {
                            $('#mensaje_ciudad_error').fadeOut();
                            $('#check_ciudad').fadeIn();
                            $('#ciudad').css({
                                'border': '3px solid green'
                            });
                            $('#ciudadModal').html(ciudad);
                        } else {
                            $('#mensaje_ciudad_error').fadeIn();
                            $('#check_ciudad').fadeOut();
                            $('#ciudad').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.ciudad) {
                        validarCiudad(datos.datos.ciudad);

                    }

                    function validarLocalidad(localidad) {
                        if (localidad) {
                            $('#mensaje_localidad_error').fadeOut();
                            $('#check_localidad').fadeIn();
                            $('#localidad').css({
                                'border': '3px solid green'
                            });
                            $('#localidadModal').html(localidad);
                        } else {
                            $('#mensaje_localidad_error').fadeIn();
                            $('#check_localidad').fadeOut();
                            $('#localidad').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.localidad) {
                        validarLocalidad(datos.datos.localidad);

                    }

                    function validarPerfil(perfil) {
                        if (perfil) {
                            $('#mensaje_perfil_error').fadeOut();
                            $('#check_perfil').fadeIn();
                            $('#info_perfil').css({
                                'border': '3px solid green'
                            });
                            $('#perfil_descripcion').html(perfil);
                        } else {
                            $('#mensaje_perfil_error').fadeIn();
                            $('#check_perfil').fadeOut();
                            $('#info_perfil').css({
                                'border': '3px solid red'
                            });
                        }
                    }

                    if (datos.datos.info_perfil) {
                        validarPerfil(datos.datos.info_perfil);

                    }

                    function validarEstadoCivil(estado_civil) {
                        if (estado_civil) {
                            $('#mensaje_estado_civil_error').fadeOut();
                            $('#check_estado_civil').fadeIn();
                            $('#estado_civil').css({
                                'border': '3px solid green'
                            });
                            $('#estado_civilModal').html(estado_civil);
                        } else {
                            $('#mensaje_estado_civil_error').fadeIn();
                            $('#check_estado_civil').fadeOut();
                            $('#estado_civil').css({
                                'border': '3px solid red'
                            });
                        }
                    }


                    if (datos.datos.estado_civil) {
                        validarEstadoCivil(datos.datos.estado_civil);
                    }


                }
            });
        }, 1000);
    });


    $('#dataForm').on('change input', function () {
        enviarDatos();
    });

   function enviarDatos(){
       clearTimeout(timeoutId);

       var formData = $('#dataForm').serialize();
       console.log(formData);

       timeoutId = setTimeout(function () {
           $.ajax({
               type: 'POST',
               url: './php/data.php',
               data: formData,
               success: function (response) {
                   var experiencias = JSON.parse(response);

                   // Mostrar datos en secciones diferentes
                   $('#expe_laboral').empty(); // Limpiar el contenedor antes de agregar los nuevos datos

                   if (experiencias.experiencias.empleo !== "" || experiencias.experiencias.empresaEmpleo !== "" || experiencias.experiencias.desdeEmpleo !== "" || experiencias.experiencias.hastaEmpleo !== "" || experiencias.experiencias.descripcion !== "") {
                       for (var i = 0; i < experiencias.experiencias.length; i++) {
                           var experiencia = experiencias.experiencias[i];


                           var experienciaHTML = '<div class="exp_lab">' +
                               '<div class="info">' +
                               '<span id="fech_ini">' + experiencia.desdeEmpleo + '</span>' + '<span>' + ' - ' + '</span>' + '<span id="fech_fin">' + experiencia.hastaEmpleo + '</span>' + '<br>' +
                               '<span id="empresa">' + experiencia.empresaEmpleo + '</span>' + '<br>' +
                               '<strong>' + 'RUBRO: ' + '</strong>' + '<span>' + experiencia.empleo + '</span>' +
                               '</div>' +
                               '<div class="descripcion">' +
                               '<h4 class="exp_title titulo_empleo">' + 'DESCRIPCION' + '</h4>' +
                               '<div id="p_descripcion">' +
                               '<p>' + experiencia.descripcion + '</p>' +
                               '</div>' +
                               '</div>';

                           $('#expe_laboral').append(experienciaHTML);
                       }
                   }

               }
           });
       }, 1000);
   }

    $('#dataForm').on('input', 'input[name^="habilidad"]', function () {
        var formData = $('#dataForm').serialize();

        $.ajax({
            type: 'POST',
            url: './php/data.php',
            data: formData,
            success: function (response) {
                var habilidades = JSON.parse(response);

                $('#container_habilidades').empty();

                for (let i = 0; i < habilidades.habilidades.length; i++) {
                    var habilidad = habilidades.habilidades[i];
                    var habilidadHTML = '<li type="disc">' + '<span id="habilidad_1">' + habilidad.habilidad + '</span>' + '</li>';

                    $('#container_habilidades').append(habilidadHTML);
                }
            }

        });

    });

    $('#dataForm').on('input', 'input[name^="hab_it"]', function () {
        var formData = $('#dataForm').serialize();

        $.ajax({
            type: 'POST',
            url: './php/data.php',
            data: formData,
            success: function (response) {
                var habilidadesIt = JSON.parse(response);

                $('#container_habilidadesIT').empty();

                for (let i = 0; i < habilidadesIt.habilidadesit.length; i++) {
                    var habilidadit = habilidadesIt.habilidadesit[i];
                    var habilidaditHTML = '<li type="square">' + '<span id="habilidad_it">' + habilidadit.habilidadit + '</span>' + '</li>';

                    $('#container_habilidadesIT').append(habilidaditHTML);
                }
            }

        });

    });

    $('#dataForm').on('input', 'input[name^="instituto"], input[name^="carreras"], input[name^="localidad_insti"],select[name^="grado_instituto"],select[name^="estado_carrera"],input[name^="cursado_desde"],input[name^="cursado_hasta"],textarea[name^="desc_educacion"]', function () {
        var formData = $('#dataForm').serialize();

        $.ajax({
            type: 'POST',
            url: './php/data.php',
            data: formData,
            success: function (response) {
                var educacion = JSON.parse(response);

                $('#formacion_academica').empty(); // Limpiar el contenedor antes de agregar los nuevos datos
                if (educacion.educacion.instituto !== "" || educacion.educacion.carrera !== "" || educacion.educacion.localidad !== "" || educacion.educacion.grado !== "" || educacion.educacion.estado !== "" || educacion.educacion.desde !== "" || educacion.educacion.hasta !== "") {

                    for (var i = 0; i < educacion.educacion.length; i++) {
                        var edu = educacion.educacion[i];

                        if (edu.estado == "en_curso") {
                            var educacionHTML = '<div class="form_acad">' +
                                '<div class="info">' +
                                '<span id="periodo">' + '<span id="fech_ini">' + edu.desde + '</span>' + '<span>' + '-' + '</span>' + '<span id="fech_fin">' + 'En Curso' + '</span>' + '</span>' + '<br>' +
                                '<span id="instituto" class="bold">' + edu.instituto + '</span>' + '<br>' +
                                '<span id="carrera">' + edu.carrera + '</span>' + '<br>' +
                                '<span id="ciudad">' + edu.localidad + '</span>' +
                                '</div>' +
                                '<div class="descripcion">' +
                                '<h4 class="exp_title">' + 'DESCRIPCION' + '</h4>' +
                                '<div id="p_descripcion">' + edu.descripcion + '</div>' +
                                '</div>' +
                                '</div>';
                            $('#formacion_academica').append(educacionHTML);
                            continue;
                        }

                        var educacionHTML = '<div class="form_acad">' +
                            '<div class="info">' +
                            '<span id="periodo">' + '<span id="fech_ini">' + edu.desde + '</span>' + '<span>' + '-' + '</span>' + '<span id="fech_fin">' + edu.hasta + '</span>' + '</span>' + '<br>' +
                            '<span id="instituto" class="bold">' + edu.instituto + '</span>' + '<br>' +
                            '<span id="carrera">' + edu.carrera + '</span>' + '<br>' +
                            '<span id="estado">' + edu.estado + '</span>' + '<br>' +
                            '<span id="ciudad">' + edu.localidad + '</span>' +
                            '</div>' +
                            '<div class="descripcion">' +
                            '<h4 class="exp_title">' + 'DESCRIPCION' + '</h4>' +
                            '<div id="p_descripcion">' + edu.descripcion + '</div>' +
                            '</div>' +
                            '</div>';
                        $('#formacion_academica').append(educacionHTML);




                    }
                }

            }

        });

    });

    $('#dataForm').on('input', 'input[name^="nomb_curso"], input[name^="perdiodo_curso_desde"], input[name^="instituto_curso"], input[name^="perdiodo_curso_hasta"], textarea[name^="desc_curso"]', function () {
        var formData = $('#dataForm').serialize();

        $.ajax({
            type: 'POST',
            url: './php/data.php',
            data: formData,
            success: function (response) {
                var cursos = JSON.parse(response);
                console.log(cursos);

                $('#cursos_contenedor').empty();

                if (cursos.cursos.curso !== "" || cursos.cursos.desde !== "" || cursos.cursos.instituto !== "" || cursos.cursos.hasta !== "" || cursos.cursos.descripcion !== "") {
                    for (var i = 0; i < cursos.cursos.length; i++) {
                        var curso = cursos.cursos[i];
                        var cursoHTML = '<div class="cursos">' +
                            '<div class="info">' +
                            '<span id="periodo">' + '<span id="fech_ini">' + curso.desde + '</span>' + '<span>' + ' - ' + '</span>' + '<span id="fech_fin">' + curso.hasta + '</span>' + '</span>' + '<br>' +
                            '<span id="nombre_curso" class="bold">' + curso.curso + '</span>' + '<br>' +
                            '<span id="curso_insituto" class="bold">' + curso.instituto + '</span>' +
                            '</div>' +
                            '<div class="descripcion">' +
                            '<h4 class="exp_title">' + 'DESCRIPCION' + '</h4>' +
                            '<div id="p_descripcion">' +
                            curso.descripcion
                        '</div>' +
                            '</div>';

                        $('#cursos_contenedor').append(cursoHTML);
                    }
                }


            }
        });
    });


    $('.tinymce').each(function () {
        var textareaName = $(this).attr('name');
        tinymce.init({
            selector: 'textarea[name="' + textareaName + '"]',
            height: 200, // Altura del editor
            plugins: 'lists',
            menubar: false, // Ocultar completamente el menú
            toolbar: 'bullist', // Solo mostrar las herramientas para listas punteadas
            setup: function (editor) {
                // Detectar cambios en el contenido del editor
                editor.on('change', function () {
                    // Actualizar el contenido del textarea oculto cuando haya cambios
                    var contenido = editor.getContent();
                    $(editor.targetElm).val(contenido);
                    // Llamar a la función para enviar los datos mediante AJAX
                    enviarDatos();
                });
            }
        });
    });


    const curriculumElement = document.getElementById('resume');

    const opt = {
        margin: 0,
        filename: 'curriculum.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: {
            scale: 2,
        },
        jsPDF: { unit: 'pt', format: 'a4', orientation: 'portrait' }
    };

    html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
        // Muestra la vista previa en un iframe
        const previewFrame = document.getElementById('preview');
        previewFrame.src = pdf.output('datauristring');
        previewFrame.style.display = 'block';
    });



});