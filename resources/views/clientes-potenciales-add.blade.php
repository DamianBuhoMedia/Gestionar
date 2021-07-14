@extends('layouts.app')
<script type="text/javascript">
function OnSelectChange(event) {
    document.getElementById('price').value = event.selectedOptions[0].getAttribute('data-price');
}
</script>
@section('content')
<div id="wrapper">
  <div id="main">
      <div id="content">
          <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-7">
                <form method="POST" class="form-horizontal" data-collabel="3" data-alignlabel="left" action="{{route('CreatePotencial')}}">
                  @csrf
                  <section class="panel">
                      <header class="panel-heading">
                          <h2> Nuevo Cliente Potencial </h2>
                          <label class="color">Datos</label>
                      </header>
                      <div class="panel-body align-lg-center">
                        <div class="form-group">
                            <label class="control-label">Razon Social</label>
                            <div>
                                <input type="text" name="razonsocial" class="form-control" placeholder="Razon Social">
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <label class="control-label">CUIT</label>
                            <div>
                                <input type="text" class="form-control" placeholder="CUIT" name="cuit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefono</label>
                            <div>
                                <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mail</label>
                            <div>
                                <input type="text" name="mailppal" class="form-control" placeholder="Mail principal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cargo</label>
                            <div>
                                <input type="text" name="cargo" class="form-control" placeholder="Cargo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Productor</label>
                            <div>
                              <select  class="selectpicker form-control" name="productor">
                                <option value=""> Seleccione un productor </option>
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
                                <textarea name="tramite" class="form-control" rows="3" data-height="auto" placeholder="Tramite a contratar" ></textarea>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-7">
                            <div class="form-group">
                              <label class="control-label">Servicio</label>
                              <div class="">
                                <select  class="selectpicker form-control" id="servicios"  name="servicio">
                                  @forelse($serviciosPadre as $itemservicios)
                                    <option data-price="{{$itemservicios['precio_subservicio']}}" value="{{$itemservicios['id_servicio']}}" >{{$itemservicios['nombre_servicio']}}</option>
                                    @empty
                                      No hay resultados
                                  @endforelse
                                </select>

                                <select class="form-control" id="client"  name="subservicio" data-size="10" data-live-search="true" onchange="OnSelectChange(this)">
                                  <option value="">Seleccione Un Servicio</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <div class="form-group">
                              <label class="control-label">Cotizacion</label>
                              <div class="">
                                <input id="price" type="text" name="cotizacion" placeholder="Cotizacion estimada" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </section>
                    <div class="form-group offset">
                        <div>
                            <button type="submit" class="btn btn-theme">Guardar</button>
                            <button type="reset" class="btn">Cancelar</button>
                        </div>
                    </div>
                </form>
              </div>
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
  });

  </script>

		<!-- //nav left menu-->
</div>


<!-- //wrapper-->
@endsection
