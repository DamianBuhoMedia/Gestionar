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
              <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('proveedores.update', $proveedor)}}">
                @csrf @method('PATCH')
                <section class="panel">
                    <header class="panel-heading">
                        <h2> Editar Proveedor </h2>
                        <label class="color">Datos del Proveedor</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Razon Social</label>
                          <div>
                              <input type="text" name="razonsocial" class="form-control" placeholder="Razon Social" value="{{$proveedor->razonsocial_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Nombre Contacto</label>
                          <div>
                              <input type="text" name="contacto" class="form-control" placeholder="Nombre Contacto" value="{{$proveedor->contacto_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">CUIT</label>
                          <div>
                              <input type="text" name="cuit" class="form-control" placeholder="CUIT" value="{{$proveedor->cuit_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">CBU</label>
                          <div>
                              <input type="text" name="cbu" class="form-control" placeholder="CBU" value="{{$proveedor->cbu_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Direccion</label>
                          <div>
                              <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{$proveedor->direccion_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Calle</label>
                          <div>
                              <input type="text" name="calle" class="form-control" placeholder="Calle" value="{{$proveedor->calle_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Numero</label>
                          <div>
                              <input type="text" name="numero" class="form-control" placeholder="Numero" value="{{$proveedor->numero_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Piso</label>
                          <div>
                              <input type="text" name="piso" class="form-control" placeholder="Piso" value="{{$proveedor->piso_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Oficina</label>
                          <div>
                              <input type="text" name="oficina" class="form-control" placeholder="Oficina" value="{{$proveedor->oficina_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Localidad</label>
                          <div>
                              <input type="text" name="localidad" class="form-control" placeholder="Localidad" value="{{$proveedor->localidad_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Codigo Postal</label>
                          <div>
                              <input type="text" name="cp" class="form-control" placeholder="Codigo Postal"value="{{$proveedor->cp_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Pais</label>
                          <div>
                              <input type="text" name="pais" class="form-control" placeholder="Pais" value="{{$proveedor->pais_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Provincia</label>
                          <div>
                              <select  class="selectpicker form-control" name="provincia">
                                <option value="{{$proveedor->provincia_proveedor}}">{{$proveedor->provincia_proveedor}}</option>
                                <option value="Buenos Aires">Buenos Aires</option>
                                <option value="CABA">CABA</option>
                                <option value="Catamarca">Catamarca</option>
                                <option value="Chaco">Chaco</option>
                                <option value="Chubut">Chubut</option>
                                <option value="Cordoba">Cordoba</option>
                                <option value="Corrientes">Corrientes</option>
                                <option value="Entre Rios">Entre Rios</option>
                                <option value="Formosa">Formosa</option>
                                <option value="Jujuy">Jujuy</option>
                                <option value="La Pampa">La Pampa</option>
                                <option value="La Rioja">La Rioja</option>
                                <option value="Mendoza">Mendoza</option>
                                <option value="Misiones">Misiones</option>
                                <option value="Neuquen">Neuquen</option>
                                <option value="Rio Negro">Rio Negro</option>
                                <option value="Salta">Salta</option>
                                <option value="San Juan">San Juan</option>
                                <option value="San Luis">San Luis</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Santa Fe">Santa Fe</option>
                                <option value="Sgo. del Estero">Sgo. del Estero</option>
                                <option value="Tierra del Fuego">Tierra del Fuego</option>
                               <option value="Tucuman">Tucuman</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono</label>
                          <div>
                              <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{$proveedor->telefono_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Fax</label>
                          <div>
                              <input type="text" name="fax" class="form-control" placeholder="Fax" value="{{$proveedor->fax_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail principal</label>
                          <div>
                              <input type="text" name="mailppal" class="form-control" placeholder="Mail principal" value="{{$proveedor->mailppal_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail Secundario</label>
                          <div>
                              <input type="text" name="mailsec" class="form-control" placeholder="Mail Secundario" value="{{$proveedor->mailsec_proveedor}}">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Observaciones</label>
                          <div>
                              <textarea class="form-control" name="onservaciones" rows="3" data-height="auto" placeholder="Observaciones" >{{$proveedor->observaciones_proveedor}}</textarea>
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
              <form class="" action="{{route('proveedores.destroy', $proveedor)}}" method="post" id="destroy">
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
