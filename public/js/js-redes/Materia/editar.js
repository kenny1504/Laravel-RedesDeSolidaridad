var dat; //variable global que guarda el dato "tr" (Fila a editar)

$(".editar").click(function() { // ajax para editar una materia
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Editar)
var ide=$(this).attr("data-id");//obtiene el id de la materia
var name=$(this).attr("data-Nombre");//obtiene nombre de la materia
$('#editar_Materia').modal('show'); // abre ventana modal
$('.error').addClass('hidden'); // oculta error del servidor(validacion-servidor)
$('#idmateria').val(ide);   //manda valor "id" a ventana modal Nombre
$('#Nombre-Materia').val(name);
}); 


function Ingresar(e) { // Metodo para guardar(editar) datos los datos al presionar ENTER 
    var tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13) // si es 13 entonces presiono ENTER
    {
        $("#editar_confirmar").click(); // llama al evento click "editar_confirmar"
    }
  }

    $("#editar_confirmar").click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '/Materia/editar', // ruta editar materia
                    data: {
                                _token: $('input[name=_token]').val(),
                                id:$('input[name=idmateria]').val(),
                        Nombre:$('input[name=Nombre-Materia]').val()
                    },
                    success: function(data){
                        if ((data.errors)) { // si el ajax contiene errores agrega un label indicando el error 
                                $('.error').removeClass('hidden');
                                $('.error').text("Error: El "+ data.errors.Nombre); 
                          } else {

                                var datos=  "<tr class='asignatura" + data.id + "'>"+"<td>"+data.Nombre+"</td>"
                                + "<td>"+"<button class='btn btn-success editar' data-toggle='modal' data-target='#' onclick=''><i class=' fa fa-fw fa-pencil'></i></button>"
                                + "<button class='btn btn-info eliminar-materia' data-id="+ data.id +"><i class='fa fa-fw fa-trash '></i></button>"                                   
                                +"</td>"+"</tr>";// variable guarda los nuevos valores

                                dat.replaceWith(datos); //reemplaza por los nuevos datos
                                $("#exito").modal("show"); //abre modal de exito
                                $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                            $("#exito").modal("hide"); // cierra modal
                                            
                                            } );
                                 $("#editar_Materia").modal("hide"); // cierra modal
                                 }
                              
                    }
             });

    });