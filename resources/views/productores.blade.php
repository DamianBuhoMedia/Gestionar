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
                          <h2>Productores </h2>
                        </div>
                        <div class="col-lg-6 text-right">
                         <a href="{{route('producoresAdd')}}" class="add"><i class="fa fa-plus-circle"></i> Agregar Productor</a>
                        </div>
                      </div>
                    </header>
                    <div class="panel-body">
                        <form>
                            <table class="table table-striped" id="table-example">
                                <thead>
                                    <tr>
                                        <th  class="text-center">Nombre</th>
                                        <th class="text-center">CUIT</th>
                                        <th class="text-center">Mail</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">Editar</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr class="odd gradeX">
                                      @forelse($productores as $productoresItem)
                                        <td>{{$productoresItem['nombre_productor']}}</td>
                                        <td>{{$productoresItem['cuit_productor']}}</td>
                                        <td>{{$productoresItem['mailppal_productor']}}</td>
                                        <td class="center">{{$productoresItem['telefono_productor']}}</td>
                                        <td class="center"> <a href="{{route('productores.edit',$productoresItem['id_productor'])}}">Editar</a></td>
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
