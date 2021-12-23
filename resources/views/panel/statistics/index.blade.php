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
<div class="nk-block">
   <div class="row g-gs">
      <div class="col-sm-12 col-lg-4">
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

      <div class="col-sm-12 col-lg-4">
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

      <div class="col-sm-12 col-lg-4">
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

      <div class="col-sm-12 col-lg-4">
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

      <div class="col-sm-12 col-lg-4">
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

      <div class="col-sm-12 col-lg-4">
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
      <!-- .col -->

      {{-- <div class="col-sm-12 col-md-6 my-auto">
         <div class="row">
            <div class="text-center">
               <h6 class="title ml-2 mb-4">Cantidad de bienes desagregados</h6>
            </div>

            <div class="col-sm-12">
               <div class="card card-bordered card-full">
                  <div class="card-inner">
                     <div class="card-title-group align-start mb-3">
                        <div class="card-title">
                           <h6 class="title">Destinación actual</h6>
                        </div>
                     </div>
                     <div class="user-activity-group g-4">
                        <div class="user-activity">
                           <em class="icon lni lni-apartment"></em>
                           <div class="info">
                              <span class="amount">6,293</span>
                              <span class="title">Inmuebles</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-12 mt-2">
               <div class="card card-bordered card-full">
                  <div class="card-inner">
                     <div class="card-title-group align-start mb-3">
                        <div class="card-title">
                           <h6 class="title">Acción</h6>
                        </div>
                     </div>
                     <div class="user-activity-group g-4">
                        <div class="user-activity">
                           <em class="icon lni lni-investment"></em>
                           <div class="info">
                              <span class="amount">5,526</span>
                              <span class="title">Inmuebles</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-12 mt-2">
               <div class="card card-bordered card-full">
                  <div class="card-inner">
                     <div class="card-title-group align-start mb-3">
                        <div class="card-title">
                           <h6 class="title">Para la venta</h6>
                        </div>
                     </div>
                     <div class="user-activity-group g-4">
                        <div class="user-activity">
                           <em class="icon lni lni-handshake"></em>
                           <div class="info">
                              <span class="amount">1,153</span>
                              <span class="title">Inmuebles</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div> --}}

      {{--
      <div class="col-sm-12 col-md-6">
         <div class="card h-100">
            <div class="card-inner h-100 stretch flex-column">
               <div class="device-status my-auto">
                  <div class="device-status-ck">
                     <canvas class="analytics-doughnut chartjs-render-monitor" id="TrafficChannelDoughnutData"></canvas>
                  </div>

                  <div class="text-center mt-5">
                     <h5 class="title">Actualmente hay <b>12972</b> bienes fiscales.</h5>
                     <p>Última actualización: {{ \Carbon\Carbon::now() }}</p>
                  </div>
                  <div class="device-status-group">
                     <div class="device-status-data">
                        <em data-color="#0e6351" class="icon lni lni-checkmark"></em>
                        <div class="text-muted">8,924 analizados</div>
                        <div class="amount">68.9%</div>
                     </div>
                     <div class="device-status-data">
                        <em data-color="#d14555" class="icon lni lni-reload"></em>
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
      <!-- .col -->
      --}}

      {{-- <div class="col-lg-8">
         <div class="card card-bordered h-100">
            <div class="card-inner">
               <div class="card-title-group align-start mb-3">
                  <div class="card-title">
                     <h6 class="title">Bienes inmuebles</h6>
                  </div>
               </div>
               <!-- .card-title-group -->
               <div class="nk-order-ovwg">
                  <div class="row g-4 align-end">
                     <div class="col-xxl-8">
                        <div class="nk-order-ovwg-ck">
                           <canvas class="order-overview-chart" id="orderOverview"></canvas>
                        </div>
                     </div>
                     <!-- .col -->
                     <div class="col-xxl-4">
                        <div class="row g-4">
                           <div class="col-sm-6 col-xxl-12">
                              <div class="nk-order-ovwg-data buy">
                                 <div class="amount">
                                    <small class="currenct currency-cop">
                                       $12,954,630,890
                                    </small>
                                 </div>
                                 <div class="info">Monto <strong>total</strong> de los bienes inmuebles (en pesos colombianos) disponibles para la venta.</div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- .col -->
                  </div>
               </div>
               <!-- .nk-order-ovwg -->
            </div>
            <!-- .card-inner -->
         </div>
         <!-- .card -->
      </div>
      <!-- .col -->
      <div class="col-lg-4">
         <div class="card card-bordered h-100">
            <div class="card-inner-group">
               <div class="card-inner card-inner-md">
                  <div class="card-title-group">
                     <div class="card-title">
                        <h6 class="title">Accesos rápidos</h6>
                     </div>
                  </div>
               </div>
               <!-- .card-inner -->
               <div class="card-inner">
                  <div class="nk-wg-action">
                     <div class="nk-wg-action-content">
                        <em class="icon ni ni-home"></em>
                        <div class="title">Bienes inmuebles</div>
                        <p>Podrás agregar nuevos <strong>bienes inmuebles</strong> y enviarlos para revisión.</p>
                     </div>
                     <a href="{{ route('panel.properties.create') }}" class="btn btn-icon btn-trigger mr-n2"><em class="icon ni ni-forward-ios"></em></a>
                  </div>
               </div>
               <!-- .card-inner -->
               <div class="card-inner">
                  <div class="nk-wg-action">
                     <div class="nk-wg-action-content">
                        <em class="icon ni ni-help-fill"></em>
                        <div class="title">Soporte técnico</div>
                        <p>Si tienes problemas con la plataforma, contáctame al correo electrónico <strong>brayan.angarita@app.gov.co</strong>.</p>
                     </div>
                     <a href="mailto:brayan.angarita@app.gov.co" target="_blank" class="btn btn-icon btn-trigger mr-n2"><em class="icon ni ni-forward-ios"></em></a>
                  </div>
               </div>
               <!-- .card-inner -->
               <div class="card-inner">
                  <div class="nk-wg-action">
                     <div class="nk-wg-action-content">
                        <em class="icon ni ni-users"></em>
                        <div class="title">Invitar usuario</div>
                        <p>Envía un correo electrónico a un usuario para que haga uso de la plataforma.</p>
                     </div>
                     <a href="#" class="btn btn-icon btn-trigger mr-n2"><em class="icon ni ni-forward-ios"></em></a>
                  </div>
               </div>
               <!-- .card-inner -->
            </div>
            <!-- .card-inner-group -->
         </div>
         <!-- .card -->
      </div>
      <!-- .col -->
      <div class="col-xl-7 col-xxl-8">
         <div class="card card-bordered card-full">
            <div class="card-inner">
               <div class="card-title-group">
                  <div class="card-title">
                     <h6 class="title"><span class="mr-2">Bienes más populares</span> <a href="#" class="link d-none d-sm-inline">Ver toda la lista</a></h6>
                  </div>
               </div>
            </div>
            <!-- .card-inner -->
            <div class="card-inner p-0 border-top">
               <div class="nk-tb-list nk-tb-orders">
                  <div class="nk-tb-item nk-tb-head">
                     <div class="nk-tb-col nk-tb-orders-type"><span>ID</span></div>
                     <div class="nk-tb-col"><span>Matrícula</span></div>
                     <div class="nk-tb-col tb-col-sm"><span>Visitas</span></div>
                     <div class="nk-tb-col tb-col-xxl"><span>Ver</span></div>
                  </div>
                  <!-- .nk-tb-item -->
                  <div class="nk-tb-item">
                     <div class="nk-tb-col">
                        <span class="tb-lead">434</span>
                     </div>
                     <div class="nk-tb-col">
                        <span class="tb-lead">Comuna 24, Comuneros</span>
                     </div>
                     <div class="nk-tb-col tb-col-sm">
                        <span class="tb-sub">454</span>
                     </div>
                     <div class="nk-tb-col tb-col-xxl">
                        <span class="tb-sub text-primary">Ver</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- .col -->
      <div class="col-xl-5 col-xxl-4">
         <div class="row g-gs">
            <!-- .col -->
            <div class="col-md-6 col-lg-12">
               <div class="card card-bordered card-full">
                  <div class="card-inner">
                     <div class="card-title-group align-start mb-3">
                        <div class="card-title">
                           <h6 class="title">Usuarios</h6>
                           <p>12 en los últimos 30 días <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Usuarios registrados hace 30 días"></em></p>
                        </div>
                        <div class="card-tools mt-n1 mr-n1">
                           <div class="drodown">
                              <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                 <ul class="link-list-opt no-bdr">
                                    <li>
                                       <a href="#"><span>15 días</span></a>
                                    </li>
                                    <li>
                                       <a href="#" class="active"><span>30 días</span></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="user-activity-group g-4">
                        <div class="user-activity">
                           <em class="icon ni ni-users"></em>
                           <div class="info">
                              <span class="amount">345</span>
                              <span class="title">Usuarios</span>
                           </div>
                        </div>
                        <div class="user-activity">
                           <em class="icon ni ni-users"></em>
                           <div class="info">
                              <span class="amount">49</span>
                              <span class="title">Colaboradores</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-activity-ck">
                     <canvas class="usera-activity-chart" id="userActivity"></canvas>
                  </div>
               </div>
               <!-- .card -->
            </div>
            <!-- .col -->
         </div>
         <!-- .row -->
      </div> --}}
      <!-- .col -->
   </div>
   <!-- .row -->
</div>
@stop @push('scripts')
<script src="{{ asset('assets/js/charts/chart-analytics.js?ver=2.4.0')}}"></script>
@endpush
