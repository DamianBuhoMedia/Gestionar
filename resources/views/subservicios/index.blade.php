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
                          <h2>Subservicios </h2>
                        </div>
                        <div class="col-lg-6 text-right">
                         <a href="{{route('subservicios.create')}}" class="add"><i class="fa fa-plus-circle"></i> Agregar Sub Servicios</a>
                        </div>
                      </div>
                    </header>
                    <div class="panel-body">
                        <form>
                            <table class="table table-striped" id="table-example">
                                <thead>
                                    <tr>
                                        <th  class="text-center">Nombre</th>
                                        <th  class="text-center">Precio</th>
                                        <th  class="text-center">Servicio</th>
                                        <th class="text-center">Editar</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr class="odd gradeX">
                                      @forelse($join as $subserviciosItem)
                                        <td>{{$subserviciosItem['nombre_subservicio']}}</td>
                                        <td>{{$subserviciosItem['precio_subservicio']}}</td>
                                        <td>{{$subserviciosItem['nombre_servicio']}}</td>
                                        <td class="center"> <a href="{{route('subservicios.edit', $subserviciosItem['id_subservicio'])}}">Editar</a></td>
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
