@extends('panel.app') @section('content') @section('title', 'Agregar inmueble') @section('parent', 'Inmuebles')

<div class="nk-block">
   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">

            <div class="alert alert-danger print-error-msg" style="display:none">
               <ul></ul>
            </div>


            <div class="col-12">
               <ul class="nav nav-tabs nav-tabs-s2">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#identificationInfo" id="identificationInfoLink">Identificación</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#cadastralInfo" id="cadastralInfoLink">Información catastral</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#docs_info">Información documental</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#analysis">Análisis</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="identificationInfo">
                     <span class="preview-title-lg overline-title mt-5 mb-4">Identificación</span>

                     <!-- Identificación -->
                     <div class="row gy-4 align-center">
                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="code">ID*</label>
                              <input type="text" name="code" class="form-control" value="{{ old('code') }}" id="code" />
                              <span class="text-danger error-text code_err"></span>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="link">Link*</label>
                              <input name="link" value="{{ old('link') }}" class="form-control" id="link" type="text" />
                              <span class="text-danger error-text link_err"></span>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="plate">Matrícula*</label>
                              <input type="text" class="form-control" value="{{ old('plate') }}" id="plate" name="plate" />
                              <span class="text-danger error-text plate_err"></span>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="repeated">¿La matrícula está repetida?</label>
                              <select class="form-control" name="repeated" id="repeated">
                                 <option value="Matrícula única con varios activos fijos">Matrícula única con varios activos fijos</option>
                                 <option value="Matrícula única con un activo fijo">Matrícula única con un activo fijo</option>
                                 <option value="Repetida">Repetida</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="discharged">¿Dada de baja?</label>
                              <select class="form-control" name="discharged" id="discharged">
                                 <option value="Dada de baja en SAP">Dada de baja en SAP</option>
                                 <option value="No aplica">No aplica</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12" id="repeated_concept">
                           <div class="form-group">
                              <label class="form-label" for="repeated_concept">Concepto de por qué está repetida</label>
                              <input type="text" value="{{ old('repeated_concept') }}" id="repeated_concept" class="form-control" name="repeated_concept" />
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
                                    <option value="{{ $secretaryship->id }}">{{ $secretaryship->title }}</option>
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
                                    <option @if($propertytype->title == 'Fiscal') selected @endif value="{{ $propertytype->id }}">{{ $propertytype->title }}</option>
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
                                    <option value="{{ $asset->id }}">
                                       ({{ $asset->code }}) - {{ $asset->description }}
                                    </option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                           <div class="form-group">
                              <label class="form-label">Activo fijo*</label>
                              <div class="form-control-wrap">
                                 <input type="text" class="form-control" name="fixed_asset" id="fixed_asset" value="{{ old('fixed_asset') }}" placeholder="Ej: 500L" />
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
                                    <input name="commercial_appraisal" id="commercial_appraisal" type="text" placeholder="Ej: 60,000,000" class="form-control" value="{{ old('commercial_appraisal') }}"/>
                                    <span class="text-danger error-text commercial_appraisal_err"></span>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label">Dirección*</label>
                              <div class="form-control-wrap">
                                 <input type="text" class="form-control" name="sss_address" id="sss_address" value="{{ old('sss_address') }}" placeholder="Ej: CR 72 A 92 BB 20" />
                                 <span class="text-danger error-text sss_address_err"></span>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="form-group">
                              <label class="form-label">Barrio o urbanización*</label>
                              <div class="form-control-wrap">
                                 <input type="text" class="form-control" name="urbanization_or_neighborhood" id="urbanization_or_neighborhood" placeholder="Ej: Francisco Antonio Zea" value="{{ old('urbanization_or_neighborhood') }}" />
                                 <span class="text-danger error-text urbanization_or_neighborhood_err"></span>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="sss_description">Descripción corta* (Utilizado para el nombre del bien)</label>
                              <div class="form-control-wrap">
                                 <input type="text" class="form-control" id="sss_description" name="sss_description" value="{{ old('sss_description') }}" placeholder="Ej: Junta de acción comunal, cancha, Biblioteca Santo Domingo, Cárcel, ..." />
                                 <span class="text-danger error-text sss_description_err"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /Información básica -->

                     <div class="col-sm-12 text-right mt-5 mr-0">
                        <div class="form-group">
                           <button type="button" onclick="getIdentificationData();" class="btn btn-outline-dark">
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
                              <input type="text" name="plate_number" class="form-control" id="plate_number" value="{{ old('plate_number') }}" />
                              <span class="text-danger error-text plate_number_err"></span>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="property_deed">
                                 Superferficie jurídica (Área)
                              </label>
                              <input type="text" value="{{ old('property_deed') }}" name="property_deed" class="form-control" id="property_deed" />
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
                              <input type="date" value="{{ old('writing_date') }}" name="writing_date" class="form-control" id="writing_date" />
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-7">
                           <div class="form-group">
                              <label class="form-label" for="notary_id">
                                 Notaría
                              </label>
                              <select class="form-control" name="notary_id" id="notary_id">
                                 @foreach($notaries as $notary)
                                 <option value="{{ $notary->id }}">{{ $notary->title }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12" style="display: none;" id="which_notary_container">
                           <label class="form-label" for="which_notary">
                              ¿Cuál?
                           </label>
                           <input type="text" placeholder="Ej: Notaría 2 de Bogotá" name="which_notary" value="{{ old('which_notary') }}" class="form-control" id="which_notary" />
                        </div>
                     </div>
                     <!-- Información jurídica -->

                     <span class="preview-title-lg overline-title mt-5 mb-4">Información catastral </span>

                     <!-- Información catastral -->
                     <div class="row gy-4 align-center">
                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="cbml">CBML*</label>
                              <input type="text" name="cbml" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" minlength="11" value="{{ old('cbml') }}" class="form-control" id="cbml" />
                              <span class="text-danger error-text cbml_err"></span>
                           </div>
                        </div>

                        {{-- Si el CBML tiene 10 caracteres, entonces se le agrega un 0 al inicio --}}

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="commune_id">Comuna (corregimiento)*</label>
                              <select class="form-control" id="commune_id" name="commune_id">
                                 @foreach($communes as $commune)
                                 <option value="{{ $commune->id }}">{{ $commune->code }} - {{ $commune->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label class="form-label" for="district_id">Barrio*</label>
                              <select class="form-control" id="district_id" name="district_id">
                                 @foreach($districts as $district)
                                 <option value="{{ $district->id }}">{{ $district->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="form-label" for="cadastral_address">Dirección de catastro*</label>
                              <input placeholder="Ej: CR 72 A 92 BB 20" type="text" name="cadastral_address" autocomplete="off" class="form-control" id="cadastral_address" />
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
                                    <input type="text" name="cadastral_area" class="form-control" id="cadastral_area" required />
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
                                    <input type="text" name="construction_area" class="form-control" id="construction_area" required />
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
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" name="property_valuation" id="property_valuation" placeholder="Ej: 60,000,000" class="form-control" />
                                 </div>
                                 <span class="text-danger error-text property_valuation_err"></span>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           <div class="form-group">
                              <p class="form-label">¿El bien cuenta con RPH? (Reglamento de Propiedad Horizontal)*</p>

                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" checked class="custom-control-input" id="is_rph" />
                                 <label class="custom-control-label" for="is_rph">Sí / No</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Información catastral -->

                     <div class="col-sm-12 text-right mt-5 mr-0">
                        <div class="form-group">
                           <button type="button" onclick="sendInfo();" class="btn btn-outline-dark">
                              Guardar
                           </button>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="docs_info">
                     @include('panel.includes._complete-previous')
                  </div>
                  <div class="tab-pane" id="analysis">
                     @include('panel.includes._complete-previous')
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@stop @push('scripts')
<script type="text/javascript">
   function getIdentificationData() {
      //Cambiar de tab de navegación
      $("#identificationInfo").removeClass("active");
      $("#identificationInfoLink").removeClass("active");
      $("#cadastralInfo").addClass("active");
      $("#cadastralInfoLink").addClass("active");
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
            if (data.status == 'ok') {
               window.location.href = data.url;
            } else{
               printErrorMsg(data.error);
            }
         },
      });
   }

   // function printErrorMsg (msg) {
   
   // }

   function printErrorMsg (msg) {
      $(".print-error-msg").find("ul").html('');
      $(".print-error-msg").css('display','block');
      $.each( msg, function( key, value ) {
         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         $('.'+key+'_err').text(value);
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

      // $('input[name="isBIC"]').click(function () {
      //    if ($(this).prop("checked") == true) {
      //       $("#bic").fadeIn(700);
      //    } else if ($(this).prop("checked") == false) {
      //       $("#bic").fadeOut(700);
      //    }
      // });

      // $('input[name="isComodato"]').click(function () {
      //    if ($(this).prop("checked") == true) {
      //       $("#comodato").fadeIn(700);
      //    } else if ($(this).prop("checked") == false) {
      //       $("#comodato").fadeOut(700);
      //    }
      // });
   });
</script>
@endpush
