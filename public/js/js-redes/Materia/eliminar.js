var data; //variable globel que guarda el dato "tr"

$(".eliminar-materia").click(function() { // ajax para eliminar una materia
data = $(this).closest("tr"); //captura toda la fila donde se efectuo el click
var iden=$(this).attr("data-id"); // captura el valor "id" de la materia
$('#eliminar_Materia').modal('show'); // abre ventana modal
$('#valor').val(iden);   //manda valor "id" a ventana modal

}); //fin del ajax


    $("#confirmar").click(function() {
        data.remove();
        $.ajax({
                    type: 'POST',
                    url: '/Materia/eliminar', // ruta eliminar materia
                    data: {
                        _token: $('input[name=_token]').val(),
                            id:$('input[name=valor]').val()
                    },
                    success: function(data){
                    $("#exito").modal("show"); //abre modal de exito
                    $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                $("#exito").modal("hide"); // cierra modal
                                } );
                    }
             });//

    });
