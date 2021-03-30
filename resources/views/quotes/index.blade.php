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
														<h2>Presupuestos </h2>
													</div>
													<div class="col-lg-6 text-right">
													 <a href="{{route('quote.create')}}" class="add"><i class="fa fa-plus-circle"></i>Presupuesto</a>
													</div>
												</div>
											</header>
											<div class="panel-body">
													<form>
															<table class="table table-striped" id="table-example">
																	<thead>
																			<tr>
																					<th class="text-center">N° de Presupuesto</th>
																					<th class="text-center">Fecha Alta</th>
																					<th  class="text-center">Cliente</th>
																					<th class="text-center">Monto</th>
                                          <th class="text-center">Editar</th>
																			</tr>
																	</thead>
																	<tbody align="center">
                                      @forelse($quotes as $quotesItem)
																			<tr class="odd gradeX">
																					<td>{{$quotesItem->id}}</td>
																					<td>{{$quotesItem->created_at}}</td>
																					<td>{{$quotesItem->razonsocial_cliente}}</td>
                                          <td>{{$quotesItem->amount}}</td>
																					<td class="center"><a href="{{route('quote.edit',$quotesItem->id)}}">Editar</a> </td>
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
