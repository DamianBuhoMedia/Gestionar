@extends('layouts.app')
<script type="text/javascript">
function OnSelectChange(event) {
    document.getElementById('price').value = (event.selectedOptions[0].getAttribute('data-price') * document.getElementById('cantidad1').value);
}

function OnSelectChange2(event) {
    document.getElementById('price2').value = (event.selectedOptions[0].getAttribute('data-price2') * document.getElementById('cantidad2').value);
}

function OnSelectChange3(event) {
    document.getElementById('price3').value = (event.selectedOptions[0].getAttribute('data-price3') * document.getElementById('cantidad3').value);
}
function OnSelectChange4(event) {
    document.getElementById('price4').value = (event.selectedOptions[0].getAttribute('data-price4') * document.getElementById('cantidad4').value);
}
function OnSelectChange5(event) {
    document.getElementById('price5').value = (event.selectedOptions[0].getAttribute('data-price5') * document.getElementById('cantidad5').value);
}
function OnSelectChange6(event) {
    document.getElementById('price6').value = (event.selectedOptions[0].getAttribute('data-price6') * document.getElementById('cantidad6').value);
}
function OnSelectChange7(event) {
    document.getElementById('price7').value = (event.selectedOptions[0].getAttribute('data-price7') * document.getElementById('cantidad7').value);
}
function OnSelectChange8(event) {
    document.getElementById('price8').value = (event.selectedOptions[0].getAttribute('data-price8') * document.getElementById('cantidad8').value);
}
function OnSelectChange9(event) {
    document.getElementById('price9').value = (event.selectedOptions[0].getAttribute('data-price9') * document.getElementById('cantidad9').value);
}
function OnSelectChange10(event) {
    document.getElementById('price10').value = (event.selectedOptions[0].getAttribute('data-price10') * document.getElementById('cantidad10').value);
}
</script>
@section('content')
<div id="wrapper">
		<div id="main">
				<div id="content">
						<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-7">
									<form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('quote.store')}}">
                    @csrf
                    <section class="panel">
                        <header class="panel-heading">
                            <h2> Nuevo Presupuesto </h2>
                        </header>
                        <div class="panel-body align-lg-center">

													<div class="form-group">
															<label class="control-label">Cliente</label>
															<div>
																<select  class="selectpicker form-control" name="cliente" required>
                                  <option value=""> Seleccione un cliente </option>
                                  @forelse($clientes as $clientesitem)
                                    <option value="{{$clientesitem['id_cliente']}}">{{$clientesitem['razonsocial_cliente']}}</option>
                                    @empty
                                      No hay resultados
                                    @endforelse
																</select>
															</div>
													</div>

                          <section class="panel">
      												<div class="panel-body">
      																<div class="table-responsive" style="height:750px">
      																		<table class="table">
      																				<thead>
      																						<tr>
      																								<th  style="width:4%">#</th>
                                                      <th  style="width:4%">Cantidad</th>
      																								<th  style="width:35%">Servicios</th>
      																								<th  style="width:35%">Subservicio</th>
      																								<th  style="width:20%">Cotizacion</th>
                                                      <th  style="width:20%">detalle</th>
      																						</tr>
      																				</thead>
      																				<tbody align="">
      																						<tr>
      																								<td>1</td>
                                                      <td><input type="number" name="cantidad1"  id="cantidad1" value="" class="form-control" required > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios"  name="servicio" style="padding-bottom:5px" required>
                                                          <option value="">Selecione una Opcion</option>
                      	                                  @forelse($serviciosPadre as $itemservicios)
                      	                                    <option data-price="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                      	                                    @empty
                      	                                      No hay resultados
                      	                                  @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client"  name="subservicio" data-size="10" data-live-search="true" onchange="OnSelectChange(this)" required>
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price" type="text" name="cotizacion" placeholder="Cotizacion estimada" class="form-control" required />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle" value=""> </td>
      																						</tr>


                                                  <tr>
      																								<td>2</td>
                                                      <td><input type="text" name="cantidad2" id="cantidad2" value="" class="form-control"  > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios2"  name="servicio2" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                      	                                  @forelse($serviciosPadre as $itemservicios)
                      	                                    <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                      	                                    @empty
                      	                                      No hay resultados
                      	                                  @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client2"  name="subservicio2" data-size="10" data-live-search="true" onchange="OnSelectChange2(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price2" type="text" name="cotizacion2" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle2" value=""> </td>
      																						</tr>

                                                  <tr>
      																								<td>3</td>
                                                      <td><input type="text" name="cantidad3" id="cantidad3" value="" class="form-control"  > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios3"  name="servicio3" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                      	                                  @forelse($serviciosPadre as $itemservicios)
                      	                                    <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                      	                                    @empty
                      	                                      No hay resultados
                      	                                  @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client3"  name="subservicio3" data-size="10" data-live-search="true" onchange="OnSelectChange3(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price3" type="text" name="cotizacion3" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle3" value=""> </td>
      																						</tr>



                                                  <tr>
      																								<td>4</td>
                                                      <td><input type="text" name="cantidad4" id="cantidad4" value="" class="form-control"  > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios4"  name="servicio4" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                      	                                  @forelse($serviciosPadre as $itemservicios)
                      	                                    <option data-price4="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                      	                                    @empty
                      	                                      No hay resultados
                      	                                  @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client4"  name="subservicio4" data-size="10" data-live-search="true" onchange="OnSelectChange4(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price4" type="text" name="cotizacion4" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle4" value=""> </td>
      																						</tr>
                                                  <tr>
                                                      <td>5</td>
                                                      <td><input type="text" name="cantidad5" id="cantidad5" value="" class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios5"  name="servicio5" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                            <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                            @empty
                                                              No hay resultados
                                                          @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client5"  name="subservicio5" data-size="10" data-live-search="true" onchange="OnSelectChange5(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price5" type="text" name="cotizacion5" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle5" value=""> </td>
                                                  </tr>
                                                  <tr>
                                                      <td>6</td>
                                                      <td><input type="text" name="cantidad6" id="cantidad6" value="" class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios6"  name="servicio6" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                            <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                            @empty
                                                              No hay resultados
                                                          @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client6"  name="subservicio6" data-size="10" data-live-search="true" onchange="OnSelectChange6(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price6" type="text" name="cotizacion6" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle6" value=""> </td>
                                                  </tr>
                                                  <tr>
                                                      <td>7</td>
                                                      <td><input type="text" name="cantidad7" id="cantidad7" value="" class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios7"  name="servicio7" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                            <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                            @empty
                                                              No hay resultados
                                                          @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client7"  name="subservicio7" data-size="10" data-live-search="true" onchange="OnSelectChange7(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price7" type="text" name="cotizacion7" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle7" value=""> </td>
                                                  </tr>
                                                  <tr>
                                                      <td>8</td>
                                                      <td><input type="text" name="cantidad8" id="cantidad8" value="" class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios8"  name="servicio8" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                            <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                            @empty
                                                              No hay resultados
                                                          @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client8"  name="subservicio8" data-size="10" data-live-search="true" onchange="OnSelectChange8(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price8" type="text" name="cotizacion8" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle8" value=""> </td>
                                                  </tr>
                                                  <tr>
                                                      <td>9</td>
                                                      <td><input type="text" name="cantidad9"  id="cantidad9" value="" class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios9"  name="servicio9" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                            <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                            @empty
                                                              No hay resultados
                                                          @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client9"  name="subservicio9" data-size="10" data-live-search="true" onchange="OnSelectChange9(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price9" type="text" name="cotizacion9" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle9" value=""> </td>
                                                  </tr>
                                                  <tr>
                                                      <td>10</td>
                                                      <td><input type="text" name="cantidad10" id="cantidad10" value="" class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios10"  name="servicio10" style="padding-bottom:5px">
                                                          <option value="">Selecione una Opcion</option>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                            <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                            @empty
                                                              No hay resultados
                                                          @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client10"  name="subservicio10" data-size="10" data-live-search="true" onchange="OnSelectChange10(this)">
                                                          <option value="">Seleccione Un Servicio</option>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price10" type="text" name="cotizacion10" placeholder="Cotizacion estimada" class="form-control" />
                                                      </td>
                                                      <td><input type="text" name="servicio_detalle10" value=""> </td>
                                                  </tr>







      																				</tbody>
      																		</table>
      														</div>
      												</div>
      										</section>

													<div class="form-group">
		                          <label class="control-label">Empresa</label>
		                          <div>
		                              <select  class="selectpicker form-control" name="empresa" required>
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
		                              <select  class="selectpicker form-control" name="banco" required>
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
                                  <textarea type="text" name="paymentcondition" class="form-control" placeholder="Condicion de pago"></textarea>
                              </div>
                          </div>
													<div class="form-group">
                              <label class="control-label">Forma de pago</label>
                              <div class="row">
																<div class="col-lg-4">
																	<input type="text" name="paymentform1" class="form-control" placeholder="Primer Valor" required>
																</div>
																<div class="col-lg-4">
																	<input type="text" name="paymentform2" class="form-control" placeholder="Segundo Valor" required>
																</div>
																<div class="col-lg-4">
																	<input type="text" name="paymentform3" class="form-control" placeholder="Tercer Valor" required>
																</div>
                              </div>
                          </div>
													<div class="form-group">
															<label class="control-label">Observaciones</label>
															<div>
																	<textarea type="text" name="observation" class="form-control" placeholder="Observaciones"></textarea>
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
					$.get('../public/public/getsubservicio/'+type, function(data){
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
					$.get('../public/public/getsubservicio/'+type, function(data){
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
					$.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
          $.get('../public/getsubservicio/'+type, function(data){
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
