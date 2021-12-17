@extends('user.app')
@section('content')

<!-- Map
================================================== -->
<div id="map-container" class="fullwidth-home-map">
	<div id="map" data-map-scroll="false">
	</div>

	<div class="main-search-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="main-search-input">

						{{-- <div class="main-search-input-item">
							<input type="text" placeholder="What are you looking for?" value=""/>
						</div> --}}

						<div class="main-search-input-item location">
							<div>
								<input type="text" placeholder="Comuna">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item">
							<select name="destination" data-placeholder="Destinación" class="chosen-select" >
								<option selected disabled>Destinación actual</option>
								@foreach($destinations as $destination)
								<option value="{{ $destination->id }}">{{ $destination->title }}</option>
								@endforeach
							</select>
						</div>

						<button class="button">Buscar</button>

					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<!-- Content -->
<div class="container margin-bottom-25 margin-top-40">
	<div class="row">

		<div class="col-lg-9 col-md-8 padding-right-30">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-25">

				<div class="col-md-6 col-xs-6">
					<!-- Layout Switcher -->
					{{-- <div class="layout-switcher">
						<a href="listings-grid-with-sidebar-1.html" class="grid"><i class="fa fa-th"></i></a>
						<a href="#" class="list active"><i class="fa fa-align-justify"></i></a>
					</div> --}}
				</div>

				<div class="col-md-6 col-xs-6">
					<!-- Sort by -->
					<div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Precio por defecto" class="chosen-select-no-single" style="display: none;">
								<option>De menor a mayor área</option>	
								<option>De mayor a menor área</option>	
							</select>
						</div>
					</div>

					<div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Orden por defecto" class="chosen-select-no-single" style="display: none;">
								<option>Últimos añadidos</option>	
								<option>Primeros añadidos</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- Sorting / Layout Switcher / End -->


			<div class="row">

				@foreach($properties as $property)
				<!-- Listing Item -->
				<div class="col-sm-12 col-lg-4 margin-bottom-15">
					<div class="listing-item-container list-layout">
						<a href="{{ route('user.properties.show', $property) }}" class="listing-item">
							<!-- Image -->
							<div class="listing-item-image">
								<div class="listing-badge now-open">{{ $property->action->title }}</div>
								<img src="https://fakeimg.pl/400x400/100/?text=AGENCIA%20APP" alt="">
								<span class="tag">{{ $property->destination->title }}</span>
							</div>
						</a>
					</div>

					<!-- Content -->
					<div class="bg-gray">
							<p>{{ $property->description }} {{-- <i class="verified-icon"></i> --}}</p>
							<span>${{ number_format($property->property_valuation) }}</span>
							<div>
								<span>{{ $property->district->name }}</span>
							</div>
							<div>
								Matrícula: {{ $property->plate }}
							</div>
						</div>
						{{-- <span class="like-icon"></span> --}}
					</div>
					<!-- /Content -->
				<!-- Listing Item / End -->
				@endforeach

			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-3 col-md-4">
			<div class="sidebar">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-30">Filtros</h3>

					<!-- Row -->
					{{-- <div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<input type="text" placeholder="What are you looking for?" value="">
						</div>
					</div> --}}
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Action -->
						<div class="col-md-12">
							<label>Acción</label>
							<div class="checkboxes one-in-row margin-bottom-15">
								@foreach($actions as $action)
									<input id="action-{{ $action->id }}" type="checkbox" name="check">
									<label for="action-{{ $action->id }}">{{ $action->title }}</label>
								@endforeach
							</div>
						</div>
						<!-- /Action -->

						<!-- Area -->
						<div class="col-md-12">
							<label>Área</label>
							<input name="area" type="range" class="form-range" id="customRange1">
						</div>
						<!-- Area -->

						<!-- Neighbourhood -->
						<div class="col-md-12">
							<label>Barrio</label>
							<select name="neighbourhood" data-placeholder="Barrio" class="chosen-select" style="display: none;">
								@foreach($districts as $district)
								<option value="{{ $district->id }}">{{ $district->title }}</option>
								@endforeach
							</select>
						</div>
						<!-- Neighbourhood -->
					</div>
					<!-- Row / End -->

					<br>

					<!-- Area Range -->
					<div class="range-slider">
						<h5>Avalúo catastral máximo</h5>
						<input class="distance-radius" type="range" min="1" max="1000000000" step="1" value="350000000" data-title="Precio en pesos colombianos">
					</div>




					<!-- More Search Options -->
					<a href="#" class="more-search-options-trigger margin-bottom-5 margin-top-20" data-open-title="Más filtros" data-close-title="Más filtros"></a>

					<div class="more-search-options relative">

						<!-- Checkboxes -->
						<div class="checkboxes one-in-row margin-bottom-15">

							<h5>Macroproyecto</h5>

							@foreach($macroprojects as $macroproject)
							<input id="check-macro-{{ $macroproject->id }}" type="checkbox" name="check">
							<label for="check-macro-{{ $macroproject->id }}">{{ $macroproject->name }}</label>
							@endforeach

							<hr>

							<h5>Instrumentos de tercer nivel</h5>

							@foreach($instruments as $instrument)
							<input id="check-macro-{{ $instrument->id }}" type="checkbox" name="instrument">
							<label for="check-macro-{{ $instrument->id }}">{{ $instrument->title }}</label>
							@endforeach

							<hr>

							<h5>Usos del suelo</h5>

							@foreach($floor_uses as $floor_use)
							<input id="check-macro-{{ $floor_use->id }}" type="checkbox" name="floor_use">
							<label for="check-macro-{{ $floor_use->id }}">{{ $floor_use->title }}</label>
							@endforeach
					
						</div>
						<!-- Checkboxes / End -->

					</div>
					<!-- More Search Options / End -->
					
					<button class="button fullwidth margin-top-25">Aplicar filtros</button>

					<div class="text-center margin-top-25">
						<a class="like-button " href="{{ url('/') }}">Borrar búsqueda</a>
					</div>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>
