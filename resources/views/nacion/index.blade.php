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
														<h2>Tramites Nacion </h2>
													</div>
													<div class="col-lg-6 text-right">
													 <a href="{{route('quote.create')}}" class="add"><i class="fa fa-plus-circle"></i>Presupuesto</a>
													</div>
												</div>
											</header>
											<div class="panel-body">
													<form>
															<div class="tabbable">
																	<ul class="nav nav-tabs" data-provide="tabdrop">
																			<li class="active"><a href="#tab1" data-toggle="tab">PRESENTACION INFO GENERAL</a></li>
																			<li><a href="#tab2" data-toggle="tab">Seguimiento TAD</a></li>
																			<li><a href="#tab3" data-toggle="tab">Seguimiento  SIMEL</a></li>
																			<li><a href="#tab4" data-toggle="tab">NCA</a></li>
																			<li><a href="#tab5" data-toggle="tab">SEGUIMIENTO TASAS</a></li>
																	</ul>
																	<div class="tab-content">
																			<div class="tab-pane fade in active" id="tab1">
																				<table class="table table-striped" id="table-example">
																						<thead>
																								<tr>
																										<th class="text-center">ID</th>
																										<th class="text-center">Empresa</th>
																										<th class="text-center">Expediente</th>
																										<th  class="text-center">Tramite solcitado</th>
																										<th  class="text-center">Inicio</th>
																										<th  class="text-center">Fecha última consulta /dias transcurridos</th>
																										<th  class="text-center">Estado</th>
																										<th class="text-center">Editar</th>
																								</tr>
																						</thead>
																						<tbody align="center">
																								@forelse($nacion as $nacionItem)
																								<tr class="odd gradeX">
																										<td>{{$nacionItem->id}}</td>
																										<td>{{$nacionItem->empresa}}</td>
																										<td>{{$nacionItem->expediente}}</td>
																										<td>{{$nacionItem->tramite}}</td>
																										<td>{{$nacionItem->inicio}}</td>
																										<td>{{$nacionItem->c1}}</td>
																										<td>{{$nacionItem->id}}</td>
																										<td class="center"><a href="{{route('quote.edit',$nacionItem->id)}}">Editar</a> </td>
																								</tr>
																								@empty
																									No hay resultados
																								@endforelse
																						</tbody>
																				</table>
																			</div>
																			<div class="tab-pane fade" id="tab2">
																					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
																			</div>
																			<div class="tab-pane fade" id="tab3">
																					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
																			</div>
																			<div class="tab-pane fade" id="tab4">
																					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
																			</div>
																			<div class="tab-pane fade" id="tab5">
																					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
																			</div>
																	</div>
															</div>
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
