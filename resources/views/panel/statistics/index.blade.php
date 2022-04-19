@extends('panel.app') 
@section('title', 'Estadísticas') 
@section('subtitle', 'Estas son las estadísticas del sitio.') 
@section('head_content')
<div class="nk-block-head-content">
   <div class="toggle-wrap nk-block-tools-toggle">
      <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
      <div class="toggle-expand-content" data-content="pageMenu">
         <ul class="nk-block-tools g-3">
            <li>
               <a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Exportar</span></a>
            </li>
            <li>
               <a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Generar reporte</span></a>
            </li>
            <li class="nk-block-tools-opt">
               <div class="drodown">
                  <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <ul class="link-list-opt no-bdr">
                        <li>
                           <a href="#"><em class="icon ni ni-user-add-fill"></em><span>Agregar usuario</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>
@stop @section('content')
<div class="container-fluid">
   <div class="row g-gs">

      <!-- Bienes de oportunidad -->
      <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-full overflow-hidden min-heigh-400">
            <div class="nk-ecwg nk-ecwg4 h-100">
               <div class="card-inner flex-grow-1">
                  <div class="card-title-group mb-4">
                     <div class="card-title">
                        <h6 class="title font-weight-300">Bienes de oportunidad</h6>
                     </div>
                  </div>
                  <div class="data-group text-center">
                     <div class="nk-ecwg4-ck">
                        <canvas class="ecommerce-doughnut-s1" id="trafficSources"></canvas>
                     </div>
                  </div>
                  <ul class="nk-ecwg4-legends" style="display: flex;">
                        <li>
                           <div class="title">
                              <span class="dot dot-lg sq" data-bg="#3271fb"></span>
                              <span>Alta</span>
                           </div>
                           {{-- <div class="amount amount-xs">305</div> --}}
                        </li>
                        <li>
                           <div class="title ml-3">
                              <span class="dot dot-lg sq" data-bg="#44cddb"></span>
                              <span>Media</span>
                           </div>
                           {{-- <div class="amount amount-xs">159</div> --}}
                        </li>
                        <li>
                           <div class="title ml-3">
                              <span class="dot dot-lg sq" data-bg="#bc96ff"></span>
                              <span>Baja</span>
                           </div>
                           {{-- <div class="amount amount-xs">82</div> --}}
                        </li>
                     </ul>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- .col -->
      <!-- /Bienes de oportunidad -->

      <!-- Bienes para venta -->
      <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-full overflow-hidden min-heigh-400">
            <div class="nk-ecwg nk-ecwg4 h-100">
               <div class="card-inner flex-grow-1">
                  <div class="card-title-group mb-4">
                     <div class="card-title">
                        <h6 class="title font-weight-300">Bienes para venta</h6>
                     </div>
                  </div>
                  <div class="data-group text-center">
                     <div class="nk-ecwg4-ck">
                        <canvas class="ecommerce-doughnut-s1" id="forSalePropertiesValentina"></canvas>
                     </div>
                  </div>
                  <ul class="nk-ecwg4-legends" style="display: flex;">
                        <li>
                           <div class="title">
                              <span class="dot dot-lg sq" data-bg="#3271fb"></span>
                              <span>Total</span>
                           </div>
                           {{-- <div class="amount amount-xs">305</div> --}}
                        </li>
                        <li>
                           <div class="title ml-3">
                              <span class="dot dot-lg sq" data-bg="#44cddb"></span>
                              <span>Para venta</span>
                           </div>
                           {{-- <div class="amount amount-xs">159</div> --}}
                        </li>
                     </ul>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>

      {{-- <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-preview border-0">
            <div class="card-inner">
               <div class="card-head text-center mb-5">
                  <h6 class="title">Bienes para venta</h6>
               </div>
               <div class="nk-ck-sm">
                  <canvas class="doughnut-chart" id="forSaleProperties"></canvas>
               </div>
            </div>
         </div>
         <!-- .card-preview -->
      </div> --}}
      <!-- /Bienes para venta -->

      <div class="col-sm-12 col-xl-6">
         <div class="nk-block">
            <div class="card card-preview border-0 min-heigh-400">
               <div class="card-inner">
                  <div class="nk-ck">
                     <canvas class="line-chart" id="propertiesQty"></canvas>
                     {{-- <canvas class="sales-overview-chart" id="salesOverview"></canvas> --}}
                  </div>
               </div>
            </div>
            <!-- .card-preview -->
         </div>
      </div>

      <!-- Recaudo por venta -->
      <div class="col-lg-6 col-xl-8 mt-4">
         <div class="nk-block">
            <div class="card card-preview border-0 min-heigh-600">
               <div class="card-inner">
                  <div class="card-title">

                     <div class="row text-center bg-gray-light pt-3 pb-3">
                        <div class="col-sm-12 col-lg-6">
                           <div class="nk-cov-data">
                              Semana actual
                              <div class="amount">$58,254</div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="nk-cov-data">
                              Semana anterior
                              <div class="amount">$69,524</div>
                           </div>
                        </div>
                     </div>

                     <h5 class="title mt-5">Ganancias hoy: $12,972</h5>
                     {{-- <p class="max-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p> --}}
                  </div>

                  <div class="nk-ck mt-5">
                     <canvas class="line-chart" id="totalEarnings"></canvas>
                  </div>
               </div>
            </div>
            <!-- .card-preview -->
         </div>
      </div>
      <!-- /Recaudo por venta -->

      <div class="col-lg-6 col-xl-4 mt-4">
         <div class="row min-heigh-600">
            <div class="col-sm-12">
               <div class="card card-preview border-0">
                  <div class="p-3">
                     <div class="card-title-group">
                        <div class="card-title">
                           <h6 class="title">Bienes analizados</h6>
                        </div>
                     </div>

                     <div class="data">
                        <div class="data-group d-flex justify-content-between mt-2">
                           <div class="nk-cov-data my-auto">
                              <div class="amount">2,106</div>
                           </div>
                           <div class="info text-right my-auto">
                              <div class="nk-knob text-center">
                                 <input type="text" class="knob" value="65" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="text-center">
                     <small>65%</small>
                  </div>
                  <div class="progress progress-sm">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="75">
                     </div>
                  </div>


               </div>
            </div>

            <div class="col-sm-12 mt-2">
               <div class="card card-preview border-0">
                  <div class="p-3">
                     <div class="card-title-group">
                        <div class="card-title">
                           <h6 class="title">Bienes en comodato</h6>
                        </div>
                     </div>

                     <div class="data">
                        <div class="data-group d-flex justify-content-between mt-2">
                           <div class="nk-cov-data my-auto">
                              <div class="amount">1,387</div>
                           </div>
                           <div class="info text-right my-auto">
                              <div class="nk-knob text-center">
                                 <input type="text" class="knob" value="50" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="text-center">
                     <small>50%</small>
                  </div>
                  <div class="progress progress-sm">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="75">
                     </div>
                  </div>


               </div>
            </div>

            <div class="col-sm-12 mt-2">
               <div class="card card-preview border-0">
                  <div class="p-3">
                     <div class="card-title-group">
                        <div class="card-title">
                           <h6 class="title">Bienes de interés cultural</h6>
                        </div>
                     </div>

                     <div class="data">
                        <div class="data-group d-flex justify-content-between mt-2">
                           <div class="nk-cov-data my-auto">
                              <div class="amount">456</div>
                           </div>
                           <div class="info text-right my-auto">
                              <div class="nk-knob text-center">
                                 <input type="text" class="knob" value="25" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="text-center">
                     <small>25%</small>
                  </div>
                  <div class="progress progress-sm">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="75">
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>



      
   </div>
   <!-- .row -->
</div>
@stop @push('scripts')
<script src="{{ asset('assets/js/charts/chart-analytics.js?ver=2.4.0')}}"></script>
<script src="https://code.highcharts.com/5.0.0/highcharts.js"></script>

<script type="text/javascript">
   //Número de bienes por secretaría adscrita

   Highcharts.setOptions({
      colors: ['#67BCE6', '#423434'],
      chart: {
         style: {
            fontFamily: 'sans-serif',
            color: '#000'
         }
      }
   });

      $('#secretarship_properties').highcharts({
        chart: {
          type: 'column',
          //backgroundColor: '#36394B'
        },
        title: {
          text: 'Bienes por secretaría adscrita',
          style: {
           color: '#000'
          }
        },
        xAxis: {
          tickWidth: 0,
          labels: {
           style: {
             color: '#000',
             }
           },
          categories: [
            @foreach($secretaryships as $secretaryship)
               '{{ $secretaryship->title }}',
            @endforeach
          ]
        },
        yAxis: {
          gridLineWidth: .5,
          gridLineDashStyle: 'dash',
          //gridLineColor: 'black',
          title: {
            text: '',
            style: {
             color: '#000'
             }
          },
          labels: {
            formatter: function() {
              return Highcharts.numberFormat(this.value, 0, '', ',');
            },
            style: {
              color: '#fff',
            }
          }
        },
        legend: {
          enabled: false,
        },
        credits: {
          enabled: false
        },
        tooltip: {
          valuePrefix: ''
        },
        plotOptions: {
          column: {
            borderRadius: 0,
            pointPadding: 0,
            groupPadding: 0.05
          }
        },
        series: [{
          name: 'Cantidad',
          data: [
            @foreach($secretaryships as $secretaryship)
               {{ $secretaryship->properties_count }},
            @endforeach
          ]
        }]
      });
</script>

<script type="text/javascript" src="{{ asset('assets/js/charts/gd-default.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/charts/new.js') }}"></script>
{{--
<script type="text/javascript" src="{{ asset('assets/js/charts/polar.js') }}"></script>
--}} @include('panel.includes.charts._dashboard')
<script type="text/javascript" src="{{ asset('assets/js/charts/other.js') }}"></script>
@endpush
