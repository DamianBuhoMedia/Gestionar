@extends('layouts.app')
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
                            <h2> Nueva Factura </h2>
                            <label class="color">Datos del Servicio</label>
														<strong><p>Se generará una nueva factura para estos datos:</p></strong>
														<p>N° de Orden: <strong>{{$serviciocontratado[0]['id_serviciocontratado']}}</strong> </p>
														<p>Cliente: <strong>{{$serviciocontratado[0]['razonsocial_cliente']}}</strong> </p>
														<p>Servicio: <strong>{{$serviciocontratado[0]['nombre_servicio']}}</strong></p>
														<p>Sub Servicio: <strong>{{$serviciocontratado[0]['nombre_subservicio']}}</strong></p>
														<p>Monto: <strong>{{$serviciocontratado[0]['cotizacion_serviciocontratado']}}</strong></p>
                        </header>
                        <div class="panel-body align-lg-center">

													<div class="form-group">
		                          <label class="control-label">Empresa</label>
		                          <div>
		                              <select  class="selectpicker form-control" name="provincia">
																		<option value="">Seleccionar Empresa</option>
		                                <option value="gestionar">Gestionar</option>
																		<option value="fernando">Fernando</option>
																		<option value="liliana">Liliana</option>
		                              </select>
		                          </div>
		                      </div>

													<div class="form-group">
		                          <label class="control-label">Datos Banco</label>
		                          <div>
		                              <select  class="selectpicker form-control" name="provincia">
																		<option value="">Seleccionar Banco</option>
		                                <option value="provincia">Provincia</option>
																		<option value="nacion">Banco Nacion</option>
																		<option value="galicia">Galicia</option>
		                              </select>
		                          </div>
		                      </div>

                          <div class="form-group">
                              <label class="control-label">Condiciones de pago</label>
                              <div>
                                  <textarea type="text" name="nombre" class="form-control" placeholder="Condicion de pago"></textarea>
                              </div>
                          </div>
													<div class="form-group">
                              <label class="control-label">Forma de pago</label>
                              <div class="row">
																<div class="col-lg-4">
																	<input type="text" name="nombre" class="form-control" placeholder="Primer Valor">
																</div>
																<div class="col-lg-4">
																	<input type="text" name="nombre" class="form-control" placeholder="Segundo Valor">
																</div>
																<div class="col-lg-4">
																	<input type="text" name="nombre" class="form-control" placeholder="Tercer Valor">
																</div>
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




</div>
@endsection
