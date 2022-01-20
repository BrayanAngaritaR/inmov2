<div class="tab-pane" id="identificationInfo">
   <span class="preview-title-lg overline-title mt-5 mb-4">Identificación</span>

   <!-- Identificación -->
   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="code">ID*</label>
            <input type="text" name="code" class="form-control" id="code" value="{{ $property->code }}" />
            <span class="text-danger error-text code_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="link">Link*</label>
            <input name="link" class="form-control" id="link" type="text" value="{{ $property->link }}" />
            <span class="text-danger error-text link_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="plate">Matrícula*</label>
            <input type="text" class="form-control" id="plate" name="plate" value="{{ $property->plate }}" />
            <span class="text-danger error-text plate_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="repeated">¿La matrícula está repetida?</label>
            <select class="form-control" name="repeated" id="repeated">
               <option @if($property->repeated == "Matrícula única con varios activos fijos") selected @endif value="Matrícula única con varios activos fijos">Matrícula única con varios activos fijos</option>
               <option @if($property->repeated == "Matrícula única con un activo fijo") selected @endif value="Matrícula única con un activo fijo">Matrícula única con un activo fijo</option>
               <option @if($property->repeated == "Repetida") selected @endif value="Repetida">Repetida</option>
            </select>
            <span class="text-danger error-text repeated_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="discharged">¿Dada de baja?</label>
            <select class="form-control" name="discharged" id="discharged">
               <option @if($property->discharged == "Dada de baja en SAP") selected @endif value="Dada de baja en SAP">Dada de baja en SAP</option>
               <option @if($property->discharged == "No aplica") selected @endif value="No aplica">No aplica</option>
            </select>
            <span class="text-danger error-text discharged_err"></span>
         </div>
      </div>

      <div class="col-sm-12" id="repeated_concept">
         <div class="form-group">
            <label class="form-label" for="repeated_concept">Concepto de por qué está repetida</label>
            <input type="text" id="repeated_concept" class="form-control" value="{{ $property->repeated_concept }}" name="repeated_concept" />
            <span class="text-danger error-text repeated_concept_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="secretaryship">
               Secretaría a la que se encuentra adscrito el bien inmueble
            </label>
            <div class="form-control-wrap">
               <select class="form-control" id="secretaryship" name="secretaryship">
                  @foreach($secretaryships as $secretaryship)
                  <option @if($property->secretaryship_id == $secretaryship->id) selected @endif value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>
                  @endforeach
               </select>
               <span class="text-danger error-text secretaryship_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="property_id">Bien fiscal o de uso público</label>
            <div class="form-control-wrap">
               <select class="form-control" name="property_id" id="property_id">
                  @foreach($propertytypes as $propertytype)
                  <option @if($property->property_id == $propertytype->id) selected @endif value="{{ $propertytype->id }}">{{ $propertytype->title }}</option>
                  @endforeach
               </select>
               <span class="text-danger error-text property_id_err"></span>
            </div>
         </div>
      </div>
   </div>
   <!-- /Identificación -->

   <span class="preview-title-lg overline-title mt-5 mb-4">
      Información de Secretaría de Suministros y Servicios
   </span>

   <div class="row gy-4 align-center">
      <div class="col-sm-6 col-lg-4">
         <div class="form-group">
            <label class="form-label">Código del activo fijo</label>
            <div class="form-control-wrap">
               <select class="form-control" name="fixed_asset_code_id" id="fixed_asset_code_id">
                  @foreach($asset_secretaryships as $asset)
                  <option @if($property->fixed_asset_code_id == $asset->id) selected @endif value="{{ $asset->id }}"> ({{ $asset->code }}) - {{ $asset->description }} </option>
                  @endforeach
               </select>
               <span class="text-danger error-text fixed_asset_code_id_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-6 col-lg-4">
         <div class="form-group">
            <label class="form-label">Activo fijo*</label>
            <div class="form-control-wrap">
               <input type="text" class="form-control" name="fixed_asset" id="fixed_asset" placeholder="Ej: 500L" value="{{ $property->fixed_asset }}" />
               <span class="text-danger error-text fixed_asset_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-6 col-lg-4">
         <div class="form-group">
            <label class="form-label">Avalúo comercial</label>
            <div class="form-control-wrap">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">$</span>
                  </div>
                  <input id="commercial_appraisal" name="commercial_appraisal" value="{{ $property->commercial_appraisal }}" type="text" placeholder="Ej: 60,000,000" class="form-control" />
                  <span class="text-danger error-text commercial_appraisal_err"></span>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12">
         <div class="form-group">
            <label class="form-label" for="sss_description">Descripción corta*</label>
            <input class="form-control" id="sss_description" name="sss_description" placeholder="Ej: Junta de acción comunal, cancha, Biblioteca Santo Domingo, Cárcel, ..." value="{{ $property->sss_description }}" />
            <span class="text-danger error-text sss_description_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label">Dirección*</label>
            <div class="form-control-wrap">
               <input type="text" class="form-control" name="sss_address" id="sss_address" value="{{ $property->sss_address }}" placeholder="Ej: CR 72 A 92 BB 20" />
               <span class="text-danger error-text sss_address_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label">Barrio o urbanización*</label>
            <div class="form-control-wrap">
               <input type="text" value="{{ $property->urbanization_or_neighborhood }}" class="form-control" name="urbanization_or_neighborhood" id="urbanization_or_neighborhood" placeholder="Ej: Francisco Antonio Zea" />
               <span class="text-danger error-text urbanization_or_neighborhood_err"></span>
            </div>
         </div>
      </div>
   </div>
   <!-- /Información básica -->

   <div class="col-sm-12 text-right mt-5 mr-0">
      <div class="form-group">
         <button type="button" onclick="getIdentificationTab();" class="btn btn-outline-dark">
            Continuar
         </button>
      </div>
   </div>
</div>