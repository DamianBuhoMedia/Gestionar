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
                  <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{route('nacion.update',$nacion[0]->id)}}">
                    @csrf @method('PATCH')

										<section class="panel">
												<header class="panel-heading">
														<h2> Editar Tramite </h2>
														<label class="color">PRESENTACION INFO GENERAL</label>
												</header>
												<div class="panel-body align-lg-center">
													<div class="form-group">
															<label class="control-label">Empresa</label>
															<div>
																	<input type="text" class="form-control" placeholder="empresa" name="" value="{{$nacion[0]->empresa}}" disabled>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">expediente</label>
															<div>
																	<input type="text" class="form-control" placeholder="expediente" name="expediente" value="{{$nacion[0]->expediente}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">tramite</label>
															<div>
															<input type="text" class="form-control" placeholder="tramite" name="" disabled  value="{{$nacion[0]->tramite}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">inicio</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="inicio"  value="{{$nacion[0]->inicio}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Fecha ultima consulta</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c1"  value="{{$nacion[0]->c1}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">c2</label>
															<div>
																	<input type="text" class="form-control" placeholder="c2" name="c2"  value="{{$nacion[0]->c2}}">
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Estado</label>
															<div>
																	<input type="text" class="form-control" placeholder="c3" name="c3"  value="{{$nacion[0]->c3}}">
															</div>
													</div>
										</section>




                    <section class="panel">
												<header class="panel-heading">
														<label class="color">Seguimiento TAD</label>
												</header>
												<div class="panel-body align-lg-center">
                          <div class="form-group">
															<label class="control-label">Ultimo Pase</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c4"  value="{{$nacion[0]->c4}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">De</label>
															<div>
																	<input type="text" class="form-control" placeholder="de" name="c5" value="{{$nacion[0]->c5}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">a</label>
															<div>
															<input type="text" class="form-control" placeholder="tramite" name="c6"   value="{{$nacion[0]->c6}}">
															</div>
													</div>
                          <div class="form-group">
                              <label class="control-label">dias de permanencia</label>
                              <div>
                              <input type="text" class="form-control" placeholder="dias de permanencia" name="c7"   value="{{$nacion[0]->c7}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Ult. Subs</label>
                              <div>
                              <input type="text" class="form-control" placeholder="Ult. Subs" name="c8"   value="{{$nacion[0]->c8}}">
                              </div>
                          </div>
                          <div class="form-group">
															<label class="control-label">Complida</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c9"  value="{{$nacion[0]->c9}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Inspección</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c10"  value="{{$nacion[0]->c10}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Tec Final</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c11"  value="{{$nacion[0]->c11}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Tasas Final</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c12"  value="{{$nacion[0]->c12}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Legal Final</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c13"  value="{{$nacion[0]->c13}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">Generador Menor</label>
															<div>
																	<input type="text" class="form-control" placeholder="Generador Menor" name="c14"  value="{{$nacion[0]->c14}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">CAA </label>
															<div>
																	<input type="text" class="form-control" placeholder="CAA" name="c15"  value="{{$nacion[0]->c15}}">
															</div>
													</div>
                          <div class="form-group">
                              <label class="control-label">VTO </label>
                              <div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c16"  value="{{$nacion[0]->c16}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Mail de Consulta </label>
                              <div>
                                  <input type="text" class="form-control" placeholder="Mail de COnsulta" name="c17"  value="{{$nacion[0]->c17}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Respuesta</label>
                              <div>
                                  <input type="text" class="form-control" placeholder="Respuesta" name="c18"  value="{{$nacion[0]->c18}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Mail de Consulta </label>
                              <div>
                                  <input type="text" class="form-control" placeholder="Complida" name="c19"  value="{{$nacion[0]->c19}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Observacion</label>
                              <div>
                                  <input type="text" class="form-control" placeholder="Observacion" name="c20"  value="{{$nacion[0]->c20}}">
                              </div>
                          </div>
										</section>


                    <section class="panel">
												<header class="panel-heading">
														<label class="color">Seguimiento SIMEL</label>
												</header>
												<div class="panel-body align-lg-center">
                          <div class="form-group">
															<label class="control-label">Usuario</label>
															<div>
																	<input type="text" class="form-control" placeholder="Usuario" name="c21" value="{{$nacion[0]->c21}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Clave</label>
															<div>
																	<input type="text" class="form-control" placeholder="Clave" name="c22" value="{{$nacion[0]->c22}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Residuo</label>
															<div>
																	<input type="text" class="form-control" placeholder="Residuo" name="c23" value="{{$nacion[0]->c23}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Libro</label>
															<div>
																	<input type="text" class="form-control" placeholder="Libro" name="c24" value="{{$nacion[0]->c24}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Dom Electronico</label>
															<div>
																	<input type="text" class="form-control" placeholder="Dom Electronico" name="c25" value="{{$nacion[0]->c25}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Fecha de alta SIMEL</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c26"  value="{{$nacion[0]->c26}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Dev. Cuenta</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c27"  value="{{$nacion[0]->c27}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
													<div class="form-group">
															<label class="control-label">REQUERIMIENTOS-OBSERVACIONES</label>
															<div>
                                <textarea name="c28"  class="form-control" placeholder="REQUERIMIENTOS-OBSERVACIONES" rows="8" cols="80">{{$nacion[0]->c28}}</textarea>
															</div>
													</div>
										</section>


                    <section class="panel">
												<header class="panel-heading">
														<label class="color">NCA</label>
												</header>
												<div class="panel-body align-lg-center">
                          <div class="form-group">
                              <label class="control-label">Fecha de alta SIMEL</label>
                              <div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c29"  value="{{$nacion[0]->c29}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
															<label class="control-label">NO</label>
															<div>
																	<input type="text" class="form-control" placeholder="NO" name="c30" value="{{$nacion[0]->c30}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Expediente</label>
															<div>
																	<input type="text" class="form-control" placeholder="Expediente" name="c31" value="{{$nacion[0]->c31}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Eximición</label>
															<div>
																	<input type="text" class="form-control" placeholder="Eximición" name="c32" value="{{$nacion[0]->c32}}">
															</div>
													</div>
                          <div class="form-group">
                              <label class="control-label">Fecha</label>
                              <div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c33"  value="{{$nacion[0]->c33}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Fecha</label>
                              <div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c34"  value="{{$nacion[0]->c34}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
															<label class="control-label">Ingresos seguro Ambiental</label>
															<div>
																	<input type="text" class="form-control" placeholder="Ingresos seguro Ambiental" name="c35" value="{{$nacion[0]->c35}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Dictamen Nro</label>
															<div>
																	<input type="text" class="form-control" placeholder="Dictamen Nro" name="c36" value="{{$nacion[0]->c36}}">
															</div>
													</div>
                          <div class="form-group">
															<label class="control-label">Fecha</label>
															<div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c37"  value="{{$nacion[0]->c37}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
															</div>
													</div>
                          <div class="form-group">
                              <label class="control-label">Mail</label>
                              <div>
                                  <input type="text" class="form-control" placeholder="Mail" name="c38" value="{{$nacion[0]->c38}}">
                              </div>
                          </div>
													<div class="form-group">
															<label class="control-label">Observacion</label>
															<div>
                                <textarea name="c39"  class="form-control" placeholder="Observacion" rows="8" cols="80">{{$nacion[0]->c39}}</textarea>
															</div>
													</div>
										</section>


                    <section class="panel">
												<header class="panel-heading">
														<label class="color">SEGUIMIENTO TASAS</label>
												</header>
                        <div class="panel-body align-lg-center">
                        <div class="form-group">
                            <label class="control-label">Ingreso</label>
                            <div>
                              <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                  <input type="text" class="form-control" name="c40"  value="{{$nacion[0]->c40}}">
                                  <span class="input-group-btn">
                                  <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                  </span>
                              </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Fecha</label>
                            <div>
                              <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                  <input type="text" class="form-control" name="c41"  value="{{$nacion[0]->c41}}">
                                  <span class="input-group-btn">
                                  <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                  </span>
                              </div>
                            </div>
                        </div>
                          <div class="form-group">
															<label class="control-label">Imposición</label>
															<div>
																	<input type="text" class="form-control" placeholder="Imposicion" name="c42" value="{{$nacion[0]->c42}}">
															</div>
													</div>
                          <div class="form-group">
                              <label class="control-label">Fecha</label>
                              <div>
                                <div class="input-group date form_datetime col-lg-6" data-picker-position="bottom-left"  data-date-format="yyyy-m-d" >
                                    <input type="text" class="form-control" name="c43"  value="{{$nacion[0]->c43}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label">Período Cancelado</label>
                              <div>
                                  <input type="text" class="form-control" placeholder="Período Cancelado" name="c44" value="{{$nacion[0]->c44}}">
                              </div>
                          </div>
													<div class="form-group">
															<label class="control-label">Observaciones</label>
															<div>
                                <textarea name="c45"  class="form-control" placeholder="Observaciones" rows="8" cols="80">{{$nacion[0]->c45}}</textarea>
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
