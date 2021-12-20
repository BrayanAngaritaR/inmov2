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
   <div class="top-search-content">
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
         </div>
      </div>
      <div class="more-opt_btn mor-opt-btn_act">
         Más filtros<span><i class="fas fa-caret-down"></i></span>
      </div>
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
                  {{-- <li>
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
                  </li> --}}
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
               <h2><strong>8</strong> Bienes encontrados</h2>
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
         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/lote1.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 1) }}">CESION DE FAJAS-EQUIPAMIENTO-EPQ1</a></h3>
                  <div class="geodir-category-content_price">$196,431,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 2) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/lote2.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 2) }}"> JAC SAN FRANCISCO DE PAULA</a></h3>
                  <div class="geodir-category-content_price">$3,872,415,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 m2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 3) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/apto1.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Calle 4 sur</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 3) }}">BODEGA DE ACOPIO MUNICIPAL No.2</a></h3>
                  <div class="geodir-category-content_price">$567,207,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 4) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/lavadero1.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> San Pedro</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 4) }}">LAVADERO DE CARROS LOVAINA</a></h3>
                  <div class="geodir-category-content_price">$309,174,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 5) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/apto2.jpeg') }}">
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">Arriendo</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 5) }}">LOTE PARA EQUIPAMIENTO</a></h3>
                  <div class="geodir-category-content_price">$22,855,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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


         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 6) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/apto3.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 6) }}">Lote de la 4 sur en venta</a></h3>
                  <div class="geodir-category-content_price">$6,000,000,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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


         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 7) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/apto4.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 7) }}">Lote de la 4 sur en venta</a></h3>
                  <div class="geodir-category-content_price">$6,000,000,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 8) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/lote3.jpg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 8) }}">Lote de la 4 sur en venta</a></h3>
                  <div class="geodir-category-content_price">$6,000,000,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 9) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/lote4.jpeg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>
               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 1) }}">Lote de la 4 sur en venta</a></h3>
                  <div class="geodir-category-content_price">$6,000,000,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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

         <!-- listing-item -->
         <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
               <div class="geodir-category-img fl-wrap">
                  <a href="{{ route('user.properties.show', 10) }}" class="geodir-category-img_item">
                     <img src="{{ asset('templates/agencia-app/images/properties/lago1.jpg') }}" alt="" />
                     <div class="overlay"></div>
                  </a>
                  <div class="geodir-category-location">
                     <a href="#1" class="map-item tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> Área de Expansión Altavista</a>
                  </div>
                  <ul class="list-single-opt_header_cat">
                     <li><a href="#" class="cat-opt blue-bg">En venta</a></li>
                     <li><a href="#" class="cat-opt color-bg">Lote</a></li>
                  </ul>
                  <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Guardar">
                     <span><i class="fal fa-heart"></i></span>
                  </a>
                  {{-- <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                     <span><i class="fal fa-random"></i></span>
                  </a> --}}
                  <div class="geodir-category-listing_media-list">
                     <span><i class="fas fa-camera"></i> 8</span>
                  </div>
               </div>

               <div class="geodir-category-content fl-wrap">
                  <h3><a href="{{ route('user.properties.show', 10) }}">Lote de la 4 sur en venta</a></h3>
                  <div class="geodir-category-content_price">$6,000,000,000</div>
                  <p>Área útil aproximada 1300 m2. Área neta aproximada 1712 m². El predio està comprometido por la retiro de quebrada en 603 m²; sin embargo, quedan 697 m² de área útil, que podrían ser utilizados para oportunidad inmobiliaria. Cobertura de servicios públicos en el área útil. Se sugiere equipamiento de escala barrial tipo jardín infantil.</p>
                  <div class="geodir-category-content-details">
                     <ul>
                        {{-- <li><i class="fal fa-bed"></i><span>3</span></li>
                        <li><i class="fal fa-bath"></i><span>2</span></li> --}}
                        <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
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
