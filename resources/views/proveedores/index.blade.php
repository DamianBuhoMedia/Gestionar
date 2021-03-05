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
                          <h2>Proveedores </h2>
                        </div>
                        <div class="col-lg-6 text-right">
                         <a href="{{route('proveedores.create')}}" class="add"><i class="fa fa-plus-circle"></i> Agregar Proveedor</a>
                        </div>
                      </div>
                    </header>
                    <div class="panel-body">
                        <form>
                            <table class="table table-striped" id="table-example">
                                <thead>
                                    <tr>
                                        <th  class="text-center">Razon Social</th>
                                        <th class="text-center">CUIT</th>
                                        <th class="text-center">Mail</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">Editar</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr class="odd gradeX">
                                      @forelse($proveedores as $proveedoresItem)
                                        <td>{{$proveedoresItem['razonsocial_proveedor']}}</td>
                                        <td>{{$proveedoresItem['cuit_proveedor']}}</td>
                                        <td>{{$proveedoresItem['mailppal_proveedor']}}</td>
                                        <td class="center">{{$proveedoresItem['telefono_proveedor']}}</td>
                                        <td class="center"> <a href="{{route('proveedores.edit', $proveedoresItem['id_proveedor'])}}">Editar</a></td>
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
