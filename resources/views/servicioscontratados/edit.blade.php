@extends('layouts.app')
@section('content')
<script type="text/javascript">
  function destroy(){
    document.getElementById('destroy').submit();
  }

  function OnSelectChange(event) {
      document.getElementById('price').value = event.selectedOptions[0].getAttribute('data-price');
  }
</script>
<div id="wrapper">
		<div id="main">
				<div id="content">

						<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-7">
									<form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('servicioscontratados.update',$servicioscontratados[0]['id_serviciocontratado'])}}">
                    @csrf @method('PATCH')
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
                                  <option value="{{$servicioscontratados[0]['cliente__serviciocontratado']}}"> {{$servicioscontratados[0]['razonsocial_cliente']}} </option>
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
                                  <select  class="selectpicker form-control" id="servicios">
                                    <option value="{{$servicepadre[0]['id_servicio']}}">{{$servicepadre[0]['nombre_servicio']}}</option>
                                    @forelse($serviciosPadre as $itemservicios)
                                      <option value="{{$itemservicios['id_servicio']}}">{{$itemservicios['nombre_servicio']}}</option>
                                      @empty
                                        No hay resultados
                                    @endforelse
                                  </select>
                                  <select class="form-control" id="client"  name="servicio" data-size="10" data-live-search="true" onchange="OnSelectChange(this)">
                                      <option value="{{$servicioscontratados[0]['servicio_serviciocontratado']}}">{{$servicioscontratados[0]['nombre_subservicio']}}</option>
                                  </select>
                                </div>





                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group">
                                <label class="control-label">Cotizacion</label>
                                <div class="">
                                  <input id="price" name="cotizacion" type="text" class="form-control" placeholder="Cotizacion Estimada"  value="{{$servicioscontratados[0]['cotizacion_serviciocontratado']}}">
                                </div>
                              </div>
                            </div>
                          </div>
													<div class="form-group">
															<label class="control-label">Alertar</label>
															<div>
																	<div class="row">
																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd" >
																					<input type="text" class="form-control" autocomplete="off" name="alerta"value="{{$servicioscontratados[0]['alerta_serviciocontratado']}}">
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
																					<input type="text" class="form-control" autocomplete="off" name="vencimiento" value="{{$servicioscontratados[0]['vencimiento_serviciocontratado']}}">
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
																	<textarea class="form-control" rows="3" data-height="auto" placeholder="Observaciones" name="observaciones" >{{$servicioscontratados[0]['observciones_serviciocontratado']}}</textarea>
															</div>
													</div>
                          <div class="form-group iCheck" data-color="green">
                                <div class="row">
                                  <div class="col-lg-4">
                                  </div>
                                    <div class="col-lg-4">
                                      <input type="checkbox" name="alertarme" <?php if($servicioscontratados[0]['alertami_serviciocontratado'] <> "") echo "checked" ?> >
                                      <label>Alertarme</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <input type="checkbox" name="alertar" <?php if($servicioscontratados[0]['alertacliente_serviciocontratado'] <> "") echo "checked" ?> >
                                      <label>Alertar al Cliente</label>
                                    </div>
                                </div>
                          </div>

										</section>
											<div class="form-group offset">
													<div>
															<button type="submit" class="btn btn-success">Actualizar</button>
															<button type="reset" class="btn">Cancelar</button>
                              <button type="button" onclick="destroy()" class="btn btn-danger">Borrar</button>
													</div>
											</div>
									</form>
                  <!-- form delete -->
                  <form class="" action="{{route('servicioscontratados.destroy', $servicioscontratados[0]['id_serviciocontratado'])}}" method="post" id="destroy">
                    @csrf @method('DELETE')

                  </form>
								</div>
						</div>
						<!-- //content > row-->

				</div>
				<!-- //content-->


		</div>
		<!-- //main-->
</div>

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

@endsection
