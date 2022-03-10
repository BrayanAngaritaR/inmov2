@extends('templates.agencia-app.app') @section('content')
<div class="content">
   <!-- Map -->
   <div class="map-container fw-map big_map">
      <div id="map-main"></div>
      <ul class="mapnavigation no-list-style">
         <li>
            <a href="#" class="prevmap-nav mapnavbtn">
               <span><i class="fas fa-caret-left"></i></span>
            </a>
         </li>
         <li>
            <a href="#" class="nextmap-nav mapnavbtn">
               <span><i class="fas fa-caret-right"></i></span>
            </a>
         </li>
      </ul>
      <div class="scrollContorl mapnavbtn tolt" data-microtip-position="top-left" data-tooltip="Enable Scrolling">
         <span><i class="fal fa-unlock"></i></span>
      </div>
      <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Your location">
         <span><i class="fal fa-location"></i></span>
      </div>
      <div class="map-close"><i class="fas fa-times"></i></div>
   </div>
   <!-- Map end -->
   <!-- breadcrumbs-->
   <div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
      <div class="container">
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
   <section class="gray-bg small-padding">
      <div class="container">
         <div class="row">
            <div class="mob-nav-content-btn color-bg show-list-wrap-search ntm fl-wrap">Mostrar filtros</div>
            <!-- search sidebar-->
            <div class="col-md-4">
               <div class="fl-wrap lws_mobile">
                  <div class="list-searh-input-wrap-title fl-wrap"><i class="far fa-sliders-h"></i><span>Filtros de búsqueda</span></div>
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
  
                     <!-- Filter by area -->
                     {{-- <div class="listsearch-input-item">
                        <div class="price-rage-item fl-wrap">
                           <span class="pr_title">Área:</span>
                           <input type="text" class="price-range-double" data-min="1" data-max="1000" name="price-range2" data-step="1" value="1" data-prefix="" />
                        </div>
                     </div>
                     <small class="text-muted">Los valores se representan en m2 o ft2</small> --}}
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
                        <div class="reset-form reset-btn"><i class="far fa-sync-alt"></i> Borrar filtros</div>
                     </div>
                  </div>
                  <a class="back-tofilters color-bg custom-scroll-link fl-wrap scroll-to-fixed-fixed" href="#filters-column">Subir a los filtros <i class="fas fa-caret-up"></i></a>
               </div>
            </div>
            <!-- search sidebar end-->
            <div class="col-md-8">
               <!-- list-main-wrap-header-->
               <div class="list-main-wrap-header box-list-header fl-wrap">
                  <!-- list-main-wrap-title-->
                  <div class="list-main-wrap-title">
                     <h2>Resultados de búsqueda: <strong>{{ $properties->count() }}</strong></h2>
                  </div>
                  <!-- list-main-wrap-title end-->
                  <!-- list-main-wrap-opt-->
                  <div class="list-main-wrap-opt">
                     <!-- price-opt-->
                     <div class="price-opt">
                        <span class="price-opt-title">Ordenar por:</span>
                        <div class="listsearch-input-item">
                           <select data-placeholder="Popularity" class="chosen-select no-search-select" id="orderBy">
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
                     <div class="grid-opt">
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
               <div class="listing-item-container box-list_ic fl-wrap">
                  <!-- listing-item -->
                  @forelse($properties as $property)
			         <div class="listing-item">
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
			         				<a href="{{ route('user.properties.show', $property) }}" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map">
			         					<i class="fas fa-map-marker-alt"></i>
			         					{{ $property->cadastral_address }} - {{ $property->district->name }}
			         				</a>
			         			</div>

			         			<ul class="list-single-opt_header_cat">
			         				<li><a href="{{ route('user.properties.show', $property) }}" class="cat-opt blue-bg">{{$property->action->title}}</a></li>
			                     <li><a href="{{ route('user.properties.show', $property) }}" class="cat-opt color-bg">Lote</a></li>
			         			</ul>

			         			<a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar"><span><i class="fal fa-heart"></i></span></a>

			         			{{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare"><span><i class="fal fa-random"></i></span></a> --}}

			         			<div class="geodir-category-listing_media-list">
			         				<span><i class="fas fa-camera"></i> 0</span>
			         			</div>
			         		</div>

			         		<div class="geodir-category-content fl-wrap">
			         			<div class="geodir-category-content_price">
			         				${{ number_format($property->property_valuation) }}
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
               <!-- pagination-->
               <div class="pagination">
                  <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                  <a href="#">1</a>
                  <a href="#" class="current-page">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
               </div>
               <!-- pagination end-->
            </div>
            <!-- col-md 8 end -->
         </div>
      </div>
   </section>
   <div class="limit-box fl-wrap"></div>
</div>
@stop


@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script type="text/javascript">
   (function ($) {
    "use strict";
    var markerIcon = {
        anchor: new google.maps.Point(22, 16),
        url: 'templates/agencia-app/images/marker-single.png',
    }
    function mainMap() {
        function locationData(locationURL, locationCategory, locationImg, locationTitle, locationAddress,     locationPrice , locationStatus) {
            return ('<div class="map-popup-wrap"><div class="map-popup"><div class="map-popup-status mp-cat  color-bg">' + locationStatus + '</div><div class="map-popup-category mp-cat  color-bg">' + locationCategory + '</div><div class="infoBox-close"><i class="fal fa-times"></i></div> <a href="' + locationURL + '" class="listing-img-content" style="background-image: url(' + locationImg + ')"> </a> <div class="listing-content">  <div class="listing-title">   <h4><a href=' + locationURL + '>' + locationTitle + '</a></h4><span class="map-popup-location-info"> ' + locationAddress + '</span> </div><span class="map-popup-price fl-wrap">  $' + locationPrice + '  </span></div>    </div></div>')
        }
       //   locations ------------------
        var locations = [
        @foreach($properties as $property)
            [locationData("{{ route('user.properties.show', $property) }}", 'Lote', '{{ asset('/templates/agencia-app/images/logo.png') }}', '{{ $property->sss_description }}', "{{ $property->cadastral_area }} {{ $property->units }}",  "{{ number_format($property->property_valuation) }}" , "{{ $property->action->title }}"), {{ $property->map_latitude }}, {{ $property->map_longitude }}, 0, markerIcon],
        @endforeach
        ];
       //   Map Infoboxes end ------------------
        var map = new google.maps.Map(document.getElementById('map-main'), {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng(6.24, -75.57),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: true,
            fullscreenControl: true,
            navigationControl: false,
            streetViewControl: true,
            animation: google.maps.Animation.BOUNCE,
            gestureHandling: 'cooperative',
            styles: [{featureType:"administrative",elementType:"geometry.fill",stylers:[{visibility:"on"},{color:"#ffffff"}]},{featureType:"administrative",elementType:"labels.text.fill",stylers:[{gamma:"0.00"},{weight:"0.01"},{visibility:"on"},{color:"#8c8c8c"}]},{featureType:"administrative.neighborhood",elementType:"labels.text",stylers:[{visibility:"on"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#898989"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.stroke",stylers:[{color:"#ffffff"},{weight:"4.00"}]},{featureType:"landscape",elementType:"all",stylers:[{color:"#ffffff"}]},{featureType:"landscape.man_made",elementType:"geometry.fill",stylers:[{visibility:"simplified"},{color:"#ffffff"}]},{featureType:"landscape.natural",elementType:"geometry",stylers:[{visibility:"on"}]},{featureType:"landscape.natural",elementType:"labels.text.fill",stylers:[{color:"#8d8d8d"}]},{featureType:"landscape.natural.terrain",elementType:"geometry.stroke",stylers:[{visibility:"on"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"poi.park",elementType:"geometry.fill",stylers:[{color:"#cef8d5"},{visibility:"on"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{visibility:"on"},{color:"#60b36c"}]},{featureType:"poi.park",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"}]},{featureType:"poi.park",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"all",stylers:[{saturation:"-100"},{lightness:"32"},{visibility:"on"}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#f3f3f3"}]},{featureType:"road",elementType:"geometry.stroke",stylers:[{color:"#e1e1e1"}]},{featureType:"road",elementType:"labels.text",stylers:[{visibility:"on"}]},{featureType:"road.highway",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{visibility:"on"},{lightness:"63"}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#f3f3f3"}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#e1e1e1"}]},{featureType:"road.highway",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"road.highway",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road.arterial",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"transit.station",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"all",stylers:[{visibility:"on"},{color:"#eeeeee"}]},{featureType:"water",elementType:"geometry.fill",stylers:[{color:"#cce4ff"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{visibility:"on"},{color:"#6095a5"}]}]
        });

        map.setMapTypeId('roadmap'); //satellite, terrain, hybrid, roadmap

        var boxText = document.createElement("div");
        boxText.className = 'map-box'
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: true,
            alignBottom: true,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-110, -45),
            zIndex: null,
            boxStyle: {
                width: "260px"
            },
            closeBoxMargin: "0",
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };
        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: locations[i][4],
                id: i
            });
            allMarkers.push(marker);
            var ib = new InfoBox();
 
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    ib.setOptions(boxOptions);
                    boxText.innerHTML = locations[i][0];
                    ib.close();
                    ib.open(map, marker);
                    currentInfobox = marker.id;
                    var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                    map.panTo(latLng);
                    map.panBy(0, -180);
                    google.maps.event.addListener(ib, 'domready', function () {
                        $('.infoBox-close').click(function (e) {
                            e.preventDefault();
                            ib.close();
                        });
                    });
                }
            })(marker, i));
        }
        var options = {
            imagePath: 'images/',
            styles: clusterStyles,
            minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options);
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });

        $('.nextmap-nav').on("click", function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            if (index + 1 < allMarkers.length) {
                google.maps.event.trigger(allMarkers[index + 1], 'click');
            } else {
                google.maps.event.trigger(allMarkers[0], 'click');
            }
        });
        $('.prevmap-nav').on("click", function (e) {
            e.preventDefault();
            map.setZoom(15);
            if (typeof (currentInfobox) == "undefined") {
                google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
            } else {
                var index = currentInfobox;
                if (index - 1 < 0) {
                    google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
                } else {
                    google.maps.event.trigger(allMarkers[index - 1], 'click');
                }
            }
        });
        $('.map-item').on("click", function (e) {
            e.preventDefault();
         map.setZoom(15);
            var index = currentInfobox;
            var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
            google.maps.event.trigger(allMarkers[marker_index-1], "click");
         if ($(this).hasClass("scroll-top-map")){
           $('html, body').animate({
            scrollTop: $(".map-container").offset().top+ "-70px"
           }, 500)
         }
         else if ($(window).width()<1064){
           $('html, body').animate({
            scrollTop: $(".map-container").offset().top+ "-70px"
           }, 500)
         }
        });
      // Scroll enabling button
      var scrollEnabling = $('.scrollContorl');

      $(scrollEnabling).click(function(e){
          e.preventDefault();
          $(this).toggleClass("enabledsroll");

          if ( $(this).is(".enabledsroll") ) {
             map.setOptions({'scrollwheel': true});
          } else {
             map.setOptions({'scrollwheel': false});
          }
      });      
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);
        function ZoomControl(controlDiv, map) {
            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                map.setZoom(map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                map.setZoom(map.getZoom() - 1);
            });
        }
    }
    var map = document.getElementById('map-main');
    if (typeof (map) != 'undefined' && map != null) {
        google.maps.event.addDomListener(window, 'load', mainMap);
    }
})(this.jQuery);
</script>

