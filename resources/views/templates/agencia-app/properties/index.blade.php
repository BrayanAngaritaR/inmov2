@extends('templates.agencia-app.app')
@section('content')
   <!-- categoties-column -->
   <div class="categoties-column">
      <div class="categoties-column_container cat-list">
         <ul>
            <li>
               <a href="#" class="act-category"><i class="fal fa-city"></i><span>Apartamentos</span></a>
            </li>
            <li>
               <a href="#"><i class="fal fa-car-building"></i><span>Oficinas</span></a>
            </li>
            <li>
               <a href="#"><i class="fal fa-home"></i><span>Casa</span></a>
            </li>
            <li>
               <a href="#"><i class="fal fa-hotel"></i><span>Hotel</span></a>
            </li>
            <li>
               <a href="#"><i class="fal fa-warehouse-alt"></i><span>Estadio</span></a>
            </li>
         </ul>
      </div>
      <div class="progress-indicator">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
            <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
            <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar" />
         </svg>
      </div>
   </div>
   <!-- categoties-column end -->
   <!-- Map -->
   <div class="map-container column-map hid-mob-map">
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
      <div class="scrollContorl mapnavbtn tolt" data-microtip-position="top-left" data-tooltip="Habilitar desplazamiento">
         <span><i class="fal fa-unlock"></i></span>
      </div>
      <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Tu ubicación">
         <span><i class="fal fa-location"></i></span>
      </div>
      <div class="map-close"><i class="fas fa-times"></i></div>
   </div>
   <!-- Map end -->
   <!-- top-search-content -->
   {{-- <div class="top-search-content">
      <div class="top-search-dec color-bg"><i class="far fa-sliders-h"></i></div>
      <div class="top-search-content-title">Avanzada:</div>
      <div class="close_sb-filter"><i class="fal fa-times"></i></div>
      <div class="custom-form fl-wrap">
         <div class="row">
            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <select data-placeholder="Status" class="chosen-select on-radius no-search-select">
                     <option>Últimos añadidos</option>
                     <option>Primeros añadidos</option>
                  </select>
               </div>
            </div>
            <!-- listsearch-input-item -->
            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <select data-placeholder="All Cities" class="chosen-select on-radius no-search-select">
                     <option>De menor a mayor área</option>
                     <option>De mayor a menor área</option>
                  </select>
               </div>
            </div>
            <!-- listsearch-input-item -->

            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <select data-placeholder="All Cities" class="chosen-select on-radius no-search-select">
                     <option selected disabled>Comuna</option>
                     <option>De mayor a menor área</option>
                  </select>
               </div>
            </div>
            <!-- listsearch-input-item -->
         </div>
      </div>
      <!--<div class="more-opt_btn mor-opt-btn_act">
         Más filtros<span><i class="fas fa-caret-down"></i></span>
      </div> -->
      <!-- more-search-opt-wrap -->
      <div class="more-search-opt-wrap more-hidden_wrap">
         <div class="msotw_title fl-wrap"><i class="far fa-sliders-h"></i>Más filtros</div>
         <div class="close_msotw"><i class="fal fa-times"></i></div>
         <div class="clearfix"></div>
         <div class="row">
            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <label>Habitaciones</label>
                  <select data-placeholder="Bedrooms" class="chosen-select on-radius no-search-select">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                  </select>
               </div>
            </div>
            <!-- listsearch-input-item end-->
            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <label>Baños</label>
                  <select data-placeholder="Bathrooms" class="chosen-select on-radius no-search-select">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                  </select>
               </div>
            </div>
            <!-- listsearch-input-item end-->
            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <label>Pisos</label>
                  <select data-placeholder="Bathrooms" class="chosen-select on-radius no-search-select">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                  </select>
               </div>
            </div>
            <!-- listsearch-input-item end-->
            <!-- listsearch-input-item -->
            <div class="col-sm-2">
               <div class="listsearch-input-item">
                  <label>ID de la propiedad</label>
                  <input type="text" onClick="this.select()" placeholder="ID" value="" />
               </div>
            </div>
            <!-- listsearch-input-item end-->
            <!-- listsearch-input-item -->
            <div class="col-sm-4">
               <div class="listsearch-input-item">
                  <label>Área m²/ft²/varas</label>
                  <div class="price-rage-item pr-it-nopad fl-wrap">
                     <input type="text" class="price-range-double" data-min="1" data-max="1000" name="price-range2" data-step="1" value="1" data-prefix="" />
                  </div>
               </div>
            </div>
            <!-- listsearch-input-item -->
         </div>
         <div class="clearfix"></div>
         <!-- listsearch-input-item-->
         <div class="listsearch-input-item clact">
            <label>Usos del suelo</label>
            <div class="fl-wrap filter-tags">
               <ul class="no-list-style">
                  <li>
                     <input id="check-aa" type="checkbox" name="check" />
                     <label for="check-aa">Agrícola</label>
                  </li>
                  <li>
                     <input id="check-b" type="checkbox" name="check" />
                     <label for="check-b">Aeroforestal</label>
                  </li>
                  <li>
                     <input id="check-c" type="checkbox" name="check" checked />
                     <label for="check-c">Agropecuario</label>
                  </li>
                  <li>
                     <input id="check-d" type="checkbox" name="check" />
                     <label for="check-d">Área de baja mixtura</label>
                  </li>
                  <!-- <li>
                     <input id="check-d2" type="checkbox" name="check" checked />
                     <label for="check-d2">Parking</label>
                  </li>
                  <li>
                     <input id="check-d3" type="checkbox" name="check" checked />
                     <label for="check-d3">Swimming Pool</label>
                  </li>
                  <li>
                     <input id="check-d4" type="checkbox" name="check" />
                     <label for="check-d4">Fitness Gym</label>
                  </li>
                  <li>
                     <input id="check-d5" type="checkbox" name="check" />
                     <label for="check-d5">Security</label>
                  </li>
                  <li>
                     <input id="check-d6" type="checkbox" name="check" />
                     <label for="check-d6">Garage Attached</label>
                  </li>
                  <li>
                     <input id="check-d7" type="checkbox" name="check" />
                     <label for="check-d7">Back yard</label>
                  </li>
                  <li>
                     <input id="check-d8" type="checkbox" name="check" />
                     <label for="check-d8">Fireplace</label>
                  </li>
                  <li>
                     <input id="check-d9" type="checkbox" name="check" />
                     <label for="check-d9">Window Covering</label>
                  </li> -->
               </ul>
            </div>
         </div>
         <!-- listsearch-input-item end-->
         <div class="msotw_footer">
            <a href="#" class="btn small-btn float-btn color-bg">Aplicar filtros</a>
            <div class="reset-form reset-btn"><i class="far fa-sync-alt"></i> Borrar filtros</div>
         </div>
      </div>
      <!-- more-search-opt-wrap end -->
   </div> --}}

   <div class="top-search-content mt-2">
      <div class="top-search-dec color-bg"><i class="far fa-sliders-h"></i></div>
         <div class="custom-form fl-wrap">
            <div class="row">
               <div class="col-sm-4 col-lg-2">
                  <div class="listsearch-input-item">
                     <select data-placeholder="Últimos" class="chosen-select on-radius no-search-select" id="orderBy">
                        <option disabled selected>Ordenar por</option>
                        <option value="latest">Últimos añadidos</option>
                        <option value="newest">Primeros añadidos</option>
                     </select>
                  </div>
               </div>

               <div class="col-sm-4 col-lg-2">
                  <div class="listsearch-input-item">
                     <select data-placeholder="Barrio" class="chosen-select on-radius no-search-select" id="district">
                        <option disabled selected>Barrio</option>
                        @foreach($districts as $district)
                           <option value="{{ $district->id }}">
                              {{ $district->name }}
                           </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-sm-4 col-lg-2">
                  <div class="listsearch-input-item">
                     <select data-placeholder="Status" class="chosen-select on-radius no-search-select" id="area">
                        <option disabled selected>Área</option>
                        <option value="less">Menor a mayor área</option>
                        <option value="higher">Mayor a menor área</option>
                     </select>
                  </div>
               </div>

               <div class="col-sm-4 col-lg-2">
                  <div class="listsearch-input-item">
                     <select data-placeholder="Status" class="chosen-select on-radius no-search-select" id="action">
                        <option disabled selected>Acción</option>
                        @foreach($actions as $action)
                           <option value="{{ $action->id }}">
                              {{ $action->title }}
                           </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-sm-4 col-lg-2">
                  <div class="listsearch-input-item">
                     <button onclick="applyFilters();" class="btn float-btn color-bg small-btn mt-0">
                        Aplicar filtros
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- top-search-content end -->
   <!-- col-list-wrap -->
   <div class="col-list-wrap gray-bg">
      <div class="col-list-wrap_opt fl-wrap">
         <div class="show-hidden-filter col-list-wrap_opt_btn color-bg">Ver filtros</div>
         <div class="show-hidden-map not-vis_lap col-list-wrap_opt_btn color-bg">Mostrar mapa</div>
      </div>
      <!-- list-main-wrap-header-->
      <div class="list-main-wrap-header fl-wrap fixed-listing-header">
         <div class="container">
            <!-- list-main-wrap-title-->
            <div class="list-main-wrap-title">
               <h2><strong>{{ $properties->count() }}</strong> Bienes encontrados</h2>
            </div>
            <!-- list-main-wrap-title end-->
            <!-- list-main-wrap-opt-->
            <div class="list-main-wrap-opt">
               <!-- price-opt-->
               <div class="price-opt">
                  <span class="price-opt-title">Ordenar por:</span>
                  <div class="listsearch-input-item">
                     <select data-placeholder="Popularity" class="chosen-select no-search-select">
                        <option>Código</option>
                        <option>Precio más alto a más bajo</option>
                        <option>Precio más bajo a más alto</option>
                     </select>
                  </div>
               </div>
               <!-- price-opt end-->
               <!-- price-opt-->
               <div class="grid-opt">
                  <ul class="no-list-style">
                     <li class="grid-opt_act">
                        <span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="far fa-th"></i></span>
                     </li>
                     <li class="grid-opt_act">
                        <span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="far fa-list"></i></span>
                     </li>
                  </ul>
               </div>
               <!-- price-opt end-->
            </div>
            <!-- list-main-wrap-opt end-->
         </div>
      </div>
      <!-- list-main-wrap-header end-->
      <!-- listing-item-wrap-->
      <div class="listing-item-container fl-wrap">
         @foreach($properties as $property)
         <!-- listing-item -->
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
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>
                        {{ $property->cadastral_address }}
                     </a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">{{$property->action->title}}</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> {{-- {{ $property->images->count() ? : 0 }} --}}0</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3>
                     <a href="{{ route('user.properties.show', $property) }}">
                        {{ Str::limit($property->sss_description, 50) }}
                     </a>
                  </h3>
                  <div class="geodir-category-content_price">${{ number_format($property->property_valuation) }}</div>

                  <p class="mt-3">
                     Este inmueble está ubicado en <b>{{ $property->district->name }}</b> en la comuna  
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
                  <div class="geodir-category-footer fl-wrap">
                     <a href="#" class="gcf-company"><img src="{{ asset('/templates/agencia-app/images/logo.png') }}" alt="" /><span>Por AGENCIA APP</span></a>
                     <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Good" data-starrating2="4"></div>
                  </div>
               </div>
            </article>
         </div>
         <!-- listing-item end-->
         @endforeach
      </div>

      <div class="listing-item-container">
         <!-- pagination-->
         <div class="pagination ml-5">
            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
            <a href="#">1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
         </div>
         <!-- pagination end-->
      </div>

      <!-- listing-item-wrap end-->
      
      <div class="small-footer fl-wrap">
         <div class="text-center">
            <a href="{{ url('/') }}">
               <img class="img-fluid" width="500" src="{{ asset('templates/agencia-app/images/big-logo.png') }}" alt="" />
            </a>
         </div>
         <div class="copyright">© InmoAPP {{ date('Y') }}. Derechos reservados.</div>
         <a class="custom-to-top color-bg custom-scroll-link" href="#main"><i class="fas fa-caret-up"></i></a>
      </div>
   </div>
   <!-- col-list-wrap end -->
@stop

@push('scripts')

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
   function applyFilters(){
      let orderBy = $('#orderBy').val();
      let district = $('#district').val();
      let area = $('#area').val();
      let action = $('#action').val();

      const url = '{{route('user.properties.index') }}';
      window.location.href = url + '?orderBy=' + orderBy 
                                 + '?district=' + district
                                 + '?area=' + area
                                 + '?action=' + action;
   }
</script>
@endpush
