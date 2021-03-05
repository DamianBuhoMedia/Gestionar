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
                          <h2>Servicios </h2>
                        </div>
                        <div class="col-lg-6 text-right">
                         <a href="{{route('servicios.create')}}" class="add"><i class="fa fa-plus-circle"></i> Agregar Servicios</a>
                        </div>
                      </div>
                    </header>
                    <div class="panel-body">
                        <form>
                            <table class="table table-striped" id="table-example">
                                <thead>
                                    <tr>
                                        <th  class="text-center">Nombre</th>
                                        <th class="text-center">Editar</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr class="odd gradeX">
                                      @forelse($servicios as $serviciosItem)
                                        <td>{{$serviciosItem['nombre_servicio']}}</td>
                                        <td class="center"> <a href="{{route('servicios.edit', $serviciosItem['id_servicio'])}}">Editar</a></td>
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

		<!-- //nav left menu-->
</div>
<!-- //wrapper-->
@endsection
