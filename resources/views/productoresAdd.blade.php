@extends('layouts.app')
@section('content')
<div id="wrapper">
<div id="main">

    <div id="content">

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-7">
              <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('CreateProductor')}}">
                @csrf
                <section class="panel">
                    <header class="panel-heading">
                        <h2> Nuevo Productor </h2>
                        <label class="color">Datos del Productor</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Nombre</label>
                          <div>
                              <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">CUIT</label>
                          <div>
                              <input type="text" name="cuit" class="form-control" placeholder="CUIT">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Direccion</label>
                          <div>
                              <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Calle</label>
                          <div>
                              <input type="text" name="calle" class="form-control" placeholder="Calle">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Numero</label>
                          <div>
                              <input type="text" name="numero" class="form-control" placeholder="Numero">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Piso</label>
                          <div>
                              <input type="text" name="piso" class="form-control" placeholder="Piso">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Oficina</label>
                          <div>
                              <input type="text" name="oficina" class="form-control" placeholder="Oficina">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Localidad</label>
                          <div>
                              <input type="text" name="localidad" class="form-control" placeholder="Localidad">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Codigo Postal</label>
                          <div>
                              <input type="text" name="cp" class="form-control" placeholder="Codigo Postal">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Pais</label>
                          <div>
                              <input type="text" name="pais" class="form-control" placeholder="Pais">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Provincia</label>
                          <div>
                              <select  class="selectpicker form-control" name="provincia">
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
                              <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Fax</label>
                          <div>
                              <input type="text" name="fax" class="form-control" placeholder="Fax">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail principal</label>
                          <div>
                              <input type="text" name="mailppal" class="form-control" placeholder="Mail principal">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail Secundario</label>
                          <div>
                              <input type="text" name="mailsec" class="form-control" placeholder="Mail Secundario">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Observaciones</label>
                          <div>
                              <textarea class="form-control" name="onservaciones" rows="3" data-height="auto" placeholder="Observaciones" ></textarea>
                          </div>
                      </div>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        <label class="color">Datos de contacto 1</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Cargo</label>
                          <div>
                              <input type="text" name="d1cargo" class="form-control" placeholder="Cargo">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono Fijo</label>
                          <div>
                              <input type="text" name="c1tel" class="form-control" placeholder="Telefono Fijo">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono Celular</label>
                          <div>
                              <input type="text" name="c1cel" class="form-control" placeholder="Telefono Celular">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail</label>
                          <div>
                              <input type="text" name="c1mail" class="form-control" placeholder="Mail">
                          </div>
                      </div>
                    </div>
                </section>


                <section class="panel">
                    <header class="panel-heading">
                        <label class="color">Datos de contacto 2</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Cargo</label>
                          <div>
                              <input type="text" name="c2cargo" class="form-control" placeholder="Cargo">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono Fijo</label>
                          <div>
                              <input type="text" name="c2tel" class="form-control" placeholder="Telefono Fijo">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono Celular</label>
                          <div>
                              <input type="text" name="c2cel" class="form-control" placeholder="Telefono Celular">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail</label>
                          <div>
                              <input type="text" name="c2mail" class="form-control" placeholder="Mail">
                          </div>
                      </div>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        <label class="color">Datos de contacto 3</label>
                    </header>
                    <div class="panel-body align-lg-center">
                      <div class="form-group">
                          <label class="control-label">Cargo</label>
                          <div>
                              <input type="text" name="c3cargo" class="form-control" placeholder="Cargo">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono Fijo</label>
                          <div>
                              <input type="text" name="c3tel" class="form-control" placeholder="Telefono Fijo">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Telefono Celular</label>
                          <div>
                              <input type="text" name="c3cel" class="form-control" placeholder="Telefono Celular">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Mail</label>
                          <div>
                              <input type="text" name="c3mail" class="form-control" placeholder="Mail">
                          </div>
                      </div>
                    </div>
                </section>
                  <div class="form-group offset">
                      <div>
                          <button type="submit" class="btn btn-theme">Guardar</button>
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
