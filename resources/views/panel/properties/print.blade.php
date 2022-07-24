{{-- <!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title></title>
   </head>
   <body>
      <div class="nk-block">
         <div class="card card-preview">
            <div class="card-inner">
               <div class="preview-block">
                  @if($property->user_id)
                  <div class="col-12 text-center mb-4">
                     <div class="alert alert-warning">
                        Este inmueble fue modificado por última vez {{ $property->updated_at->diffForHumans() }} ({{$property->updated_at}}) por {{ $property->user->name }} ({{ $property->user->email }}).
                        <a class="text-dark" href="{{ route('panel.audits.property.show', $property) }}" target="_blank"><b>Ver auditorías</b></a>
                     </div>
                  </div>
                  @endif

                  <div class="col-12">
                     <table>
                        <tbody>
                           <tr>
                              <td>ID</td>
                              <td>ID</td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="tab-content">
                        @if(Auth::user()->hasRole(['Admin', 'Auditor', 'Supervisor'])) @include('panel.includes.properties.edit._identification-tab-content') @include('panel.includes.properties.edit._cadastral-tab-content')
                        @include('panel.includes.properties.edit._normative-tab-content') @include('panel.includes.properties.edit._documental-tab-content') @include('panel.includes.properties.edit._analysis-tab-content') @else
                        <div class="text-center">
                           No tienes permisos suficientes para ver esta sección
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

--}}

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Exportar inmueble {{ $property->code }}</title>

      <style>
         @font-face {
            font-family: "Inter";
            src: url("Inter-Regular.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
         }

         @font-face {
            font-family: "Inter";
            src: url("Inter-Medium.ttf") format("truetype");
            font-weight: 500;
            font-style: normal;
         }

         @font-face {
            font-family: "Inter";
            src: url("Inter-Bold.ttf") format("truetype");
            font-weight: 700;
            font-style: normal;
         }

         @font-face {
            font-family: "Space Mono";
            src: url("SpaceMono-Regular.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
         }

         body {
            font-size: 0.75rem;
            font-family: "Inter", sans-serif;
            font-weight: 400;
            color: #000000;
            margin: 0 auto;
            position: relative;
         }

         #pspdfkit-header {
            font-size: 0.625rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 400;
            color: #717885;
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
            width: 100%;
         }

         .header-columns {
            display: flex;
            justify-content: space-between;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
         }

         .logo {
            height: 1.5rem;
            width: auto;
            margin-right: 1rem;
         }

         .logotype {
            display: flex;
            align-items: center;
            font-weight: 700;
         }

         h2 {
            font-family: "Space Mono", monospace;
            font-size: 1.25rem;
            font-weight: 400;
         }

         h4 {
            font-family: "Space Mono", monospace;
            font-size: 1rem;
            font-weight: 400;
         }

         p {
            font-family: "Space Mono", monospace;
            font-size: 0.9rem;
            line-height: 1.4rem;
            font-weight: 400;
         }

         .page {
            margin-left: 5rem;
            margin-right: 5rem;
         }

         .intro-table {
            display: flex;
            justify-content: space-between;
            margin: 3rem 0 3rem 0;
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
         }

         .intro-form {
            display: flex;
            flex-direction: column;
            border-right: 1px solid #000000;
            width: 50%;
         }

         .intro-form:last-child {
            border-right: none;
         }

         .intro-table-title {
            font-size: 0.625rem;
            margin: 0;
         }

         .intro-form-item {
            padding: 1.25rem 1.5rem 1.25rem 1.5rem;
         }

         .intro-form-item:first-child {
            padding-left: 0;
         }

         .intro-form-item:last-child {
            padding-right: 0;
         }

         .intro-form-item-border {
            padding: 1.25rem 0 0.75rem 1.5rem;
            border-bottom: 1px solid #000000;
         }

         .intro-form-item-border:last-child {
            border-bottom: none;
         }

         .form {
            display: flex;
            flex-direction: column;
            margin-top: 6rem;
         }

         .no-border {
            border: none;
         }

         .border {
            border: 1px solid #000000;
         }

         .border-bottom {
            border: 1px solid #000000;
            border-top: none;
            border-left: none;
            border-right: none;
         }

         .signer {
            display: flex;
            justify-content: space-between;
            gap: 2.5rem;
            margin: 2rem 0 2rem 0;
         }

         .signer-item {
            flex-grow: 1;
         }

         input {
            color: #4537de;
            font-family: "Space Mono", monospace;
            text-align: center;
            margin-top: 1.5rem;
            height: 4rem;
            width: 100%;
            box-sizing: border-box;
         }

         input#date,
         input#notes {
            text-align: left;
         }

         input#signature {
            height: 8rem;
         }

         .intro-text {
            width: 60%;
         }

         .table-box table,
         .summary-box table {
            width: 100%;
            font-size: 0.625rem;
         }

         .table-box table {
            padding-top: 2rem;
         }

         .table-box td:first-child,
         .summary-box td:first-child {
            width: 50%;
         }

         .table-box td:last-child,
         .summary-box td:last-child {
            text-align: right;
         }

         .table-box table tr.heading td {
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
            height: 1.5rem;
         }

         .table-box table tr.item td,
         .summary-box table tr.item td {
            border-bottom: 1px solid #d7dce4;
            height: 1.5rem;
         }

         .summary-box table tr.no-border-item td {
            border-bottom: none;
            height: 1.5rem;
         }

         .summary-box table tr.total td {
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
            height: 1.5rem;
         }

         .summary-box table tr.item td:first-child,
         .summary-box table tr.total td:first-child {
            border: none;
            height: 1.5rem;
         }

         #pspdfkit-footer {
            font-size: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            color: #717885;
            margin-top: 2.5rem;
            bottom: 2.5rem;
            position: absolute;
            width: 100%;
         }

         .footer-columns {
            display: flex;
            justify-content: space-between;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
         }
      </style>
   </head>

   <body>
      <div id="pspdfkit-header">
         <div class="header-columns">
            <div class="logotype">
               <img class="logo" src="https://inmo.app.gov.co/templates/agencia-app/images/logo.svg" width="300" />
               <p>AGENCIA APP - InmoAPP</p>
            </div>

            <div>
               <p>Plataforma InmoAPP - Subdirección Inmobiliaria</p>
            </div>
         </div>
      </div>

      <div class="page" style="page-break-after: always;">
         <div>
            <h2>Inmueble #{{ $property->code }}</h2>
         </div>

         <h4>IDENTIFICACIÓN</h4>

         <p><b>ID:</b> {{ $property->code }}</p>
         <p><b>Enlace:</b> {{ $property->link }}</p>
         <p><b>Matrícula:</b> {{ $property->plate }}</p>
         <p><b>¿La matrícula está repetida?:</b> {{ $property->repeated }}</p>
         <p><b>¿Dada de baja?:</b> {{ $property->discharged }}</p>

         @if($property->repeated_concept)
         <p><b>Concepto de por qué está repetida:</b> {{ $property->repeated_concept }}</p>
         @endif

         <p>
            <b>Secretaría a la que se encuentra adscrito el bien inmueble:</b> 

            @foreach($secretaryships as $secretaryship)
               @if($property->secretaryship_id == $secretaryship->id)
                  {{ $secretaryship->title }} 
               @endif
            @endforeach
         </p>

         <p>
            <b>Bien fiscal o de uso público:</b>

            @foreach($propertytypes as $propertytype)
               @if($property->property_id == $propertytype->id)
                  {{ $propertytype->title }} 
               @endif
            @endforeach
         </p>

         <h4>INFORMACIÓN DE SECRETARÍA DE SUMINISTROS Y SERVICIOS</h4>

         <p>
            <b>Código del activo fijo:</b>

            @foreach($asset_secretaryships as $asset)
               @if($property->fixed_asset_code_id == $asset->id)
                  {{ $asset->description }} 
               @endif
            @endforeach
         </p>

         <p><b>Activo fijo:</b> {{ $property->fixed_asset }}</p>
         <p><b>Avalúo comercial:</b> {{ $property->commercial_appraisal }}</p>
         <p><b>Descripción corta:</b> {{ $property->sss_description }}</p>
         <p><b>Barrio o urbanización:</b> {{ $property->urbanization_or_neighborhood }}</p>

         <hr>

         <h4>INFORMACIÓN JURÍDICA</h4>

         <p><b>No. de escritura:</b> {{ $property->plate_number }}</p>
         <p><b>Superferficie jurídica (Área):</b> {{ $property->property_deed }} {{ $property->units }}</p>

         <p><b>Fecha de escritura:</b> {{ $property->writing_date }}</p>
         <p>
            <b>Notaría:</b>

            @foreach($notaries as $notary)
               @if($property->notary_id == $notary->id)
                  {{ $notary->title }} 
               @endif
            @endforeach
         </p>

         @if($property->which_notary_container)
         <p><b>¿Cuál?:</b> {{ $property->which_notary }}</p>
         @endif

         <h4>INFORMACIÓN CATASTRAL</h4>

         <p><b>CBML:</b> {{ $property->cbml }}</p>
         <p>
            <b>Comuna (corregimiento):</b>

            @foreach($communes as $commune)
               @if($property->commune_id == $commune->id)
                  {{ $commune->code }} - {{ $commune->name }}
               @endif
            @endforeach
         </p>

         <p><b>Barrio:</b> {{ $property->district->name }}</p>
         <p><b>Dirección de catastro:</b> {{ $property->cadastral_address }}</p>
         <p><b>Área catastral:</b> {{ $property->cadastral_area }}</p>
         <p><b>Área de construcción:</b> {{ $property->construction_area }}</p>
         <p><b>Avalúo catastral:</b> ${{ number_format($property->property_valuation) }}</p>
         <p><b>¿El bien cuenta con RPH? (Reglamento de Propiedad Horizontal):</b> @if($property->is_rph == 1) Sí @else No @endif</p>

         <h4>INFORMACIÓN NORMATIVA</h4>

         <h4>COORDENADAS</h4>
         <p><b>Latitud:</b> {{ $property->latitude }}</p>
         <p><b>Longitud:</b> {{ $property->longitude }}</p>

         <h4>INFORMACIÓN NORMATIVA</h4>

         <p>
            <b>Clasificación del suelo:</b>

            @foreach($floor_classifications as $floor_classification)
               @if($property->floor_classification_id == $floor_classification->id) 
                  {{ $floor_classification->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Macroproyecto:</b>

            @foreach($macroprojects as $macroproject)
               @if($property->macroproject_id == $macroproject->id)
                  {{ $macroproject->name }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Tratamiento:</b>

            @foreach($treatments as $treatment)
               @if($property->treatment_id == $treatment->id)
                  {{ $treatment->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Polígono:</b>

            @foreach($polygons as $polygon)
               @if($property->polygon_id == $polygon->id)
                  {{ $polygon->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Instrumento de tercer nivel:</b>

            @foreach($third_level_instruments as $third_level_instrument)
               @if($property->third_level_instrument_id == $third_level_instrument->id) 
                  {{ $third_level_instrument->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Uso del suelo:</b>

            @foreach($floor_uses as $floor_use)
               @if($property->floor_use_id == $floor_use->id)
                  {{ $floor_use->title }}
               @endif
            @endforeach
         </p>

         <h4>SUELO DE PROTECCIÓN</h4>

         <p>
            <b>Amenaza avenidas torrenciales:</b>

            @foreach($threats as $threat)
               @if($property->threat_torrential_avenues_id == $threat->id)
                  {{ $threat->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Amenaza de inundaciones:</b>

            @foreach($threats as $threat)
               @if($property->threat_floods_id == $threat->id)
                  {{ $threat->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Amenaza de movimientos en masa:</b>

            @foreach($threats as $threat)
               @if($property->threat_mass_movements_id == $threat->id)
                  {{ $threat->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Otras categorías de protección:</b>

            @foreach($threats as $threat)
               @if($property->other_protection_categories_id == $threat->id) 
                  {{ $threat->title }}
               @endif
            @endforeach
         </p>

         <hr>

         <h4>INFORMACIÓN DOCUMENTAL</h4>

         <p><b>¿Tiene fotografía?:</b> @if($property->photography == 1) Sí @else No @endif</p>

         <p><b>¿Tiene ficha catastral?:</b> @if($property->cadastral_file == 1) Sí @else No @endif</p>

         <p><b>¿Tiene VUR?:</b> @if($property->vur == 1) Sí @else No @endif</p>

         <p><b>¿Tiene estudio de títulos?:</b> @if($property->title_study == 1) Sí @else No @endif</p>

         <p><b>¿Está georeferenciado en ARCGIS?:</b> @if($property->georeferenced == 1) Sí @else No @endif</p>

         <p><b>¿Tiene escrituras?:</b> @if($property->scriptures == 1) Sí @else No @endif</p>

         <p><b>¿Tiene expediente?:</b> @if($property->expedient == 1) Sí @else No @endif</p>

         <p><b>¿Tiene avalúo?:</b> @if($property->has_appraise == 1) Sí @else No @endif</p>

         <p><b>¿Está en comodato?:</b> @if($property->loan == 1) Sí @else No @endif</p>

         @if($property->loan == 1)
            <h4>COMODATO</h4>
            <h4>INFORMACIÓN DEL COMODATO</h4>
            <p><b>Fecha de inicio:</b> {{ $property->loan_start_date }}</p>
            <p><b>Fecha de finalización:</b> {{ $property->loan_end_date }}</p>
            <p><b>Entidad a la que se asignó:</b> {{ $property->entity_to_which_is_assigned }}</p>
            <p><b>Entidad a la que se asignó:</b> {{ $property->loan_information }}</p>
         @endif

         <p><b>¿Tiene licencia de construcción?:</b> @if($property->building_permit == 1) Sí @else No @endif</p>

         @if($property->building_permit == 1)
            <h4>LICENCIA DE CONSTRUCCIÓN</h4>
            <p><b>Resolución:</b> {{ $property->resolution }}</p>
         @endif

         <p><b>¿Es un bien de interés cultural?:</b> @if($property->bic == 1) Sí @else No @endif</p>

         @if($property->bic == 1)
            <h4>BIEN DE INTERÉS CULTURAL - BIC</h4>
            <p><b>Nombre del BIC:</b> {{ $property->bic_name }}</p>
            <p><b>Grupo del BIC:</b> {{ $property->bic_group }}</p>
            <p><b>Orden del BIC:</b> {{ $property->bic_order }}</p>
            <p><b>Nivel de conservación del BIC:</b> {{ $property->conservation_level }}</p>
            <p><b>Acto administrativo de declaratoria del BIC:</b> {{ $property->bic_act }}</p>
         @endif

         <hr>

         <h4>ANÁLISIS</h4>

         <p>
            <b>Destinación actual:</b>

            @foreach($destinations as $destination)
               @if($property->destination_id == $destination->id) 
                  {{ $destination->title }}
               @endif
            @endforeach
         </p>

         <p>
            <b>Oportunidad:</b>

            @foreach($opportunities as $opportunity)
               @if($property->opportunity_id == $opportunity->id)
                  {{ $destination->title }}
               @endif
            @endforeach
         </p>

         <p><b>Acción:</b> {{ $property->action->title }}</p>
         <p><b>Nivel de priorización:</b> {{ $property->priorization_level }}</p>
         <p><b>Proyecto gestionado:</b> {{ $property->project_managed }}</p>
         <p><b>ID de oportunidad:</b> {{ $property->opportunity_id_description }}</p>
         <p><b>Observaciones:</b> {{ $property->observations }}</p>

         <h4>DISPONIBILIDAD</h4>

         <p><b>¿Analizadas por Secretaría de Suministros y Servicios?:</b>@if($property->date_of_analysis_by_sss) Sí @else No @endif</p>

         <p><b>Fecha de análisis por Secretaría de Suministros y Servicios:</b>@if($property->date_of_analysis_by_sss){{ $property->date_of_analysis_by_sss }} @endif</p>

         <p><b>Revisada:</b>{{ $property->revised }}</p>
         <p><b>Disponible para analizar:</b>{{ $property->available }}</p>
         <p>
            <b>Responsable(s):</b>
            @foreach($users as $user)
               @if(in_array($user->id, $responsables))
                  {{ $user->name }} 
               @endif 
            @endforeach
         </p>

         <h4>MAPA</h4>  

         <p>Poner el mapa</p>

         <h4>Exportado por {{ Auth::user()->name }}</h4>
         <h4>Fecha: {{ \Carbon\Carbon::now() }}</h4>
         <h4>{{ route('user.properties.show', $property) }}</h4>
      </div>

      {{-- <div id="pspdfkit-footer">
         <div class="footer-columns">
            <h4>Exportado por {{ Auth::user()->name }}</h4>
            <h4>Fecha: {{ \Carbon\Carbon::now() }}</h4>
            <h4>{{ route('user.properties.show', $property) }}</h4>
         </div>
      </div> --}}
   </body>
</html>
