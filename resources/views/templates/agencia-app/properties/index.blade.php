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
                     <img src="https://cr00.epimg.net/radio/imagenes/2020/06/08/pereira/1591616857_723233_1591617980_noticia_normal.jpg" alt="" />
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://www.semana.com/resizer/IEcOf8TJx4XxRszD1F26YO7lixw=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/4KEOUCGM7FDRHGJVNJJWTAF464.jpeg" alt="" />
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
                  <h3><a href="{{ route('user.properties.show', 1) }}"> JAC SAN FRANCISCO DE PAULA</a></h3>
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_2TDALE4lwCIWuaWBzi6IYAQ3PLU7oswkJyyTmQhDEs2mpR4PRkh1GuG1XRktP0n2pl0&usqp=CAU" alt="" />
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
                  <h3><a href="{{ route('user.properties.show', 1) }}">BODEGA DE ACOPIO MUNICIPAL No.2</a></h3>
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://www.elheraldo.co/sites/default/files/styles/width_860/public/articulo/2016/01/25/lavaderos_de_carro_7.jpg?itok=duK-Yw0P" alt="" />
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
                  <h3><a href="{{ route('user.properties.show', 1) }}">LAVADERO DE CARROS LOVAINA</a></h3>
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="data:image/jpeg;base64,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" alt="" />
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
                  <h3><a href="{{ route('user.properties.show', 1) }}">LOTE PARA EQUIPAMIENTO</a></h3>
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/283131509.jpg?k=7a32083677917e754bbd75e0cc8bbef569377de11831d77d9c65d8c1355db7c2&o=&hp=1" alt="" />
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_OzXhf32tEkXGQxFswzaTgY4qvUyNj_1mcDubTFgYGN8-q4X6gW2DA3dhaoICtf2yw10&usqp=CAU" alt="" />
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://img-ar-1.trovit.com/kBl1ir1I1Zb/kBl1ir1I1Zb.1_11.jpg" alt="" />
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp3OWNCZXH0e-qYyEWGkI2fEQfy07C_dp3nvljW410lOcoqmtQaAySz-M7I3Re0q2B8W4&usqp=CAU" alt="" />
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
                  <a href="{{ route('user.properties.show', 1) }}" class="geodir-category-img_item">
                     <img src="https://img-ar-1.trovit.com/171Ip1DR1m1Ht/171Ip1DR1m1Ht.1_11.jpg" alt="" />
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
         <div class="copyright">© InmoAPP {{ date('Y') }}. Derechos reservados.</div>
         <a class="custom-to-top color-bg custom-scroll-link" href="#main"><i class="fas fa-caret-up"></i></a>
      </div>
   </div>
   <!-- col-list-wrap end -->
@stop
