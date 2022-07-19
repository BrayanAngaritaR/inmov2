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
      <title>Invoice</title>

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



         <div class="summary-box">
            <table cellpadding="0" cellspacing="0">
               <tbody>
                  <tr class="item">
                     <td></td>
                     <td>Subtotal:</td>
                     <td></td>
                  </tr>

                  <tr class="item">
                     <td></td>
                     <td>Discount:</td>
                     <td></td>
                  </tr>

                  <tr class="item">
                     <td></td>
                     <td>Subtotal Less Discount:</td>
                     <td></td>
                  </tr>

                  <tr class="item">
                     <td></td>
                     <td>Tax Rate:</td>
                     <td></td>
                  </tr>

                  <tr class="item">
                     <td></td>
                     <td>Total Tax:</td>
                     <td></td>
                  </tr>

                  <tr class="item">
                     <td></td>
                     <td>Shipping/Handling:</td>
                     <td></td>
                  </tr>

                  <tr class="no-border-item">
                     <td></td>
                     <td>Total Due:</td>
                     <td></td>
                  </tr>

                  <tr class="total">
                     <td></td>
                     <td>Amount Paid:</td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>

      <div class="page" style="page-break-after: always;">
         <div>
            <h4>Exportado por {{ Auth::user()->name }}</h4>
            <h4>Fecha: {{ \Carbon\Carbon::now() }}</h4>
            <h4>{{ url()->current() }}</h4>
         </div>

         <div class="form">
            <label for="notes" class="label"> Notes: </label>
            <input type="text" id="notes" class="border-bottom" value="" />
         </div>

         <div class="signer">
            <div class="form signer-item">
               <label for="date" class="label">Date:</label>
               <input type="text" id="date" class="border-bottom" value="01/01/2021" />
            </div>

            <div class="form signer-item">
               <label for="signature" class="label">Issued by:</label>
               <input type="text" id="signature" class="border" value="Sign Here" />
            </div>
         </div>
      </div>

      <div id="pspdfkit-footer">
         <div class="footer-columns">
            <h4>Exportado por {{ Auth::user()->name }}</h4>
            <h4>Fecha: {{ \Carbon\Carbon::now() }}</h4>
            <h4>{{ url()->current() }}</h4>
         </div>
      </div>
   </body>
</html>
