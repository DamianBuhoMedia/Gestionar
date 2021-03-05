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
                          <h2>Clientes Potenciales</h2>
                        </div>
                        <div class="col-lg-6 text-right">
                         <a href="{{ url('/clientes-potenciales-add/') }}" class="add"><i class="fa fa-plus-circle"></i> Agregar Cliente Potencial</a>
                        </div>
                      </div>
                    </header>
                    <div class="panel-body">
                        <form>
                            <table class="table table-striped" id="table-example">
                                <thead>
                                    <tr>
                                        <th  class="text-center">Razon Social</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">Mail</th>
                                        <th class="text-center">Cargo</th>
                                        <th class="text-center">Editar</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @forelse($clientespotenciales as $clientespotencialesItem)
                                    <tr class="odd gradeX">
                                        <td>{{$clientespotencialesItem['razonsocial_cliente']}}</td>
                                        <td>{{$clientespotencialesItem['telefono_cliente']}}</td>
                                        <td>{{$clientespotencialesItem['mail_cliente']}}</td>
                                        <td class="center">{{$clientespotencialesItem['cargo_cliente']}}</td>
                                        <td class="center"><a href="{{route('potenciales.edit',$clientespotencialesItem['id_cliente'])}}">Editar</a> </td>
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


		<!-- //nav left menu-->
</div>
<!-- //wrapper-->
@endsection
