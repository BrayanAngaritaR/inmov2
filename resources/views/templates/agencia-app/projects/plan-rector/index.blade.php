{{-- https://codepen.io/blaurancin/pen/LYRoZzB

https://developers.arcgis.com/javascript/latest/sample-code/widgets-feature/
https://developers.arcgis.com/javascript/latest/query-filter/
https://developers.arcgis.com/javascript/latest/sample-code/popup-custom-action/
 --}}
@extends('templates.agencia-app.projects.app') 

@push('styles')
<link rel="stylesheet" href="https://js.arcgis.com/4.22/esri/themes/light/main.css">
@endpush

@section('content')
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

   <div class="row">
      <div class="col-sm-12 col-lg-6">
         <label>Cambiar mapa</label>
         <select class="form-select" id="mapLayer">
            <option value="satellite">Satélite</option>
            <option value="hybrid">Híbrido</option>
            <option value="oceans">Oceano</option>
            <option value="osm">Open Street Map</option>
            <option value="terrain">Terreno</option>
            <option value="gray-vectorr">Gris</option>
            <option value="dark-gray-vector">Gris oscuro</option>
            <option value="streets-vector">Calle</option>
            <option value="streets-night-vector">Calle de noche</option>
            <option value="streets-navigation-vector">Navegación nocturna</option>
            <option value="topo-vector">Topográfico</option>
            <option value="streets-relief-vector">Ccalles en relieve</option>
         </select>
      </div>
   </div>

   <div style="height: 90vh;">
         <iframe src="https://agenciaapp.maps.arcgis.com/apps/mapviewer/index.html?webmap=4e88469a7ce343979ea30ee57647954a" width="100%" height="600"></iframe>
      </div>

   <div class="limit-box fl-wrap"></div>
</div>
@stop

@push('scripts')
<script src="https://js.arcgis.com/4.22/"></script>
<script>

   const select = document.getElementById('mapLayer');

   select.addEventListener('change', function handleChange(event) {

      if (localStorage.getItem('map-layer') !== null) {
         localStorage.setItem('map-layer', event.target.value);
      } else {
         localStorage.setItem('map-layer', 'arcgis-imagery-standard');
      }

      location.reload();
   });

   var mapLayer = localStorage.getItem('map-layer');

   console.log("mapLayer");
   console.log(mapLayer);

   require([
      "esri/config",
      "esri/Map",
      "esri/views/MapView",
      "esri/Graphic",
      "esri/layers/GraphicsLayer",
      "esri/geometry/Multipoint",
      "esri/layers/FeatureLayer",
      "esri/geometry/Point",
      "dojo/domReady!"
      ], function(esriConfig, Map, MapView, Graphic, GraphicsLayer, Point, FeatureLayer) {
         esriConfig.apiKey = "AAPK556d9136ff5b490d8b69735e1c75f1cfDYrRK_lpnovfpRnI-s7OtNnCPObT34wfLW5O3ChBGK46PYDzNzHI0t7q3XoxI7N-";

         const map = new Map({
            basemap: localStorage.getItem('map-layer') 
         });

         const view = new MapView({
            map: map,
            center: [-75.5649652175521,6.261585343666974], //Longitude, latitude
            zoom: 13,
            container: "map-main"
         });

         // Define a simple renderer and an image symbol
         var trailheadsRenderer = {
            "type": "simple",
            "symbol": {
               "type": "picture-marker",
               "url": "http://static.arcgis.com/images/Symbols/NPS/npsPictograph_0231b.png",
               "width": "18px",
               "height": "18px"
            }
         }

         // Add labels
         var trailheadsLabels = {
            symbol: {
               type: "text",
               color: "#FFFFFF",
               haloColor: "#5E8D74",
               haloSize: "2px",
               font: {
                  size: "12px",
                  family: "Noto Sans",
                  style: "italic",
                  weight: "normal"
               }
            },
            labelPlacement: "above-center",
            labelExpressionInfo: {
               expression: "$feature.TRL_NAME"
            }
         };

         // Create the layer and set the renderer
         var trailheads = new FeatureLayer({
            url: "https://services.arcgis.com/tWGYTcJH2rVd3fQm/arcgis/rest/services/Bienes_Fiscales_gdb/FeatureServer/0",
            renderer: trailheadsRenderer,
            labelingInfo: [trailheadsLabels]
         });
             
         // Add the layer
         // map.add(trailheads);

         const graphicsLayer = new GraphicsLayer();
         map.add(graphicsLayer);

         // Define a unique value renderer and symbols
         var trailsRenderer = {
            type: "simple",
            symbol: {
               color: "#BA55D3",
               type: "simple-line",
               style: "solid"
            },
            visualVariables: [
               {
                  type: "size",
                  field: "ELEV_GAIN",
                  minDataValue: 0,
                  maxDataValue: 2300,
                  minSize: "3px",
                  maxSize: "7px"
               }
            ]
         };
          
         // Create the layer and set the renderer
         var trails = new FeatureLayer({
            url: "https://services.arcgis.com/tWGYTcJH2rVd3fQm/arcgis/rest/services/Bienes_Fiscales_gdb/FeatureServer/0",
            renderer: trailsRenderer,
            opacity: 1
         });
    
         // Add the layer
         map.add(trails,0);

         @foreach($properties as $property)

            var Point = {
               type: "point",
               longitude: {{ $property->map_longitude }}, //check if the point is longitude and change accordingly
               latitude: {{ $property->map_latitude }} //check if the point is latitude and change accordingly
            };

            var simpleMarkerSymbol = {
               type: "simple-marker",
               color: [226, 119, 40],  // Orange
               outline: {
                  color: [255, 255, 255], // White
                  width: 1
               }
            };

            // Create attributes
            var attributes = {
               Image: "http://inmo.test/templates/agencia-app/images/logo.svg",  // The name of the
               Name: "{{ $property->sss_description }}",  // The name of the
               Location: " {{ $property->sss_address }}",  // The owner of the
            };
            // Create popup template
            var popupTemplate = {
               title: "<img src={Image}>",
               title: "{Name}",
               content: "Dirección <b>{Location}</b>."
            };

            var pointGraphic = new Graphic({
               geometry: Point,
               symbol: simpleMarkerSymbol,
               //*** ADD ***//
               attributes: attributes,
               popupTemplate: popupTemplate
            });

            graphicsLayer.add(pointGraphic);
         @endforeach
      });
</script>

@endpush
