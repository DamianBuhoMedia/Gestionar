@extends('layouts/app')
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
                  <div class="tabbable">
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#datos" data-toggle="tab">Datos del Cliente</a></li>
                          <li><a href="#servicios" data-toggle="tab">Servicios Contratados</a></li>
                      </ul>
                      <div class="tab-content">
                           <div class="tab-pane fade in active" id="datos">

                             <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('clientes.update', $cliente['id_cliente'])}}">
                               @csrf @method('PATCH')

           										<section class="panel">
           												<header class="panel-heading">
           														<h2> Editar Cliente </h2>
           														<label class="color">Datos del cliente</label>
           												</header>
           												<div class="panel-body align-lg-center">
           													<div class="form-group">
           															<label class="control-label">Razon Social</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Razon Social" name="razonsocial" value="{{$cliente['razonsocial_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">CUIT</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="CUIT" name="cuit" value="{{$cliente['cuit_cliente']}}">
           															</div>
           													</div>
                                     <div class="form-group">
           															<label class="control-label">Situacion IVA</label>
           															<div>
           																<select  class="selectpicker form-control" name="iva">
           																		<option value="{{$cliente['iva_cliente']}}">{{$join[0]['nombre_iva']}}</option>

                                               @forelse($iva as $ivaitem)
                                                 	<option value="{{$ivaitem['id_iva']}}">{{$ivaitem['nombre_iva']}}</option>
                                               @empty
                                               No hay Productores
                                               @endforelse
           																</select>
           															</div>
           													</div>
                                     <div class="form-group">
           															<label class="control-label">Ingresos Brutos</label>
           															<div>
           																<select  class="selectpicker form-control" name="iibb">
                                                   <option value="{{$cliente['iibb_cliente']}}">{{$join[0]['nombre_iibb']}}</option>
                                               @forelse($iibb as $iibbitem)
                                                 	<option value="{{$iibbitem['id_iibb']}}">{{$iibbitem['nombre_iibb']}}</option>
                                               @empty
                                               No hay Productores
                                               @endforelse
           																</select>
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Direccion</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Direccion" name="direccion" value="{{$cliente['direccion_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Calle</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Calle" name="calle" value="{{$cliente['calle_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Numero</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Numero" name="numero" value="{{$cliente['numero_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Piso</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Piso" name="piso" value="{{$cliente['piso_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Oficina</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Oficina" name="oficina" value="{{$cliente['oficina_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Localidad</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Localidad" name="localidad" value="{{$cliente['localidad_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Codigo Postal</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Codigo Postal" name="cp" value="{{$cliente['cp_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Provincia</label>
           															<div>
           																	<select  class="selectpicker form-control" name="provincia">
                                               <option value="{{$cliente['provincia_cliente']}}">{{$cliente['provincia_cliente']}}</option>
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
           																	<input type="text" class="form-control" placeholder="Telefono" name="telefono" value="{{$cliente['telefono_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Fax</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Fax" name="fax" value="{{$cliente['fax_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Mail principal</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Mail principal" name="mailppal" value="{{$cliente['mail_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Mail Secundario</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Mail Secundario" name="mailsec" value="{{$cliente['mailsec_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Productor</label>
           															<div>
           																<select  class="selectpicker form-control" name="productor">
           																		<option value="{{$cliente['productor_cliente']}}"> {{$join[0]['nombre_productor']}} </option>

                                               @forelse($productor as $productoritem)
                                                 	<option value="{{$productoritem['id_productor']}}">{{$productoritem['nombre_productor']}}</option>
                                               @empty
                                               No hay Productores
                                               @endforelse
           																</select>
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Observaciones</label>
           															<div>
           																	<textarea class="form-control" rows="3" data-height="auto" placeholder="Observaciones" name="observaciones">{{$cliente['observaciones_cliente']}}</textarea>
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Actividad</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Actividad" name="actividad" value="{{$cliente['actividad_cliente']}}">
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
           																	<input type="text" class="form-control" placeholder="Cargo" name="c1cargo" value="{{$cliente['c1cargo_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Telefono Fijo</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Telefono Fijo" name="c1telefono" value="{{$cliente['c1telefono_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Telefono Celular</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Telefono Celular" name="c1celular" value="{{$cliente['c1celular_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Mail</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Mail" name="c1mail" value="{{$cliente['c1mail_cliente']}}">
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
           																	<input type="text" class="form-control" placeholder="Cargo" name="c2cargo" value="{{$cliente['c2cargo_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Telefono Fijo</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Telefono Fijo" name="c2telefono" value="{{$cliente['c2telefono_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Telefono Celular</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Telefono Celular" name="c2celular" value="{{$cliente['c2celular_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Mail</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Mail" name="c2mail" value="{{$cliente['c2mail_cliente']}}">
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
           																	<input type="text" class="form-control" placeholder="Cargo" name="c3cargo" value="{{$cliente['c3cargo_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Telefono Fijo</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Telefono Fijo" name="c3telefono" value="{{$cliente['c3telefono_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Telefono Celular</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Telefono Celular" name="c3celular" value="{{$cliente['c3celular_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Mail</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Mail" name="c3mail" value="{{$cliente['c3mail_cliente']}}">
           															</div>
           													</div>
           												</div>
           										</section>




           										<section class="panel">
           												<header class="panel-heading">
           														<label class="color">Datos de la empresa</label>
           												</header>
           												<div class="panel-body align-lg-center">
           													<div class="form-group">
           															<label class="control-label">Inicio de actividad</label>
           															<div>
           																	<div class="row">
           																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd"  >
           																					<input type="text" class="form-control" name="inicioact" value="{{$cliente['inicioact_cliente']}}">
           																					<span class="input-group-btn">
           																					<button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
           																					<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
           																					</span>
           																			</div>
           																	</div>
           															</div>
           													</div><!-- //form-group-->
           													<div class="form-group">
           															<label class="control-label">Habilitacion</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Habilitacion" name="habilitacion" value="{{$cliente['habilitaciones_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">CIRC.</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="CIRC." name="circ" value="{{$cliente['circ_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Seccion</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Seccion" name="seccion" value="{{$cliente['seccion_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">manzana</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="manzana" name="manzana" value="{{$cliente['manzana_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Parcela</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Parcela" name="parcela" value="{{$cliente['parcela_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Zonificacion</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Zonificacion" name="zonificacion" value="{{$cliente['zonificacion_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">UF</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="UF" name="uf" value="{{$cliente['uf_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Plantas</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Plantas" name="plantas" value="{{$cliente['plantas_cliente']}}">
           															</div>
           													</div>
           												</div>
           										</section>

           										<section class="panel">
           												<header class="panel-heading">
           														<label class="color">ADMINISTRADORES DE LA SOCIEDAD (APODERADO-DIRECTORES-ETC)</label>
           												</header>
           												<div class="panel-body align-lg-center">
           													<div class="form-group">
           															<label class="control-label">Nombre</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Nombre" name="adminname" value="{{$cliente['adminnombre_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Tipo de Dto.</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Tipo de Dto." name="admindto" value="{{$cliente['admintipodto_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Nro.</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Nro." name="adminnro" value="{{$cliente['adminnro_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">CUIT</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="CUIT" name="admincuit" value="{{$cliente['admincuit_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Fecha de nacimiento</label>
           															<div>
           																	<div class="row">
           																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd" >
           																					<input type="text" class="form-control" name="adminnac" value="{{$cliente['adminnacimiento_cliente']}}">
           																					<span class="input-group-btn">
           																					<button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
           																					<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
           																					</span>
           																			</div>
           																	</div>
           															</div>
           													</div><!-- //form-group-->
           													<div class="form-group">
           															<label class="control-label">Cargo-Titulo</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Cargo-Titulo" name="admincargo" value="{{$cliente['admincargo_cliente']}}">
           															</div>
           													</div>
           												</div>
           										</section>

           										<section class="panel">
           												<header class="panel-heading">
           														<label class="color">REPRESENTANTE LEGAL (APODERADO-DIRECTOR-ETC.)</label>
           												</header>
           												<div class="panel-body align-lg-center">
           													<div class="form-group">
           															<label class="control-label">Nombre</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Nombre" name="aponombre" value="{{$cliente['apoderadonombre_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Tipo de Dto.</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Tipo de Dto." name="apodtop" value="{{$cliente['apoderadodto_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Nro.</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Nro." name="aponro" value="{{$cliente['apoderadonro_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">CUIT</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="CUIT" name="apocuit" value="{{$cliente['apoderadocuit_cliente']}}">
           															</div>
           													</div>
           													<div class="form-group">
           															<label class="control-label">Cargo-Titulo</label>
           															<div>
           																	<input type="text" class="form-control" placeholder="Cargo-Titulo" name="apocargo" value="{{$cliente['apoderadocargo_cliente']}}">
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
                             <form class="" action="{{route('clientes.destroy', $cliente)}}" method="post" id="destroy">
                               @csrf @method('DELETE')

                             </form>
                           </div>
                           <div class="tab-pane fade" id="servicios">


                             <div class="panel-body">
                                 <form>
                                     <table class="table table-striped" id="table-example">
                                         <thead>
                                             <tr>
                                                 <th  class="text-center">Creado el:</th>
                                                 <th class="text-center">Servicio</th>
                                                 <th class="text-center">Alerta</th>
                                                 <th class="text-center">Vencimiento</th>
                                                 <th class="text-center">Cotizacion</th>
                                                 <th class="text-center">Ver</th>
                                             </tr>
                                         </thead>
                                         <tbody align="center">
                                           @forelse($servicioscontratados as $itemservicioscontratados)
                                           <tr class="odd gradeX">
                                               <td class="center">{{$itemservicioscontratados['created_at']}}</td>
                                               <td class="center">{{$itemservicioscontratados['nombre_subservicio']}}</td>
                                               <td class="center">{{$itemservicioscontratados['alerta_serviciocontratado']}}</td>
                                               <td class="center">{{$itemservicioscontratados['vencimiento_serviciocontratado']}} </td>
                                               <td class="center">{{$itemservicioscontratados['cotizacion_serviciocontratado']}} </td>
                                               <td class="center"><a href="{{route('servicioscontratados.edit',$itemservicioscontratados['id_serviciocontratado'])}}">Editar</a> </td>
                                           </tr>
                                           @empty
                                           No hay resultados aun
                                           @endforelse

                                         </tbody>
                                     </table>
                                 </form>
                             </div>
                          </div>
                      </div>
                  </div>


								</div>
                <div class="col-lg-3">
                  <section class="panel">
                      <header class="panel-heading">
                          <h4> Agregar nota </h4>
                      </header>
                      <form method="POST" class="form-horizontal" data-collabel="3" data-alignlabel="left" action="{{route('notas.store')}}">
                          @csrf
                          <div class="panel-body align-lg-center">
                            <div class="form-group">
                                <input type="hidden" name="clientid" value="{{$cliente['id_cliente']}}">
                                <input type="hidden" name="username" value="{{$user['name']}}">
                                <textarea name="mensaje" class="form-control" rows="6" cols="5" data-height="auto" placeholder="Mensaje" ></textarea>
                            </div>
                            <div class="form-group">
  															<div>
  																	<div class="row">
  																			<div class="input-group date form_datetime col-lg-12" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd"  >
  																					<input type="text" class="form-control" name="recordar" placeholder="recordar">
  																					<span class="input-group-btn">
  																					<button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
  																					<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
  																					</span>
  																			</div>
  																	</div>
  															</div>
  													</div><!-- //form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-theme">Guardar</button>
                            </div>
                          </div>
                      </form>
                  </section>
                  <section class="panel">
                      <header class="panel-heading">
                          <h4> Notas </h4>
                          @forelse($nota as $itemnota)
                          <div class="nota">
                            <p class="mennsaje">{{$itemnota['mensaje_nota']}}</p>
                            <p class="fecha">{{$itemnota['created_at']}}</p>
                            <p class="user">{{$itemnota['user_nota']}}</p>
                            <form class="" action="{{route('notas.destroy',$itemnota['id_nota'])}}" method="post">
                              @csrf @method('DELETE')
                              <button type="submit" class="btn btn-danger" name="button">Eliminar Nota</button>
                            </form>

                          </div>
                          @empty
                          No hay notas para mostrar
                          @endforelse

                      </header>
                  </section>
                  </div>
						</div>
						<!-- //content > row-->

				</div>
				<!-- //content-->


		</div>
		<!-- //main-->

<!-- //wrapper-->
@endsection
