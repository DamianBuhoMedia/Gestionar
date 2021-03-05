@extends('layouts.app')

@section('content')
<div class="" id="wrapper">
  <div id="main">

    <div id="content">

        <div class="row">

            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      <div class="row">
                        <div class="col-lg-6">
                          <h2>Clientes </h2>
                        </div>
                        <div class="col-lg-6 text-right">
                         <a href="{{route('clientes.create')}}" class="add"><i class="fa fa-plus-circle"></i> Agregar Cliente</a>
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
                                        <th class="text-center">Contacto</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">Editar</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                  @forelse($clientes as $clienteintem)
                                  <tr class="odd gradeX">
                                      <td class="center">{{$clienteintem['razonsocial_cliente']}}</td>
                                      <td class="center">{{$clienteintem['cuit_cliente']}}</td>
                                      <td class="center">{{$clienteintem['adminnombre_cliente']}}</td>
                                      <td class="center">{{$clienteintem['telefono_cliente']}} </td>
                                      <td class="center"><a href="{{route('clientes.edit',$clienteintem['id_cliente'])}}">Editar</a> </td>
                                  </tr>
                                  @empty
                                  No hay resultados aun
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
</div>
@endsection
