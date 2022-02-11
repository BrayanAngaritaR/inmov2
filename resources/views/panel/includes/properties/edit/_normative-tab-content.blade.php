<div class="tab-pane active" id="docsInfo">
   
   <span class="preview-title-lg overline-title mt-5 mb-4">Coordenadas</span>

   <!-- Coordenadas-->
   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="lat">Latitud*</label>
            <input name="lat" placeholder="6°17'11.517N" class="form-control" id="lat" value="{{ $property->latitude }}" type="text">
            <span class="text-danger error-text lat_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="long">Longitud*</label>
            <input type="text" placeholder="75°33'1.805W" name="long" value="{{ $property->longitude }}" class="form-control" id="long" />
            <span class="text-danger error-text long_err"></span>
         </div>
      </div>
   </div>

   <span class="preview-title-lg overline-title mt-5 mb-4">Información normativa</span>

   <!-- Información normativa -->
   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="floor_classification_id">Clasificación del suelo</label>
            <select class="form-control" name="floor_classification_id" id="floor_classification_id">
               @foreach($floor_classifications as $floor_classification)
                  <option 
                     @if($property->floor_classification_id == $floor_classification->id) 
                     selected 
                     @endif 
                     value="{{ $floor_classification->id }}">
                     {{ $floor_classification->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text floor_classification_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="macroproject_id">Macroproyecto</label>
            <select class="form-control" name="macroproject_id" id="macroproject_id">
               @foreach($macroprojects as $macroproject)
                  <option 
                     @if($property->macroproject_id == $macroproject->id) 
                     selected 
                     @endif 
                     value="{{ $macroproject->id }}">
                     {{ $macroproject->name }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text macroproject_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="treatment_id">Tratamiento</label>
            <select class="form-control" name="treatment_id" id="treatment_id">
               @foreach($treatments as $treatment)
                  <option 
                     @if($property->treatment_id == $treatment->id) 
                     selected 
                     @endif 
                     value="{{ $treatment->id }}">
                     {{ $treatment->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text treatment_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="polygon_id">Polígono</label>
            <select class="form-control" name="polygon_id" id="polygon_id">
               @foreach($polygons as $polygon)
                  <option 
                     @if($property->polygon_id == $polygon->id) 
                     selected 
                     @endif 
                     value="{{ $polygon->id }}">
                     {{ $polygon->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text polygon_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="third_level_instrument_id">Instrumento de tercer nivel</label>
            <select class="form-control" name="third_level_instrument_id" id="third_level_instrument_id">
               @foreach($third_level_instruments as $third_level_instrument)
                  <option 
                     @if($property->third_level_instrument_id == $third_level_instrument->id) 
                     selected 
                     @endif 
                     value="{{ $third_level_instrument->id }}">
                     {{ $third_level_instrument->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text third_level_instrument_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="floor_use_id">Uso del suelo</label>
            <select class="form-control" name="floor_use_id" id="floor_use_id">
               @foreach($floor_uses as $floor_use)
                  <option 
                     @if($property->floor_use_id == $floor_use->id) 
                     selected 
                     @endif 
                     value="{{ $floor_use->id }}">
                     {{ $floor_use->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text floor_use_id_err"></span>
         </div>
      </div>
   </div>
   <!-- Información normativa -->

   <span class="preview-title-lg overline-title mt-5 mb-4">Suelo de protección  </span>

   <!-- Suelo de protección -->
   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-3">
         <div class="form-group">
            <label class="form-label" for="threat_torrential_avenues_id">Amenaza avenidas torrenciales</label>
            <select class="form-control" name="threat_torrential_avenues_id" id="threat_torrential_avenues_id">
               @foreach($threats as $threat)
                  <option 
                     @if($property->threat_torrential_avenues_id == $threat->id) 
                     selected 
                     @endif 
                     value="{{ $threat->id }}">
                     {{ $threat->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text threat_torrential_avenues_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-3">
         <div class="form-group">
            <label class="form-label" for="threat_floods_id">Amenaza de inundaciones</label>
            <select class="form-control" name="threat_floods_id" id="threat_floods_id">
               @foreach($threats as $threat)
                  <option 
                     @if($property->threat_floods_id == $threat->id) 
                     selected 
                     @endif 
                     value="{{ $threat->id }}">
                     {{ $threat->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text threat_floods_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-3">
         <div class="form-group">
            <label class="form-label" for="threat_mass_movements_id">Amenaza de movimientos en masa</label>
            <select class="form-control" name="threat_mass_movements_id" id="threat_mass_movements_id">
               @foreach($threats as $threat)
                  <option 
                     @if($property->threat_mass_movements_id == $threat->id) 
                     selected 
                     @endif 
                     value="{{ $threat->id }}">
                     {{ $threat->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text threat_mass_movements_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 col-lg-3">
         <div class="form-group">
            <label class="form-label" for="other_protection_categories_id">Otras categorías de protección</label>
            <select class="form-control" name="other_protection_categories_id" id="other_protection_categories_id">
               @foreach($threats as $threat)
                  <option 
                     @if($property->other_protection_categories_id == $threat->id) 
                     selected 
                     @endif 
                     value="{{ $threat->id }}">
                     {{ $threat->title }}
                  </option>
               @endforeach
            </select>
            <span class="text-danger error-text other_protection_categories_id_err"></span>
         </div>
      </div>

      <div class="col-sm-12 text-right mt-5 mr-0">
         <div class="form-group">
            <button type="button" onclick="getDocumentalTab();" class="btn btn-outline-dark">
               Continuar
            </button>
         </div>
      </div>
   </div>
   <!-- Suelo de protección   -->
</div>