@extends('layouts.app')
@section('content')
<div id="wrapper">
  <div id="main">

    <div id="content">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2>Agenda </h2>
                    </header>
                </section>

                <div class="col-lg-4">
                  <section class="panel">
                      <header class="panel-heading">
                          <h3>Notas </h3>
                      </header>
                      @forelse($recordatorios as $itemrecordatorios)
                      <div class="nota row">
                        <div class="col-lg-6">
                          <p class="cliente">Cliente: <br> <a href="{{route('clientes.edit',$itemrecordatorios['cliente_nota'])}}">{{$itemrecordatorios['razonsocial_cliente']}}</a> </p>
                        </div>
                        <div class="col-lg-6">
                          <p class="recordar">Recordar: <br> {{$itemrecordatorios['recordar_nota']}}</p>
                        </div>
                        <div class="col-lg-12">
                          <p class="mennsaje">Mensaje: <br> {{$itemrecordatorios['mensaje_nota']}}</p>

                          <p class="user">Creado Por: {{$itemrecordatorios['user_nota']}}</p>
                          <p class="fecha">{{$itemrecordatorios['created_at']}}</p>
                        </div>
                      </div>
                      @empty
                      No hay notas para mostrar
                      @endforelse
                  </section>
                </div>
                <div class="col-lg-4">
                  <section class="panel">
                      <header class="panel-heading">
                          <h3>Alertas </h3>
                      </header>
                      @forelse($alertas as $itemalertas)
                      <div class="nota row">
                        <div class="col-lg-6">
                          <p class="cliente">Cliente: <br> <a href="{{route('servicioscontratados.edit',$itemalertas['id_serviciocontratado'])}}">{{$itemalertas['razonsocial_cliente']}}</a> </p>
                        </div>
                        <div class="col-lg-6">
                          <p class="recordar">Alerta: <br> {{$itemalertas['alerta_serviciocontratado']}}</p>
                        </div>
                        <div class="col-lg-12">
                          <p class="mennsaje">Observaciones: <br> {{$itemalertas['observciones_serviciocontratado']}}</p>

                        </div>
                      </div>
                      @empty
                      No hay notas para mostrar
                      @endforelse
                  </section>
                </div>
                <div class="col-lg-4">
                  <section class="panel">
                      <header class="panel-heading">
                          <h3>Vencimientos </h3>
                      </header>
                      @forelse($vencimientos as $itemvencimientos)
                      <div class="nota row">
                        <div class="col-lg-6">
                          <p class="cliente">Cliente: <br> <a href="{{route('servicioscontratados.edit',$itemvencimientos['id_serviciocontratado'])}}">{{$itemvencimientos['razonsocial_cliente']}}</a> </p>
                        </div>
                        <div class="col-lg-6">
                          <p class="recordar">Alerta: <br> {{$itemvencimientos['vencimiento_serviciocontratado']}}</p>
                        </div>
                        <div class="col-lg-12">
                          <p class="mennsaje">Observaciones: <br> {{$itemvencimientos['observciones_serviciocontratado']}}</p>

                        </div>
                      </div>
                      @empty
                      No hay notas para mostrar
                      @endforelse
                  </section>
                </div>
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
