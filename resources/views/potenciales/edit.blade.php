@extends('layouts.app')

@section('content')
<script type="text/javascript">
  function destroy(){
    document.getElementById('destroy').submit();
  }

  function convert(){
    document.getElementById('convert').submit();
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
                <form method="POST" class="form-horizontal" data-collabel="3" data-alignlabel="left" action="{{route('potenciales.update',$potencial['id_cliente'])}}">
                  @csrf @method('PATCH')
                  <section class="panel">
                      <header class="panel-heading">
                          <h2> Editar Cliente Potencial </h2>
                          <label class="color">Datos</label>
                      </header>
                      <div class="panel-body align-lg-center">
                        <div class="form-group">
                            <label class="control-label">Razon Social</label>
                            <div>
                                <input type="text" name="razonsocial" class="form-control" placeholder="Razon Social" value="{{$potencial['razonsocial_cliente']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefono</label>
                            <div>
                                <input type="text" name="telefono" class="form-control" placeholder="Telefono"  value="{{$potencial['telefono_cliente']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mail</label>
                            <div>
                                <input type="text" name="mailppal" class="form-control" placeholder="Mail principal"  value="{{$potencial['mail_cliente']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cargo</label>
                            <div>
                                <input type="text" name="cargo" class="form-control" placeholder="Cargo"  value="{{$potencial['cargo_cliente']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Productor</label>
                            <div>
                              <select  class="selectpicker form-control" name="productor">
                                <option value="{{$potencial['productor_cliente']}}">{{$data[0]['nombre_productor']}}</option>
                                  @forelse($productores as $productoresItem)
                                      <option value="{{$productoresItem['id_productor']}}">{{$productoresItem['nombre_productor']}}</option>
                                  @empty
                                    No hay productores
                                  @endforelse
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tramite a contratar</label>
                            <div>
                                <textarea name="tramite" class="form-control" rows="3" data-height="auto" placeholder="Tramite a contratar" >{{$potencial['tramite_cliente']}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-7">
                            <div class="form-group">
                              <label class="control-label">Servicio</label>
                              <div class="">
                                <select  class="selectpicker form-control" id="servicios" name="servicio" data-size="10" data-live-search="true" onchange="OnSelectChange(this)">
                                    <option value="{{$data[0]['servicio_cliente']}}">{{$data[0]['nombre_subservicio']}}</option>
                                  @forelse($subservicios as $itemservicios)
                                    <option data-price="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_subservicio']}}">{{$itemservicios['nombre_subservicio']}}</option>
                                    @empty
                                      No hay resultados
                                  @endforelse
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <div class="form-group">
                              <label class="control-label">Cotizacion</label>
                              <div class="">
                                <input id="price" name="cotizacion" type="text" class="form-control" placeholder="Cotizacion Estimada"  value="{{$potencial['cotizacion_cliente']}}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </section>
                    <div class="form-group offset">
                        <div>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <button type="button" onclick="convert()" class="btn btn-primary">Convertir en Cliente</button>
                            <button type="reset" class="btn">Cancelar</button>
                            <button type="button" onclick="destroy()" class="btn btn-danger">Borrar</button>
                        </div>
                    </div>
                </form>

                <!-- form delete -->
                <form class="" action="{{route('potenciales.destroy', $potencial)}}" method="post" id="destroy">
                  @csrf @method('DELETE')

                </form>

                <!-- form convert -->
                <form class="" action="{{route('potenciales.convert', $potencial)}}" method="post" id="convert">
                  @csrf @method('PATCH')

                </form>

              </div>
              <div class="col-lg-3">
                <section class="panel">
                    <header class="panel-heading">
                        <h4> Agregar nota </h4>
                    </header>
                    <form method="POST" class="form-horizontal" data-collabel="3" data-alignlabel="left" action="{{route('notas.store')}}">
                        @csrf
                        <div class="panel-body align-lg-center">
                          <div class="form-group">
                              <input type="hidden" name="clientid" value="{{$potencial['id_cliente']}}">
                              <input type="hidden" name="username" value="{{$user['name']}}">
                              <textarea name="mensaje" class="form-control" rows="6" cols="5" data-height="auto" placeholder="Mensaje" ></textarea>
                          </div>
                          <div class="form-group">
                              <div>
                                  <div class="row">
                                      <div class="input-group date form_datetime col-lg-12" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd"  >
                                          <input type="text" class="form-control" name="recordar" placeholder="recordar">
                                          <span class="input-group-btn">
                                          <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                          <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div><!-- //form-group-->
                          <div class="form-group">
                              <button type="submit" class="btn btn-theme">Guardar</button>
                          </div>
                        </div>
                    </form>
                </section>
                <section class="panel">
                    <header class="panel-heading">
                        <h4> Notas </h4>
                        @forelse($nota as $itemnota)
                        <div class="nota">
                          <p class="mennsaje">{{$itemnota['mensaje_nota']}}</p>
                          <p class="fecha">{{$itemnota['created_at']}}</p>
                          <p class="user">{{$itemnota['user_nota']}}</p>
                        </div>
                        @empty
                        No hay notas para mostrar
                        @endforelse

                    </header>
                </section>
                </div>
          </div>
          <!-- //content > row-->

      </div>
      <!-- //content-->


  </div>
  <!-- //main-->


		<!-- //nav left menu-->
</div>
<!-- //wrapper-->

@endsection
