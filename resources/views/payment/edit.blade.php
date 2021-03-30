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
              <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('payment.update',[$id,$etapa])}}">
                @csrf @method('PATCH')
                <section class="panel">
                    <header class="panel-heading">
                        <h2> Agregar Pago </h2>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Fecha Factura</label>
                          <div>
                            <input type="text" name="numero_factura" class="form-control" value="{{$servicioscontratados[0]->fecha_factura}}" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">N° de Factura</label>
                          <div>
                              <input type="text" name="numero_factura" class="form-control" value="{{$servicioscontratados[0]->numero_factura}}" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Cliente</label>
                          <div>
                              <input type="text" name="numero_factura" class="form-control" value="{{$servicioscontratados[0]->razonsocial_cliente}}" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Monto</label>
                          <div>
                              <input type="text" name="numero_factura" class="form-control" value="{{$servicioscontratados[0]->monto_factura}}" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Facturó</label>
                          <div>
                              <input type="text" name="numero_factura" class="form-control" value="{{$servicioscontratados[0]->empresa_factura}}" disabled>
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
                                  <input  type="radio" name="color_factura" id="2" value="1" <?php if( $servicioscontratados[0]->color_factura == "1" ){echo "checked='checked'";} ?> >
                                  <label for="2">Facturado</label>
                              </li>
                              <li>
                                  <input  type="radio" name="color_factura" id="3" value="2" <?php if( $servicioscontratados[0]->color_factura == "2" ){echo "checked='checked'";} ?>>
                                  <label for="3">Pagado</label>
                              </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                </section>
                  <input type="hidden" name="id" value="{{$servicioscontratados[0]->id}}">
                  <input type="hidden" name="step" value="{{$etapa}}">
                  <input type="hidden" name="idservicio" value="{{$id}}">
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
