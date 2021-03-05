@extends('layouts/app')
@section('content')
<div id="wrapper">
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     MAIN SHOW CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="main">

				<div id="content">

						<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-7">
									<form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('clientes.store')}}">
                    @csrf

										<section class="panel">
												<header class="panel-heading">
														<h2> Nuevo Cliente </h2>
														<label class="color">Datos del cliente</label>
												</header>
												<div class="panel-body align-lg-center">
													<div class="form-group">
															<label class="control-label">Razon Social</label>
															<div>
																	<input type="text" class="form-control" placeholder="Razon Social" name="razonsocial">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">CUIT</label>
															<div>
																	<input type="text" class="form-control" placeholder="CUIT" name="cuit">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Situacion IVA</label>
															<div>
																<select  class="selectpicker form-control" name="iva">
																		<option value=""> Seleccione una condicion </option>

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
																		<option value=""> Seleccione una condicion </option>

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
																	<input type="text" class="form-control" placeholder="Direccion" name="direccion">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Calle</label>
															<div>
																	<input type="text" class="form-control" placeholder="Calle" name="calle">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Numero</label>
															<div>
																	<input type="text" class="form-control" placeholder="Numero" name="numero">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Piso</label>
															<div>
																	<input type="text" class="form-control" placeholder="Piso" name="piso">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Oficina</label>
															<div>
																	<input type="text" class="form-control" placeholder="Oficina" name="oficina">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Localidad</label>
															<div>
																	<input type="text" class="form-control" placeholder="Localidad" name="localidad">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Codigo Postal</label>
															<div>
																	<input type="text" class="form-control" placeholder="Codigo Postal" name="cp">
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
																	<input type="text" class="form-control" placeholder="Telefono" name="telefono">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Fax</label>
															<div>
																	<input type="text" class="form-control" placeholder="Fax" name="fax">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Mail principal</label>
															<div>
																	<input type="text" class="form-control" placeholder="Mail principal" name="mailppal">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Mail Secundario</label>
															<div>
																	<input type="text" class="form-control" placeholder="Mail Secundario" name="mailsec">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Productor</label>
															<div>
																<select  class="selectpicker form-control" name="productor">
																		<option value=""> Seleccione un productor </option>

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
																	<textarea class="form-control" rows="3" data-height="auto" placeholder="Observaciones" name="observaciones"></textarea>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Actividad</label>
															<div>
																	<input type="text" class="form-control" placeholder="Actividad" name="actividad">
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
																	<input type="text" class="form-control" placeholder="Cargo" name="c1cargo">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Telefono Fijo</label>
															<div>
																	<input type="text" class="form-control" placeholder="Telefono Fijo" name="c1telefono">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Telefono Celular</label>
															<div>
																	<input type="text" class="form-control" placeholder="Telefono Celular" name="c1celular">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Mail</label>
															<div>
																	<input type="text" class="form-control" placeholder="Mail" name="c1mail">
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
																	<input type="text" class="form-control" placeholder="Cargo" name="c2cargo">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Telefono Fijo</label>
															<div>
																	<input type="text" class="form-control" placeholder="Telefono Fijo" name="c2telefono">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Telefono Celular</label>
															<div>
																	<input type="text" class="form-control" placeholder="Telefono Celular" name="c2celular">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Mail</label>
															<div>
																	<input type="text" class="form-control" placeholder="Mail" name="c2mail">
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
																	<input type="text" class="form-control" placeholder="Cargo" name="c3cargo">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Telefono Fijo</label>
															<div>
																	<input type="text" class="form-control" placeholder="Telefono Fijo" name="c3telefono">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Telefono Celular</label>
															<div>
																	<input type="text" class="form-control" placeholder="Telefono Celular" name="c3celular">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Mail</label>
															<div>
																	<input type="text" class="form-control" placeholder="Mail" name="c3mail">
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
																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd" >
																					<input type="text" class="form-control" name="inicioact">
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
																	<input type="text" class="form-control" placeholder="Habilitacion" name="habilitacion">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">CIRC.</label>
															<div>
																	<input type="text" class="form-control" placeholder="CIRC." name="circ">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Seccion</label>
															<div>
																	<input type="text" class="form-control" placeholder="Seccion" name="seccion">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">manzana</label>
															<div>
																	<input type="text" class="form-control" placeholder="manzana" name="manzana">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Parcela</label>
															<div>
																	<input type="text" class="form-control" placeholder="Parcela" name="parcela">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Zonificacion</label>
															<div>
																	<input type="text" class="form-control" placeholder="Zonificacion" name="zonificacion">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">UF</label>
															<div>
																	<input type="text" class="form-control" placeholder="UF" name="uf">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Plantas</label>
															<div>
																	<input type="text" class="form-control" placeholder="Plantas" name="plantas">
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
																	<input type="text" class="form-control" placeholder="Nombre" name="adminname">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Tipo de Dto.</label>
															<div>
																	<input type="text" class="form-control" placeholder="Tipo de Dto." name="admindto">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Nro.</label>
															<div>
																	<input type="text" class="form-control" placeholder="Nro." name="adminnro">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">CUIT</label>
															<div>
																	<input type="text" class="form-control" placeholder="CUIT" name="admincuit">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Fecha de nacimiento</label>
															<div>
																	<div class="row">
																			<div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-mm-dd" >
																					<input type="text" class="form-control" name="adminnac">
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
																	<input type="text" class="form-control" placeholder="Cargo-Titulo" name="admincargo">
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
																	<input type="text" class="form-control" placeholder="Nombre" name="aponombre">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Tipo de Dto.</label>
															<div>
																	<input type="text" class="form-control" placeholder="Tipo de Dto." name="apodtop">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Nro.</label>
															<div>
																	<input type="text" class="form-control" placeholder="Nro." name="aponro">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">CUIT</label>
															<div>
																	<input type="text" class="form-control" placeholder="CUIT" name="apocuit">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Cargo-Titulo</label>
															<div>
																	<input type="text" class="form-control" placeholder="Cargo-Titulo" name="apocargo">
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

<!-- //wrapper-->
@endsection
