$(document).ready(function () {
   var reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/; 
   var datos = [];

    $('#name').mouseover(function(){
        $('#name').css({
        'border':'3px solid blue'
    });
    });
    $('#name').mouseout(function () {
       var nombre=$('#name').val();
        if (nombre && nombre.trim().length > 2 && /^[A-Z].*/g.test(nombre) && nombre[0] === nombre[0].toUpperCase()){
            $('#mensaje_nombre_error').fadeOut(); 
            $('#name').css({
               'border': '3px solid green'
           });
            datos.push('nombre:',nombre);
            console.log(datos);
       }else{
           $('#mensaje_nombre_error').fadeIn(); 
           $('#name').css({
               'border': '3px solid red'
           });
       }
    });

    $('#apellido').mouseover(function () {
        $('#apellido').css({
            'border': '3px solid blue'
        });
    });
    $('#apellido').mouseout(function () {
        var apellido = $('#apellido').val();
        if (apellido && apellido.trim().length > 2 && /^[A-Z].*/g.test(apellido) && apellido[0] === apellido[0].toUpperCase()) {
            $('#mensaje_apellido_error').fadeOut(); 
            $('#apellido').css({
                'border': '3px solid green'
            });
            datos.push('apellido:',apellido);
            console.log(datos);
        } else {
            $('#mensaje_apellido_error').fadeIn(); 
            $('#apellido').css({
                'border': '3px solid red'
            });
        }
    });

    $('#dni').mouseover(function () {
        $('#dni').css({
            'border': '3px solid blue'
        });
    });
    $('#dni').mouseout(function () {
        var dni = $('#dni').val();
        if (dni && dni.trim().length > 2 && /^[0-9].*/g.test(dni)) {
            $('#mensaje_dni_error').fadeOut();
            $('#dni').css({
                'border': '3px solid green'
            });
            datos.push('dni:', dni);
            console.log(datos);
        } else {
            $('#mensaje_dni_error').fadeIn();
            $('#dni').css({
                'border': '3px solid red'
            });
        }
    });


    $('#email').mouseover(function(){
        $('#email').css({
            'border': '3px solid blue'
        }); 
    });
    $('#email').mouseout(function () {
        var email = $('#email').val();
        if(email =="" || !reg.test(email)){
            $('#mensaje_email_error').fadeIn();
            $('#email').css({
                'border': '3px solid red'
            });
        }else{
            $('#mensaje_email_error').fadeOut();
            $('#email').css({
                'border': '3px solid green'
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