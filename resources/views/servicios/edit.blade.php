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
              <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('servicios.update', $servicio)}}">
                @csrf @method('PATCH')
                <section class="panel">
                    <header class="panel-heading">
                        <h2> Editar Servicio </h2>
                        <label class="color">Datos del Servicio</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Nombre Servicio</label>
                          <div>
                              <input type="text" name="nombre" class="form-control" placeholder="Nombre Servicio" value="{{$servicio['nombre_servicio']}}">
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
              <form class="" action="{{route('servicios.destroy', $servicio)}}" method="post" id="destroy">
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
