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
									<form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('quote.update',[$quote[0]->id, 1])}}">
                      @csrf @method('PATCH')
                    <section class="panel">
                        <header class="panel-heading">
                            <h2> Editar  Presupuesto </h2>
                        </header>
                        <div class="panel-body align-lg-center">

													<div class="form-group">
															<label class="control-label">Cliente</label>
															<div>
                                <input type="text" name="" value="{{$quote[0]->razonsocial_cliente}}" class="form-control">
                                <input type="hidden" name="cliente" value="{{$quote[0]->clientid}}" class="form-control">
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
      																						</tr>
      																				</thead>
      																				<tbody align="">
      																						<tr>
      																								<td>1</td>
                                                      <td><input type="number" name="cantidad1"  id="cantidad1" <?php if (isset($itemquotes[0]->servicio_cantidad)): ?>  value="{{$itemquotes[0]->servicio_cantidad}}"  <?php endif; ?>  class="form-control" required > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios"  name="servicio" style="padding-bottom:5px" required>
                                                          <?php if (isset($itemquotes[0])): ?>
                                                            <option value="{{$itemquotes[0]->servicio_serviciocontratado}}">{{$itemquotes[0]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client"  name="subservicio" data-size="10" data-live-search="true" onchange="OnSelectChange(this)" required>
                                                          <?php if (isset($itemquotes[0])): ?>
                                                            <option value="{{$itemquotes[0]->sub_servicio_serviciocontratado}}">{{$itemquotes[0]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price" type="text" name="cotizacion" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[0])): ?>  value="{{$itemquotes[0]->cotizacion_serviciocontratado}}"   <?php endif; ?> required />
                                                      </td>
                                                      <?php if (isset($itemquotes[0])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[0]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
      																						</tr>
                                                  <tr>
      																								<td>2</td>
                                                      <td><input type="text" name="cantidad2" id="cantidad2" <?php if (isset($itemquotes[1]->servicio_cantidad)): ?>  value="{{$itemquotes[1]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios2"  name="servicio2" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[1])): ?>
                                                            <option value="{{$itemquotes[1]->servicio_serviciocontratado}}">{{$itemquotes[1]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price2="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client2"  name="subservicio2" data-size="10" data-live-search="true" onchange="OnSelectChange2(this)">
                                                          <?php if (isset($itemquotes[1])): ?>
                                                            <option value="{{$itemquotes[1]->sub_servicio_serviciocontratado}}">{{$itemquotes[1]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price2" type="text" name="cotizacion2" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[1])): ?>  value="{{$itemquotes[1]->cotizacion_serviciocontratado}}"   <?php endif; ?> />
                                                      </td>
                                                      <?php if (isset($itemquotes[1])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[1]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
      																						</tr>

                                                  <tr>
      																								<td>3</td>
                                                      <td><input type="text" name="cantidad3" id="cantidad3" <?php if (isset($itemquotes[2]->servicio_cantidad)): ?>  value="{{$itemquotes[2]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios3"  name="servicio3" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[2])): ?>
                                                            <option value="{{$itemquotes[2]->servicio_serviciocontratado}}">{{$itemquotes[2]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price3="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client3"  name="subservicio3" data-size="10" data-live-search="true" onchange="OnSelectChange3(this)">
                                                          <?php if (isset($itemquotes[2])): ?>
                                                            <option value="{{$itemquotes[2]->sub_servicio_serviciocontratado}}">{{$itemquotes[2]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price3" type="text" name="cotizacion3" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[2])): ?>  value="{{$itemquotes[2]->cotizacion_serviciocontratado}}"   <?php endif; ?> />
                                                      </td>
                                                      <?php if (isset($itemquotes[2])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[2]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
      																						</tr>
                                                  <tr>
      																								<td>4</td>
                                                      <td><input type="text" name="cantidad4" id="cantidad4" <?php if (isset($itemquotes[3]->servicio_cantidad)): ?>  value="{{$itemquotes[3]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
      																								<td>
                                                        <select  class="selectpicker form-control" id="servicios4"  name="servicio4" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[3])): ?>
                                                            <option value="{{$itemquotes[3]->servicio_serviciocontratado}}">{{$itemquotes[3]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price4="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                      	                                </select>
                                                      </td>
      																								<td>
                                                        <select class="form-control" id="client4"  name="subservicio4" data-size="10" data-live-search="true" onchange="OnSelectChange4(this)">
                                                          <?php if (isset($itemquotes[3])): ?>
                                                            <option value="{{$itemquotes[3]->sub_servicio_serviciocontratado}}">{{$itemquotes[3]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
      																								<td>
                                                         <input id="price4" type="text" name="cotizacion4" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[3])): ?>  value="{{$itemquotes[3]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[3])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[3]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
      																						</tr>
                                                  <tr>
                                                      <td>5</td>
                                                      <td><input type="text" name="cantidad5" id="cantidad5" <?php if (isset($itemquotes[4]->servicio_cantidad)): ?>  value="{{$itemquotes[4]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios5"  name="servicio5" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[4])): ?>
                                                            <option value="{{$itemquotes[4]->servicio_serviciocontratado}}">{{$itemquotes[4]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price5="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client5"  name="subservicio5" data-size="10" data-live-search="true" onchange="OnSelectChange5(this)">
                                                          <?php if (isset($itemquotes[4])): ?>
                                                            <option value="{{$itemquotes[4]->sub_servicio_serviciocontratado}}">{{$itemquotes[4]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price5" type="text" name="cotizacion5" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[4])): ?>  value="{{$itemquotes[4]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[4])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[4]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
                                                  </tr>
                                                  <tr>
                                                      <td>6</td>
                                                      <td><input type="text" name="cantidad6" id="cantidad6" <?php if (isset($itemquotes[5]->servicio_cantidad)): ?>  value="{{$itemquotes[5]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios6"  name="servicio6" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[5])): ?>
                                                            <option value="{{$itemquotes[5]->servicio_serviciocontratado}}">{{$itemquotes[5]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price6="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client6"  name="subservicio6" data-size="10" data-live-search="true" onchange="OnSelectChange6(this)">
                                                          <?php if (isset($itemquotes[5])): ?>
                                                            <option value="{{$itemquotes[5]->sub_servicio_serviciocontratado}}">{{$itemquotes[5]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price6" type="text" name="cotizacion6" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[5])): ?>  value="{{$itemquotes[5]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[5])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[5]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
                                                  </tr>
                                                  <tr>
                                                      <td>7</td>
                                                      <td><input type="text" name="cantidad7" id="cantidad7" <?php if (isset($itemquotes[6]->servicio_cantidad)): ?>  value="{{$itemquotes[6]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios7"  name="servicio7" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[6])): ?>
                                                            <option value="{{$itemquotes[6]->servicio_serviciocontratado}}">{{$itemquotes[6]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price7="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client7"  name="subservicio7" data-size="10" data-live-search="true" onchange="OnSelectChange7(this)">
                                                          <?php if (isset($itemquotes[6])): ?>
                                                            <option value="{{$itemquotes[6]->sub_servicio_serviciocontratado}}">{{$itemquotes[6]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price7" type="text" name="cotizacion7" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[6])): ?>  value="{{$itemquotes[6]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[6])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[6]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
                                                  </tr>
                                                  <tr>
                                                      <td>8</td>
                                                      <td><input type="text" name="cantidad8" id="cantidad8" <?php if (isset($itemquotes[7]->servicio_cantidad)): ?>  value="{{$itemquotes[7]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios8"  name="servicio8" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[7])): ?>
                                                            <option value="{{$itemquotes[7]->servicio_serviciocontratado}}">{{$itemquotes[7]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price8="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client8"  name="subservicio8" data-size="10" data-live-search="true" onchange="OnSelectChange8(this)">
                                                          <?php if (isset($itemquotes[7])): ?>
                                                            <option value="{{$itemquotes[7]->sub_servicio_serviciocontratado}}">{{$itemquotes[7]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price8" type="text" name="cotizacion8" placeholder="Cotizacion estimada" class="form-control"  <?php if (isset($itemquotes[7])): ?>  value="{{$itemquotes[7]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[7])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[7]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
                                                  </tr>
                                                  <tr>
                                                      <td>9</td>
                                                      <td><input type="text" name="cantidad9"  id="cantidad9" <?php if (isset($itemquotes[8]->servicio_cantidad)): ?>  value="{{$itemquotes[8]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios9"  name="servicio9" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[8])): ?>
                                                            <option value="{{$itemquotes[8]->servicio_serviciocontratado}}">{{$itemquotes[8]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price9="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                                                       </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client9"  name="subservicio9" data-size="10" data-live-search="true" onchange="OnSelectChange9(this)">
                                                          <?php if (isset($itemquotes[8])): ?>
                                                            <option value="{{$itemquotes[8]->sub_servicio_serviciocontratado}}">{{$itemquotes[8]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price9" type="text" name="cotizacion9" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[8])): ?>  value="{{$itemquotes[8]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[8])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[8]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
                                                  </tr>
                                                  <tr>
                                                      <td>10</td>
                                                      <td><input type="text" name="cantidad10" id="cantidad10" <?php if (isset($itemquotes[9]->servicio_cantidad)): ?>  value="{{$itemquotes[9]->servicio_cantidad}}"  <?php endif; ?> class="form-control"  > </td>
                                                      <td>
                                                        <select  class="selectpicker form-control" id="servicios10"  name="servicio10" style="padding-bottom:5px">
                                                          <?php if (isset($itemquotes[9])): ?>
                                                            <option value="{{$itemquotes[9]->servicio_serviciocontratado}}">{{$itemquotes[9]->nombre_servicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione una Opcion</option>
                                                          <?php endif; ?>
                                                          @forelse($serviciosPadre as $itemservicios)
                                                           <option data-price10="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                                           @empty
                                                             No hay resultados
                                                         @endforelse
                                                        </select>
                                                      </td>
                                                      <td>
                                                        <select class="form-control" id="client10"  name="subservicio10" data-size="10" data-live-search="true" onchange="OnSelectChange10(this)">
                                                          <?php if (isset($itemquotes[9])): ?>
                                                            <option value="{{$itemquotes[9]->sub_servicio_serviciocontratado}}">{{$itemquotes[9]->nombre_subservicio}}</option>
                                                          <?php else: ?>
                                                            <option value="">Seleccione Un Servicio</option>
                                                          <?php endif; ?>
                                                        </select>
                                                      </td>
                                                      <td>
                                                         <input id="price10" type="text" name="cotizacion10" placeholder="Cotizacion estimada" class="form-control" <?php if (isset($itemquotes[9])): ?>  value="{{$itemquotes[9]->cotizacion_serviciocontratado}}"   <?php endif; ?>/>
                                                      </td>
                                                      <?php if (isset($itemquotes[9])): ?>
                                                        <td><input type="text" name="servicio_detalle" value="{{$itemquotes[9]->servicio_detalle}}"> </td>
                                                      <?php else: ?>
                                                        <td><input type="text" name="servicio_detalle" value=""> </td>
                                                      <?php endif; ?>
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
																		<option value="{{$quote[0]->empresa}}">{{$quote[0]->empresa}}</option>
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
																		<option value="{{$quote[0]->banco}}">{{$quote[0]->banco}}</option>
		                                <option value="provincia">Provincia</option>
																		<option value="nacion">Banco Nacion</option>
																		<option value="galicia">Galicia</option>
		                              </select>
		                          </div>
		                      </div>

                          <div class="form-group">
                              <label class="control-label">Condiciones de pago</label>
                              <div>
                                  <textarea type="text" name="paymentcondition" class="form-control" placeholder="Condicion de pago">{{$quote[0]->paymentcondition}}</textarea>
                              </div>
                          </div>
													<div class="form-group">
                              <label class="control-label">Forma de pago</label>
                              <div class="row">
																<div class="col-lg-4">
																	<input type="text" name="paymentform1" class="form-control" placeholder="Primer Valor" required value="{{$quote[0]->paymentform1}}">
																</div>
																<div class="col-lg-4">
																	<input type="text" name="paymentform2" class="form-control" placeholder="Segundo Valor" required value="{{$quote[0]->paymentform2}}">
																</div>
																<div class="col-lg-4">
																	<input type="text" name="paymentform3" class="form-control" placeholder="Tercer Valor" required value="{{$quote[0]->paymentform3}}">
																</div>
                              </div>
                          </div>
													<div class="form-group">
															<label class="control-label">Observaciones</label>
															<div>
																	<textarea type="text" name="observation" class="form-control" placeholder="Observaciones">{{$quote[0]->observation}}</textarea>
															</div>
													</div>
                        </div>
                    </section>

											<div class="form-group offset">
													<div>
															<button type="submit" class="btn btn-success">Guardar</button>
															<button type="reset" class="btn">Cancelar</button>
                              <a href="{{route('createfc',$quote[0]->id)}}" class="btn btn-primary">Aprobar Cotizacion</a>
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
