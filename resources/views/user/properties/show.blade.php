@extends('user.app')
@section('content')
<!-- Content -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">
			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2>{{ $property->secretaryship->title }}<span class="listing-tag">Bien {{ $property->destination->title }} - Matrícula: {{ $property->plate }}</span></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{ $property->address }}, {{ $property->district->name }} - {{ $property->commune->name }}
						</a>
					</span>
					<div>
						<span class="margin-top-20">{{ $property->description }}</span>
					</div>
				</div>
			</div>

			<!-- Listing Nav -->
			<div id="listing-nav" class="listing-nav-container">
				<ul class="listing-nav">
					<li><a href="#listing-overview" class="active">Resumen</a></li>
					<li><a href="#listing-gallery">Galería</a></li>
					<li><a href="#listing-location">Ubicación</a></li>
					<li><a href="#listing-extra-info">Observaciones</a></li>
				</ul>
			</div>
			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Apartment Description -->
				{{-- <ul class="apartment-details">
					<li>2 rooms</li>
					<li>1 bedroom</li>
					<li>1 bed</li>
					<li>1 bathroom</li>
				</ul> --}}

				<!-- Description -->

				<p><b>Barrio</b>: {{ $property->district->name }}</p>
				<p><b>Área catastral (lote)</b>: {{ $property->cadastral_area }} m&sup2;</p>
				<p><b>Área construida</b>: {{ $property->construction_area }} m&sup2;</p>
				<p><b>Avalúo catastral</b>: ${{ number_format($property->property_valuation) }} COP</p>
				<p><b>Macroproyecto</b>: {{ $property->macroproject->name }} </p>
				<p><b>Instrumento de tercer nivel</b>: {{ $property->inst3nivel->title }} </p>
				<p><b>Uso del suelo</b>: {{ $property->floorUse->title }} </p>

				<div class="clearfix"></div>


				<!-- Amenities -->
				{{-- <h3 class="listing-desc-headline">Amenities</h3>
				<ul class="listing-features checkboxes">
					<li>Elevator in building</li>
					<li>Friendly workspace</li>
					<li>Instant Book</li>
					<li>Wireless Internet</li>
					<li>Free parking on premises</li>
					<li>Free parking on street</li>
				</ul> --}}
			</div>


			<!-- Slider -->
			<div id="listing-gallery" class="listing-section">
				<h3 class="listing-desc-headline margin-top-70">Galería</h3>
				<div class="listing-slider-small mfp-gallery-container margin-bottom-0">
					<a href="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%201" data-background-image="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%201" class="item mfp-gallery" title="Title 2"></a>
					<a href="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%202" data-background-image="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%202" class="item mfp-gallery" title="Title 1"></a>
					<a href="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%203" data-background-image="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%203" class="item mfp-gallery" title="Title 3"></a>
					<a href="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%204" data-background-image="https://fakeimg.pl/400x400/100/?text=Im%C3%A1gen%204" class="item mfp-gallery" title="Title 3"></a>
				</div>
			</div>

			<!-- Location -->
			<div id="listing-location" class="listing-section">
				<h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Ubicación</h3>

            <div id="singleListingMap-container">
               <div id="singleListingMap" data-latitude="{{ $property->latitude }}" data-longitude="{{ $property->longitude }}" data-map-icon="im im-icon-Home-2"></div>
               <a href="#" id="streetView">Abrir en Google Maps</a>
            </div>
			</div>

			<div id="listing-extra-info" class="listing-section">
				<h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Observaciones</h3>
				<p class="text-justify">
					{{ $property->observations }}
				</p>

				@auth

				<hr>

				<p class="text-justify">
					<b>Act. fijo que contienen lotes</b>: {{ $property->fixed_asset }}
				</p>

				<p class="text-justify">
					<b>No. Escritura</b>: {{ $property->plate_number }}
				</p>

				<p class="text-justify">
					<b>ID	Matrícula</b>: {{ $property->plate }}
				</p>

				<p class="text-justify">
					<b>CBML</b>: {{ $property->cbml }}
				</p>

				<p class="text-justify">
					<b>Clasificación del suelo</b>: {{ $property->floorClassification->title }}
				</p>

				<p class="text-justify">
					<b>Macroproyecto</b>: {{ $property->macroproject->name }}
				</p>

				<p class="text-justify">
					<b>Tratamiento</b>: {{ $property->treatment->title }}
				</p>

				<p class="text-justify">
					<b>Polígono</b>: {{ $property->polygon->title }}
				</p>

				<p class="text-justify">
					<b>Inst_3Nivel</b>: {{ $property->inst3nivel->title }}
				</p>

				<p class="text-justify">
					<b>Destinacion actual</b>: {{ $property->destination->title }}
				</p>

				<p class="text-justify">
					<b>Uso del suelo</b>: {{ $property->floorUse->title }}
				</p>

				<p class="text-justify">
					<b>Acción</b>: {{ $property->action->title }}
				</p>
				@endauth
			</div>
		</div>
							
		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-75 sticky">
			<!-- Verified Badge -->
			<div class="verified-badge with-tip" data-tip-content="{{ $property->opportunity->title }} significa que permite...">
				<i class="sl sl-icon-check"></i> {{ $property->opportunity->title }}
			</div>

			<!-- Book Now -->
			<div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-35">
				<h3><i class="fa fa-calendar-check-o "></i> Solicitar más información</h3>
				<div class="row with-forms  margin-top-0">

					<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
					<div class="col-lg-12">
						<h6>Nombre completo</h6>
						<input type="text" name="name" placeholder="Nombre completo">
					</div>

					<div class="col-lg-12">
						<h6>Correo electrónico</h6>
						<input type="email" name="email" placeholder="Correo electrónico">
					</div>

					<div class="col-lg-12">
						<h6>Describe tu solicitud</h6>
						<textarea name="description" placeholder="Describe tu solicitud con el mayor detalle posible"></textarea>
					</div>
				</div>
				
				<!-- Book Now -->
				<a href="#" class="button book-now fullwidth margin-top-5">Solicitar información</a>

				<div class="listing-links-container">
					<ul class="listing-links contact-links">
						<li><a href="tel:57-034-4481740" class="listing-links"><i class="fa fa-phone"></i> +57 4 4481740</a></li>
						<li><a href="mailto:info@app.gov.co" class="listing-links"><i class="fa fa-envelope-o"></i> info@app.gov.co</a>
						</li>
						<li><a href="https://www.google.com/maps/@6.2455701,-75.5750733,3a,75y,135.03h,109.37t/data=!3m6!1e1!3m4!1sNEmW7NBAcdGgYD0smSe7Qw!2e0!7i13312!8i6656" target="_blank"  class="listing-links"><i class="fa fa-map-marker"></i> Plaza de La Libertad de Medellín, Calle 44 # 55A-31, Medellín, Antioquia, Colombia</a></li>
					</ul>
					<div class="clearfix"></div>

					{{-- <ul class="listing-links">
						<li><a href="#" target="_blank" class="listing-links-fb"><i class="fa fa-facebook-square"></i> Facebook</a></li>
						<li><a href="#" target="_blank" class="listing-links-yt"><i class="fa fa-youtube-play"></i> YouTube</a></li>
						<li><a href="#" target="_blank" class="listing-links-ig"><i class="fa fa-instagram"></i> Instagram</a></li>
						<li><a href="#" target="_blank" class="listing-links-tt"><i class="fa fa-twitter"></i> Twitter</a></li>
					</ul> --}}
					<div class="clearfix"></div>
				</div>
				
				<!-- Estimated Cost -->
				<div class="booking-estimated-cost">
					{{-- <strong>Avalúo catastral</strong>
					<span>${{ number_format($property->property_valuation) }}</span> --}}
				</div>
			</div>
			
			<!-- Book Now / End -->

			<!-- Contact -->
			{{-- <div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Hosted by</span> <a href="pages-user-profile.html">Tom Perrin</a></h4>
					<a href="pages-user-profile.html" class="hosted-by-avatar"><img src="images/dashboard-avatar.jpg" alt=""></a>
				</div>
				<ul class="listing-details-sidebar">
					<li><i class="sl sl-icon-phone"></i> (123) 123-456</li>
					<!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
					<li><i class="fa fa-envelope-o"></i> <a href="#">tom@example.com</a></li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
					<li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>
					<!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->
				</ul>

				<!-- Reply to review popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<div class="small-dialog-header">
						<h3>Send Message</h3>
					</div>
					<div class="message-reply margin-top-0">
						<textarea cols="40" rows="3" placeholder="Your message to Tom"></textarea>
						<button class="button">Send Message</button>
					</div>
				</div>

				<a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>
			</div> --}}
			<!-- Contact / End-->


			<!-- Share / Like -->
			<div class="listing-share margin-top-40 margin-bottom-40 no-border">
				<button class="like-button"><span class="like-icon"></span> Agregar a favorito</button> 
				<span>12 personas guardaron este inmueble</span>

					<!-- Share Buttons -->
					<ul class="share-buttons margin-top-40 margin-bottom-0">
						<li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Compartir</a></li>
						<li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweetear</a></li>
						<!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
					</ul>
					<div class="clearfix"></div>
			</div>

         <div class="text-center margin-top-25">
            <a class="like-button" href="{{ url('/') }}">Volver</a>
            <a class="like-button" href="javascript;">Anterior</a>
            <a class="like-button" href="javascript;">Siguiente</a>
         </div>

		</div>
		<!-- Sidebar / End -->

	</div>
