@extends('panel.app') @section('title', 'Estadísticas') @section('subtitle', 'Estas son las estadísticas del sitio.') @section('head_content')
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
      <div class="col-lg-6 col-xl-8">
         <div class="card card-bordered card-full">
            <div class="card-inner">
               <div class="nk-cov-wg1">
                  <div class="card-title">
                     <h5 class="title">Análisis de los bienes</h5>
                  </div>
                  <div class="nk-cov-data">
                     <h6 class="overline-title">Total de bienes inmuebles</h6>
                     <div class="amount">12,972</div>
                  </div>
                  <div class="nk-cov-wg1-progress">
                     <div class="progress progress-reverse progress-md progress-pill progress-bordered">
                        <div class="progress-bar bg-danger" data-progress="75" data-toggle="tooltip" title="Pendientes: 75%"></div>
                        <div class="progress-bar bg-success" data-progress="10" data-toggle="tooltip" title="Publicados: 10%"></div>
                        <div class="progress-bar bg-purple" data-progress="15" data-toggle="tooltip" title="Subidos a la plataforma: 15%"></div>
                     </div>
                  </div>
                  <ul class="nk-cov-wg1-data">
                     <li>
                        <div class="title">
                           <div class="dot dot-lg sq bg-purple"></div>
                           <span>Subidos a la plataforma</span>
                        </div>
                        <div class="count">{{ $properties_count }}</div>
                     </li>
                     <li>
                        <div class="title">
                           <div class="dot dot-lg sq bg-success"></div>
                           <span>Publicados</span>
                        </div>
                        <div class="count">{{ $published_properties_count }}</div>
                     </li>
                     <li>
                        <div class="title">
                           <div class="dot dot-lg sq bg-danger"></div>
                           <span>Pendientes</span>
                        </div>
                        <div class="count">{{ 12972 - $properties_count }}</div>
                     </li>
                  </ul>
                  <div class="nk-cov-wg-note">
                     Última actualización: Hace 2 días
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- .col -->

      <div class="col-lg-6 col-xl-4">
         <div class="card card-bordered card-full">
            <div class="card-inner">
               <div class="nk-cov-wg2">
                  <div class="card-title">
                     <h5 class="title">Usuarios</h5>
                  </div>
                  <div class="nk-cov-group">
                     <div class="nk-cov-data">
                        <h6 class="overline-title">Total</h6>
                        <div class="amount amount-sm">48</div>
                     </div>
                     <div class="nk-cov-data">
                        <h6 class="overline-title">Suscriptores</h6>
                        <div class="amount amount-sm text-success">0</div>
                     </div>
                     <div class="nk-cov-data">
                        <h6 class="overline-title">Colaboradores</h6>
                        <div class="amount amount-sm text-info">4</div>
                     </div>
                  </div>
                  <div class="nk-cov-wg-note">Actualizado en tiempo real</div>
                  <div class="nk-cov-wg2-group">
                     <div class="nk-cov-data">
                        <h6 class="sub-text">
                           Bienes siendo analizados
                        </h6>
                        <div class="amount amount-xs">28</div>
                     </div>
                     <ul class="nk-cov-wg2-data">
                        <li>
                           <div class="title">
                              <div class="dot dot-lg sq bg-purple"></div>
                              <span>Asignados</span>
                           </div>
                           <div class="count">27</div>
                        </li>
                        <li>
                           <div class="title">
                              <div class="dot dot-lg sq bg-danger"></div>
                              <span>Sin completar información</span>
                           </div>
                           <div class="count">01</div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- .col -->

      <!-- Bienes georreferenciados -->
      <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-preview">
            <div class="card-inner">
               <div class="card-head text-center mb-5">
                  <h6 class="title">Bienes georreferenciados</h6>
               </div>
               <div class="nk-ck-sm">
                  {{-- <canvas class="polar-chart" id="georeferencedProperties"></canvas> --}}
                  <canvas class="doughnut-chart" id="georeferencedProperties"></canvas>
               </div>
            </div>
         </div>
      </div>
      <!-- /Bienes georreferenciados -->

      <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-preview">
            <div class="card-inner">
               <div class="card-head text-center mb-5">
                  <h6 class="title">Bienes en oportunidad</h6>
               </div>
               <div class="nk-ck-sm">
                  <canvas class="doughnut-chart" id="doughnutChartData"></canvas>
               </div>
            </div>
         </div>
         <!-- .card-preview -->
      </div>

      <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-preview">
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
      </div>

      <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-preview">
            <div class="card-inner">
               <div class="card-head text-center mb-5">
                  <h6 class="title">RPH</h6>
               </div>
               <div class="nk-ck-sm">
                  <canvas class="doughnut-chart" id="rphProperties"></canvas>
               </div>
            </div>
         </div>
         <!-- .card-preview -->
      </div>

      {{-- <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-preview">
            <div class="card-inner">
               <div class="card-head text-center mb-5">
                  <h6 class="title">Bienes para venta</h6>
               </div>
               <div class="nk-ck-sm">
                  <canvas class="pie-chart" id="pieChartData"></canvas>
               </div>
            </div>
         </div>
         <!-- .card-preview -->
      </div> --}}

      {{-- <div class="col-md-4 col-lg-6 col-xl-3 my-auto">
         <div class="card card-bordered h-100">
            <div class="card-inner">
               <div class="traffic-channel">
                  <div class="traffic-channel-doughnut-ck">
                     <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                  </div>
                  <div class="traffic-channel-group g-2">
                     <div class="traffic-channel-data">
                        <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Con RPH</span></div>
                        <div class="amount">{{ $properties_count - $rph_properties_count }} <small>58.63%</small></div>
                     </div>
                     <div class="traffic-channel-data">
                        <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff"></span><span>Sin RPH</span></div>
                        <div class="amount">{{ $rph_properties_count }} <small>23.94%</small></div>
                     </div>
                  </div>
                  <!-- .traffic-channel-group -->
               </div>
               <!-- .traffic-channel -->
            </div>
         </div>
         <!-- .card -->
      </div> --}}

      <!-- Destinación actual -->
      <div class="col-md-12">
         <div class="card card-preview">
            <div class="card-inner">
               <div class="card-head">
                  <h6 class="title">Destinación actual</h6>
               </div>
               <div class="nk-ck-sm">
                  <canvas class="bar-chart" id="actualDestination"></canvas>
               </div>
            </div>
         </div>
      </div>
      <!-- /Destinación actual -->

      

      <!-- Pendiente - Bienes analizados -->
      <div class="col-sm-12 mt-4">
         <div class="nk-block">
            <div class="nk-block-head">
               <div class="nk-block-head-content">
                  <h4 class="nk-block-title">Bienes analizados</h4>
                  <div class="nk-block-des">
                     <p>Esta es la lista de bienes inmuebles analizados por cada mes del año actual <b>{{ date('Y') }}</b></p>
                  </div>
               </div>
            </div>
            <div class="card card-preview">
               <div class="card-inner">
                  <div class="nk-ck">
                     <canvas class="line-chart" id="monthlyInfo"></canvas>
                  </div>
               </div>
            </div>
            <!-- .card-preview -->
         </div>
      </div>
      <!-- /Pendiente - Bienes analizados -->

      
      <!-- .col -->

      <!-- Estadísticas pendientes -->

      {{-- La que quiere Santiago: https://codepen.io/fjsuarez/pen/obpaao | https://codepen.io/dcavins/pen/mqygQy --}} {{--
      <div class="col-sm-12 col-lg-4 not-yet">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Colaboradores</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-handshake"></em>
                     <div class="info">
                        <span class="amount">18</span>
                        <span class="title">De la AGENCIA APP</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4 not-yet">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Suscriptores</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-investment"></em>
                     <div class="info">
                        <span class="amount">393</span>
                        <span class="title">Usuarios</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4 not-yet">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Usuarios registrados</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-users"></em>
                     <div class="info">
                        <span class="amount">7,763</span>
                        <span class="title">Total de usuarios</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes inmuebles</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-apartment"></em>
                     <div class="info">
                        <span class="amount">6,293</span>
                        <span class="title">En total</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes analizados</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-apartment"></em>
                     <div class="info">
                        <span class="amount">9,293</span>
                        <span class="title">En total</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes publicados</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-apartment"></em>
                     <div class="info">
                        <span class="amount">293</span>
                        <span class="title">En total</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4 not-yet">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes en comodato</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-apartment"></em>
                     <div class="info">
                        <span class="amount">93</span>
                        <span class="title">En total</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4 not-yet">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes de interés cultural</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-apartment"></em>
                     <div class="info">
                        <span class="amount">93</span>
                        <span class="title">En total</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4 not-yet">
         <div class="card card-full">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes georreferenciados</h6>
                  </div>
               </div>
               <div class="user-activity-group g-4">
                  <div class="user-activity">
                     <em class="icon lni lni-map"></em>
                     <div class="info">
                        <span class="amount">93</span>
                        <span class="title">En total</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      --}}
      <!-- /Estadísticas pendientes -->

      <div class="col-sm-12">
         <div id="commune_properties"></div>
      </div>

      <div class="col-sm-12">
         <div id="territory_properties"></div>
      </div>

      <div class="col-sm-12">
         <div id="action_properties"></div>
      </div>

      <div class="col-sm-12">
         <div id="secretarship_properties"></div>
      </div>

      <!-- Estadísticas pendientes -->
      {{--
      <div class="col-sm-12 col-lg-6">
         <div class="card card-bordered h-100">
            <div class="card-inner">
               <div class="card-title-group">
                  <div class="card-title card-title-sm">
                     <h6 class="title">Bienes inmuebles por Secretaria adscrita</h6>
                  </div>
                  <div class="card-tools">
                     <div class="drodown">
                        <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                           <ul class="link-list-opt no-bdr">
                              <li>
                                 <a href="#"><span>7 Days</span></a>
                              </li>
                              <li>
                                 <a href="#"><span>15 Days</span></a>
                              </li>
                              <li>
                                 <a href="#"><span>30 Days</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="traffic-channel">
                  <div class="traffic-channel-doughnut-ck">
                     <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                        <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                     </div>

                     <canvas class="analytics-au-chart chartjs-render-monitor" id="analyticAuData" style="display: block; width: 455px; height: 170px;" width="455" height="170"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="card card-bordered h-100">
            <div class="traffic-channel-group g-2">
               <div class="traffic-channel-data">
                  <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></span><span>Secretaría general</span></div>
                  <div class="amount">4,305 <small>58.63%</small></div>
               </div>
               <div class="traffic-channel-data">
                  <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff" style="background: rgb(184, 172, 255);"></span><span>Secretaría de gestión humana y servicio a la ciudadanía</span></div>
                  <div class="amount">859 <small>23.94%</small></div>
               </div>
               <div class="traffic-channel-data">
                  <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce" style="background: rgb(255, 169, 206);"></span><span>Secretaría de salud</span></div>
                  <div class="amount">482 <small>12.94%</small></div>
               </div>
               <div class="traffic-channel-data">
                  <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b" style="background: rgb(249, 219, 123);"></span><span>Secretaría de las mujeres</span></div>
                  <div class="amount">138 <small>4.49%</small></div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="card card-bordered h-100">
            <div class="card-inner">
               <div class="card-title-group">
                  <div class="card-title card-title-sm">
                     <h6 class="title">Bienes inmuebles por Secretaria adscrita</h6>
                  </div>
                  <div class="card-tools">
                     <div class="drodown">
                        <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                           <ul class="link-list-opt no-bdr">
                              <li>
                                 <a href="#"><span>7 Days</span></a>
                              </li>
                              <li>
                                 <a href="#"><span>15 Days</span></a>
                              </li>
                              <li>
                                 <a href="#"><span>30 Days</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="traffic-channel">
                  <div class="traffic-channel-doughnut-ck">
                     <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                        <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                     </div>
                     <canvas class="analytics-doughnut chartjs-render-monitor" id="TrafficChannelDoughnutData" style="display: block; width: 448px; height: 160px;" width="448" height="160"></canvas>
                  </div>
                  <div class="traffic-channel-group g-2">
                     <div class="traffic-channel-data">
                        <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></span><span>Secretaría general</span></div>
                        <div class="amount">4,305 <small>58.63%</small></div>
                     </div>
                     <div class="traffic-channel-data">
                        <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff" style="background: rgb(184, 172, 255);"></span><span>Secretaría de gestión humana y servicio a la ciudadanía</span></div>
                        <div class="amount">859 <small>23.94%</small></div>
                     </div>
                     <div class="traffic-channel-data">
                        <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce" style="background: rgb(255, 169, 206);"></span><span>Secretaría de salud</span></div>
                        <div class="amount">482 <small>12.94%</small></div>
                     </div>
                     <div class="traffic-channel-data">
                        <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b" style="background: rgb(249, 219, 123);"></span><span>Secretaría de las mujeres</span></div>
                        <div class="amount">138 <small>4.49%</small></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
         <div class="card h-100">
            <div class="card-inner h-100 stretch flex-column">
               <div class="device-status my-auto">
                  <div class="device-status-ck">
                     <canvas class="analytics-doughnut" id="deviceStatusData"></canvas>
                  </div>

                  <div class="text-center mt-5">
                     <h5 class="title">Actualmente hay <b>12972</b> bienes fiscales.</h5>
                     <p>Última actualización: {{ \Carbon\Carbon::now() }}</p>
                  </div>
                  <div class="device-status-group">
                     <div class="device-status-data">
                        <em data-color="#6baafe" class="icon lni lni-checkmark"></em>
                        <div class="text-muted">8,924 analizados</div>
                        <div class="amount">68.9%</div>
                     </div>
                     <div class="device-status-data">
                        <em data-color="#8feac5" class="icon lni lni-reload"></em>
                        <div class="text-muted">4,048 por analizar</div>
                        <div class="amount">31.1%</div>
                     </div>
                  </div>
                  <!-- .device-status-group -->
               </div>
               <!-- .device-status -->
            </div>
         </div>
         <!-- .card -->
      </div>
      --}}
      <!-- /Estadísticas pendientes -->
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




      // $(function () {
      //     Highcharts.setOptions({
      //         chart: {
      //             style:{
      //                     fontFamily:'Arial, Helvetica, sans-serif',
      //                     fontSize: '2em',
      //                     color:'#f00'
      //                 }
      //         }
      //     });
      //         $('#property_destinations').highcharts({
      //             chart: {
      //                 type: 'pie'
      //             },
      //             colors: [
      //                '#ED5565',
      //                '#5D9CEC',
      //                '#A0D468',
      //                '#FFCE54',
      //                '#48CFAD',
      //                '#AC92EC',
      //                '#AAB2BD',
      //                '#D770AD',
      //                '#c42525',
      //                '#a6c96a'
      //             ],
      //             title: {
      //                 text: 'Destinación actual',
      //                 style: {
      //                   color: '#555'
      //                 }
      //             },
      //             legend: {
      //                 layout: 'horizontal',
      //                 align: 'center',
      //                 verticalAlign: 'bottom',
      //                 borderWidth: 0,
      //                 backgroundColor: '#FFFFFF'
      //             },
      //             xAxis: {
      //                 categories: [
      //                     '2006',
      //                     '2007',
      //                     '2008',
      //                     '2009',
      //                     '2010',
      //                     '2011'
      //                 ]
      //             },
      //             yAxis: {
      //                 title: {
      //                     text: ''
      //                 }
      //             },
      //             tooltip: {
      //                 shared: false,
      //                 valueSuffix: 'points'
      //             },
      //             credits: {
      //                 enabled: false
      //             },
      //             plotOptions: {
      //                 areaspline: {
      //                     fillOpacity: 0.1
      //                 },
      //             series: {
      //                 groupPadding: .15
      //             }
      //             },
      //             series: [{
      //             type: 'pie',
      //             name: 'Browser share',
      //             data: [

      //                [@foreach($destinations as $destination)
      //                   '{{ $destination->title }}', {{ $destination->properties_count }},
      //                @endforeach],
      //             ]
      //             }]
      //         });
      //     });


      //]]>





</script>

<script type="text/javascript" src="{{ asset('assets/js/charts/gd-default.js') }}"></script>
{{--
<script type="text/javascript" src="{{ asset('assets/js/charts/chart-analytics.js') }}"></script>
--}}
<script type="text/javascript" src="{{ asset('assets/js/charts/new.js') }}"></script>
{{--
<script type="text/javascript" src="{{ asset('assets/js/charts/polar.js') }}"></script>
--}} @include('panel.includes.charts._dashboard')
<script type="text/javascript" src="{{ asset('assets/js/charts/other.js') }}"></script>
@endpush
