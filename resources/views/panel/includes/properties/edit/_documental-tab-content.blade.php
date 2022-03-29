<div class="tab-pane" id="documentalInfo">

   <div class="row gy-4 align-center mt-5 pt-5">

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene fotografía?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="photography" @if($property->photography == 1) checked @endif/>
               <label class="custom-control-label" for="photography">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene ficha catastral?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="cadastral_file" @if($property->cadastral_file == 1) checked @endif/>
               <label class="custom-control-label" for="cadastral_file">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene VUR?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="vur" @if($property->vur == 1) checked @endif/>
               <label class="custom-control-label" for="vur">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene estudio de títulos?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="title_study" @if($property->title_study == 1) checked @endif/>
               <label class="custom-control-label" for="title_study">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Está georeferenciado en ARCGIS?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="georeferenced" @if($property->georeferenced == 1) checked @endif/>
               <label class="custom-control-label" for="georeferenced">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene escrituras?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="scriptures" @if($property->scriptures == 1) checked @endif/>
               <label class="custom-control-label" for="scriptures">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene expediente?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="expedient" @if($property->expedient == 1) checked @endif/>
               <label class="custom-control-label" for="expedient">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Tiene avalúo?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="has_appraise" @if($property->has_appraise == 1) checked @endif/>
               <label class="custom-control-label" for="has_appraise">Sí / No</label>
            </div>
         </div>
      </div>

      <!-- Información del comodato -->

      <div class="col-sm-12">
         <span class="preview-title-lg overline-title mt-3">Comodato</span>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-3">
         <div class="form-group">
            <p class="form-label">¿Está en comodato?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" onchange="checkBool();" class="custom-control-input" id="loan" @if($property->loan == 1) checked @endif/>
               <label class="custom-control-label" for="loan">Sí / No</label>
            </div>
         </div>
      </div>

      <!-- Información del comodato -->

      <div class="row" id="loan_container" style="display: none;">
         <div class="col-sm-12">
            <span class="preview-title-lg overline-title mt-3">Información del comodato</span>
         </div>

         <div class="col-sm-12 col-lg-4">
            <div class="form-group">
               <label class="form-label" for="loan_start_date">
                  Fecha de inicio
               </label>
               <input type="date" value="{{ $property->loan_start_date }}" name="loan_start_date" class="form-control" id="loan_start_date" />
            </div>
         </div>

         <div class="col-sm-12 col-lg-4">
            <div class="form-group">
               <label class="form-label" for="loan_end_date">
                  Fecha de finalización
               </label>
               <input type="date" value="{{ $property->loan_end_date }}" name="loan_end_date" class="form-control" id="loan_end_date" />
            </div>
         </div>

         <div class="col-sm-12 col-lg-4">
            <div class="form-group">
               <label class="form-label" for="entity_to_which_is_assigned">Entidad a la que se asignó</label>
               <input type="text" class="form-control" value="{{ $property->entity_to_which_is_assigned }}" name="entity_to_which_is_assigned" id="entity_to_which_is_assigned"/>
            </div>
         </div>

         <div class="col-sm-12 mt-3">
            <div class="form-group">
               <label class="form-label" for="loan_information">Información del comodato</label>
               <textarea name="loan_information" class="form-control" id="loan_information">{{ $property->loan_information }}</textarea>
            </div>
         </div>
      </div>

      <!-- /Información del comodato -->

      <!-- Licencia de construcción -->

      <div class="col-sm-12">
         <span class="preview-title-lg overline-title mt-3">Licencia de construcción</span>
      </div>

      <div class="col-sm-12">
         <div class="form-group">
            <p class="form-label">¿Tiene licencia de construcción?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="building_permit" onchange="checkBool();" @if($property->building_permit == 1) checked @endif/>
               <label class="custom-control-label" for="building_permit">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="col-sm-12" id="resolution_container" style="display: none;">
         <div class="form-group">
            <label class="form-label" for="resolution">Resolución</label>
            <input type="text" value="{{ $property->resolution }}" name="resolution" class="form-control" id="resolution" />
         </div>
      </div>
      <!-- /Licencia de construcción -->

      <!-- Bien de Interés Cultural -->
      <div class="col-sm-12">
         <span class="preview-title-lg overline-title mt-3">Bien de interés cultural - BIC</span>
      </div>

      <div class="col-sm-12">
         <div class="form-group">
            <p class="form-label">¿Es un bien de interés cultural?*</p>

            <div class="custom-control custom-checkbox">
               <input type="checkbox" onchange="checkBool();" class="custom-control-input" id="bic" @if($property->bic == 1) checked @endif/>
               <label class="custom-control-label" for="bic">Sí / No</label>
            </div>
         </div>
      </div>

      <div class="row" id="bic_container" style="display: none;">
         <div class="col-sm-12">
            <div class="form-group">
               <label class="form-label" for="bic_name">Nombre del BIC</label>
               <input type="text" value="{{ $property->bic_name }}" name="bic_name" class="form-control" id="bic_name" />
            </div>
         </div>

         <div class="col-sm-12 col-lg-4 mt-3">
            <div class="form-group">
               <label class="form-label" for="bic_group">Grupo del BIC</label>
               <select class="form-control" name="bic_group" id="bic_group">
                  <option 
                     @if($property->bic_group == "Arquitectónico") 
                        selected 
                     @endif 
                     value="Arquitectónico">Arquitectónico
                  </option>

                  <option 
                     @if($property->bic_group == "Urbano") 
                        selected 
                     @endif 
                     value="Urbano">Urbano
                  </option>
               </select>
            </div>
         </div>

         <div class="col-sm-12 col-lg-4 mt-3">
            <div class="form-group">
               <label class="form-label" for="bic_order">Orden del BIC</label>
               <select class="form-control" name="bic_order" id="bic_order">
                  <option 
                     @if($property->bic_order == "Bien de Interés Cultural Nacional") 
                        selected 
                     @endif 
                     value="Bien de Interés Cultural Nacional">Bien de Interés Cultural Nacional
                  </option>

                  <option 
                     @if($property->bic_order == "Bien de Interés Cultural Municipal") 
                        selected 
                     @endif 
                     value="Bien de Interés Cultural Municipal">Bien de Interés Cultural Municipal
                  </option>
               </select>
            </div>
         </div>

         <div class="col-sm-12 col-lg-4 mt-3">
            <div class="form-group">
               <label class="form-label" for="conservation_level">Nivel de conservación del BIC</label>
               <select class="form-control" name="conservation_level" id="conservation_level">
                  <option 
                     @if($property->conservation_level == "Integral") 
                        selected 
                     @endif 
                     value="Integral">Integral
                  </option>

                  <option 
                     @if($property->conservation_level == "Arquitectónico 1") 
                        selected 
                     @endif 
                     value="Arquitectónico 1">Arquitectónico 1
                  </option>

                  <option 
                     @if($property->conservation_level == "Arquitectónico 2") 
                        selected 
                     @endif 
                     value="Arquitectónico 2">Arquitectónico 2
                  </option>
               </select>
            </div>
         </div>

         <div class="col-sm-12 mt-3">
            <div class="form-group">
               <label class="form-label" for="bic_act">Acto administrativo de declaratoria del BIC</label>
               <input type="text" name="bic_act" class="form-control" value="{{ $property->bic_act }}" id="bic_act" />
            </div>
         </div>
      </div>

      <!-- /Bien de Interés Cultural -->
   </div>

   <div class="col-sm-12 text-right mt-5 mr-0">
      <div class="form-group">
         <button type="button" onclick="getAnalysisTab();" class="btn btn-outline-dark">
            Continuar
         </button>
      </div>
   </div>
</div>