</div>
@stop

@push('scripts')

<script src="{{ asset('user/js/leaflet.min.js') }}"></script>
<script src="{{ asset('user/js/leaflet-listeo.js') }}"></script>  

<script type="text/javascript">
   // ----------------------------------------------- //
// Single Listing Map
// ----------------------------------------------- //
function singleListingMap() {

   let lng = parseFloat($( '#singleListingMap' ).data('longitude'));
   let lat =  parseFloat($( '#singleListingMap' ).data('latitude'));
   let singleMapIco =  "<i class='"+$('#singleListingMap').data('map-icon')+"'></i>";

   let listeoIcon = L.divIcon({
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

   let mapOptions = {
       center: [lat,lng],
       zoom: 17,
       zoomControl: false,
       gestureHandling: true
   }

   let map_single = L.map('singleListingMap',mapOptions);
   let zoomOptions = {
      zoomInText: '<i class="fa fa-plus" aria-hidden="true"></i>',
      zoomOutText: '<i class="fa fa-minus" aria-hidden="true"></i>',
   }
   // Zoom Control
   let zoom = L.control.zoom(zoomOptions);
   zoom.addTo(map_single);

   map_single.scrollWheelZoom.disable();

   marker = new L.marker([lat,lng], {
         icon: listeoIcon,
   }).addTo(map_single);

   // Open Street Map 
   // -----------------------//
   L.tileLayer(
      'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}.png', {
      attribution: '&copy; Con la tecnología de <a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a>',
      maxZoom: 19,
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

</script>

@endpush