<script type="text/javascript">
	function getDistricts(){
		let commune_id = $('#commune_id').val();
		//district

		let data = {
         commune_id
      };

      $.ajaxSetup({
         headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
         },
      });

      if(commune_id) {
         $.ajax({
            url: '/panel/districts/' + commune_id,
            type: "GET",
            data : {"_token":"{{ csrf_token() }}"},
            dataType: "json",
            success:function(data)
            {
               if(data){
               	//alert("Info cargada");
                  //console.log(data);
                  $('#district_id').empty();
                  $('#district_id').append('<option hidden value="all">Seleccionar barrio</option>'); 
                  $.each(data, function(key, district){
                     $('select[name="district_id"]').append('<option value="'+ key +'">' + district.name+ '</option>');
                  });
               } else {
                  $('#district_id').append('<option hidden>Ha ocurrido un error al importar la información</option>');
               }
            }
          });
      }else{
         $('#district_id').empty();
      }

      // $.ajax({
      //    type: "post",
      //    url: "route('panel.properties.store')}}",
      //    data: data,
      //    success: function (data) {
      //       if (data.status == 'ok') {
      //          window.location.href = data.url;
      //       } else{
      //          printErrorMsg(data.error);
      //       }
      //    },
      // });
	}

	function orderBy(){
		let orderBy = $('#orderBy').val();
	}

   function applyFilters(){

      let commune = $('#commune_id').val();
      let district = $('#district_id').val();
      let destination = $('#destination_id').val();
      let opportunity = $('#opportunity_id').val();
      let area = $('#area').val();
      let action = $('#action_id').val();
      let macroproject = $('#macroproject_id').val();
      let treatment = $('#treatment_id').val();
      let instrument = $('#instrument_id').val();
      let floor_use = $('#floor_use_id').val();

      let rph = 0;
      let loan = 0;
      let management = 0;
      let bic = 0;

      if ($("#rph").is(":checked")) {
         rph = 1;
      }

      if ($("#loan").is(":checked")) {
         loan = 1;
      }

      if ($("#bic").is(":checked")) {
         bic = 1;
      }

      if ($("#management").is(":checked")) {
         management = 1;
      }

      const url = '{{route('user.properties.index') }}';
      window.location.href = url 
									//+ '?orderBy=' + orderBy 
                           + '?commune=' + commune
                           + '?district=' + district
                           + '?destination=' + destination
                           + '?opportunity=' + opportunity
                           + '?action=' + action
                           + '?area=' + area
                           + '?macroproject=' + macroproject
                           + '?treatment=' + treatment
                           + '?instrument=' + instrument
                           + '?floor_use=' + floor_use
                           + '?rph=' + rph
                           + '?loan=' + loan
                           + '?bic=' + bic
                           + '?management=' + management
                           ;
   }
</script>
@endpush
