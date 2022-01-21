<div class="tab-pane" id="cadastralInfo">
   <span class="preview-title-lg overline-title mt-5 mb-4">Información jurídica </span>

   <!-- Información jurídica -->
   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="plate_number">No. de escritura</label>
            <input value="{{ $property->plate_number }}" type="text" name="plate_number" class="form-control" id="plate_number" />
            <span class="text-danger error-text plate_number_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="property_deed">
               Superferficie jurídica (Área)
            </label>
            <input value="{{ $property->property_deed }}" type="text" name="property_deed" class="form-control" id="property_deed" />
            <span class="text-danger error-text property_deed_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="units">
               Unidades
            </label>
            <select class="form-control" name="units" id="units">
               <option
                  @if($property->units == 'Varas') selected @endif
                  value="m2">
                  m²
               </option>

               <option
                  @if($property->units == 'm2') selected @endif
                  value="m2">
                  m²
               </option>

               <option
                  @if($property->units == 'pies2') selected @endif
                  value="pies2">
                  ft² (Pies²)
               </option>

               <option
                  @if($property->units == 'varas') selected @endif
                  value="Varas">
                  Varas
               </option>
            </select>
            <span class="text-danger error-text units_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-5">
         <div class="form-group">
            <label class="form-label" for="writing_date">
               Fecha de escritura
            </label>
            <input type="date" value="{{ $property->writing_date }}" name="writing_date" class="form-control" id="writing_date" />
            <span class="text-danger error-text writing_date_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-7">
         <div class="form-group">
            <label class="form-label" for="notary_id">
               Notaría
            </label>
            <select class="form-control" name="notary_id" id="notary_id">
               @foreach($notaries as $notary)
               <option @if($property->notary_id == $notary->id) selected @endif value="{{ $notary->id }}">{{ $notary->title }}</option>
               @endforeach
            </select>
            <span class="text-danger error-text notary_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12" style="display: none;" id="which_notary_container">
         <label class="form-label" for="which_notary">
            ¿Cuál?
         </label>
         <input type="text" value="{{ $property->which_notary }}" placeholder="Ej: Notaría 2 de Bogotá" name="which_notary" class="form-control" id="which_notary" />
         <span class="text-danger error-text which_notary_err"></span>
      </div>
   </div>
   <!-- Información jurídica -->

   <span class="preview-title-lg overline-title mt-5 mb-4">Información catastral </span>

   <!-- Información catastral -->
   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="cbml">CBML*</label>
            <input type="text" name="cbml" pattern="[0-9]{10}" maxlength="11" minlength="11" value="{{ $property->cbml }}" class="form-control" id="cbml" />
            <span class="text-danger error-text cbml_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="commune_id">Comuna (corregimiento)*</label>
            <select class="form-control" id="commune_id" name="commune_id">
               @foreach($communes as $commune)
               <option @if($property->commune_id == $commune->id) selected @endif value="{{ $commune->id }}">{{ $commune->code }} - {{ $commune->name }}</option>
               @endforeach
            </select>
            <span class="text-danger error-text commune_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="district_id">Barrio*</label>
            <select class="form-control" id="district_id" name="district_id">
               @foreach($districts as $district)
               <option @if($property->district_id == $district->id) selected @endif value="{{ $district->id }}">{{ $district->name }}</option>
               @endforeach
            </select>
            <span class="text-danger error-text district_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12">
         <div class="form-group">
            <label class="form-label" for="cadastral_address">Dirección de catastro*</label>
            <input placeholder="Ej: CR 72 A 92 BB 20" type="text" name="cadastral_address" autocomplete="off" class="form-control" id="cadastral_address" value="{{ $property->cadastral_address }}" />
            <span class="text-danger error-text cadastral_address_err"></span>
         </div>
      </div>

      <div class="col-sm-12" id="cadastral_address_container" style="display: none;">
         <div class="alert alert-warning text-center">
            La dirección debe tener el siguiente formato: Correcto: CR 72 - Incorrecto CR 072
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="cadastral_area">Área catastral*</label>

            <div class="form-control-wrap">
               <div class="input-group">
                  <input type="text" name="cadastral_area" class="form-control" id="cadastral_area" value="{{ $property->cadastral_area }}" required />
                  <div class="input-group-append">
                     <span class="input-group-text">m²</span>
                  </div>
               </div>
               <span class="text-danger error-text cadastral_area_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="construction_area">Área de construcción*</label>

            <div class="form-control-wrap">
               <div class="input-group">
                  <input type="text" name="construction_area" class="form-control" id="construction_area" value="{{ $property->construction_area }}" required />
                  <div class="input-group-append">
                     <span class="input-group-text">m²</span>
                  </div>
               </div>
               <span class="text-danger error-text construction_area_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="property_valuation">Avalúo catastral*</label>

            <div class="form-control-wrap">
               <div class="input-group">
                  <input type="text" name="property_valuation" class="form-control" id="property_valuation" value="{{ $property->property_valuation }}" placeholder="Ej: 60,000,000" required />
                  <div class="input-group-append">
                     <span class="input-group-text">$</span>
                  </div>
               </div>
               <span class="text-danger error-text property_valuation_err"></span>
            </div>
         </div>
      </div>

      <div class="col-sm-12">
         <div class="form-group">
            <p class="form-label">¿El bien cuenta con RPH? (Reglamento de Propiedad Horizontal)*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="is_rph" @if($property->is_rph == 1) checked @endif/>
               <label class="custom-control-label" for="is_rph">Sí / No</label>
            </div>
            <span class="text-danger error-text is_rph_err"></span>
         </div>
      </div>
   </div>
   <!-- Información catastral -->

   <div class="col-sm-12 text-right mt-5 mr-0">
      <div class="form-group">
         <button type="button" onclick="getDocsTab();" class="btn btn-outline-dark">
            Continuar
         </button>
      </div>
   </div>
</div>