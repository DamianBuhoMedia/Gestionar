@extends('layouts.app')
@section('content')
<div id="wrapper">
		<div id="main">
				<div id="content">
						<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-7">
									<form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('quote.update',$quote[0]->id)}}">
                      @csrf @method('PATCH')
                    <section class="panel">
                        <header class="panel-heading">
                            <h3>Presupuesto N°  {{$quote[0]->id}}</h3>
                        </header>
                        <div class="panel-body align-lg-left">

													<div class="form-group">
															<label class="control-label">Cliente</label>
															<div>
                                  {{$quote[0]->razonsocial_cliente}}
															</div>
													</div>

                          <section class="panel">
      												<div class="panel-body">
      																<div class="table-responsive" style="">
      																		<table class="table" style="text-align:center">
      																				<thead>
      																						<tr>
                                                    <th>Cantidad</th>
      																								<th  style="width:37%">Servicios</th>
      																								<th  style="width:37%">Subservicio</th>
      																								<th  style="width:20%">Cotizacion</th>
																											<th  style="width:20%">detalle</th>
      																						</tr>
      																				</thead>
      																				<tbody align="">
                                                @forelse($itemquotes as $itemquotesItem)
      																						<tr>
                                                      <td>{{$itemquotesItem->servicio_cantidad}}</td>
      																								<td>{{$itemquotesItem->nombre_servicio}}</td>
      																								<td>{{$itemquotesItem->nombre_subservicio}}</td>
      																								<td>{{$itemquotesItem->cotizacion_serviciocontratado}}</td>
																											<td>{{$itemquotesItem->servicio_detalle}}</td>
      																						</tr>
                                                  @empty
                                                    No hay resultados
                                                  @endforelse
      																				</tbody>
      																		</table>
      														</div>
      												</div>
      										</section>

													<div class="form-group">
		                          <label class="control-label">Empresa</label>
		                          <div>
		                              {{$quote[0]->empresa}}
		                          </div>
		                      </div>

													<div class="form-group">
		                          <label class="control-label">Datos Banco</label>
		                          <div>
		                              {{$quote[0]->banco}}
		                          </div>
		                      </div>

                          <div class="form-group">
                              <label class="control-label">Condiciones de pago</label>
                              <div>
                                {{$quote[0]->paymentcondition}}
                              </div>
                          </div>
													<div class="form-group">
                              <label class="control-label">Forma de pago</label>
                              <div class="row">
																<div class="col-lg-4">
																	{{$quote[0]->paymentform1}}
																</div>
																<div class="col-lg-4">
																	{{$quote[0]->paymentform2}}
																</div>
																<div class="col-lg-4">
																{{$quote[0]->paymentform3}}
																</div>
                              </div>
                          </div>
													<div class="form-group">
															<label class="control-label">Observaciones</label>
															<div>
																	{{$quote[0]->observation}}
															</div>
													</div>
                        </div>
                    </section>

											<div class="form-group offset">
													<div>
                              <a href="{{route('printquote',$quote[0]->id)}}" class="btn btn-primary">Imprimir</a>
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



      $("#servicios2").change(function(){
					var selected = $(this).children("option:selected").val();
					var type = $(this).val();
					$.get('../getsubservicio/'+type, function(data){
							console.log(data);
							var producto_select = '<option value="">Seleccione una opcion</option>'
								for (var i=0; i<data.length;i++)
									producto_select+='<option  data-price2="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
								$("#client2").html(producto_select);
					});
			});

      $("#servicios3").change(function(){
					var selected = $(this).children("option:selected").val();
					var type = $(this).val();
					$.get('../getsubservicio/'+type, function(data){
							console.log(data);
							var producto_select = '<option value="">Seleccione una opcion</option>'
								for (var i=0; i<data.length;i++)
									producto_select+='<option  data-price3="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
								$("#client3").html(producto_select);
					});
			});

      $("#servicios4").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price4="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client4").html(producto_select);
          });
      });

      $("#servicios5").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price5="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client5").html(producto_select);
          });
      });

      $("#servicios6").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price6="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client6").html(producto_select);
          });
      });

      $("#servicios7").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price7="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client7").html(producto_select);
          });
      });

      $("#servicios8").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price8="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client8").html(producto_select);
          });
      });

      $("#servicios9").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price9="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client9").html(producto_select);
          });
      });

      $("#servicios10").change(function(){
          var selected = $(this).children("option:selected").val();
          var type = $(this).val();
          $.get('../getsubservicio/'+type, function(data){
              console.log(data);
              var producto_select = '<option value="">Seleccione una opcion</option>'
                for (var i=0; i<data.length;i++)
                  producto_select+='<option  data-price10="'+ data[i].precio_subservicio +'" value="'+data[i].id_subservicio+'" >'+data[i].nombre_subservicio+'</option>';
                $("#client10").html(producto_select);
          });
      });






		});

		</script>


</div>
@endsection
