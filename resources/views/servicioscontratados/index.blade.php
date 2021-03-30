@extends('layouts.app')
@section('content')
<div id="wrapper">
		<div id="main">
			<div id="content">
					<div class="row">
							<div class="col-lg-12">
									<section class="panel">
											<header class="panel-heading">
												<div class="row">
													<div class="col-lg-6">
														<h2>Servicos Contratados </h2>
													</div>
													<div class="col-lg-6 text-right">
													 <a href="{{route('servicioscontratados.create')}}" class="add"><i class="fa fa-plus-circle"></i>Servicos Contratados</a>
													</div>
												</div>
											</header>
											<div class="panel-body">
													<form>
															<table class="table table-striped" id="table-example">
																	<thead>
																			<tr>
																					<th  class="text-left">Cliente</th>
																					<th class="text-left" width="350px" >Tramite</th>
																					<th class="text-left">N° de Presupuesto</th>
																					<th class="text-left">Monto</th>

																					<th class="text-left">Cond. Pago</th>

																					<th class="text-left">Pago 1</th>
																					<th class="text-left">Pago 2</th>
																					<th class="text-left">Pago 3</th>

																					<th class="text-left">Alerta</th>
																					<th class="text-left">Editar</th>
																			</tr>
																	</thead>
																	<tbody align="left">
                                      @forelse($servicioscontratados as $servicioscontratadosItem)
																			<tr class="odd gradeX">
																					<td>{{$servicioscontratadosItem->razonsocial_cliente}}</td>
																					<td>{{$servicioscontratadosItem->nombre_servicio}} <br> {{$servicioscontratadosItem->nombre_subservicio}}</td>
																					<td>{{$servicioscontratadosItem->quote}}</td>
																					<td>{{$servicioscontratadosItem->cotizacion_serviciocontratado}}</td>

																					<td>
																						{{$servicioscontratadosItem->paymentform1}}|{{$servicioscontratadosItem->paymentform2}}|{{$servicioscontratadosItem->paymentform3}}
																					</td>
																					<td>
																									<a href="<?php
																									if ($servicioscontratadosItem->serviciocontratado_pago1 == "0"){
																										echo route('payment.create',[$servicioscontratadosItem->id_serviciocontratado,'1']);
																									};
																									if ($servicioscontratadosItem->serviciocontratado_pago1 == "1"){
																										echo route('payment.edit',[$servicioscontratadosItem->id_serviciocontratado,'1']);
																									};
																									if ($servicioscontratadosItem->serviciocontratado_pago1 == "2"){
																										echo route('payment.edit',[$servicioscontratadosItem->id_serviciocontratado,'1']);
																									};
																									?>" class="
																								<?php
																								if ($servicioscontratadosItem->serviciocontratado_pago1 == "0"){
																									echo "btn btn-primary";
																								};

																								if ($servicioscontratadosItem->serviciocontratado_pago1 == "1"){
																									echo "btn btn-danger";
																								};

																								if ($servicioscontratadosItem->serviciocontratado_pago1 == "2"){
																									echo "btn btn-success";
																								};
																								?>
																							">
																							{{ (($servicioscontratadosItem->cotizacion_serviciocontratado) * $servicioscontratadosItem->paymentform1 ) / 100 }}
																						</a>
																					</td>
																					<td>
																									<a href="<?php
																									if ($servicioscontratadosItem->serviciocontratado_pago2 == "0"){
																										echo route('payment.create',[$servicioscontratadosItem->id_serviciocontratado,'2']);
																									};
																									if ($servicioscontratadosItem->serviciocontratado_pago2 == "1"){
																										echo route('payment.edit',[$servicioscontratadosItem->id_serviciocontratado,'2']);
																									};
																									if ($servicioscontratadosItem->serviciocontratado_pago2 == "2"){
																										echo route('payment.edit',[$servicioscontratadosItem->id_serviciocontratado,'2']);
																									};
																									?>" class="
																								<?php
																								if ($servicioscontratadosItem->serviciocontratado_pago2 == "0"){
																									echo "btn btn-primary";
																								};

																								if ($servicioscontratadosItem->serviciocontratado_pago2 == "1"){
																									echo "btn btn-danger";
																								};

																								if ($servicioscontratadosItem->serviciocontratado_pago2 == "2"){
																									echo "btn btn-success";
																								};
																								?>
																							">
																							{{ (($servicioscontratadosItem->cotizacion_serviciocontratado) * $servicioscontratadosItem->paymentform2 ) / 100 }}
																						</a>
																					</td>
																					<td>
																									<a href="<?php
																									if ($servicioscontratadosItem->serviciocontratado_pago3 == "0"){
																										echo route('payment.create',[$servicioscontratadosItem->id_serviciocontratado,'3']);
																									};
																									if ($servicioscontratadosItem->serviciocontratado_pago3 == "1"){
																										echo route('payment.edit',[$servicioscontratadosItem->id_serviciocontratado,'3']);
																									};
																									if ($servicioscontratadosItem->serviciocontratado_pago3 == "2"){
																										echo route('payment.edit',[$servicioscontratadosItem->id_serviciocontratado,'3']);
																									};
																									?>" class="
																								<?php
																								if ($servicioscontratadosItem->serviciocontratado_pago3 == "0"){
																									echo "btn btn-primary";
																								};

																								if ($servicioscontratadosItem->serviciocontratado_pago3 == "1"){
																									echo "btn btn-danger";
																								};

																								if ($servicioscontratadosItem->serviciocontratado_pago3 == "2"){
																									echo "btn btn-success";
																								};
																								?>
																							">
																							{{ (($servicioscontratadosItem->cotizacion_serviciocontratado) * $servicioscontratadosItem->paymentform3 ) / 100 }}
																						</a>
																					</td>

																					<td class="left">{{$servicioscontratadosItem->alerta_serviciocontratado}}</td>
																					<td class="left"><a href="{{route('servicioscontratados.edit',$servicioscontratadosItem->id_serviciocontratado)}}">Editar</a> </td>
																			</tr>
                                      @empty
                                        No hay resultados
                                      @endforelse
																	</tbody>
															</table>
													</form>
											</div>
									</section>

							</div>

					</div>
					<!-- //content > row-->

			</div>


		</div>
		<!-- //main-->
</div>
<!-- //wrapper-->
@endsection
