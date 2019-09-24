<!DOCTYPE html>
<html>
<head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="{{asset("assets/$theme/dist/img/logo.png")}}">
        <title>@yield('titulo','inicio') | Redes De Solidaridad</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}"> 
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}"
      
      

        @yield("styles")

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    <body class="hold-transition skin-blue  sidebar-mini">
<!-- Site wrapper -->
       <div class="wrapper">
                    <!--inicio header-->
                    @include("theme.$theme.hearder")
                    <!--fin header -->
                    <!--inicio aside -->
                    @include("theme.$theme.aside")
                    <!--fin aside -->

                    <div class="content-wrapper">                
                    @include("Materia.crear")      
                    @include("Alertas.exito") 
                    @include("Alertas.error")               
                    @yield('contenido')  
                  
                    </div>
            <!--inicio footer -->
            <div>
            @include("theme.$theme.footer")
            </div>        
            <!--fin footer -->

        <!-- jQuery 3 -->
       </div>

        <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

        <script src="{{asset("js/jquery/jquery.validate.min.js")}}"></script>
        </script><script src="{{asset("js/jquery/localization/messages_es.min.js")}}"></script>
        <script src="{{asset("js/funciones.js")}}"></script>

        @yield("scripts")

        <!--Script Futuras validaciones 
       <script> 
             function Limpiar(id)
            {  
               alert("prueba");
                var c= document.getElementById("id");
                c.value="";

                //abrigar a hacer submit al id que recibe
             // document.getElementById("ingresar_materia").submit();
            }
        </script> -->

      <!--Script para la salida de los mensajes "Error-Exito"--> 
<script>
  
  $("#Materia").click(function() { //ajax para ingresar materias
    
    if($('input[name=Nombre]').val()!="") // si el campo contiene valores entra 
    {

    $.ajax({
      type: 'POST',
      url: '{{route('guardar_materia')}}', //llamada a la ruta ingresar materia
      data: {
        _token: $('input[name=_token]').val(),
        Nombre: $('input[name=Nombre]').val()
      },
      success: function(data){ //agregar el nuevo ingreso a la tabla

        var datos=  "<tr>"+"<td>"+data.Nombre+"</td>"
        + "<td>"+"<button class='btn btn-success' data-toggle='modal' data-target='#' onclick=''><i class=' fa fa-fw fa-pencil'></i></button>"
        + "<button class='btn btn-info' data-toggle='modal' data-target='#' onclick=''><i class='fa fa-fw fa-trash '></i></button>"                                   
        +"</td>"+"</tr>"; // variable guarda el valor 
       $('#asignaturas').append(datos); // agrega nuevo registro a tabla
      
       $("#exito").modal("show"); //abre modal de exito
       $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                $("#exito").modal("hide"); // cierra modal
                } );

      },
      error: function(data){ // si contiene errores manda notificacion 
          //alert("contiene errores");
          $("#Mensaje").modal("show"); //abre modal Mensaje
          $("#Mensaje").fadeTo(2000,80).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                $("#Mensaje").modal("hide");
                } );

      }
    });
    $('#Nombre').val(''); // limpiar el input Nombre
    }

  }); //fin del ajax

</script>


     </body>
</html>

