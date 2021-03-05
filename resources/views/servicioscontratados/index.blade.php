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
																					<th class="text-center">Fecha Alta</th>
																					<th  class="text-center">Cliente</th>
																					<th class="text-center">Servicio</th>
																					<th class="text-center">Alerta</th>
																					<th class="text-center">Editar</th>
																			</tr>
																	</thead>
																	<tbody align="center">
                                      @forelse($servicioscontratados as $servicioscontratadosItem)
																			<tr class="odd gradeX">
																					<td>{{$servicioscontratadosItem['created_at']}}</td>
																					<td>{{$servicioscontratadosItem['razonsocial_cliente']}}</td>
																					<td>{{$servicioscontratadosItem['nombre_subservicio']}}</td>
																					<td class="center">{{$servicioscontratadosItem['alerta_serviciocontratado']}}</td>
																					<td class="center"><a href="{{route('servicioscontratados.edit',$servicioscontratadosItem['id_serviciocontratado'])}}">Editar</a> </td>
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
