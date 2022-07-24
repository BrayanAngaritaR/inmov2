@extends('panel.app') 
@section('content') 
@section('title', 'Editar información para venta') 
@section('parent', 'Inmuebles')

<div class="nk-block">

	<a href="{{ route('panel.properties.opportunity.index', $property) }}" class="btn btn-primary-outline mb-5">
		<em class="icon ni ni-arrow-left"></em><span>Volver</span>
	</a>

   <form action="{{ route('panel.properties.opportunity.update', $property) }}" method="POST">
   	@csrf
   	<div class="card card-preview">
	      <div class="card-inner">
	      	<div class="preview-block">
	      		<div class="row">
						<div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="area_according_to_vur">Área del predio (VUR)</label>
				            <input type="text" name="area_according_to_vur" class="form-control" id="area_according_to_vur" 
				            @if($for_sale_property)
				            value="{{ $for_sale_property->area_according_to_vur }}"
				            @endif />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="cadastral_area">Área de lote catastral</label>
				            <input type="text" name="cadastral_area" value="{{ $property->cadastral_area }}" disabled class="form-control" id="cadastral_area" />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="common_areas">Áreas comunes según FC</label>
				            <input type="text" name="common_areas"class="form-control" id="common_areas" 
				            @if($for_sale_property)
				            value="{{ $for_sale_property->common_areas }}"
				            @endif />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="property_valuation">Valor de ficha catrastal</label>
				            <input type="text" disabled  value="{{ $property->property_valuation }}" class="form-control"/>
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="construction_area">Área de construcción</label>
				            <input type="text" disabled value="{{ $property->construction_area }}" class="form-control" id="construction_area" />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="percentage_of_fc_ownership">% titularidad (RPH)</label>
				            <input type="text" name="percentage_of_fc_ownership" class="form-control" 
				            @if($for_sale_property)
				            value="{{ $for_sale_property->percentage_of_fc_ownership }}"
				            @endif id="percentage_of_fc_ownership" />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="ownership_percentage_vur">% titularidad (VUR)</label>
				            <input type="text" name="ownership_percentage_vur" class="form-control" 
				            @if($for_sale_property)
				            value="{{ $for_sale_property->ownership_percentage_vur }}"
				            @endif id="ownership_percentage_vur" />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="geoeconomic_zone_value">Valor m² zona geoconómica</label>
				            <input type="text" name="geoeconomic_zone_value" class="form-control" 
				            @if($for_sale_property)
				            value="{{ $for_sale_property->geoeconomic_zone_value }}"
				            @endif id="geoeconomic_zone_value" />
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="for_sale_destination">Destinación</label>
				            <select class="form-select" id="for_sale_destination" name="for_sale_destination">

				            	@if($for_sale_property)
				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Apartamento') 
				            		selected 
				            		@endif 
				            		value="Apartamento">Apartamento
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Cuarto útil') 
				            		selected 
				            		@endif 
				            		value="Cuarto útil">Cuarto útil
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Garaje') 
				            		selected 
				            		@endif 
				            		value="Garaje">Garaje
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Local') 
				            		selected 
				            		@endif 
				            		value="Local">Local
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Sala múltiple') 
				            		selected 
				            		@endif 
				            		value="Sala múltiple">Sala múltiple
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Oficina') 
				            		selected 
				            		@endif 
				            		value="Oficina">Oficina
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_destination == 'Otro') 
				            		selected 
				            		@endif 
				            		value="Otro">Otro
				            	</option>
				            	@else

				            	<option value="Apartamento">Apartamento</option>
				            	<option value="Cuarto útil">Cuarto útil</option>
				            	<option value="Garaje">Garaje</option>
				            	<option value="Local">Local</option>
				            	<option value="Sala múltiple">Sala múltiple</option>
				            	<option value="Oficina">Oficina</option>
				            	<option value="Otro">Otro</option>

				            	@endif

				            </select>
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="for_sale_action">Acción Agencia APP</label>
				            <select class="form-select" name="for_sale_action" id="for_sale_action">

				            	@if($for_sale_property)
				            	<option 
				            		@if($for_sale_property->for_sale_action == 'Venta') 
				            		selected 
				            		@endif 
				            		value="Venta">Venta
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_action == 'Arriendo') 
				            		selected 
				            		@endif 
				            		value="Arriendo">Arriendo
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_action == 'Dar de baja') 
				            		selected 
				            		@endif 
				            		value="Dar de baja">Dar de baja
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_action == 'Oportunidad') 
				            		selected 
				            		@endif 
				            		value="Oportunidad">Oportunidad
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale_action == 'Sin acción') 
				            		selected 
				            		@endif 
				            		value="Sin acción">Sin acción
				            	</option>
				            	@else
				            	<option value="Venta">Venta</option>
				            	<option value="Arriendo">Arriendo</option>
				            	<option value="Dar de baja">Dar de baja</option>
				            	<option value="Oportunidad">Oportunidad</option>
				            	<option value="Sin acción">Sin acción</option>

				            	@endif
				            </select>
				         </div>
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="for_sale">¿Para vender?</label>
				            <select class="form-select" id="for_sale" name="for_sale">
				            	@if($for_sale_property)
				            	<option 
				            		@if($for_sale_property->for_sale == 1) 
				            		selected 
				            		@endif 
				            		value="1">Sí
				            	</option>

				            	<option 
				            		@if($for_sale_property->for_sale == 0) 
				            		selected 
				            		@endif 
				            		value="0">No
				            	</option>
				            	@else
				            	<option value="1">Sí</option>
				            	<option value="0">No</option>
				            	@endif
				            </select>
				         </div>
				      </div>

				      {{-- @if($property->has_appraise) --}}
				      <div class="col-sm-12 col-lg-4 mb-3">
				         <div class="form-group">
				            <label class="form-label text-primary" for="for_sale">Valor del avalúo</label>
				            <input type="number" name="appraise_value" class="form-control">
				         </div>
				      </div>
				      {{-- @endif --}}

				      <div class="col-sm-12 mb-3">
				         <div class="form-group">
				            <label class="form-label" for="for_sale_observations">Observaciones (Máximo 500 caracteres)</label>
				            <textarea name="for_sale_observations" id="for_sale_observations" class="form-control">@if($for_sale_property){{ $for_sale_property->for_sale_observations }}@endif</textarea>
				         </div>
				      </div>

				      <div class="col-sm-12 text-right mt-3 mr-0">
				         <button type="submit" class="btn btn-outline-dark">
				         	Actualizar
				         </button>
				      </div>
				   </div>
			   </div>
			</div>
		</div>
   </form>
</div>

@stop
