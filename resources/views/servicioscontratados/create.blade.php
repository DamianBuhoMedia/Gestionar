@extends('layouts.app')
<script type="text/javascript">
function OnSelectChange(event) {
    document.getElementById('price').value = event.selectedOptions[0].getAttribute('data-price');
}
</script>
@section('content')
<div id="wrapper">
		<div id="main">
				<div id="content">

						<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-7">
									<form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('servicioscontratados.store')}}">
                    @csrf
										<section class="panel">
												<header class="panel-heading">
														<h2> Nuevo Servicio Contratado </h2>
														<label class="color">Datos del cliente y servicio</label>
												</header>
												<div class="panel-body align-lg-center">
													<div class="form-group">
															<label class="control-label">Cliente</label>
															<div>
																<select  class="selectpicker form-control" name="cliente">
                                  <option value=""> Seleccione un cliente </option>
                                  @forelse($clientes as $clientesitem)
                                    <option value="{{$clientesitem['id_cliente']}}">{{$clientesitem['razonsocial_cliente']}}</option>
                                    @empty
                                      No hay resultados
                                    @endforelse
																</select>
															</div>
													</div>
													<div class="row">
	                          <div class="col-lg-7">
	                            <div class="form-group">
	                              <label class="control-label">Servicio</label>
	                              <div class="">
	                                <select  class="selectpicker form-control" id="servicios"  name="servicio">
	                                  @forelse($serviciosPadre as $itemservicios)
	                                    <option data-price="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
	                                    @empty
	                                      No hay resultados
	                                  @endforelse
	                                </select>

                                  <select class="form-control" id="client"  name="subservicio" data-size="10" data-live-search="true" onchange="OnSelectChange(this)">
                                    <option value="">Seleccione Un Servicio</option>
                                  </select>
	                              </div>
	                            </div>
	                          </div>
	                          <div class="col-lg-5">
	                            <div class="form-group">
	                              <label class="control-label">Cotizacion</label>
	                              <div class="">
	                                <input id="price" type="text" name="cotizacion" placeholder="Cotizacion estimada" />
	                              </div>
	                            </div>
	                          </div>
	                        </div>
													<div class="form-group">
															<label class="control-label">Alertar</label>
															<div>
																	<div class="row">
																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd" >
																					<input type="text" class="form-control" name="alerta" autocomplete="off">
																					<span class="input-group-btn">
																					<button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
																					<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
																					</span>
																			</div>
																	</div>
															</div>
													</div><!-- //form-group-->
													<div class="form-group">
															<label class="control-label">Vencimiento</label>
															<div>
																	<div class="row">
																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd" >
																					<input type="text" class="form-control" name="vencimiento" autocomplete="off">
																					<span class="input-group-btn">
																					<button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
																					<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
																					</span>
																			</div>
																	</div>
															</div>
													</div><!-- //form-group-->
													<div class="form-group">
															<label class="control-label">Observaciones</label>
															<div>
																	<textarea class="form-control" rows="3" data-height="auto" placeholder="Observaciones" name="observaciones" ></textarea>
															</div>
													</div>
                          <div class="form-group iCheck" data-color="green">
                                <div class="row">
                                  <div class="col-lg-4">
                                  </div>
                                    <div class="col-lg-4">
                                      <input type="checkbox" name="alertarme">
                                      <label>Alertarme</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <input type="checkbox" name="alertar">
                                      <label>Alertar al Cliente</label>
                                    </div>
                                </div>
                          </div>

										</section>
											<div class="form-group offset">
													<div>
															<button type="submit" class="btn btn-success">Guardar</button>
															<button type="reset" class="btn">Cancelar</button>
													</div>
											</div>
									</form>
								</div>
						</div>
						<!-- //content > row-->

				</div>
				<!-- //content-->


		</div>
		<!-- //main-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#servicios").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client").html(producto_select);
          });
      });
    });

    </script>



</div>
@endsection
