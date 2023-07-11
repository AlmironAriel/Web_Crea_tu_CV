$(document).ready(function () {
    const reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    const expr_cuil = /^\d{2}-\d{8}-\d{1}$/;
    const expr_tel = /^\d{10}$/;
    const expr_dir = /^[a-zA-Z0-9\s]+$/;
    const expr_cp = /^\d{4}$/;
    var datos = [];
    var timeoutId; // Variable para almacenar el ID del timeout


    function validarName() {

        var nombre = $('#name').val();
        if (nombre && nombre.trim().length > 2 && /^[A-Z].*/g.test(nombre) && nombre[0] === nombre[0].toUpperCase()) {
            $('#mensaje_nombre_error').fadeOut();
            $('#check_nombre').fadeIn();
            $('#name').css({
                'border': '3px solid green'
            });
            $('#nombreModal').html(nombre);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_nombre_error').fadeIn();
            $('#check_nombre').fadeOut();
            $('#name').css({
                'border': '3px solid red'
            });
        }
    }
    document.getElementById("name").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarName, 1000); // Validar después de 1 segundo (1000 ms)
    });



    function validarApellido() {
        var apellido = $('#apellido').val();
        if (apellido && apellido.trim().length > 2 && /^[A-Z].*/g.test(apellido) && apellido[0] === apellido[0].toUpperCase()) {
            $('#mensaje_apellido_error').fadeOut();
            $('#check_apellido').fadeIn();
            $('#apellido').css({
                'border': '3px solid green'
            });
            $('#apellidoModal').html(apellido);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_apellido_error').fadeIn();
            $('#check_apellido').fadeOut();
            $('#apellido').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("apellido").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarApellido, 1000); // Validar después de 1 segundo (1000 ms)
    });




    function validarDni() {
        var dni = $('#dni').val();
        if (dni && dni.trim().length > 2 && /^[0-9].*/g.test(dni)) {
            $('#mensaje_dni_error').fadeOut();
            $('#check_dni').fadeIn();
            $('#dni').css({
                'border': '3px solid green'
            });
            $('#dniModal').html(dni);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_dni_error').fadeIn();
            $('#check_dni').fadeOut();
            $('#dni').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("dni").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarDni, 1000); // Validar después de 1 segundo (1000 ms)
    });


    function validarEmail() {
        var email = $('#email').val();

        if (email == "" || !reg.test(email)) {
            $('#mensaje_email_error').fadeIn();
            $('#check_email').fadeOut();
            $('#email').css({
                'border': '3px solid red'
            });
            $('#emailModal').html(email);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_email_error').fadeOut();
            $('#check_email').fadeIn();
            $('#email').css({
                'border': '3px solid green'
            });
        }

    }

    document.getElementById("email").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarEmail, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarCuil() {
        var cuil = $('#cuil').val();
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
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        }
    }

    document.getElementById("cuil").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarCuil, 1000); // Validar después de 1 segundo (1000 ms)
    });


    function validarTel() {
        var tel = $('#tel').val();
        const tel_limpio = tel.replace(/\s+/g, '').replace(/-/g, '');
        if (tel_limpio && tel_limpio.trim().length > 2 && /^[0-9].*/g.test(tel_limpio) && expr_tel.test(tel_limpio)) {
            $('#mensaje_tel_error').fadeOut();
            $('#check_tel').fadeIn();
            $('#tel').css({
                'border': '3px solid green'
            });
            $('#telModal').html(tel);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_tel_error').fadeIn();
            $('#check_tel').fadeOut();
            $('#tel').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("tel").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarTel, 1000); // Validar después de 1 segundo (1000 ms)
    });


    function validarDir() {
        var dir = $('#dir').val();
        if (dir && expr_dir.test(dir)) {
            $('#mensaje_dir_error').fadeOut();
            $('#check_dir').fadeIn();
            $('#dir').css({
                'border': '3px solid green'
            });
            $('#dirModal').html(dir);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_dir_error').fadeIn();
            $('#check_dir').fadeOut();
            $('#dir').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("dir").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarDir, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarCp() {
        var cp = $('#cod_postal').val();
        if (cp && expr_cp.test(cp)) {
            $('#mensaje_cp_error').fadeOut();
            $('#check_cp').fadeIn();
            $('#cod_postal').css({
                'border': '3px solid green'
            });
            $('#cpModal').html(cp);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_cp_error').fadeIn();
            $('#check_cp').fadeOut();
            $('#cod_postal').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("cod_postal").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarCp, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarDate() {
        var fecha_n = $('#fech_nac').val();
        var fechaNacimiento = new Date(fecha_n);
        var fechaCorregida = new Date(
            fechaNacimiento.getUTCFullYear(),
            fechaNacimiento.getUTCMonth(),
            fechaNacimiento.getUTCDate()
        );
        var opcionesFecha = { year: 'numeric', month: 'long', day: 'numeric' };
        var fechaFormateada = fechaCorregida.toLocaleDateString("es-AR", opcionesFecha);
        if (fechaFormateada) {
            $('#mensaje_nacimiento_error').fadeOut();
            $('#check_nacimiento').fadeIn();
            $('#fech_nac').css({
                'border': '3px solid green'
            });
            $('#nacimientoModal').html(fechaFormateada);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_nacimiento_error').fadeIn();
            $('#check_nacimiento').fadeOut();
            $('#fech_nac').css({
                'border': '3px solid red'
            });
        }

    }

    document.getElementById("fech_nac").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarDate, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarGenero() {
        var genero = $('#genero').val();
        if (genero && genero == 'Masculino' || genero == 'Femenino') {
            $('#mensaje_genero_error').fadeOut();
            $('#check_genero').fadeIn();
            $('#genero').css({
                'border': '3px solid green'
            });
            $('#generoModal').html(genero);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_genero_error').fadeIn();
            $('#check_genero').fadeOut();
            $('#genero').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("genero").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarGenero, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarNac(){
        var nac = $('#nac').val();
        if (nac ) {
            $('#mensaje_nac_error').fadeOut();
            $('#check_nac').fadeIn();
            $('#nac').css({
                'border': '3px solid green'
            });
            $('#nacionalidadModal').html(nac);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_nac_error').fadeIn();
            $('#check_nac').fadeOut();
            $('#nac').css({
                'border': '3px solid red'
            });
        }
    }
    

    document.getElementById("nac").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarNac, 1000); // Validar después de 1 segundo (1000 ms)
    });


    function validarCiudad(){
        var ciudad = $('#ciudad').val();
        if (ciudad) {
            $('#mensaje_ciudad_error').fadeOut();
            $('#check_ciudad').fadeIn();
            $('#ciudad').css({
                'border': '3px solid green'
            });
            $('#localidadModal').html(ciudad);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_ciudad_error').fadeIn();
            $('#check_ciudad').fadeOut();
            $('#ciudad').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("ciudad").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarCiudad, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarPerfil(){
        var perfil = $('#info_perfil').val();
        if (perfil) {
            $('#mensaje_ciudad_error').fadeOut();
            $('#check_ciudad').fadeIn();
            $('#info_perfil').css({
                'border': '3px solid green'
            });
            $('#perfilModal').html(perfil);
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_ciudad_error').fadeIn();
            $('#check_ciudad').fadeOut();
            $('#info_perfil').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("info_perfil").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarPerfil, 1000); // Validar después de 1 segundo (1000 ms)
    });

    function validarEmpleo(){
        var empleo = [];
        empleo = document.querySelectorAll("#empleo");
        if (empleo) {
            $('#mensaje_empleo_error').fadeOut();
            $('#check_empleo').fadeIn();
            $('#empleo').css({
                'border': '3px solid green'
            });
            for (let i = 1; i < empleo.length; i++) {
                $('#empleoModal').html(empleo[i].value);
                
            }
            
            html2pdf().set(opt).from(curriculumElement).toPdf().get('pdf').then(function (pdf) {
                // Muestra la vista previa en un iframe
                const previewFrame = document.getElementById('preview');
                previewFrame.src = pdf.output('datauristring');
                previewFrame.style.display = 'block';
            });
        } else {
            $('#mensaje_empleo_error').fadeIn();
            $('#check_empleo').fadeOut();
            $('#empleo').css({
                'border': '3px solid red'
            });
        }
    }

    document.getElementById("empleo").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarEmpleo, 5000); // Validar después de 1 segundo (1000 ms)
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

    $('#dataForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: './php/data.php',
            data: $(this).serialize(),
            success: function (response) {
                swal({
                    title: "Datos agregados correctamente",
                    text: "Acceda a la vista previa del curriculum",
                    icon: "success",
                    button: "Aceptar",
                });

                var jsonData = JSON.parse(response);

                console.log(jsonData);

                $('#nombreModal').html(jsonData.nombre);
                $('#apellidoModal').html(jsonData.apellido);
                $('#dniModal').html(jsonData.dni);
                $('#estado_civilModal').html(jsonData.estadoCivil);
                $('#emailModal').html(jsonData.email);
            }
        })
    });

});