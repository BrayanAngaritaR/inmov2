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
                        <h6 class="title font-weight-300">Bienes por revisión</h6>
                     </div>
                  </div>
                  <div class="data-group text-center">
                     <div class="nk-ecwg4-ck">
                        <canvas class="sales-bar-chart" id="salesRevenue"></canvas>
                     </div>
                  </div>
               </div>
               
               <div class="nk-cov-data text-center">
                  <div class="amount">2,394</div>
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
                        <h6 class="title font-weight-300">Bienes por equipamiento</h6>
                     </div>
                  </div>
                  <div class="data-group text-center">
                     <div class="nk-ecwg4-ck">
                        <canvas class="ecommerce-doughnut-s1" id="forSalePropertiesValentina"></canvas>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- /Bienes para venta -->

      <div class="col-sm-12 col-xl-6">
         <div class="nk-block">
            <div class="card card-preview border-0 min-heigh-400">
               <div class="card-inner flex-grow-1">
                  <div class="card-title-group mb-4">
                     <div class="card-title">
                        <h6 class="title font-weight-300">Destinación actual</h6>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="nk-ck">
                        <canvas class="sales-bar-chart" id="salesRevenue2"></canvas>
                     </div>
                  </div>
               </div>
            </div>
            <!-- .card-preview -->
         </div>
      </div>

      <!-- Recaudo por venta -->
      <div class="col-sm-12 col-lg-6 col-xl-8">
         <div class="card card-full overflow-hidden min-heigh-600">
            <div class="row">
               <div class="col-sm-12">
                  <div class="card-inner">
                     <div class="card-title-group mb-4">
                        <div class="card-title">
                           <h6 class="title font-weight-300">Bienes por secretaría adscrita</h6>
                        </div>
                     </div>
                     <div class="data-group text-center">
                        <canvas class="sales-bar-chart" id="salesRevenue3"></canvas>
                     </div>
                  </div>
               </div>

               <div class="col-sm-12 mb-3">
                  <div class="d-flex justify-content-around mt-3">
                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="75" data-fgColor="#8bc34a" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        Venta
                     </div>

                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="25" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        Venta / Arriendo
                     </div>

                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="50" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        Desenglobe
                     </div>

                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="60" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        Englobe
                     </div>

                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="75" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        O. inmobiliaria
                     </div>

                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="25" data-fgColor="#8bc34a" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        Cesión
                     </div>

                     <div class="data text-center">
                        <div class="data-group">
                           <div class="info my-auto">
                              <div class="nk-knob">
                                 <input type="text" class="knob" value="50" data-fgColor="#000" data-bgColor="#d9e5f7" data-thickness=".07" data-width="80" data-height="80">
                              </div>
                           </div>
                        </div>
                        Sin acción
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /Recaudo por venta -->


      <div class="col-lg-6 col-xl-4">
         <div class="row">

            <div class="col-sm-12 mb-3">
               <div class="card card-preview border-0 min-heigh-600">
                  <div class="p-3">
                     <div class="card-inner mb-n2">
                        <div class="card-title-group mt-n1">
                           <div class="card-title">
                              <h6 class="title font-weight-300">Localización por comuna</h6>
                           </div>

                           <div class="card-tools mr-n1">
                              <div class="dropdown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                 <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                       <li><a href="#" class="active"><span>Popular</span></a></li>
                                       <li><a href="#"><span>Santa Cruz</span></a></li>
                                       <li><a href="#"><span>Manrique</span></a></li>
                                       <li><a href="#"><span>Robledo</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="text-center mt-3">
                        <img src="{{ asset('templates/agencia-app/images/statistics/map1.png')}}">
                     </div>

                     <!-- Popular -->
                     <div class="mt-3">
                        <div class="d-flex justify-content-between">
                           <small>Popular</small>
                           <small>720</small>
                        </div>
                        <div class="progress progress-sm">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="75">
                           </div>
                        </div>
                     </div>
                     <!-- /Popular -->

                     <!-- Candelaria -->
                     <div class="mt-3">
                        <div class="d-flex justify-content-between">
                           <small>Candelaria</small>
                           <small>320</small>
                        </div>
                        <div class="progress progress-sm">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="55">
                           </div>
                        </div>
                     </div>
                     <!-- /Candelaria -->

                     <!-- Buenos aires -->
                     <div class="mt-3">
                        <div class="d-flex justify-content-between">
                           <small>Buenos aires</small>
                           <small>70</small>
                        </div>
                        <div class="progress progress-sm">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="30">
                           </div>
                        </div>
                     </div>
                     <!-- /Buenos aires -->

                     <!-- Santa Cruz -->
                     <div class="mt-3">
                        <div class="d-flex justify-content-between">
                           <small>Santa Cruz</small>
                           <small>20</small>
                        </div>
                        <div class="progress progress-sm">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="20">
                           </div>
                        </div>
                     </div>
                     <!-- /Santa Cruz -->

                     <!-- Villa hermosa -->
                     <div class="mt-3">
                        <div class="d-flex justify-content-between">
                           <small>Villa hermosa</small>
                           <small>10</small>
                        </div>
                        <div class="progress progress-sm">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="10">
                           </div>
                        </div>
                     </div>
                     <!-- /Villa hermosa -->
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
