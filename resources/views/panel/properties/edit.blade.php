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
                     <a class="nav-link active" data-toggle="tab" href="#docsInfo" id="docsInfoLink">Información normativa</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#documentalInfo" id="documentalInfoLink">Información documental</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#analysisInfo" id="analysisInfoLink">Análisis</a>
                  </li>
               </ul>
               <div class="tab-content">
                  @include('panel.includes.properties.edit._identification-tab-content')
                  @include('panel.includes.properties.edit._cadastral-tab-content')
                  @include('panel.includes.properties.edit._normative-tab-content')
                  @include('panel.includes.properties.edit._documental-tab-content')
                  @include('panel.includes.properties.edit._analysis-tab-content')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@stop @push('scripts')
<script type="text/javascript">

   //Enviar peticiones POST dinámicamente
   function sendDynamicInfo(info, url_type, url){

      //Configurar el token CSRF en la petición
      $.ajaxSetup({
         headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
         },
      });

      //Retornar la respuesta del controlador
      return $.ajax({
         type: url_type,
         url: url,
         data: info,
         success: function (data) {
            return data;
         },
      });
   }

   //Mostrar mensajes de alerta o de error
   function showToast(timer, icon, title){
      const Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: timer,
         timerProgressBar: true,
         didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
         }
      });

      Toast.fire({
         icon: icon,
         title: title
      });
   }

   function printErrorMsg (msg) {
      $(".print-error-msg").find("ul").html('');
      $(".print-error-msg").css('display','block');
      $.each( msg, function( key, value ) {
         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         $('.'+key+'_err').text(value);
      });
   }

   //Cambiar al tab Información catastral mediante los botones
   function getIdentificationTab() {

      //Enviar la información al servidor con el código del archivo
      let code = $("#code").val();
      let link = $("#link").val();
      let plate = $("#plate").val();
      let repeated = $("#repeated").val();
      let repeated_concept = $("#repeated_concept").val();
      let discharged = $("#discharged").val();
      let secretaryship = $("#secretaryship").val();
      let property_id = $("#property_id").val();
      let fixed_asset_code_id = $("#fixed_asset_code_id").val();
      let fixed_asset = $("#fixed_asset").val();
      let commercial_appraisal = $("#commercial_appraisal").val();
      let sss_description = $("#sss_description").val();
      let sss_address = $("#sss_address").val();
      let urbanization_or_neighborhood = $("#urbanization_or_neighborhood").val();

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
         sss_description
      };

      const url = "{{route('panel.properties.update.identification', $property)}}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {

            showToast(5000, 'success', 'Cambios guardados exitosamente');
            //Cambiar al tab de información catastral
            $("#identificationInfo").removeClass("active");
            $("#identificationInfoLink").removeClass("active");
            $("#cadastralInfo").addClass("active");
            $("#cadastralInfoLink").addClass("active");
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal. Por favor verifica los campos marcados con el *');
            printErrorMsg(response.error);
         }
      });
   }

   //Cambiar al tab Información normativa mediante los botones
   function getDocsTab() {

      //Enviar la información al servidor con el código del archivo
      let plate_number = $("#plate_number").val();
      let property_deed = $("#property_deed").val();
      let units = $("#units").val();
      let writing_date = $("#writing_date").val();
      let notary_id = $("#notary_id").val();
      let which_notary_container = $("#which_notary_container").val();
      let cbml = $("#cbml").val();
      let commune_id = $("#commune_id").val();
      let district_id = $("#district_id").val();
      let cadastral_address = $("#cadastral_address").val();
      let cadastral_area = $("#cadastral_area").val();
      let construction_area = $("#construction_area").val();
      let property_valuation = $("#property_valuation").val();
      let is_rph = 0;

      //Verificar si el inmueble cuenta con RPH
      if ($("#is_rph").is(":checked")) {
         is_rph = 1;
      }

      let data = {
         plate_number,
         property_deed,
         units,
         writing_date,
         notary_id,
         which_notary_container,
         cbml,
         commune_id,
         district_id,
         cadastral_address,
         cadastral_area,
         construction_area,
         property_valuation,
         is_rph
      };

      const url = "{{route('panel.properties.update.cadastral', $property)}}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {

            showToast(5000, 'success', 'Cambios guardados exitosamente');
            //Cambiar al tab de información normativa
            $("#cadastralInfo").removeClass("active");
            $("#cadastralInfoLink").removeClass("active");
            $("#docsInfo").addClass("active");
            $("#docsInfoLink").addClass("active");
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal. Por favor verifica los campos marcados con el *');
            printErrorMsg(response.error);
         }
      });
   }

   //Cambiar al tab Información documental mediante los botones
   function getDocumentalTab() {

      //Enviar la información al servidor con el código del archivo
      let lat = $("#lat").val();
      let long = $("#long").val();
      let floor_classification_id = $("#floor_classification_id").val();
      let macroproject_id = $("#macroproject_id").val();
      let treatment_id = $("#treatment_id").val();
      let polygon_id = $("#polygon_id").val();
      let floor_use_id = $("#floor_use_id").val();
      let third_level_instrument_id = $("#third_level_instrument_id").val();
      let threat_torrential_avenues_id = $("#threat_torrential_avenues_id").val();
      let threat_floods_id = $("#threat_floods_id").val();
      let threat_mass_movements_id = $("#threat_mass_movements_id").val();
      let other_protection_categories_id = $("#other_protection_categories_id").val();

      let data = {
         lat,
         long,
         floor_classification_id,
         macroproject_id,
         treatment_id,
         polygon_id,
         floor_use_id,
         third_level_instrument_id,
         threat_torrential_avenues_id,
         threat_floods_id,
         threat_mass_movements_id,
         other_protection_categories_id
      };

      const url = "{{route('panel.properties.update.normative', $property)}}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {

            showToast(5000, 'success', 'Cambios guardados exitosamente');
            //Cambiar al tab de información documental
            $("#docsInfo").removeClass("active");
            $("#docsInfoLink").removeClass("active");
            $("#documentalInfo").addClass("active");
            $("#documentalInfoLink").addClass("active");
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal. Por favor verifica los campos marcados con el *');
            printErrorMsg(response.error);
         }
      });
   }

   //Cambiar al tab Análisis mediante los botones
   function getAnalysisTab() {

      //Enviar la información al servidor con el código del archivo
      let photography = 0;
      let cadastral_file = 0;
      let vur = 0;
      let title_study = 0;
      let georeferenced = 0;
      let scriptures = 0;
      let loan = 0;
      let building_permit = 0;
      let bic = 0;
      let loan_start_date = $("#loan_start_date").val();
      let loan_end_date = $("#loan_end_date").val();
      let entity_to_which_is_assigned = $("#entity_to_which_is_assigned").val();
      let loan_information = $("#loan_information").val();
      let resolution = $("#resolution").val();
      let bic_name = $("#bic_name").val();
      let bic_group = $("#bic_group").val();
      let bic_order = $("#bic_order").val();
      let conservation_level = $("#conservation_level").val();
      let bic_act = $("#bic_act").val();
      let expedient = $("#expedient").val();

      if ($("#photography").is(":checked")) {
         photography = 1;
      }

      if ($("#cadastral_file").is(":checked")) {
         cadastral_file = 1;
      }

      if ($("#vur").is(":checked")) {
         vur = 1;
      }

      if ($("#title_study").is(":checked")) {
         title_study = 1;
      }

      if ($("#georeferenced").is(":checked")) {
         georeferenced = 1;
      }

      if ($("#scriptures").is(":checked")) {
         scriptures = 1;
      }

      if ($("#loan").is(":checked")) {
         loan = 1;
      }

      if ($("#building_permit").is(":checked")) {
         building_permit = 1;
      }

      if ($("#bic").is(":checked")) {
         bic = 1;
      }

      if ($("#expedient").is(":checked")) {
         expedient = 1;
      }

      let data = {
         photography,
         cadastral_file,
         vur,
         title_study,
         georeferenced,
         scriptures,
         loan,
         loan_start_date,
         loan_end_date,
         entity_to_which_is_assigned,
         loan_information,
         expedient,
         building_permit,
         resolution,
         bic,
         bic_name,
         bic_group,
         bic_order,
         conservation_level,
         bic_act,
      };

      const url = "{{route('panel.properties.update.documental', $property)}}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {

            showToast(5000, 'success', 'Cambios guardados exitosamente');
            //Cambiar al tab de análisis
            $("#documentalInfo").removeClass("active");
            $("#documentalInfoLink").removeClass("active");
            $("#analysisInfo").addClass("active");
            $("#analysisInfoLink").addClass("active");
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal. Por favor verifica los campos marcados con el *');
            printErrorMsg(response.error);
         }
      });
   }

   //Enviar la información de análisis
   function sendAnalysisInfo() {

      //Enviar la información al servidor con el código del archivo
      let destination_id = $("#destination_id").val();
      let opportunity_id = $("#opportunity_id").val();
      let prioritization_level = $("#prioritization_level").val();
      let action_id = $("#action_id").val();
      let project_managed = $("#project_managed").val();
      let observations = $("#observations").val();
      let date_of_analysis_by_sss = $("#date_of_analysis_by_sss").val();
      let revised = $("#revised").val();
      let available = $("#available").val();
      let responsable_id = $("#responsable_id").val();
      let publish_now = $("#publish_now").val();

      let data = {
         destination_id,
         opportunity_id,
         prioritization_level,
         action_id,
         project_managed,
         observations,
         date_of_analysis_by_sss,
         revised,
         available,
         responsable_id,
         publish_now
      };

      const url = "{{ route('panel.properties.update', $property) }}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {

            showToast(5000, 'success', 'Cambios guardados exitosamente. Cargando lista de inmuebles...');
            //Enviar a la lista de inmuebles
            setTimeout(function(){
               window.location.href = '{{ route('panel.properties.index') }}';
            }, 5000);
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal. Por favor verifica los campos marcados con el *');
            printErrorMsg(response.error);
         }
      });
   }

   //Determinar si los campos adicionales están marcados por defecto
   function checkBool(){
      //Verificar si tiene licencia de construcción
      if ($("#building_permit").is(":checked")) {
         $('#resolution_container').fadeIn(500);
      } else {
         $('#resolution_container').fadeOut(500);
      }

      //Verificar si el bien está dado en comodato
      if ($("#loan").is(":checked")) {
         $('#loan_container').fadeIn(500);
      } else {
         $('#loan_container').fadeOut(500);
      }

      //Verificar si tiene es un BIC
      if ($("#bic").is(":checked")) {
         $('#bic_container').fadeIn(500);
      } else {
         $('#bic_container').fadeOut(500);
      }
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