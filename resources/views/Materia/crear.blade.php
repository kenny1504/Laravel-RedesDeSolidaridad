<!-- script para poder hacer la validacion de los campos -->
@section("scripts")
<script src="{{asset("js/js-redes//Materia/agregar.js")}}"></script>
@endsection

<!--form para poder activar la ruta y poder guardar el registro--><!-- -->
<form  id="ingresar_materia"  >
    <div class="modal  modal-info fade"  id="modal_Materia" >
              <div class="modal-dialog" >
                <div class="modal-content" >
                  @extends("Alertas.error")  
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Ingresar Materia</h4>
                  </div>
                  <div class="modal-body ">
                    <div class="form-group">
                        <br>@csrf
                        <label for="Nombre" class="col-sm-2 control-label requerido">Nombre</label>                
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Asignatura"  required autocomplete="off">
                          <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                        <br><br>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline" id="Materia"  >Guardar</button>          
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
    </div>
</form>





