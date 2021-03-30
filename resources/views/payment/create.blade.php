@extends('layouts.app')
@section('content')
<style media="screen">
.iCheck li {
  display: inline-block !important;
  margin-right: 15px
}
.iCheck {
    text-align: left;
}
</style>
<div id="wrapper">
<div id="main">
    <div id="content">

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-7">
              <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('payment.store')}}">
                @csrf
                <section class="panel">
                    <header class="panel-heading">
                        <h2> Agregar Pago </h2>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Fecha Factura</label>
                          <div>
                              <div class="row">
                                  <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                      <input type="text" class="form-control" name="fecha_factura">
                                      <span class="input-group-btn">
                                      <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div><!-- //form-group-->
                      <div class="form-group">
                          <label class="control-label">N° de Factura</label>
                          <div>
                              <input type="text" name="numero_factura" class="form-control" placeholder="N° De factura">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Cliente</label>
                          <div>
                              <input type="text" name="" value="{{$servicioscontratados[0]->razonsocial_cliente}}" class="form-control" placeholder="Nombre Cliente" readonly>
                              <input type="hidden" name="cliente_factura" value="{{$servicioscontratados[0]->cliente__serviciocontratado}}">
                              <input type="hidden" name="step" value="{{$etapa}}">
                              <input type="hidden" name="idservicio" value="{{$id}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Monto</label>
                          <div>
                              <input type="text" name="monto_factura" value="{{$servicioscontratados[0]->cotizacion_serviciocontratado}}" class="form-control" readonly>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Factura</label>
                          <div>
                              <input type="text" name="empresa_factura" value="{{$servicioscontratados[0]->empresa}}" class="form-control" readonly>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Estado</label>
                        <div class="">
                          <ul class="iCheck"  data-color="">
                              <!-- <li>
                                  <input type="radio" id="1" name="color_factura" checked="checked" value="0">
                                  <label for="1">Sin Facturar</label>
                              </li> -->
                              <li>
                                  <input  type="radio" name="color_factura" id="2" value="1"  checked="checked">
                                  <label for="2">Facturado</label>
                              </li>
                              <li>
                                  <input  type="radio" name="color_factura" id="3" value="2">
                                  <label for="3">Pagado</label>
                              </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                </section>
                  <input type="hidden" name="servicio_id" value="{{$servicioscontratados[0]->id_serviciocontratado}}">
                  <div class="form-group offset">
                      <div>
                          <button type="submit" class="btn btn-success">Guardar</button>
                          <button type="reset" class="btn">Cancelar</button>
                      </div>
                  </div>
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
