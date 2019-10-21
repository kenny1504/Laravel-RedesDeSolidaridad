

$("#m,#m2").click(function(){ 
    $('.error').addClass('hidden');// agrega la clase hidden para ocultar label error
    $("#Nombre-error").addClass('hidden');

  });

  $("#Materia").click(function() { //ajax para ingresar materias

    if($('input[name=Nombre]').val()!="") // si el input contiene valores entra 
    {

    $.ajax({
      type: 'POST',
      url: '/Materia/crear', //llamada a la ruta ingresar materia
      data: {
        _token: $('input[name=_token]').val(),
        Nombre: $('input[name=Nombre]').val()
      },
      success: function(data){ //agregar el nuevo ingreso a la tabla
       
        if ((data.errors)) { // si el ajax contiene errores agrega un label indicando el error 
          $('.error').removeClass('hidden');
          $("#Nombre-error").addClass('hidden');
          $('.error').text("Error: El "+ data.errors.Nombre); 
        } else { // si no contiene errores agrega el dato a la tabla asignaturas
          $('.error').addClass('hidden'); //elimina el mensaje de error
        var datos=  "<tr id=" + data.id + ">"+"<td>"+data.Nombre+"</td>"
        + "<td>"+"<button class='btn btn-success' data-toggle='modal' data-target='#' ><i class=' fa fa-fw fa-pencil'></i></button>"
        + "<button class='btn btn-info eliminar-materia' data-id="+ data.id +" onclick='eliminar(this);'><i class='fa fa-fw fa-trash '></i></button>"                                   
        +"</td>"+"</tr>"; // variable guarda el valor 
       $('#asignaturas').append(datos); // agrega nuevo registro a tabla
      
       $("#exito").modal("show"); //abre modal de exito
       $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                $("#exito").modal("hide"); // cierra modal
                } );

      }

      }
    });
    $('#Nombre').val(''); // limpiar el input Nombre
    }
    else { // si el input esta vacio
      $("#Nombre-error").removeClass('hidden'); //muestra el campo Validacion (validacion-cliente)
      $('.error').addClass('hidden'); // oculta error del servidor(validacion-servidor)
    }

  }); //fin del ajax

