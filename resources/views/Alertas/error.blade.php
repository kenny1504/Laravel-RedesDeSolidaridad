
<!-- Vista de errores -->

<div class="modal  modal-danger fade"  id="Mensaje" >
              <div class="modal-dialog" >
                        <div class="modal-content" >
                                    <div class="alert alert-danger alert-dismissible " >
                                                    <h4><i class="icon fa fa-thumbs-o-down"></i> El formulario contiene errores</h4>
                                                    @if (Session::get('errors'))
                                                            @foreach (Session::get('errors')->all() as $error)
                                                                        <li>{$error}</li>
                                                            @endforeach
                                                    @endif
                                                
                                    </div>

                         </div>
                        <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
</div>