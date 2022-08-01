@extends('templates.agencia-app.app') 
@section('content')
<div class="content">
   <div style="height: 90vh; margin-top: 80px;">
      @include('templates.agencia-app.includes.map._right-navigation')
      
      <iframe src="https://agenciaapp.maps.arcgis.com/apps/mapviewer/index.html?webmap=cde04de375a542819eed10da7cad6da7" width="100%" height="900"></iframe>
   </div>
   <div class="limit-box fl-wrap"></div>

   <!-- breadcrumbs-->
   <div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
      <div class="container-fluid">
         <div class="breadcrumbs-list">
            <a href="#">Inicio</a>
            <span>Propiedades</span>
         </div>
         <div class="share-holder sh_in2 hid-share">
            <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Compartir </a>
            <div class="share-container isShare"></div>
         </div>
         <div class="categoties-column_container inline-categories cat-list">
            <ul>
               <li>
                  <a href="#" class="act-category tolt" data-microtip-position="bottom" data-tooltip="Apartamentos"><i class="fal fa-city"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Oficinas"><i class="fal fa-car-building"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Casas"><i class="fal fa-home"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Hoteles"><i class="fal fa-hotel"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Lotes"><i class="fal fa-warehouse-alt"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- breadcrumbs end -->
   <!-- section -->
   <section class="small-padding">

      <div class="container-fluid">
         <div class="row">
            <div class="mob-nav-content-btn color-bg show-list-wrap-search ntm fl-wrap">Mostrar filtros</div>
            <!-- search sidebar-->
            <div class="col-sm-12 col-md-2">

               <div class="filter-elements scroll-to-fixed-fixed">
                  <!--<a class="sidebar-links-btn fl-wrap" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                     <i class="far fa-sliders-h"></i>
                     <span>Filtros</span>
                  </a>

                  <a class="sidebar-links-btn fl-wrap">
                     <i class="fal fa-home"></i>
                     <span>Residencial</span>
                  </a>

                  <a class="sidebar-links-btn fl-wrap">
                     <i class="fal fa-hotel"></i>
                     <span>Dotacional</span>
                  </a>

                  <a class="sidebar-links-btn fl-wrap">
                     <i class="fal fa-warehouse-alt"></i>
                     <span>Lotes</span>
                  </a>

                  <a class="sidebar-links-btn fl-wrap">
                     <i class="fal fa-car-building"></i>
                     <span>Servicios</span>
                  </a>-->

                  <nav class="scroll-nav scroll-init fixed-column_menu-init scroll-to-fixed-fixed">
                     <ul class="no-list-style">
                        <li>
                           <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="far fa-sliders-h"></i></a><span>Filtros</span>
                        </li>
                        <li>
                           <a href="#" class="">
                              <i class="fal fa-home"></i>
                           </a>
                           <span>Residencial</span>
                        </li>
                        
                        <li>
                           <a href="#" class="">
                              <i class="fal fa-hotel"></i>
                           </a>
                           <span>Dotacional</span>
                        </li>

                        <li>
                           <a href="#" class="">
                              <i class="fal fa-warehouse-alt"></i>
                           </a>
                           <span>Lotes</span>
                        </li>

                        <li>
                           <a href="#" class="">
                              <i class="fal fa-car-building"></i>
                           </a>
                           <span>Servicios</span>
                        </li>
                     </ul>
                     <div class="progress-indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                           <circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
                           <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar" style="stroke-dashoffset: 64.7169px;"></circle>
                        </svg>
                     </div>
                  </nav>
               </div>

               <div class="secondary-nav vis_secnav">
                  <ul>
                     <li>
                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" href="#" class="tolt" data-microtip-position="left" data-tooltip="Otros"> <i class="fal fa-truck-couch"></i></a>
                     </li>
                  </ul>
               </div>

               <div class="offcanvas offcanvas-end pt-5 mt-5" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasRightLabel">Otros filtros de la derecha</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </div>


               <!-- Filters section -->
               <div class="offcanvas offcanvas-start pt-5 mt-5" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                     <div class="list-searh-input-wrap-title fl-wrap my-auto">
                        <i class="far fa-sliders-h"></i>
                        <span>Filtros de búsqueda</span>
                     </div>
                     <button type="button" class="btn-close text-reset my-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body" style="max-height: 80vh; overflow-y: scroll;">
                     <!-- Filters -->
                     <div class="fl-wrap lws_mobile">
                        <div class="block-box fl-wrap search-sb" id="filters-column">
                           <!-- Filter by commune -->
                           <div class="listsearch-input-item">
                              <label>Comuna</label>
                              <select data-placeholder="Comuna" class="form-select" id="commune_id" onchange="getDistricts();">
                                 <option value="all">Todas las comunas</option>
                                 @foreach($communes as $commune)
                                 <option 
                                    @if($filter_commune == $commune->id) 
                                    selected 
                                    @endif 
                                    value="{{ $commune->id }}">
                                    ({{ $commune->code }}) - {{ $commune->name }}
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                           <!-- /Filter by commune -->

                           <!-- Filter by district -->
                           <div class="listsearch-input-item">
                              <label>Barrio</label>
                              <select data-placeholder="Barrio" class="form-select" name="district_id" id="district_id">
                                 <option value="all">Todos los barrios</option>
                                 @foreach($districts as $district)
                                 <option 
                                    @if($filter_district == $district->id) 
                                    selected 
                                    @endif 
                                    value="{{ $district->id }}">
                                    {{ $district->name }}
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                           <!-- /Filter by district -->

                           <!-- Filter by destination -->
                           <div class="listsearch-input-item">
                              <label>Destinación actual</label>
                              <select data-placeholder="Destinación actual" class="form-select" id="destination_id">
                                 <option value="all">Todas las destinaciones</option>
                                 @foreach($destinations as $destination)
                                 <option 
                                    @if($filter_destination == $destination->id) 
                                    selected 
                                    @endif
                                    value="{{ $destination->id }}">
                                    {{ $destination->title }}
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                           <!-- /Filter by destination -->

                           <!-- Filter by opportunity -->
                           <div class="listsearch-input-item">
                              <label>Oportunidad</label>
                              <select data-placeholder="Oportunidad" class="form-select" id="opportunity_id">
                                 <option value="all">Todas</option>
                                 <option 
                                    @if($filter_opportunity == 1) 
                                    selected 
                                    @endif
                                    value="1">Oportunidad Inmobiliaria</option>
                                 <option 
                                    @if($filter_opportunity == 2) 
                                    selected 
                                    @endif
                                    value="2">Gestión comercial</option>
                              </select>
                           </div>
                           <!-- /Filter by opportunity -->

                           <!-- Filter by action -->
                           <div class="listsearch-input-item">
                              <label>Acción</label>
                              <select data-placeholder="Acción" class="form-select" id="action_id">
                                 <option value="all">Todas las acciones</option>
                                 @foreach($actions as $action)
                                 <option 
                                    @if($filter_action == $action->id) 
                                    selected 
                                    @endif
                                    value="{{ $action->id }}">
                                    {{ $action->title }}
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                           <!-- /Filter by action -->

                           <!-- Filter by area -->
                           <div class="listsearch-input-item">
                              <label>Área</label>
                              <select data-placeholder="Área" class="form-select" id="area">
                                 <option value="all">Cualquiera</option>
                                 <option value="500">0 - 500 m2/ft2</option>
                                 <option value="1500">500 - 1500 m2/ft2</option>
                                 <option value="5000">1500 - 5000 m2/ft2</option>
                                 <option value="5001">+5000 m2/ft2</option>
                              </select>
                           </div>
                           <!-- /Filter by area -->

                           <!-- Advanced filters -->
                           <div class="accordion" id="advancedFilters">
                              <div class="accordion-item border-0 mt-4 mb-4">
                                 <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Filtros avanzados
                                    </button>
                                 </h4>
                                 <div id="collapseTwo" class="accordion-collapse collapse {{ $show_collapse }}" aria-labelledby="headingTwo" data-bs-parent="#advancedFilters">
                                    <div class="accordion-body">
                                       <!-- Filter by macroproject -->
                                       <div class="listsearch-input-item">
                                          <label>Macroproyecto</label>
                                          <select data-placeholder="Macroproyecto" class="form-select" id="macroproject_id">
                                             <option value="all">Todos los macroproyectos</option>
                                             @foreach($macroprojects as $macroproject)
                                             <option 
                                                @if($filter_macroproject == $macroproject->id) 
                                                selected 
                                                @endif
                                                value="{{ $macroproject->id }}">
                                                {{ $macroproject->name }}
                                             </option>
                                             @endforeach
                                          </select>
                                       </div>
                                       <!-- /Filter by macroproject -->

                                       <!-- Filter by treatment -->
                                       <div class="listsearch-input-item">
                                          <label>Tratamiento</label>
                                          <select data-placeholder="Tratamiento" class="form-select" id="treatment_id">
                                             <option value="all">Todos los tratamientos</option>
                                             @foreach($treatments as $treatment)
                                             <option 
                                                @if($filter_treatment == $treatment->id) 
                                                selected 
                                                @endif
                                                value="{{ $treatment->id }}">
                                                {{ $treatment->title }}
                                             </option>
                                             @endforeach
                                          </select>
                                       </div>
                                       <!-- /Filter by treatment -->

                                       <!-- Filter by instrument -->
                                       <div class="listsearch-input-item">
                                          <label>Instrumento de tercer nivel</label>
                                          <select data-placeholder="Instrumento de tercer nivel" class="form-select" id="instrument_id">
                                             <option value="all">Todos</option>
                                             @foreach($instruments as $instrument)
                                             <option 
                                                @if($filter_instrument == $instrument->id) 
                                                selected 
                                                @endif
                                                value="{{ $instrument->id }}">
                                                {{ $instrument->title }}
                                             </option>
                                             @endforeach
                                          </select>
                                       </div>
                                       <!-- /Filter by instrument -->

                                       <!-- Filter by floor_use -->
                                       <div class="listsearch-input-item">
                                          <label>Uso del suelo</label>
                                          <select data-placeholder="Uso del suelo" id="floor_use_id" class="form-select">
                                             <option value="all">Todos los usos</option>
                                             @foreach($floor_uses as $floor_use)
                                             <option 
                                                @if($filter_floor_use == $floor_use->id) 
                                                selected 
                                                @endif
                                                value="{{ $floor_use->id }}">
                                                {{ $floor_use->title }}
                                             </option>
                                             @endforeach
                                          </select>
                                       </div>
                                       <!-- /Filter by floor_use -->

                                       <!-- listsearch-input-item-->
                                       <div class="listsearch-input-item pt-4">
                                          <label>Que contenga</label>
                                          <div class="fl-wrap filter-tags">
                                             <ul class="no-list-style">
                                                <li>
                                                   <input @if($filter_rph == 1) checked @endif type="checkbox" id="rph" />
                                                   <label for="rph">RPH</label>
                                                </li>
                                                <li>
                                                   <input @if($filter_loan == 1) checked @endif type="checkbox" id="loan" />
                                                   <label for="loan"> Comodato</label>
                                                </li>
                                                <li>
                                                   <input @if($filter_bic == 1) checked @endif type="checkbox" id="bic" />
                                                   <label for="bic">BIC</label>
                                                </li>
                                                <li>
                                                   <input @if($filter_management == 1) checked @endif type="checkbox" id="management" />
                                                   <label for="management">Gestión</label>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Advanced filters -->

                           <!-- listsearch-input-item end-->
                           <div class="msotw_footer">
                              <button class="btn small-btn float-btn color-bg" onclick="applyFilters();">
                                 Aplicar filtros
                              </button>
                              <div class="reset-form reset-btn">
                                 <a href="{{ route('user.properties.index') }}?commune=all?district=all?destination=all?opportunity=1?action=all?area=all?macroproject=all?treatment=all?instrument=all?floor_use=all?rph=0?loan=0?bic=0?management=0">
                                    <i class="far fa-sync-alt"></i> Borrar filtros
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /Filters -->
                  </div>
               </div>
               <!-- /Filters section -->
               
            </div>
            <!-- search sidebar end-->
            <div class="col-sm-12 col-md-10">
               <!-- list-main-wrap-header-->
               <div class="list-main-wrap-header box-list-header fl-wrap">
                  <!-- list-main-wrap-title-->
                  <div class="list-main-wrap-title">
                     <h2>{{ $properties->count() }} inmuebles encontrados</h2>

                     <p class="mt-5 font-16 mb-2">Filtros sugeridos</p>

                     <a href="#" class="filter-border-primary">Servicios</a>
                     <a href="#" class="filter-border-primary">Comercial</a>
                     <a href="#" class="filter-border-primary">En venta</a>
                  </div>
                  <!-- list-main-wrap-title end-->
                  <!-- list-main-wrap-opt-->
                  <div class="list-main-wrap-opt">
                     <!-- price-opt-->
                     <div class="price-opt">
                        <span class="price-opt-title">Ordenar por:</span>
                        <div class="listsearch-input-item">
                           <select data-placeholder="Popularity" class="chosen-select no-search-select border-blue" id="orderBy">
                              <option value="code">Código</option>
                              <option value="high_price">Precio más alto a más bajo</option>
                              <option value="low_price">Precio más bajo a más alto</option>
                              <option value="latest" @if($filter_orderBy == 'latest') selected @endif>Últimos añadidos</option>
                              <option value="newest" @if($filter_orderBy == 'newest') selected @endif>Primeros añadidos</option>
                           </select>
                        </div>
                     </div>
                     <!-- price-opt end-->
                     <!-- price-opt-->
                     <div class="grid-opt border-0">
                        <ul class="no-list-style">
                           <li class="grid-opt_act">
                              <span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Vista de cuadrícula"><i class="far fa-th"></i></span>
                           </li>
                           <li class="grid-opt_act">
                              <span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="Vista de lista"><i class="far fa-list"></i></span>
                           </li>
                        </ul>
                     </div>
                     <!-- price-opt end-->
                  </div>
                  <!-- list-main-wrap-opt end-->
               </div>
               <!-- list-main-wrap-header end-->
               <!-- listing-item-wrap-->

               <div class="row listing-item-container box-list_ic fl-wrap">
                  <!-- listing-item -->
                  @forelse($properties as $property)
                  <div class="listing-item col-sm-12 col-md-4">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="{{ route('user.properties.show', $property) }}" class="geodir-category-img_item">
                              @if($property->featured_image())
                                 <img src="{{ asset('storage/images') }}/{{$property->code}}/{{ $property->featured_image()->url }}" alt="" />
                              @else
                                 <img src="{{ asset('templates/agencia-app/images/default.png') }}" alt="" />
                              @endif
                              <div class="overlay"></div>
                           </a>

                           <div class="geodir-category-location">
                              <a href="{{ route('user.properties.show', $property) }}" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="{{ $property->cadastral_address }}">
                                 <i class="fas fa-map-marker-alt"></i>
                                 {{ $property->cadastral_address }} - {{ $property->district->name }}
                              </a>
                           </div>

                           <ul class="list-single-opt_header_cat">
                              <li><a href="{{ route('user.properties.show', $property) }}" class="cat-opt blue-bg">{{$property->action->title}}</a></li>
                              <li><a href="{{ route('user.properties.show', $property) }}" class="cat-opt color-bg">Lote</a></li>
                           </ul>

                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar"><span><i class="fal fa-heart"></i></span></a>

                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 0</span>
                           </div>
                        </div>

                        <div class="geodir-category-content fl-wrap">
                           <div class="geodir-category-content_price">
                              <span class="text-dark">${{ number_format($property->property_valuation) }} <small>COP</small></span>
                           </div>

                           <h3 class="mt-3">
                              <a href="{{ route('user.properties.show', $property) }}">
                                 {{ Str::limit($property->sss_description, 50) }}
                              </a>
                           </h3>

                           <p class="mt-4">
                              Este inmueble cuenta con la matrícula <b>{{ $property->plate }}</b> y su código es <b>{{ $property->code }}</b>
                           </p>

                           <div class="geodir-category-content-details">
                              <ul>
                                 <li>
                                    <i class="fal fa-cube"></i>
                                    <span>{{ $property->cadastral_area }} {{ $property->units }}</span>
                                 </li>
                                 <li>
                                    <i class="fas fa-hard-hat"></i>
                                    <span>{{ $property->construction_area }} {{ $property->units }}</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </article>
                  </div>
                  @empty
                  <img src="{{ asset('templates/agencia-app/images/404.svg') }}" width="40%" class="img-fluid">
                  <h5 class="mt-4">No se encontraron resultados para tu búsqueda, prueba con otros filtros.</h5>
                  @endforelse
               </div>
               <!-- listing-item-wrap end-->
            </div>
            <!-- col-md 8 end -->

            <div class="col-12">
               <!-- pagination-->
               <div class="pagination d-flex justify-content-center">
                  {!! $properties->appends(request()->input())->links() !!}
               </div>
               <!-- pagination end-->
            </div>
         </div>
      </div>
   </section>
   <div class="limit-box fl-wrap"></div>
</div>
@stop