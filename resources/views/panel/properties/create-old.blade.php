@extends('panel.app')
@section('content')

@section('title', 'Agregar inmueble')
@section('parent', 'Inmuebles')

<div class="nk-block">
	<div class="card card-preview">
		<div class="row g-gs">
			<div class="card card-preview">
			   <div class="card-inner shadow">
			      <div class="preview-block">

			      	<!-- Información básica -->
			         <span class="preview-title-lg overline-title">Información básica</span>
			         <div class="row gy-4">
			            <div class="col-sm-12">
			               <div class="form-group">
			                  <label class="form-label" for="secretaryship">
			                  	Secretaría a la que se encuentra adscrito el bien inmueble
			                  </label>
			                  <div class="form-control-wrap">
			                  	<select class="form-control" id="secretaryship" name="secretaryship">
			                  		@foreach($secretaryships as $secretaryship)
												<option value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>	
											@endforeach
			                  	</select>
			                  </div>
			               </div>
			            </div>
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="propertytype">Bien fiscal o de uso público</label>
			                  <div class="form-control-wrap">
			                     <select class="form-control" name="propertytype" id="propertytype">
											@foreach($propertytypes as $propertytype)
											<option @if($propertytype->title == 'Fiscal') selected @endif value="{{ $propertytype->id }}">{{ $propertytype->title }}</option>
											@endforeach
										</select>
			                  </div>
			               </div>
			            </div>
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="default-03">Activo fijo que contienen lotes</label>
			                  <div class="form-control-wrap">
			                     {{-- <div class="form-icon form-icon-left">
			                        <em class="icon ni ni-user"></em>
			                     </div> --}}
			                     <input type="text" class="form-control" name="fixed_asset"/>
			                  </div>
			               </div>
			            </div>
			            <div class="col-sm-12">
			               <div class="form-group">
			                  <label class="form-label" for="description">Descripción</label>
			                  <div class="form-control-wrap">
			                     <textarea class="form-control" id="description" name="description"></textarea>
			                  </div>
			               </div>
			            </div>
			         </div>
			         <!-- /Información básica -->

			         <!-- Información notarial -->
			         <hr class="preview-hr mt-5" />
			         <span class="preview-title-lg overline-title">Información notarial</span>
			         <div class="row gy-4">
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="plate_number">No. Escritura</label>
			                  <input type="text" class="form-control" id="plate_number" name="plate_number" />
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="escriture">Superficie jurídica (escritura)</label>
			                  <input type="number" class="form-control" id="escriture" name="escriture" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="unities">Unidades</label>
			                  <input type="text" class="form-control" id="unities" name="unities" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="escriture_date">Fecha de escritura</label>
			                  <input type="text" class="form-control" id="escriture_date" name="escriture_date" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="not_unic">Notaria Municipal</label>
			                  <input type="text" class="form-control" id="not_unic" name="not_unic" />
			               </div>
			            </div>
			         </div>
			         <!-- /Información notarial -->

			         <!-- Información catastral -->
			         <hr class="preview-hr mt-5" />
			         <span class="preview-title-lg overline-title">Información catastral</span>
			         <div class="row gy-4 align-center">
			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="plate">Matrícula</label>
			                  <input type="text" class="form-control" id="plate" name="plate" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="cbml">CBML</label>
			                  <input type="text" class="form-control" id="cbml" name="cbml" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="address">Dirección</label>
			                  <input type="text" class="form-control" id="address" name="address" />
			               </div>
			            </div>

			            <div class="col-sm-12 col-lg-6">
			               <div class="form-group">
			                  <label class="form-label" for="commune_id">Comuna (corregimiento)</label>
			                  <select class="form-control" id="commune_id" name="commune_id">
										@foreach($communes as $commune)
										<option value="{{ $commune->id }}">{{ $commune->name }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-12 col-lg-6">
			               <div class="form-group">
			                  <label class="form-label" for="district_id">Barrio</label>
			                  <select class="form-control" id="district_id" name="district_id">
										@foreach($districts as $district)
											<option value="{{ $district->id }}">{{ $district->name }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="cadastral_area">Área catastral (lote) m²</label>
			                  <input type="text" class="form-control" id="cadastral_area" name="cadastral_area" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="construction_area">Área construida m²</label>
			                  <input type="text" class="form-control" id="construction_area" name="construction_area" />
			               </div>
			            </div>

			            <div class="col-sm-6 col-lg-4">
			               <div class="form-group">
			                  <label class="form-label" for="property_valuation">Avalúo catrastral</label>
			                  <input type="number" class="form-control" id="property_valuation" name="property_valuation" />
			               </div>
			            </div>
			         </div>
			         <!-- /Información catastral -->

			         <!-- Coordenadas -->
			         <hr class="preview-hr mt-5" />
			         <span class="preview-title-lg overline-title">Coordenadas</span>
			         <div class="row gy-4 align-center">
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="lat">Latitud</label>
			                  <input name="lat" class="form-control" id="lat" value="6°15'23.886N" type="text">
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="long">Longitud</label>
			                  <input type="text" name="long" value="75°34'6.289W" class="form-control" id="long" />
			               </div>
			            </div>
			         </div>
			         <!-- /Coordenadas -->

			         <!-- Información normativa -->
			         <hr class="preview-hr mt-5" />
			         <span class="preview-title-lg overline-title">Información normativa</span>
			         <div class="row gy-4 align-center">
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="lat">Clasificación del suelo</label>
			                  <input name="lat" class="form-control" id="lat" type="text">
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="macroproject_id">Macroproyecto</label>
									<select class="form-control" name="macroproject_id" id="macroproject_id">
										@foreach($macroprojects as $macroproject)
										<option value="{{ $macroproject->id }}">{{ $macroproject->name }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="treatment_id">Tratamiento</label>
									<select class="form-control" name="treatment_id" id="treatment_id">
										@foreach($treatments as $treatment)
										<option value="{{ $treatment->id }}">{{ $treatment->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="polygon_id">Polígono</label>
									<select class="form-control" name="polygon_id" id="polygon_id">
										@foreach($polygons as $polygon)
										<option value="{{ $polygon->id }}">{{ $polygon->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="floor_use_id">Uso del suelo</label>
									<select class="form-control" name="floor_use_id" id="floor_use_id">
										@foreach($flooruses as $flooruse)
										<option value="{{ $flooruse->id }}">{{ $flooruse->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="inst_3nivel_id">Instrumento de tercer nivel</label>
									<select class="form-control" name="inst_3nivel_id" id="inst_3nivel_id">
										@foreach($inst_3nivels as $inst_3nivel)
										<option value="{{ $inst_3nivel->id }}">{{ $inst_3nivel->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-12">
			            	<!-- Análisis -->
					         {{-- <hr class="preview-hr mt-5" />
					         <span class="preview-title-lg overline-title">Análisis</span>
					         <div class="row gy-4 align-center">
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="destination_id">Destinación actual</label>
					                  <select class="form-control" name="destination_id">
												@foreach($destinations as $destination)
												<option value="{{ $destination->id }}">{{ $destination->title }}</option>
												@endforeach
											</select>
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="opportunity_id">Oportunidad</label>
					                  <select class="form-control" name="opportunity_id">
												@foreach($opportunities as $opportunity)
												<option value="{{ $opportunity->id }}">{{ $opportunity->title }}</option>
												@endforeach
											</select>
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="action_id">Acción</label>
					                  <select class="form-control" name="action_id">
												@foreach($actions as $action)
												<option value="{{ $action->id }}">{{ $action->title }}</option>
												@endforeach
											</select>
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="project_managed">Proyecto gestionado</label>
					                  <select class="form-control" name="project_managed">
												<option value="No aplica">No aplica</option>
												<option value="Por diligenciar">Por diligenciar</option>
											</select>
					               </div>
					            </div>

					            <div class="col-sm-12">
					               <div class="form-group">
					                  <label class="form-label" for="order_01">Observaciones</label>
					                  <textarea class="form-control" name="observations" cols="40" rows="3" id="observations" spellcheck="true"></textarea>
					               </div>
					            </div>
					         </div> --}}
					         <!-- /Análisis -->
			            </div>

			            <div class="col-md-6 col-xl-3 mt-5">
			            	<div class="form-group">
			                  <label class="form-label" for="comodato_image">Fotografía</label>
			                  <br>
			                  <span>No</span>
			                  <div class="custom-control custom-switch ml-3">
			                  	<input type="checkbox" name="comodato_image" class="custom-control-input" id="comodato_image">
			                  	<label class="custom-control-label" for="comodato_image">Sí</label>
			                  </div>
			               </div>
			            </div>

			            <div class="col-md-6 col-xl-3">
			            	<div class="form-group">
			                  <label class="form-label" for="comodato_ficha">Ficha catastral</label>
			                  <br>
			                  <span>No</span>
			                  <div class="custom-control custom-switch ml-3">
			                  	<input type="checkbox" name="comodato_ficha" class="custom-control-input" id="comodato_ficha">
			                  	<label class="custom-control-label" for="comodato_ficha">Sí</label>
			                  </div>
			               </div>
			            </div>

			            <div class="col-md-6 col-xl-3">
			            	<div class="form-group">
			                  <label class="form-label" for="comodato_vur">VUR</label>
			                  <br>
			                  <span>No</span>
			                  <div class="custom-control custom-switch ml-3">
			                  	<input type="checkbox" name="comodato_vur" class="custom-control-input" id="comodato_vur">
			                  	<label class="custom-control-label" for="comodato_vur">Sí</label>
			                  </div>
			               </div>
			            </div>

			            <div class="col-md-6 col-xl-3">
			            	<div class="form-group">
			                  <label class="form-label" for="comodato_studies">Estudio de títulos</label>
			                  <br>
			                  <span>No</span>
			                  <div class="custom-control custom-switch ml-3">
			                  	<input type="checkbox" name="comodato_studies" class="custom-control-input" id="comodato_studies">
			                  	<label class="custom-control-label" for="comodato_studies">Sí</label>
			                  </div>
			               </div>
			            </div>

			            <!-- Comodato -->
			            <div class="col-sm-12">
			            	<hr class="preview-hr" />
			               <div class="form-group">
			                  <label class="form-label" for="isComodato">¿Tiene comodato?</label>

			                  <span class="ml-4">No</span>
			                  <div class="custom-control custom-switch ml-3">
			                  	<input type="checkbox" name="isComodato" class="custom-control-input" id="isComodato">
			                  	<label class="custom-control-label" for="isComodato">Sí</label>
			                  </div>
			               </div>
			            </div>
			            <!-- /Comodato -->

			            <!-- Comodato - Hide by default -->
			            <div class="col-sm-12" id="comodato" style="display: none;">
				         	<!-- Comodato -->
					         <hr class="preview-hr" />
					         <span class="preview-title-lg overline-title">Comodato</span>
					         <div class="row gy-4 align-center">
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="comodato_start">Fecha de inicio</label>
					                  <input name="comodato_start" class="form-control" id="comodato_start" type="date">
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="comodato_ends_at">Fecha de finalización</label>
					                  <input name="comodato_ends_at" class="form-control" id="comodato_ends_at" type="date">
					               </div>
					            </div>

					            <div class="col-md-6">
					            	<div class="form-group">
					                  <label class="form-label" for="comodato_ends_at">Entidad a la que se asignó</label>
					                  <select class="form-control" name="inst_3nivel_id" id="inst_3nivel_id">
												@foreach($secretaryships as $secretaryship)
												<option value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>
												@endforeach
											</select>
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="comodato_info">Información del comodato</label>
					                  <input type="text" name="comodato_info" class="form-control" id="comodato_info" />
					               </div>
					            </div>
					         </div>
					         <!-- /Comodato -->
				         </div>
				         <!-- Comodato - Hide by default -->

			            <div class="col-sm-12">
			            	<hr class="preview-hr" />
			               <div class="form-group">
			                  <label class="form-label" for="isBIC">¿Es un bien de interés cultural?</label>

			                  <span class="ml-4">No</span>
			                  <div class="custom-control custom-switch ml-3">
			                  	<input type="checkbox" name="isBIC" class="custom-control-input" id="isBIC">
			                  	<label class="custom-control-label" for="isBIC">Sí</label>
			                  </div>
			               </div>
			            </div>

			            <!-- BIC info - Hide by default -->
			            <div class="col-sm-12" id="bic" style="display: none;">
				         	<!-- Bien de interés cultural -->
					         <hr class="preview-hr" />
					         <span class="preview-title-lg overline-title">Bien de interés cultural</span>
					         <div class="row gy-4 align-center">
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="bic_name">BIC - Nombre</label>
					                  <input name="bic_name" class="form-control" id="bic_name" type="text">
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="bic_order">BIC - Orden</label>
					                  <input type="text" name="bic_order" class="form-control" id="bic_order" />
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="bic_level">BIC - Nivel de conservación</label>
					                  <input type="text" name="bic_level" class="form-control" id="bic_level" />
					               </div>
					            </div>

					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label class="form-label" for="bic_administrative">BIC - Acto administrativo de declaratoria</label>
					                  <input type="text" name="bic_administrative" class="form-control" id="bic_administrative" />
					               </div>
					            </div>
					         </div>
					         <!-- /Bien de interés cultural -->
				         </div>
				         <!-- BIC info - Hide by default -->
			         </div>
			         <!-- Información normativa -->

			         <!-- Análisis -->
			         <hr class="preview-hr" />
			         <span class="preview-title-lg overline-title">Análisis</span>
			         <div class="row gy-4 align-center">
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="destination_id">Destinación actual</label>
			                  <select class="form-control" name="destination_id">
										@foreach($destinations as $destination)
										<option value="{{ $destination->id }}">{{ $destination->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="opportunity_id">Oportunidad</label>
			                  <select class="form-control" name="opportunity_id">
										@foreach($opportunities as $opportunity)
										<option value="{{ $opportunity->id }}">{{ $opportunity->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="action_id">Acción</label>
			                  <select class="form-control" name="action_id">
										@foreach($actions as $action)
										<option value="{{ $action->id }}">{{ $action->title }}</option>
										@endforeach
									</select>
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="project_managed">Proyecto gestionado</label>
			                  <select class="form-control" name="project_managed">
										<option value="No aplica">No aplica</option>
										<option value="Por diligenciar">Por diligenciar</option>
									</select>
			               </div>
			            </div>

			            <div class="col-sm-12">
			               <div class="form-group">
			                  <label class="form-label" for="order_01">Observaciones</label>
			                  <textarea class="form-control" name="observations" cols="40" rows="3" id="observations" spellcheck="true"></textarea>
			               </div>
			            </div>
			         </div>
			         <!-- /Análisis -->

			         <!-- Registro -->
			         <hr class="preview-hr mt-5" />
			         <span class="preview-title-lg overline-title">Registro</span>
			         <div class="row gy-4 align-center">
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="link">Link</label>
			                  <input name="link" class="form-control" id="link" type="text">
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="property_id">ID</label>
			                  <input type="text" name="property_id" class="form-control" id="property_id" />
			               </div>
			            </div>
			         </div>
			         <!-- /Registro -->

			         <!-- Priorización -->
			         <hr class="preview-hr mt-5" />
			         <span class="preview-title-lg overline-title">Priorización</span>
			         <div class="row gy-4 align-center">
			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="opportunity_id">Oportunidad (Repetido en Análisis)</label>
			                  <input name="opportunity_id" class="form-control" id="opportunity_id" type="text">
			               </div>
			            </div>

			            <div class="col-sm-6">
			               <div class="form-group">
			                  <label class="form-label" for="priorization_array">Priorización de oportunidades según matriz de priorización</label>
			                  <input type="text" name="priorization_array" class="form-control" id="priorization_array" />
			               </div>
			            </div>
			         </div>
			         <!-- /Priorización -->

			         <div class="col-sm-12 text-right mt-5 mr-0">
		               <div class="form-group">
		                  <button type="submit" class="btn btn-outline-dark">
		                  	Guardar registro
		                  </button>
		               </div>
		            </div>
			      </div>
			   </div>
			</div>
		</div>
	</div>
</div>


{{-- <div class="row">
	<div class="col-lg-12">
		<form action="{{ route('panel.properties.store') }}" method="POST">
			@csrf
			<div id="add-listing">



						<div class="col-md-6 col-lg-9">
							<h5>Enlace donde está la documentación <i class="tip" data-tip-content="La URL completa."></i> </h5>
							<input type="url" placeholder="https://drive.google.com/drive/u/0/folders/1z63G3UdLtRUpw-3cFvQ099G4Y0G_MizX" name="link">
						</div>

						<div class="col-sm-12">
							<div class="checkboxes in-row margin-bottom-20">
								<h5>Deja marcado para indicar "Sí"</h5>

								<input id="cadastral_file" checked type="checkbox" name="cadastral_file">
								<label for="cadastral_file">Ficha catastral </label>

								<input id="vur" checked type="checkbox" name="vur">
								<label for="vur">VUR</label>

								<input id="title_study" checked type="checkbox" name="title_study">
								<label for="title_study">Estudio de títulos</label>

								<input id="loan" type="checkbox" name="loan">
								<label for="loan">Comodato</label>
							</div>
						</div>
					</div>

					<div class="row with-forms" id="loanDiv" style="display: none;">
						<div class="col-md-6 col-lg-3">
							<h5>Fecha de inicio <i class="tip" data-tip-content="Fecha de inicio del Comodato"></i> </h5>
							<input type="date" name="loan_start_date">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Fecha de terminación <i class="tip" data-tip-content="Fecha de terminación del Comodato"></i> </h5>
							<input type="date" name="loan_start_date">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Entidad a la que se asignó</h5>
							<select class="form-control" name="entity_id">
								@foreach($secretaryships as $secretaryship)
								<option value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Información del comodato <i class="tip" data-tip-content="Información adicional del comodato"></i> </h5>
							<input type="text" name="loan_information">
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-6">
							<h5>Oportunidad</h5>
							<input type="text" name="property_opportunity">
						</div>

						<div class="col-md-6">
							<h5>Priorización de oportunidades según matriz de priorización</h5>
							<input type="text" name="priorization" value="Alta">
						</div>
					</div>

					<!-- Description -->
					<div class="form">
						<h5>Observaciones</h5>
						
					</div>
				</div>
				<!-- Section / End -->

				<button type="submit" class="button preview"> Guardar <i class="fa fa-arrow-circle-right"></i></button>
			</div>
		</form>
	</div>

	<!-- Copyrights -->
	<div class="col-md-12">
		<div class="copyrights">© {{ date('Y') }} AGENCIA APP (Subdirección inmobiliaria) - Derechos reservados</div>
	</div>

</div> --}}

@stop

@push('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('input[name="loan"]').click(function(){
			if($(this).prop("checked") == true){
				$('#loanDiv').fadeIn(500);
			}
			else if($(this).prop("checked") == false){
				$('#loanDiv').fadeOut(1000);
			}
		});

		$('input[name="isBIC"]').click(function(){
			if($(this).prop("checked") == true){
				$('#bic').fadeIn(700);
			}
			else if($(this).prop("checked") == false){
				$('#bic').fadeOut(700);
			}
		});

		$('input[name="isComodato"]').click(function(){
			if($(this).prop("checked") == true){
				$('#comodato').fadeIn(700);
			}
			else if($(this).prop("checked") == false){
				$('#comodato').fadeOut(700);
			}
		});


	});
</script>
@endpush