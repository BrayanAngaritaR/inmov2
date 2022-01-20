(function ($) {
    "use strict";
    var markerIcon = {
        anchor: new google.maps.Point(22, 16),
        url: 'images/marker-single.png',
    }
    function mainMap() {
        function locationData(locationURL, locationCategory, locationImg, locationTitle, locationAddress,     locationPrice , locationStatus) {
            return ('<div class="map-popup-wrap"><div class="map-popup"><div class="map-popup-status mp-cat  color-bg">' + locationStatus + '</div><div class="map-popup-category mp-cat  color-bg">' + locationCategory + '</div><div class="infoBox-close"><i class="fal fa-times"></i></div> <a href="' + locationURL + '" class="listing-img-content" style="background-image: url(' + locationImg + ')"> </a> <div class="listing-content">  <div class="listing-title">   <h4><a href=' + locationURL + '>' + locationTitle + '</a></h4><span class="map-popup-location-info"> ' + locationAddress + '</span> </div><span class="map-popup-price fl-wrap">  $' + locationPrice + '  </span></div>    </div></div>')
        }
		 //   locations ------------------
        var locations = [
            [locationData("{{ route('user.properties.show', 1) }}", 'Lote', 'https://cr00.epimg.net/radio/imagenes/2020/06/08/pereira/1591616857_723233_1591617980_noticia_normal.jpg', 'CESION DE FAJAS-EQUIPAMIENTO-EPQ1', "Área útil aproximada 1300 m2",  "600.000.000" , "En venta"), 6.256635, -75.568413611111, 0, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Lote', 'https://cloudfront-us-east-1.images.arcpublishing.com/semana/4KEOUCGM7FDRHGJVNJJWTAF464.jpeg', 'JAC SAN FRANCISCO DE PAULA', "Área útil aproximada 1300 m2",  "320.000" , "En venta"), 6.2529777777778, -75.573136111111, 1, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Casa', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_2TDALE4lwCIWuaWBzi6IYAQ3PLU7oswkJyyTmQhDEs2mpR4PRkh1GuG1XRktP0n2pl0&usqp=CAU', 'BODEGA DE ACOPIO MUNICIPAL No.2', "Área útil aproximada 1300 m2",    "510,000 / por mes"), 6.2559216666667, -75.558384166667, 2, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Casa', 'https://www.elheraldo.co/sites/default/files/styles/width_860/public/articulo/2016/01/25/lavaderos_de_carro_7.jpg?itok=duK-Yw0P', 'LAVADERO DE CARROS LOVAINA', "Área útil aproximada 1300 m2",   "1,600.000" , "En venta"), 6.2666288888889, -75.542650555556, 3, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Oficina', 'data:image/jpeg;base64,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', 'LOTE PARA EQUIPAMIENTO', "Área útil aproximada 1300 m2",   "500.000" , "En venta"), 6.2666083333333, -75.542813888889, 4, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Lote', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/283131509.jpg?k=7a32083677917e754bbd75e0cc8bbef569377de11831d77d9c65d8c1355db7c2&o=&hp=1', ' Lote de la 4 sur en venta', "Área útil aproximada 1300 m2",   "1,510,000 / por mes" , "Renta"), 6.2665583333333, -74.15737152, 5, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Lote', 'https://cloudfront-us-east-1.images.arcpublishing.com/semana/4KEOUCGM7FDRHGJVNJJWTAF464.jpeg', 'CESION DE FAJAS-EQUIPAMIENTO-EPQ1', "Área útil aproximada 1300 m2",   "510,000 / por mes" , "Renta"), 40.79145927, -75.542791666667, 6, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Hotel', 'https://www.elheraldo.co/sites/default/files/styles/width_860/public/articulo/2016/01/25/lavaderos_de_carro_7.jpg?itok=duK-Yw0P', 'JAC SAN FRANCISCO DE PAULA', "Área útil aproximada 1300 m2",     "1.200.000" , "En venta"), 6.29298, -75.586060555556, 7, markerIcon],
            [locationData("{{ route('user.properties.show', 1) }}", 'Oficina', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/283131509.jpg?k=7a32083677917e754bbd75e0cc8bbef569377de11831d77d9c65d8c1355db7c2&o=&hp=1', 'Lote en San Diego', "Área útil aproximada 1300 m2",     "2,210,000 / por mes" , "Renta"), 6.2573413888889, -75.567134166667, 8, markerIcon],
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

        map.setMapTypeId('terrain'); //satellite, terrain, hybrid, roadmap

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