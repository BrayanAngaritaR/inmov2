@extends('panel.app') 
@section('content') 
@section('title', 'Información para venta') 
@section('parent', 'Inmuebles')

<div class="nk-block">
   <div class="card card-preview">
      <div class="card-inner">
      	<div class="preview-block">
      		<div class="row">

      			<div class="col-sm-12 mb-5 text-center">
			      	<div class="alert alert-info">
			      		El bien @if($property->is_rph == 0) <b>NO</b> @endif cuenta con RPH
			      	</div>
			      </div>

					<div class="col-sm-12 col-lg-3 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="project_managed">Área del predio (VUR)</label>
			            <input type="text" name="area_according_to_vur" class="form-control" id="area_according_to_vur" />
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-3 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="project_managed">Área de lote catastral</label>
			            <input type="text" name="cadastral_area" value="{{ $property->cadastral_area }}" class="form-control" id="cadastral_area" />
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-3 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="project_managed">Áreas comunes según FC</label>
			            <input type="text" name="common_areas"class="form-control" id="common_areas" />
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-3 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="project_managed">Valor de ficha catrastal</label>
			            <input type="text" disabled  value="{{ $property->property_valuation }}" class="form-control"/>
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="project_managed">Área de construcción</label>
			            <input type="text" disabled value="{{ $property->construction_area }}" class="form-control" id="construction_area" />
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="percentage_of_fc_ownership">% titularidad (RPH)</label>
			            <input type="text" name="percentage_of_fc_ownership" class="form-control" id="percentage_of_fc_ownership" />
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="ownership_percentage_vur">% titularidad (VUR)</label>
			            <input type="text" name="ownership_percentage_vur" class="form-control" id="ownership_percentage_vur" />
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label" for="ownership_percentage_vur">Valor m² zona geoconómica</label>
			            <input type="text" name="ownership_percentage_vur" class="form-control" id="ownership_percentage_vur" />
			         </div>
			      </div>

			      

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label">Destinación</label>
			            <select class="form-select" name="for_sale">
			            	<option>Apartamento</option>
			            	<option>Cuarto útil</option>
			            	<option>Garaje</option>
			            	<option>Local</option>
			            	<option>Sala múltiple</option>
			            	<option>Oficina</option>
			            	<option>Otro</option>
			            </select>
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label">Acción Agencia APP</label>
			            <select class="form-select" name="for_sale">
			            	<option>Venta</option>
			            	<option>Arriendo</option>
			            	<option>Dar de baja</option>
			            	<option>Oportunidad</option>
			            	<option>Sin acción</option>
			            </select>
			         </div>
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			         <div class="form-group">
			            <label class="form-label">¿Para vender?</label>
			            <select class="form-select" name="for_sale">
			            	<option>Sí</option>
			            	<option>No</option>
			            </select>
			         </div>
			      </div>

			      <div class="col-sm-12 mb-3">
			         <div class="form-group">
			            <label class="form-label">Observaciones</label>
			            <textarea name="observations" class="form-control"></textarea>
			         </div>
			      </div>

			      

			      <ul>
			      	<li>Área construida menos áreas comunes extraida de Ficha Catastral</li>
			      	<li>Coeficiente de titularidad del Municipio según el RPH</li>
			      	<li>Área efectiva RPH</li>
			      	<li>Área efectiva NPH</li>
			      	<li>Porcentaje de titularidad del Municipio (¿REPETIDA?)</li>
			      	<li>"Valor %Catastral Octubre 13 (modificación) (Área de lote)"</li>
			      	<li>Vl M2 Catastral Octubre 13 (modificación)</li>
			      	<li>Valor m² zona geoconómica</li>
			      	<li>Valor total por zonas homogénea  Octubre 13 (modificación)</li>
			      	<li>Valor de la titularidad del Municipio (% de propiedad) según zonas homogénea Octubre 13 (modificación)</li>
			      	<li>Valor con el descuento 15% del FONPET Octubre 13 (modificación)</li>
			      	<li>Valor sin el descuento 3% comisiòn de CISA y 15% del FONPET</li>
	
			      </ul>

			      

			      
			   </div>
		   </div>
		</div>
	</div>
</div>

@stop
