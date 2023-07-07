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