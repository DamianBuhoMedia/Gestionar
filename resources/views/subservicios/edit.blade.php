@extends('layouts.app')
@section('content')
<script type="text/javascript">
  function destroy(){
    document.getElementById('destroy').submit();
  }
</script>
<div id="wrapper">
<div id="main">
    <div id="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-7">
              <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post"  action="{{route('subservicios.update', $join[0]['id_subservicio'])}}">
                @csrf @method('PATCH')
                <section class="panel">
                    <header class="panel-heading">
                        <h2> Nuevo Sub Servicio </h2>
                        <label class="color">Datos del Sub Servicio</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Nombre Sub Servicio</label>
                          <div>
                              <input type="text" name="nombre" class="form-control" placeholder="Nombre Sub Servicio" value="{{$join[0]['nombre_subservicio']}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Precio Sub Servicio</label>
                          <div>
                              <input type="number" name="price" class="form-control" placeholder="Precio Sub Servicio" value="{{$join[0]['precio_subservicio']}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Servicio</label>
                          <div>
                            <select  class="selectpicker form-control" name="servicio">
                              <option value="{{$join[0]['idpadre_subservicio']}}">{{$join[0]['nombre_servicio']}}</option>
                                @forelse($servicios as $itemservicios)
                                <option value="{{$itemservicios['id_servicio']}}"> {{$itemservicios['nombre_servicio']}} </option>
                                @empty
                                No hay Productores
                                @endforelse
                            </select>
                          </div>
                      </div>
                    </div>
                </section>
                  <div class="form-group offset">
                      <div>
                          <button type="submit" class="btn btn-success">Actualizar</button>
                          <button type="reset" class="btn">Cancelar</button>
                            <button type="button" onclick="destroy()" class="btn btn-danger">Borrar</button>
                      </div>
                  </div>
              </form>

              <!-- form delete -->
              <form class="" action="{{route('subservicios.destroy', $join[0]['id_subservicio'])}}" method="post" id="destroy">
                @csrf @method('DELETE')

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