@stop

@push('scripts')

<!-- Leaflet // Docs: https://leafletjs.com/ -->
	<script src="{{ asset('user/js/leaflet.min.js') }}"></script>

	<!-- Leaflet Maps js -->
	<script src="{{ asset('user/js/leaflet-markercluster.min.js') }}"></script>
	<script src="{{ asset('user/js/leaflet-gesture-handling.min.js') }}"></script>

<script type="text/javascript">
	
/* ----------------- Start Document ----------------- */
$(document).ready(function(){
if(document.getElementById("map") !== null){

	// Touch Gestures
	if ( $('#map').attr('data-map-scroll') == 'true' || $(window).width() < 992 ) {
		var scrollEnabled = false;
	} else {
		var scrollEnabled = true;
	}

	var mapOptions = {
		gestureHandling: scrollEnabled,
	}

	// Map Init
	window.map = L.map('map',mapOptions);
	$('#scrollEnabling').hide();


	// ----------------------------------------------- //
	// Popup Output
	// ----------------------------------------------- //
	function locationData(locationURL,locationImg,locationTitle, locationAddress, locationRating, locationRatingCounter) {
	  return(''+
	    '<a href="'+ locationURL +'" class="leaflet-listing-img-container">'+
	       '<div class="infoBox-close"><i class="fa fa-times"></i></div>'+
	       '<img src="'+locationImg+'" alt="">'+

	       '<div class="leaflet-listing-item-content">'+
	          '<h3>'+locationTitle+'</h3>'+
	          '<span>'+locationAddress+'</span>'+
	       '</div>'+

	    '</a>'+

	    '<div class="leaflet-listing-content">'+
	       '<div class="leaflet-listing-title">'+
	          // '<div class="'+infoBox_ratingType+'" data-rating="'+locationRating+'"><div class="rating-counter">('+locationRatingCounter+' reviews)</div></div>'+
	       '</div>'+
	    '</div>')
	}


	// Listing rating on popup (star-rating or numerical-rating)
	var infoBox_ratingType = 'star-rating';

	map.on('popupopen', function () {
		if (infoBox_ratingType = 'numerical-rating') {
			numericalRating('.leaflet-popup .'+infoBox_ratingType+'');
		}
		if (infoBox_ratingType = 'star-rating') {
			starRating('.leaflet-popup .'+infoBox_ratingType+'');
		}
	});


	// ----------------------------------------------- //
	// Locations
	// ----------------------------------------------- //

	var locations = [
		@foreach($properties as $property)
		[ locationData('{{ route('user.properties.show', $property) }}','https://fakeimg.pl/400x400/100/?text=AGENCIA%20APP',"Código {{ $property->code }}",'{{ $property->address }}', '5', '0'), {{ $property->latitude }}, {{ $property->longitude }}, 1, '<i class="im im-icon-Home-2"></i>'],
		@endforeach
	];


	// ----------------------------------------------- //
	// Map Provider
	// ----------------------------------------------- //

	// Open Street Map 
	// -----------------------//
	L.tileLayer(
		//'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
		attribution: '&copy; <a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a>',
		maxZoom: 18,
	}).addTo(map);


	// MapBox (Requires API Key)
	// -----------------------//
	// L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}@2x.png?access_token={accessToken}', {
	//     attribution: " &copy;  <a href='https://www.mapbox.com/about/maps/'>Mapbox</a> &copy;  <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
	//     maxZoom: 18,
	//     id: 'mapbox.streets',
	//     accessToken: 'ACCESS_TOKEN'
	// }).addTo(map);


	// ThunderForest (Requires API Key)
	// -----------------------//
	// var ThunderForest_API_Key = 'API_KEY';
	// var tileUrl = 'https://tile.thunderforest.com/neighbourhood/{z}/{x}/{y}.png?apikey='+ThunderForest_API_Key,
	// layer = new L.TileLayer(tileUrl, {maxZoom: 18});
	// map.addLayer(layer);


	// ----------------------------------------------- //
	// Markers
	// ----------------------------------------------- //
        markers = L.markerClusterGroup({
            spiderfyOnMaxZoom: true,
            showCoverageOnHover: false,
          });
       
        for (var i = 0; i < locations.length; i++) {

          var listeoIcon = L.divIcon({
              iconAnchor: [20, 51], // point of the icon which will correspond to marker's location
              popupAnchor: [0, -51],
              className: 'listeo-marker-icon',
              html:  '<div class="marker-container">'+
                       '<div class="marker-card">'+
                          '<div class="front face">' + locations[i][4] + '</div>'+
                          '<div class="back face">' + locations[i][4] + '</div>'+
                          '<div class="marker-arrow"></div>'+
                       '</div>'+
                     '</div>'
            }
          );

            var popupOptions =
              {
              'maxWidth': '270',
              'className' : 'leaflet-infoBox'
              }
                var markerArray = [];
            marker = new L.marker([locations[i][1],locations[i][2]], {
                icon: listeoIcon,
                
              })
              .bindPopup(locations[i][0],popupOptions );
              //.addTo(map);
              marker.on('click', function(e){
                
               // L.DomUtil.addClass(marker._icon, 'clicked');
              });
              map.on('popupopen', function (e) {
              //   L.DomUtil.addClass(e.popup._source._icon, 'clicked');
            

              // }).on('popupclose', function (e) {
              //   if(e.popup){
              //     L.DomUtil.removeClass(e.popup._source._icon, 'clicked');  
              //   }
                
              });
              markers.addLayer(marker);
        }
        map.addLayer(markers);

    
        markerArray.push(markers);
        if(markerArray.length > 0 ){
          map.fitBounds(L.featureGroup(markerArray).getBounds().pad(0.2)); 
        }


	// Custom Zoom Control
	map.removeControl(map.zoomControl);

	var zoomOptions = {
		zoomInText: '<i class="fa fa-plus" aria-hidden="true"></i>',
		zoomOutText: '<i class="fa fa-minus" aria-hidden="true"></i>',
	};

	// Creating zoom control
	var zoom = L.control.zoom(zoomOptions);
	zoom.addTo(map);

}


// ----------------------------------------------- //
// Single Listing Map
// ----------------------------------------------- //
function singleListingMap() {

	var lng = parseFloat($( '#singleListingMap' ).data('longitude'));
	var lat =  parseFloat($( '#singleListingMap' ).data('latitude'));
	var singleMapIco =  "<i class='"+$('#singleListingMap').data('map-icon')+"'></i>";

	var listeoIcon = L.divIcon({
	    iconAnchor: [20, 51], // point of the icon which will correspond to marker's location
	    popupAnchor: [0, -51],
	    className: 'listeo-marker-icon',
	    html:  '<div class="marker-container no-marker-icon ">'+
	                     '<div class="marker-card">'+
	                        '<div class="front face">' + singleMapIco + '</div>'+
	                        '<div class="back face">' + singleMapIco + '</div>'+
	                        '<div class="marker-arrow"></div>'+
	                     '</div>'+
	                   '</div>'
	    
	  }
	);

	var mapOptions = {
	    center: [lat,lng],
	    zoom: 13,
	    zoomControl: false,
	    gestureHandling: true
	}

	var map_single = L.map('singleListingMap',mapOptions);
	var zoomOptions = {
	   zoomInText: '<i class="fa fa-plus" aria-hidden="true"></i>',
	   zoomOutText: '<i class="fa fa-minus" aria-hidden="true"></i>',
	};

	// Zoom Control
	var zoom = L.control.zoom(zoomOptions);
	zoom.addTo(map_single);

	map_single.scrollWheelZoom.disable();

	marker = new L.marker([lat,lng], {
	      icon: listeoIcon,
	}).addTo(map_single);

	// Open Street Map 
	// -----------------------//
	L.tileLayer(
		//'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
		attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> Contributors',
		maxZoom: 18,
	}).addTo(map_single);



	// MapBox (Requires API Key)
	// -----------------------//
	// L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}@2x.png?access_token={accessToken}', {
	//     attribution: " &copy;  <a href='https://www.mapbox.com/about/maps/'>Mapbox</a> &copy;  <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
	//     maxZoom: 18,
	//     id: 'mapbox.streets',
	//     accessToken: 'ACCESS_TOKEN'
	// }).addTo(map_single);
	

	// Street View Button URL
	$('a#streetView').attr({
		href: 'https://www.google.com/maps/search/?api=1&query='+lat+','+lng+'',
		target: '_blank'
	});
}

// Single Listing Map Init
if(document.getElementById("singleListingMap") !== null){
	singleListingMap();
}


});
</script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
	<script src="{{ asset('user/js/leaflet-autocomplete.js') }}"></script>
	<script src="{{ asset('user/js/leaflet-control-geocoder.js') }}"></script>

@endpush