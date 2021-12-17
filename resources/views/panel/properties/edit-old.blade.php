@extends('panel.app')
@section('content')

@section('title', 'Agregar inmueble')
@section('parent', 'Inmuebles')

<div class="row">
	<div class="col-lg-12">
		<form action="{{ route('panel.properties.update', $property) }}" method="POST">
			@csrf
			<div id="add-listing">
				<div class="add-listing-section">
					<!-- Headline -->
					<div class="add-listing-headline">
						<h3><i class="sl sl-icon-doc"></i> Información básica</h3>
					</div>

					<!-- Row -->
					<div class="row with-forms">

						<!-- Secretaryship -->
						<div class="col-md-6">
							<h5>Secretaría a la que se encuentra adscrito el bien inmueble </h5>
							<select class="chosen-select-no-single" name="secretaryship">
								@foreach($secretaryships as $secretaryship)
								<option value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>	
								@endforeach
							</select>
						</div>

						<!-- Type -->
						<div class="col-md-6 col-lg-3">
							<h5>Bien fiscal o de uso público</h5>
							<select class="chosen-select-no-single" name="propertytype">
								@foreach($propertytypes as $propertytype)
								<option value="{{ $propertytype->id }}">{{ $propertytype->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>ID <i class="tip" data-tip-content="Código con el cual se identifica el bien"></i></h5>
							<input name="code" value="{{ $property->code }}"  type="number" placeholder="Ej: 661">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>No. Escritura</h5>
							<input name="plate_number" value="{{ $property->plate_number }}" type="text">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Matrícula</h5>
							<input name="plate" value="{{ $property->plate }}" type="number">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Activo fijo que contienen lotes</h5>
							<input name="fixed_asset" value="{{ $property->fixed_asset }}" type="text">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>CBML</h5>
							<input name="cbml" value="{{ $property->cbml }}" type="text">
						</div>

						<div class="col-sm-12">
							<h5>Descripción corta <i class="tip" data-tip-content="Ejemplo: Sede habitante de la calle Modalidad 24 horas"></i></h5>
							<input name="description" value="{{ $property->description }}" type="text">
						</div>
					</div>
					<!-- Row / End -->

				</div>
				<!-- Section / End -->

				<!-- Section -->
				<div class="add-listing-section margin-top-45">

					<!-- Headline -->
					<div class="add-listing-headline">
						<h3><i class="sl sl-icon-location"></i> Ubicación</h3>
					</div>

					<div class="submit-section">

						<!-- Row -->
						<div class="row with-forms">
							<!-- Address -->
							<div class="col-md-6 col-lg-3">
								<h5>Dirección</h5>
								<input type="text" value="{{ $property->address }}" name="address" placeholder="CL 57 52 60">
							</div>

							<div class="col-md-6 col-lg-2">
								<h5>Comuna</h5>
								<select class="chosen-select-no-single" name="commune_id">
									@foreach($communes as $commune)
									<option value="{{ $commune->id }}">{{ $commune->name }}</option>
									@endforeach
								</select>
							</div>

							<div class="col-md-6 col-lg-3">
								<h5>Barrio</h5>
								<select class="chosen-select-no-single" name="district_id">
									@foreach($districts as $district)
									<option value="{{ $district->id }}">{{ $district->name }}</option>
									@endforeach
								</select>
							</div>

							<!-- Latitude -->
							<div class="col-md-6 col-lg-2">
								<h5>Latitud</h5>
								<input name="lat" value="{{ $property->latitude }}" type="text">
							</div>

							<!-- Longitude -->
							<div class="col-md-6 col-lg-2">
								<h5>Longitud</h5>
								<input name="long" value="{{ $property->longitude }}" type="text">
							</div>
						</div>
						<!-- Row / End -->
					</div>
				</div>
				<!-- Section / End -->

				<!-- Section -->
				<div class="add-listing-section margin-top-45">

					<!-- Headline -->
					<div class="add-listing-headline">
						<h3><i class="sl sl-icon-docs"></i> Información específica</h3>
					</div>

					<div class="row with-forms">
						<!-- Area -->
						<div class="col-md-6 col-lg-3">
							<h5>Área catastral</h5>
							<input type="text" value="{{ $property->cadastral_area }}" name="cadastral_area">
						</div>

						<!-- Area -->
						<div class="col-md-6 col-lg-3">
							<h5>Área construida</h5>
							<input type="text" value="{{ $property->construction_area }}" name="construction_area">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Avalúo catastral <i class="tip" data-tip-content="No uses puntos ni comas. Ej: 40000000"></i> </h5>
							<input type="number" value="{{ $property->property_valuation }}" name="property_valuation">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Clasificación del suelo</h5>
							<select class="chosen-select-no-single" name="floor_clasification_id">
								@foreach($floorclassifications as $floorclassification)
								<option value="{{ $floorclassification->id }}">{{ $floorclassification->title }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-6 col-lg-3">
							<h5>Macroproyecto</h5>
							<select class="chosen-select-no-single" name="macroproject_id">
								@foreach($macroprojects as $macroproject)
								<option value="{{ $macroproject->id }}">{{ $macroproject->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Tratamiento</h5>
							<select class="chosen-select-no-single" name="treatment_id">
								@foreach($treatments as $treatment)
								<option value="{{ $treatment->id }}">{{ $treatment->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Polígono</h5>
							<select class="chosen-select-no-single" name="polygon_id">
								@foreach($polygons as $polygon)
								<option value="{{ $polygon->id }}">{{ $polygon->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Uso del suelo</h5>
							<select class="chosen-select-no-single" name="floor_use_id">
								@foreach($flooruses as $flooruse)
								<option value="{{ $flooruse->id }}">{{ $flooruse->title }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-6 col-lg-3">
							<h5>Inst_3Nivel</h5>
							<select class="chosen-select-no-single" name="inst_3nivel_id">
								@foreach($inst_3nivels as $inst_3nivel)
								<option value="{{ $inst_3nivel->id }}">{{ $inst_3nivel->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Destinacion actual</h5>
							<select class="chosen-select-no-single" name="destination_id">
								@foreach($destinations as $destination)
								<option value="{{ $destination->id }}">{{ $destination->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Oportunidad</h5>
							<select class="chosen-select-no-single" name="opportunity_id">
								@foreach($opportunities as $opportunity)
								<option value="{{ $opportunity->id }}">{{ $opportunity->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Acción</h5>
							<select class="chosen-select-no-single" name="action_id">
								@foreach($actions as $action)
								<option value="{{ $action->id }}">{{ $action->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Proyecto gestionado</h5>
							<select class="chosen-select-no-single" name="project_managed">
								<option value="No aplica">No aplica</option>
								<option value="Por diligenciar">Por diligenciar</option>
							</select>
						</div>

						<div class="col-md-6 col-lg-9">
							<h5>Enlace donde está la documentación <i class="tip" data-tip-content="La URL completa."></i> </h5>
							<input type="url" value="{{ $property->link }}" placeholder="https://drive.google.com/drive/u/0/folders/1z63G3UdLtRUpw-3cFvQ099G4Y0G_MizX" name="link">
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
							<input type="date" value="{{ $property->loan_start_date }}" name="loan_start_date">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Fecha de terminación <i class="tip" data-tip-content="Fecha de terminación del Comodato"></i> </h5>
							<input type="date" value="{{ $property->loan_end_date }}" name="loan_end_date">
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Entidad a la que se asignó</h5>
							<select class="chosen-select-no-single" name="entity_id">
								@foreach($secretaryships as $secretaryship)
								<option value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6 col-lg-3">
							<h5>Información del comodato <i class="tip" data-tip-content="Información adicional del comodato"></i> </h5>
							<input type="text" value="{{ $property->loan_information }}" name="loan_information">
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-6">
							<h5>Oportunidad</h5>
							<input type="text" value="{{ $property->property_opportunity }}" name="property_opportunity">
						</div>

						<div class="col-md-6">
							<h5>Priorización de oportunidades según matriz de priorización</h5>
							<input type="text" value="{{ $property->priorization }}" name="priorization" value="Alta">
						</div>
					</div>

					<!-- Description -->
					<div class="form">
						<h5>Observaciones</h5>
						<textarea class="WYSIWYG" name="observations" cols="40" rows="3" id="observations" spellcheck="true">{{ $property->observations }}</textarea>
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

</div>

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
	});
</script>
@endpush