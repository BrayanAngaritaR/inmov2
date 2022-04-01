{{-- https://codepen.io/blaurancin/pen/LYRoZzB --}}
@extends('templates.agencia-app.projects.app') @section('content')
<div class="content">
   <nav class="scroll-nav scroll-init fixed-column_menu-init">
      <ul class="no-list-style">

         <li onclick="window.location.href='{{ route('user.projects.rector.show') }}'">
            <a href="" class="filter-plans">
               <i class="fas fa-circle"></i>
            </a>
            <span>Planes</span>
         </li>

         <li onclick="window.location.href='{{ route('user.projects.rector.show') }}'">
            <a target="_blank" href="{{ route('user.projects.rector.show') }}" class="filter-projects">
               <i class="fas fa-circle"></i>
               <span>Proyectos</span>
            </a>
            
         </li>

         <li onclick="window.location.href='{{ route('user.projects.rector.show') }}'">
            <a href="{{ route('user.projects.rector.show') }}" class="filter-opportunities">
               <i class="fas fa-circle"></i>
            </a>
            <span>Oportunidades</span>
         </li>

         <li onclick="window.location.href='{{ route('user.projects.rector.show') }}'">
            <a href="{{ route('user.projects.rector.show') }}" class="filter-other">
               <i class="fas fa-circle"></i>
            </a>
            <span>Otro</span>
         </li>

         <li onclick="window.location.href='{{ route('user.projects.rector.show') }}'">
            <a href="{{ route('user.projects.rector.show') }}" class="filter-other2">
               <i class="fas fa-circle"></i>
            </a>
            <span>Otro 2</span>
         </li>
      </ul>
   </nav>

   <!-- Map -->
   <div class="map-container fw-map big_map" style="height: 90vh;">
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
   
   <div class="limit-box fl-wrap"></div>
</div>
@stop

@push('scripts')

<script src="{{ asset('templates/agencia-app/js/map-plugins.js')}}"></script>


<script type="text/javascript">
   (function ($) {
   "use strict";
   var markerIcon = {
      anchor: new google.maps.Point(22, 16),
      url: '/templates/agencia-app/images/marker-single.png',
   }

   var plansIcon = {
      anchor: new google.maps.Point(22, 16),
      url: '/templates/agencia-app/images/projects/plans.svg',
   }

   var projectsIcon = {
      anchor: new google.maps.Point(22, 16),
      url: '/templates/agencia-app/images/projects/projects.svg',
   }

   var opportunitiesIcon = {
      anchor: new google.maps.Point(22, 16),
      url: '/templates/agencia-app/images/projects/opportunities.svg',
   }

   var otherIcon = {
      anchor: new google.maps.Point(22, 16),
      url: '/templates/agencia-app/images/projects/other.svg',
   }

   var other2Icon = {
      anchor: new google.maps.Point(22, 16),
      url: '/templates/agencia-app/images/projects/other2.svg',
   }

   

   function mainMap() {
      function locationData(locationURL, locationCategory, locationImg, locationTitle, locationAddress,     locationPrice , locationStatus) {
         return ('<div class="map-popup-wrap"><div class="map-popup"><div class="map-popup-status mp-cat  color-bg">' + locationStatus + '</div><div class="map-popup-category mp-cat max-20 color-bg">' + locationCategory + '</div><div class="infoBox-close"><i class="fal fa-times"></i></div> <a href="' + locationURL + '" class="listing-img-content" style="background-image: url(' + locationImg + ')"> </a> <div class="listing-content">  <div class="listing-title">   <h4><a href=' + locationURL + '>' + locationTitle + '</a></h4><span class="map-popup-location-info"> ' + locationAddress + '</span> </div><span class="map-popup-price fl-wrap">  $' + locationPrice + '  </span></div>    </div></div>')
      }

      //   locations ------------------
      var locations = [
         //Plans
         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.2573413888889, -75.567134166667, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.260527818673454, -75.56275553302497, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.259835385817123, -75.56220739931503, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.261855925025512, -75.55862169129571, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.256234822375935, -75.55789531901996, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.263675959464402, -75.56673795834502, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de plan', "430.91 m2",  "567,207,000" , "Plan"), 6.259378172787336, -75.5680718285163, 0, plansIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de proyecto', "430.91 m2",  "567,207,000" , "Proyecto"), 6.261222739322013, -75.551361054119, 0, projectsIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de proyecto', "430.91 m2",  "567,207,000" , "Proyecto"), 6.256764817893282, -75.55672547182188, 0, projectsIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de proyecto', "430.91 m2",  "567,207,000" , "Proyecto"), 6.255783643476704, -75.55899998492791, 0, projectsIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de proyecto', "430.91 m2",  "567,207,000" , "Proyecto"), 6.25864184207876, -75.56264778896588, 0, projectsIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de oportunidad', "430.91 m2",  "567,207,000" , "Oortunidad"), 6.261286728347837, -75.5549230274737, 0, opportunitiesIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de oportunidad', "430.91 m2",  "567,207,000" , "Oortunidad"), 6.264336862816383, -75.55882832356141, 0, opportunitiesIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de oportunidad', "430.91 m2",  "567,207,000" , "Oortunidad"), 6.267429638308716, -75.55788418604571, 0, opportunitiesIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de oportunidad', "430.91 m2",  "567,207,000" , "Oortunidad"), 6.257212744731903, -75.55912873095276, 0, opportunitiesIcon],

         //Otros
         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro', "430.91 m2",  "567,207,000" , "Otro"), 6.26497674891273, -75.55236956458569, 0, otherIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro', "430.91 m2",  "567,207,000" , "Otro"), 6.264187555957418, -75.55412909359222, 0, otherIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro', "430.91 m2",  "567,207,000" , "Otro"), 6.266235189264622, -75.55801293200912, 0, otherIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro', "430.91 m2",  "567,207,000" , "Otro"), 6.264486169648403, -75.55955788430755, 0, otherIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro', "430.91 m2",  "567,207,000" , "Otro"), 6.2581512568708675, -75.55380722853006, 0, otherIcon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro', "430.91 m2",  "567,207,000" , "Otro"), 6.26203326641101, -75.55899998486645, 0, otherIcon],

         
         //Otros 2
         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro 2', "430.91 m2",  "567,207,000" , "Otro 2"), 6.25919641612368, -75.5518545804862, 0, other2Icon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro 2', "430.91 m2",  "567,207,000" , "Otro 2"), 6.254162568635137, -75.55803438987995, 0, other2Icon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro 2', "430.91 m2",  "567,207,000" , "Otro 2"), 6.256636838694965, -75.55732628674319, 0, other2Icon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro 2', "430.91 m2",  "567,207,000" , "Otro 2"), 6.258364554808439, -75.56202551665092, 0, other2Icon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro 2', "430.91 m2",  "567,207,000" , "Otro 2"), 6.258641842047718, -75.55580279211557, 0, other2Icon],

         [locationData("http://inmo.test/654", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de otro 2', "430.91 m2",  "567,207,000" , "Otro 2"), 6.261585343666974, -75.5649652175521, 0, other2Icon],

         
         // [locationData("http://inmo.test/120", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'ANTIGUO CENTRO DE SALUD VERSALLES', "101.58 m2",  "85,650,000" , "Comercial"), 6.2629888888889, -75.542925, 0, plansIcon],
         // [locationData("http://inmo.test/122", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'J.A.C. VERSALLES PARTE I', "95.86 m2",  "8,868,000" , "Comercial"), 6.2666083333333, -75.542813888889, 0, plansIcon],
         // [locationData("http://inmo.test/183", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'J.A.C. MORAVIA ORIENTE', "378.88 m2",  "358,639,000" , "Comercial"), 6.2793813888889, -75.566800833333, 0, plansIcon],
         // [locationData("http://inmo.test/232", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'LAVADERO DE CARROS LOVAINA', "788.09 m2",  "309,174,000" , "Comercial"), 6.2661694444444, -75.559828333333, 0, plansIcon],
         // [locationData("http://inmo.test/233", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'J.A.C. SAN PEDRO', "198.37 m2",  "117,747,000" , "Comercial"), 6.2655694444444, -75.558775833333, 0, plansIcon],
         // [locationData("http://inmo.test/123", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'J.A.C. VERSALLES PARTE I', "75.1 m2",  "41,633,000" , "Comercial"), 6.2666277777778, -75.542433333333, 0, plansIcon],
         // [locationData("http://inmo.test/124", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'J.A.C. VERSALLES PARTE II', "385.66 m2",  "35,678,000" , "Comercial"), 6.2666288888889, -75.542650555556, 0, plansIcon],
         // [locationData("http://inmo.test/125", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'J.A.C. VERSALLES PARTE I', "40.36 m2",  "3,736,000" , "Comercial"), 6.2665583333333, -75.542791666667, 0, plansIcon],
         // [locationData("http://inmo.test/255", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'BIBLIOTECA PUBLICA - JUAN ZULETA', "339.66 m2",  "129,428,000" , "Servicios"), 6.2750647222222, -75.559047222222, 0, plansIcon],
         // [locationData("http://inmo.test/405", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'CESION DE FAJAS-EQUIPAMIENTO-EPQ1', "1832.05 m2",  "186,431,000" , "Servicios"), 6.29298, -75.586060555556, 0, plansIcon],

         // [locationData("http://inmo.test/503", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Otro 1', "373.12 m2",  "202,750,000" , "Servicios"), 6.2750872222222, -75.595729722222, 0, otherIcon],

         // [locationData("http://inmo.test/504", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'EQUIPAMIENTO CULTURAL EL JORDAN', "260.84 m2",  "160,156,000" , "Servicios"), 6.2749877777778, -75.595620833333, 0, markerIcon],
         // [locationData("http://inmo.test/505", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'EQUIPAMIENTO CULTURAL EL JORDAN', "323.23 m2",  "138,473,000" , "Servicios"), 6.2749586111111, -75.595555833333, 0, markerIcon],
         // [locationData("http://inmo.test/506", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'EQUIPAMIENTO CULTURAL EL JORDAN', "153.49 m2",  "81,123,000" , "Servicios"), 6.2747288888889, -75.595447777778, 0, markerIcon],
         // [locationData("http://inmo.test/507", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'EQUIPAMIENTO CULTURAL EL JORDAN', "421.04 m2",  "184,812,000" , "Servicios"), 6.2746777777778, -75.595530833333, 0, markerIcon],
         // [locationData("http://inmo.test/508", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'EQUIPAMIENTO CULTURAL EL JORDAN', "875.08 m2",  "415,861,000" , "Servicios"), 6.2746519444444, -75.595683333333, 0, markerIcon],
         // [locationData("http://inmo.test/658", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de proyecto', "6052.12 m2",  "3,957,688,000" , "Servicios"), 6.2621363888889, -75.570748888889, 0, projectsIcon],
         // [locationData("http://inmo.test/659", 'Lote', 'http://inmo.test/templates/agencia-app/images/logo.png', 'Ejemplo de opportunidades', "308.72 m2",  "274,796,000" , "Comercial"), 6.2558222222222, -75.569447222222, 0, opportunitiesIcon],
      ];

      //   Map Infoboxes end ------------------
      var map = new google.maps.Map(document.getElementById('map-main'), {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(6.2592962,-75.5636463),
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
@endpush
