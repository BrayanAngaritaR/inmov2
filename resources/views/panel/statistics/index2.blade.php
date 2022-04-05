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
      <!-- Bienes Georreferenciados -->
      <div class="col-md-4 col-lg-6 col-xl-3">
         <div class="card card-full overflow-hidden">
            <div class="nk-ecwg nk-ecwg4 h-100">
               <div class="card-inner flex-grow-1">
                  <div class="card-title-group mb-4">
                     <div class="card-title">
                        <h6 class="title font-weight-300">Bienes Georreferenciados</h6>
                     </div>
                  </div>
                  <div class="data-group text-center">
                     <div class="nk-ecwg4-ck">
                        <canvas class="ecommerce-doughnut-s1" id="georeferencedPropertiesValentina"></canvas>
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
                              <span>Georreferenciados</span>
                           </div>
                           {{-- <div class="amount amount-xs">159</div> --}}
                        </li>
                     </ul>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- .col -->
      <!-- /Bienes Georreferenciados -->

      <!-- Bienes con RPH -->
      <div class="col-md-4 col-lg-6 col-xl-3">
         <div class="card card-full overflow-hidden">
            <div class="nk-ecwg nk-ecwg4 h-100">
               <div class="card-inner flex-grow-1">
                  <div class="card-title-group mb-4">
                     <div class="card-title">
                        <h6 class="title font-weight-300">Bienes con RPH</h6>
                     </div>
                  </div>
                  <div class="data-group text-center">
                     <div class="nk-ecwg4-ck">
                        <canvas class="ecommerce-doughnut-s1" id="rphPropertiesValentina"></canvas>
                     </div>
                  </div>
                  <ul class="nk-ecwg4-legends" style="display: flex;">
                        <li>
                           <div class="title">
                              <span class="dot dot-lg sq" data-bg="#3271fb"></span>
                              <span>Con RPH</span>
                           </div>
                           {{-- <div class="amount amount-xs">305</div> --}}
                        </li>
                        <li>
                           <div class="title ml-3">
                              <span class="dot dot-lg sq" data-bg="#44cddb"></span>
                              <span>Sin RPH</span>
                           </div>
                           {{-- <div class="amount amount-xs">159</div> --}}
                        </li>
                     </ul>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>

      <!-- /Bienes con RPH -->
      <div class="col-lg-6">
         <div class="card card-preview border-0">
             <div class="card-inner">
                 <div class="card-head">
                     <h6 class="title font-weight-300 mb-5">Bienes por comuna</h6>
                 </div>
                 <div class="nk-ck-sm">
                     <canvas class="bar-chart" id="barChartStacked"></canvas>
                 </div>
             </div>
         </div><!-- .card-preview -->
      </div>




      <!-- Recaudo por venta -->
      <div class="col-lg-6 col-xl-8 mt-4">
         <div class="nk-block">
            <div class="card card-preview border-0">
               <div class="card-inner">
                  <div class="card-title">

                     <h6 class="card-title font-weight-300">Bienes analizados</h6>

                     <div class="row text-center bg-gray-light pt-3 pb-3">
                        <div class="col-sm-12 col-lg-6">
                           <div class="nk-cov-data">
                              Bienes subidos
                              <div class="amount">1,230</div>
                           </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                           <div class="nk-cov-data">
                              Bienes publicados
                              <div class="amount">876</div>
                           </div>
                        </div>
                     </div>

                     <h5 class="title mt-5">Total de bienes del mes: 2,972</h5>
                     <p class="max-300 mb-5">
                        Esta es la lista de bienes analizados por cada mes del año actual {{ date('Y') }}
                     </p>
                  </div>

                  <div class="nk-ck">
                     <canvas class="line-chart" id="totalEarnings"></canvas>
                  </div>
               </div>
            </div>
            <!-- .card-preview -->
         </div>
      </div>
      <!-- /Recaudo por venta -->


      <div class="col-lg-6 col-xl-4 mt-4">
         <div class="row">

            <div class="col-sm-12 mt-2">
               <div class="card card-preview border-0">
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
                                                                            <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                                            <li><a href="#"><span>3 Months</span></a></li>
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


<script type="text/javascript" src="{{ asset('assets/js/charts/gd-default.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/charts/new.js') }}"></script>
{{--
<script type="text/javascript" src="{{ asset('assets/js/charts/polar.js') }}"></script>
--}} @include('panel.includes.charts._dashboard2')
<script type="text/javascript" src="{{ asset('assets/js/charts/other.js') }}"></script>
@endpush
