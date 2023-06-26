$(document).ready(function () {
   var datos = [];

    $('#name').mouseover(function(){
        $('#name').css({
        'border':'3px solid blue'
    });
    });
    $('#name').mouseout(function () {
       var nombre=$('#name').val();
       if(nombre !== ''){
           $('#name').css({
               'border': '3px solid green'
           });
            datos.push('nombre:',nombre);
            console.log(datos);
       }else{
           $('#name').css({
               'border': '3px solid red'
           });
       }
    });

    $('#apellido').mouseover(function () {
        $('#name').css({
            'border': '3px solid blue'
        });
    });
    $('#apellido').mouseout(function () {
        var apellido = $('#apellido').val();
        if (apellido !== '') {
            $('#apellido').css({
                'border': '3px solid green'
            });
            datos.push('apellido:',apellido);
            console.log(datos);
        } else {
            $('#apellido').css({
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
            }
        })
    });

});