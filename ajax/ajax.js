$(document).ready(function () {
    const reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    const expr_cuil = /^\d{2}-\d{8}-\d{1}$/;
    const expr_tel = /^\d{10}$/;
    const expr_dir = /^[a-zA-Z0-9\s]+$/;
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
        timeoutId = setTimeout(validarName, 500); // Validar después de 1 segundo (1000 ms)
    });



    function validarApellido() {
        var apellido = $('#apellido').val();
        if (apellido && apellido.trim().length > 2 && /^[A-Z].*/g.test(apellido) && apellido[0] === apellido[0].toUpperCase()) {
            $('#mensaje_apellido_error').fadeOut();
            $('#check_apellido').fadeIn();
            $('#apellido').css({
                'border': '3px solid green'
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
        timeoutId = setTimeout(validarApellido, 500); // Validar después de 1 segundo (1000 ms)
    });




    function validarDni(){
        var dni = $('#dni').val();
        if (dni && dni.trim().length > 2 && /^[0-9].*/g.test(dni)) {
            $('#mensaje_dni_error').fadeOut();
            $('#check_dni').fadeIn();
            $('#dni').css({
                'border': '3px solid green'
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
        timeoutId = setTimeout(validarDni, 500); // Validar después de 1 segundo (1000 ms)
    });


    function validarEmail(){
        var email = $('#email').val();
       
            if (email == "" || !reg.test(email)) {
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
            }
        
    }

    document.getElementById("email").addEventListener("input", function (e) {
        e.preventDefault();
        clearTimeout(timeoutId); // Limpiar el timeout existente (si lo hay)
        timeoutId = setTimeout(validarEmail, 500); // Validar después de 1 segundo (1000 ms)
    });



$('#cuil').mouseover(function () {
    $('#cuil').css({
        'border': '3px solid blue'
    });
});
$('#cuil').mouseout(function () {
    var cuil = $('#cuil').val();
    if (!cuil && !expr_cuil.test(cuil)) {
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
    }

});

$('#tel').mouseover(function () {
    $('#tel').css({
        'border': '3px solid blue'
    });
});
$('#tel').mouseout(function () {
    var tel = $('#tel').val();
    const tel_limpio = tel.replace(/\s+/g, '').replace(/-/g, '');
    if (tel_limpio && tel_limpio.trim().length > 2 && /^[0-9].*/g.test(tel_limpio) && expr_tel.test(tel_limpio)) {
        $('#mensaje_tel_error').fadeOut();
        $('#check_tel').fadeIn();
        $('#tel').css({
            'border': '3px solid green'
        });
    } else {
        $('#mensaje_tel_error').fadeIn();
        $('#check_tel').fadeOut();
        $('#tel').css({
            'border': '3px solid red'
        });
    }
});

$('#dir').mouseover(function () {
    $('#dir').css({
        'border': '3px solid blue'
    });
});
$('#dir').mouseout(function () {
    var dir = $('#dir').val();
    if (dir && ex.test(dir)) {
        $('#mensaje_dir_error').fadeOut();
        $('#check_dir').fadeIn();
        $('#dir').css({
            'border': '3px solid green'
        });
    } else {
        $('#mensaje_dir_error').fadeIn();
        $('#check_dir').fadeOut();
        $('#dir').css({
            'border': '3px solid red'
        });
    }
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