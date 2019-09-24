@extends("theme.$theme.layout")
@section('titulo')
    Asignaturas
@endsection
@section("scripts")
<script src="{{asset("js/index.js")}}"></script>
@endsection

@section('contenido')
           
            <div class="box">
            <div class="box-header">
              <h2 class="box-title text-light-blue">Asignaturas</h2>
              <a href="#" data-toggle="modal" data-target="#modal_Materia" class="btn btn-warning btn-sm pull-right" id="m2">Agregar asignatura</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body panel box box-primary">
              <table id="asignaturas" class="table table-bordered table-striped">
                     <thead>  <!--Header de la tabla -->  
                       <tr > 
                         <th>Nombre Asignatura</th>
                         <th></th>
                       </tr>
                    </thead>
                        <tbody> <!--Cuerpo de la tabla -->
                            @foreach ($asignaturas as $asignatura)
                                <tr>
                                    <td>{{$asignatura->Nombre}}</td> 
                                <td>
                                <button class="btn btn-success" data-toggle="modal" data-target="#" onclick=""><i class=" fa fa-fw fa-pencil"></i></button>
                                <button class="btn btn-info "  data-toggle="modal" data-target="#" onclick=""><i class="fa fa-fw fa-trash "></i></button>                                   
                                </td>
                                </tr>
                             @endforeach
                        </tbody>
              </table>
            </div>
            <div class="panel box box-primary"></div>
            <!-- /.box-body -->
          </div>  
@endsection



