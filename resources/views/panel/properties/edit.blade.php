@extends('panel.app') 
@section('content') 
@section('title', 'Editar inmueble ' . $property->code) 
@section('parent', 'Inmuebles')

<div class="nk-block">
   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">
            <div class="col-12">
               <ul class="nav nav-tabs nav-tabs-s2">
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#identificationInfo" id="identificationInfoLink">Identificación</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#cadastralInfo" id="cadastralInfoLink">Información catastral</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#docsInfo" id="docsInfoLink">Información documental</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#analysisInfo" id="analysisInfoLink">Análisis</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane" id="identificationInfo">
                     <span class="preview-title-lg overline-title mt-5 mb-4">Identificación</span>

                     <!-- Identificación -->
                     <div class="row gy-4 align-center">
                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="code">ID*</label>
                              <input type="text" name="code" class="form-control" id="code" value="{{ $property->code }}" />
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="link">Link*</label>
                              <input name="link" class="form-control" id="link" type="text" value="{{ $property->link }}" />
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="plate">Matrícula*</label>
                              <input type="text" class="form-control" id="plate" name="plate" value="{{ $property->plate }}" />
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
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="discharged">¿Dada de baja?</label>
                              <select class="form-control" name="discharged" id="discharged">
                                 <option @if($property->discharged == "Dada de baja en SAP") selected @endif value="Dada de baja en SAP">Dada de baja en SAP</option>
                                 <option @if($property->discharged == "No aplica") selected @endif value="No aplica">No aplica</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12" id="repeated_concept">
                           <div class="form-group">
                              <label class="form-label" for="repeated_concept">Concepto de por qué está repetida</label>
                              <input type="text" id="repeated_concept" class="form-control" value="{{ $property->repeated_concept }}" name="repeated_concept" />
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
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                           <div class="form-group">
                              <label class="form-label">Activo fijo*</label>
                              <div class="form-control-wrap">
                                 <input type="text" class="form-control" name="fixed_asset" id="fixed_asset" placeholder="Ej: 500L" value="{{ $property->fixed_asset }}" />
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
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label">Dirección*</label>
                              <div class="form-control-wrap">
                                 <input type="text" class="form-control" name="sss_address" id="sss_address" value="{{ $property->sss_address }}" placeholder="Ej: CR 72 A 92 BB 20" />
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label">Barrio o urbanización*</label>
                              <div class="form-control-wrap">
                                 <input type="text" value="{{ $property->urbanization_or_neighborhood }}" class="form-control" name="urbanization_or_neighborhood" id="urbanization_or_neighborhood" placeholder="Ej: Francisco Antonio Zea" />
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="sss_description">Descripción corta*</label>
                              <input class="form-control" id="sss_description" name="sss_description" placeholder="Ej: Junta de acción comunal, cancha, Biblioteca Santo Domingo, Cárcel, ..." value="{{ $property->sss_description }}" />
                           </div>
                        </div>
                     </div>
                     <!-- /Información básica -->

                     <div class="col-sm-12 text-right mt-5 mr-0">
                        <div class="form-group">
                           <button type="button" onclick="getCadastralTab();" class="btn btn-outline-dark">
                              Continuar
                           </button>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="cadastralInfo">
                     <span class="preview-title-lg overline-title mt-5 mb-4">Información jurídica </span>

                     <!-- Información jurídica -->
                     <div class="row gy-4 align-center">
                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="plate_number">No. de escritura</label>
                              <input value="{{ $property->plate_number }}" type="text" name="plate_number" class="form-control" id="plate_number" />
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="property_deed">
                                 Superferficie jurídica (Área)
                              </label>
                              <input value="{{ $property->property_deed }}" type="text" name="property_deed" class="form-control" id="property_deed" />
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="units">
                                 Unidades
                              </label>
                              <select class="form-control" name="units" id="units">
                                 <option value="m2">m²</option>
                                 <option value="pies2">ft² (Pies²)</option>
                                 <option value="Varas">varas</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-5">
                           <div class="form-group">
                              <label class="form-label" for="writing_date">
                                 Fecha de escritura
                              </label>
                              <input type="date" value="{{ $property->writing_date }}" name="writing_date" class="form-control" id="writing_date" />
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
                           </div>
                        </div>

                        <div class="col-sm-12" style="display: none;" id="which_notary_container">
                           <label class="form-label" for="which_notary">
                              ¿Cuál?
                           </label>
                           <input type="text" value="{{ $property->which_notary }}" placeholder="Ej: Notaría 2 de Bogotá" name="which_notary" class="form-control" id="which_notary" />
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
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="cadastral_address">Dirección de catastro*</label>
                              <input placeholder="Ej: CR 72 A 92 BB 20" type="text" name="cadastral_address" autocomplete="off" class="form-control" id="cadastral_address" value="{{ $property->cadastral_address }}" />
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
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="property_valuation">Avalúo catastral*</label>

                              <div class="form-control-wrap">
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" value="{{ $property->property_valuation }}" name="property_valuation" id="property_valuation" placeholder="Ej: 60,000,000" class="form-control" />
                                 </div>
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

                  <div class="tab-pane active" id="docsInfo">
                     
                     <span class="preview-title-lg overline-title mt-5 mb-4">Coordenadas</span>

                     <!-- Coordenadas-->
                     <div class="row gy-4 align-center">
                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="lat">Latitud</label>
                              <input name="lat" class="form-control" id="lat" value="6°15'23.886N" type="text">
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="long">Longitud</label>
                              <input type="text" name="long" value="75°34'6.289W" class="form-control" id="long" />
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
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="macroproject_id">Macroproyecto</label>
                              <select class="form-control" name="macroproject_id" id="macroproject_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="treatment_id">Tratamiento</label>
                              <select class="form-control" name="treatment_id" id="treatment_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="polygon_id">Polígono</label>
                              <select class="form-control" name="polygon_id" id="polygon_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="floor_use_id">Uso del suelo</label>
                              <select class="form-control" name="floor_use_id" id="floor_use_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="third_level_instrument_id">Instrumento de tercer nivel</label>
                              <select class="form-control" name="third_level_instrument_id" id="third_level_instrument_id">
                                 <option value="m2">Option</option>
                              </select>
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
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-3">
                           <div class="form-group">
                              <label class="form-label" for="threat_floods_id">Amenaza de inundaciones</label>
                              <select class="form-control" name="threat_floods_id" id="threat_floods_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-3">
                           <div class="form-group">
                              <label class="form-label" for="threat_mass_movements_id">Amenaza de movimientos en masa</label>
                              <select class="form-control" name="threat_mass_movements_id" id="threat_mass_movements_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-3">
                           <div class="form-group">
                              <label class="form-label" for="other_protection_categories_id">Otras categorías de protección</label>
                              <select class="form-control" name="other_protection_categories_id" id="other_protection_categories_id">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 text-right mt-5 mr-0">
                           <div class="form-group">
                              <button type="button" onclick="getAnalysisTab();" class="btn btn-outline-dark">
                                 Continuar
                              </button>
                           </div>
                        </div>
                     </div>
                     <!-- Suelo de protección   -->

                  </div>
                  <div class="tab-pane" id="analysisInfo">

                     <span class="preview-title-lg overline-title mt-5 mb-4">Coordenadas</span>

                     <!-- Coordenadas-->
                     <div class="row gy-4 align-center">

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

                        <div class="col-sm-12 col-lg-6 col-xl-4">
                           <div class="form-group">
                              <p class="form-label">¿Está georeferenciado en ARCGIS?*</p>

                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="georeferenced" @if($property->georeferenced == 1) checked @endif/>
                                 <label class="custom-control-label" for="georeferenced">Sí / No</label>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-4">
                           <div class="form-group">
                              <p class="form-label">¿Tiene escrituras?*</p>

                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="scriptures" @if($property->scriptures == 1) checked @endif/>
                                 <label class="custom-control-label" for="scriptures">Sí / No</label>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-4">
                           <div class="form-group">
                              <p class="form-label">¿Está en comodato?*</p>

                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="loan" @if($property->loan == 1) checked @endif/>
                                 <label class="custom-control-label" for="loan">Sí / No</label>
                              </div>
                           </div>
                        </div>

                        <!-- Información del comodato -->

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
                              <select class="form-control" name="entity_to_which_is_assigned" id="entity_to_which_is_assigned">
                                 <option value="m2">Option</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="loan_information">Información del comodato</label>
                              <textarea name="loan_information" class="form-control" id="loan_information"></textarea>
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
                                 <input type="checkbox" class="custom-control-input" id="building_permit" @if($property->building_permit == 1) checked @endif/>
                                 <label class="custom-control-label" for="building_permit">Sí / No</label>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="resolution">Resolución - <span class="text-danger">Depende de SI tiene licencia de construcción</span></label>
                              <input type="text" name="resolution" class="form-control" id="resolution" />
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
                                 <input type="checkbox" class="custom-control-input" id="bic" @if($property->bic == 1) checked @endif/>
                                 <label class="custom-control-label" for="bic">Sí / No</label>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="bic_name">Nombre del BIC - <span class="text-danger">Depende de SI es BIC</span></label>
                              <input type="text" name="bic_name" class="form-control" id="bic_name" />
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="bic_group">Grupo del BIC</label>
                              <select class="form-control" name="bic_group" id="bic_group">
                                 <option value="Arquitectónico">Arquitectónico</option>
                                 <option value="Urbano">Urbano</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="bic_order">Orden del BIC</label>
                              <select class="form-control" name="bic_order" id="bic_order">
                                 <option value="Bien de Interés Cultural Nacional">Bien de Interés Cultural Nacional</option>
                                 <option value="Bien de Interés Cultural Municipal">Bien de Interés Cultural Municipal</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="conservation_level">Nivel de conservación del BIC</label>
                              <select class="form-control" name="conservation_level" id="conservation_level">
                                 <option value="Integral">Integral</option>
                                 <option value="Arquitectónico 1">Arquitectónico 1</option>
                                 <option value="Arquitectónico 2">Arquitectónico 2</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="bic_act">Acto administrativo de declaratoria del BIC - <span class="text-danger">Depende de SI es BIC</span></label>
                              <input type="text" name="bic_act" class="form-control" id="bic_act" />
                           </div>
                        </div>

                        <!-- /Bien de Interés Cultural -->
                     </div>

                     <div class="col-sm-12 text-right mt-5 mr-0">
                        <div class="form-group">
                           <button type="button" onclick="getCadastralTab();" class="btn btn-outline-dark">
                              Terminar
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@stop @push('scripts')
<script type="text/javascript">
   function getCadastralTab() {
      //Cambiar al tab de información catastral
      $("#identificationInfo").removeClass("active");
      $("#identificationInfoLink").removeClass("active");
      $("#cadastralInfo").addClass("active");
      $("#cadastralInfoLink").addClass("active");
   }

   function getDocsTab() {
      //Cambiar al tab de información documental
      $("#cadastralInfo").removeClass("active");
      $("#cadastralInfoLink").removeClass("active");
      $("#docsInfo").addClass("active");
      $("#docsInfoLink").addClass("active");
   }

   function getAnalysisTab() {
      //Cambiar al tab de análisis
      $("#docsInfo").removeClass("active");
      $("#docsInfoLink").removeClass("active");
      $("#analysisInfo").addClass("active");
      $("#analysisInfoLink").addClass("active");
   }

   function sendInfo() {
      let code = $("#code").val();
      let link = $("#link").val();
      let plate = $("#plate").val();
      let repeated = $("#repeated").val();
      let discharged = $("#discharged").val();
      let repeated_concept = $("#repeated_concept").val();
      let secretaryship = $("#secretaryship").val();
      let property_id = $("#property_id").val();
      let fixed_asset_code_id = $("#fixed_asset_code_id").val();
      let fixed_asset = $("#fixed_asset").val();
      let sss_description = $("#sss_description").val();
      let commercial_appraisal = $("#commercial_appraisal").val();
      let sss_address = $("#sss_address").val();
      let urbanization_or_neighborhood = $("#urbanization_or_neighborhood").val();
      let plate_number = $("#plate_number").val();
      let property_deed = $("#property_deed").val();
      let units = $("#units").val();
      let writing_date = $("#writing_date").val();
      let notary_id = $("#notary_id").val();
      let cbml = $("#cbml").val();
      let commune_id = $("#commune_id").val();
      let district_id = $("#district_id").val();
      let cadastral_address = $("#cadastral_address").val();
      let cadastral_area = $("#cadastral_area").val();
      let construction_area = $("#construction_area").val();
      let property_valuation = $("#property_valuation").val();
      let is_rph = 0;

      if ($("#is_rph").is(":checked")) {
         is_rph = 1;
      }

      let data = {
         code,
         link,
         plate,
         repeated,
         discharged,
         repeated_concept,
         secretaryship,
         property_id,
         fixed_asset_code_id,
         fixed_asset,
         commercial_appraisal,
         sss_address,
         urbanization_or_neighborhood,
         sss_description,
         plate_number,
         property_deed,
         units,
         writing_date,
         notary_id,
         cbml,
         commune_id,
         district_id,
         cadastral_address,
         cadastral_area,
         construction_area,
         property_valuation,
         is_rph,
      };

      $.ajaxSetup({
         headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
         },
      });
      $.ajax({
         type: "post",
         url: "{{route('panel.properties.store')}}",
         data: data,
         success: function (data) {
            if (data.status == "ok") {
               window.location.href = data.url;
            }
         },
      });
   }

   $(document).ready(function () {
      //Verificar si la opción seleccionada es "Repetida"
      $('select[name="repeated"]').change(function () {
         if ($("#repeated option:selected").text() == "Repetida") {
            $("#repeated_concept").fadeIn(500);
         } else {
            $("#repeated_concept").fadeOut(1000);
         }
      });

      //Verificar si la opción seleccionada en la notaría es "Otra"
      $('select[name="notary_id"]').change(function () {
         if ($("#notary_id option:selected").text() == "Otra") {
            $("#which_notary_container").fadeIn(500);
         } else {
            $("#which_notary_container").fadeOut(1000);
         }
      });

      $("#cadastral_address").focus(function () {
         $("#cadastral_address_container").fadeIn(500);
      });

      $("#cadastral_area").focus(function () {
         $("#cadastral_address_container").fadeOut(1000);
      });
   });
</script>
@endpush