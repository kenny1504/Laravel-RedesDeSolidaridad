<!DOCTYPE html>
<html>
<head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="{{asset("assets/$theme/dist/img/logo.png")}}">
        <title>@yield('titulo','inicio') | Redes De Solidaridad</title> <!-- Titulo de la pagina-->
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
      
      

        @yield('styles')

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
                    @include("theme.$theme.hearder") <!-- Hearder de la pagina inicio-->
                    <!--fin header -->
                    <!--inicio aside -->
                    @include("theme.$theme.aside") <!-- aside o menu lateral de la pagina inicio-->
                    <!--fin aside -->
   
                    <div class="content-wrapper">  
                        
                            <!--******** include de Materia ********-->   

                    @include("Materia.crear") <!-- Modal crear materia-->
                    @include("Materia.eliminar") <!-- Modal eliminar materia-->      
                    @include("Materia.editar") <!-- Modal editar materia-->  

                            <!--******** include de Oficios ********-->   

                    @include("Oficio.crear") <!-- Modal crear materia-->     
                    



                            <!--******** include de Generales ********-->  

                    @include("Alertas.exito") <!-- Modal mensaje "Exito" -->  
                    @include("Alertas.error") 
                  
                    @yield('contenido')  <!-- Agrega contenido desde otra vista-->   
                    </div>
            <!--inicio footer -->
            <div>
            @include("theme.$theme.footer") <!-- footer de la pagina inicio-->
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
        <script src="{{asset("js/jquery/localization/messages_es.min.js")}}"></script>
        <script src="{{asset("js/funciones.js")}}"></script>


        <!--********************* script  "Materia" *************************-->

        <script src="{{asset("js/js-redes//Materia/agregar.js")}}"></script> <!-- escript para validar datos requeridos-->
        <script src="{{asset("js/js-redes//Materia/crear.js")}}"></script> <!-- escript para ingresar datos por ajax-->
        <script src="{{asset("js/js-redes//Materia/eliminar.js")}}"></script> <!-- script eliminar materia-->
        <script src="{{asset("js/js-redes//Materia/editar.js")}}"></script> <!-- script editar materia-->

        <!--********************* script  "oficio" *************************-->
        <script src="{{asset("js/js-redes//Oficio/agregar.js")}}"></script> <!-- escript para validar datos requeridos-->
        <script src="{{asset("js/js-redes//Oficio/crear.js")}}"></script> <!-- escript para ingresar datos por ajax-->
        

        @yield('scripts')
        


     </body>
</html>


