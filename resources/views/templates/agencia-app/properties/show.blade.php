@extends('templates.agencia-app.app') @section('content')

<div class="content">
   <section class="hidden-section single-hero-section" data-scrollax-parent="true" id="sec1">
      <div class="bg-wrap bg-parallax-wrap-gradien">
         <div class="bg par-elem" data-bg="https://homeradar.kwst.net/images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
      </div>

      <div class="container">
         <!--  list-single-opt_header-->
         <div class="list-single-opt_header fl-wrap">
            <ul class="list-single-opt_header_cat">
               <li><a href="#" class="cat-opt color-bg">En venta</a></li>
               <li><a href="#" class="cat-opt color-bg">Lote</a></li>
            </ul>
         </div>
         <!--  list-single-opt_header end -->
         <!--  list-single-header-item-->
         <div class="list-single-header-item no-bg-list_sh fl-wrap">
            <div class="row">
               <div class="col-md-12">
                  <h1>
                     {{ $property->sss_description }} <span class="verified-badge tolt" data-microtip-position="bottom" data-tooltip="Verified"><i class="fas fa-check"></i></span>
                  </h1>
                  <div class="geodir-category-location fl-wrap">
                     <a href="#"><i class="fas fa-map-marker-alt"></i> Área de expansión Altavista</a>
                     <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Excelente</span></div>
                  </div>
                  <div class="share-holder hid-share">
                     <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Compartir </a>
                     <div class="share-container isShare"></div>
                  </div>
               </div>
            </div>
            <div class="list-single-header-footer fl-wrap">
               <div class="list-single-header-price" data-propertyprise="50500"><strong>Avalúo catastral:</strong><span>$</span>{{ number_format($property->property_valuation) }}</div>
               <div class="list-single-header-date"><span>Publicado:</span>{{ $property->updated_at->diffForHumans() }} | {{ $property->updated_at->format('d/m/y h:i:s') }}</div>
               <div class="list-single-stats">
                  <ul class="no-list-style">
                     <li>
                        <span class="viewed-counter"><i class="fas fa-eye"></i> Visitas - 156 </span>
                     </li>
                     <li>
                        <span class="bookmark-counter"><i class="fas fa-heart"></i> En favoritos - 24 </span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
      <div class="container">
         <div class="breadcrumbs-list">
            <a href="#">Inicio</a>
            <a href="#">Bienes</a>
            <span>{{ $property->sss_description }}</span>
         </div>
         <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
         <div class="show-more-snopt-tooltip">
            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Reportar </a>
         </div>
         <a class="print-btn tolt" href="javascript:window.print()" data-microtip-position="bottom" data-tooltip="Imprimir"><i class="fas fa-print"></i></a>
         {{-- <a class="compare-top-btn tolt" data-microtip-position="bottom" data-tooltip="Compare" href="#"><i class="fas fa-random"></i></a> --}}
         <div class="like-btn"><i class="fas fa-heart"></i> Guardar</div>
      </div>
   </div>

   <div class="gray-bg small-padding fl-wrap">
      <div class="container">
         <div class="row">
            <!--  listing-single content -->

            <div class="col-md-8">
               <div class="list-single-main-wrapper fl-wrap">
                  <!--  scroll-nav-wrap -->
                  <div class="scroll-nav-wrap">
                     <nav class="scroll-nav scroll-init fixed-column_menu-init">
                        <ul class="no-list-style">
                           <li>
                              <a class="act-scrlink" href="#sec1"><i class="fal fa-home-lg-alt"></i></a><span>Toda la información</span>
                           </li>
                           <li>
                              <a href="#sec2"><i class="fal fa-image"></i></a><span>Galería</span>
                           </li>
                           <li>
                              <a href="#sec3"><i class="fal fa-info"></i> </a><span>Detalles</span>
                           </li>
                           <li>
                              <a href="#sec6"><i class="fal fa-map-pin"></i></a><span>Ubicación</span>
                           </li>
                        </ul>
                        <div class="progress-indicator">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                              <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                              <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar" />
                           </svg>
                        </div>
                     </nav>
                  </div>
                  <!--  scroll-nav-wrap end-->
                  <div class="list-single-main-media fl-wrap" id="sec2">
                     <!-- gallery-items   -->
                     <div class="gallery-items grid-small-pad list-single-gallery three-coulms lightgallery">
                        <!-- 1 -->
                        <div class="gallery-item">
                           <div class="grid-item-holder">
                              <div class="box-item">
                                 <img src="{{ asset('templates/agencia-app/images/default.png') }}" alt="" />
                                 <a href="{{ asset('templates/agencia-app/images/default.png') }}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- 1 end -->
                        <!-- 2 -->
                        <div class="gallery-item">
                           <div class="grid-item-holder">
                              <div class="box-item">
                                 <img src="{{ asset('templates/agencia-app/images/default.png') }}" alt="" />
                                 <a href="{{ asset('templates/agencia-app/images/default.png') }}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- 2 end -->
                     </div>
                     <!-- end gallery items -->
                  </div>
                  <div class="list-single-facts fl-wrap">
                     <!-- inline-facts -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-home-lg"></i>
                           <h6>Tipo</h6>
                           <span>Lote</span>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                     <!-- inline-facts  -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-users"></i>
                           <h6>Oportunidad</h6>
                           <span>Lote para construir</span>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                     <!-- inline-facts -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-bed"></i>
                           <h6>Habitaciones</h6>
                           <span>3 Habitaciones / 2 plantas</span>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                     <!-- inline-facts -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-bath"></i>
                           <h6>Baños</h6>
                           <span>1 baño</span>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                  </div>
                  <div class="list-single-main-container fl-wrap" id="sec3">
                     <!-- list-single-main-item -->
                     <div class="list-single-main-item fl-wrap">
                        <div class="list-single-main-item-title">
                           <h3>Sobre este inmueble</h3>
                        </div>
                        <div class="list-single-main-item_content fl-wrap">
                           <p>
                              Este inmueble está ubicado en <b>{{ $property->district->name }}</b>, comuna <b>{{ $property->commune->name }}</b> y se encuentra en <b>{{ $property->action->title }}</b>.
                           </p>
                        </div>
                     </div>
                     <!-- list-single-main-item end -->
                     <!-- list-single-main-item -->
                     <div class="list-single-main-item fl-wrap">
                        <div class="list-single-main-item-title">
                           <h3>Detalles</h3>
                        </div>
                        <div class="list-single-main-item_content fl-wrap">
                           <div class="details-list">
                              <ul>
                                 <li><span>Código:</span>{{ $property->code }}</li>
                                 <li><span>Matrícula:</span>{{ $property->plate }}</li>
                                 <li><span>Área total del lote:</span>
                                    {{ $property->cadastral_area }} {{ $property->units }}
                                 </li>
                                 <li><span>Área construida:</span>{{ $property->construction_area }} {{ $property->units }}</li>

                                 <li><span>Avalúo catastral:</span>${{ number_format($property->property_valuation) }}</li>
                              </ul>
                           </div>
                        </div>

                        <div class="list-single-main-item-title mt-5">
                           <h3>Información adicional</h3>
                        </div>

                        <div class="extra-info">
                           <p class="text-justify">
                              <b>Act. fijo que contienen lotes</b>: {{ $property->fixed_asset }}
                           </p>

                           <p class="text-justify">
                              <b>No. Escritura</b>: {{ $property->plate_number }}
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
                              <b>Instrumento de tercer nivel</b>: {{ $property->thirdLevelInstrument->title }}
                           </p>

                           <p class="text-justify">
                              <b>Destinación actual</b>: {{ $property->destination->title }}
                           </p>

                           <p class="text-justify">
                              <b>Uso del suelo</b>: {{ $property->floorUse->title }}
                           </p>

                           <p class="text-justify">
                              <b>Acción</b>: {{ $property->action->title }}
                           </p>
                        </div>
                     </div>
                     <div class="list-single-main-item fl-wrap">
                        <div class="list-single-main-item-title">
                           <h3>Características adicionales</h3>
                        </div>
                        <div class="list-single-main-item_content fl-wrap">
                           <div class="listing-features">
                              <ul>
                                 <li>
                                    <a href="#"><i class="fal fa-dumbbell"></i> Gimnasio</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-wifi"></i> Wi Fi</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-parking"></i> Parqueadero</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-cloud"></i> Aire acondicionado</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-swimmer"></i> Piscina</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-cctv"></i> Seguridad</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-washer"></i> Cuarto de ropa</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fal fa-utensils"></i> Comedor</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- list-single-main-item end -->
                     <!-- list-single-main-item -->
                     <div class="list-single-main-item fw-lmi fl-wrap" id="sec6">
                        <div class="list-single-main-item fl-wrap">
                           <div class="list-single-main-item-title">
                              <h3>Ubicación</h3>
                           </div>

                           <p><b>Dirección</b>: {{ $property->cadastral_address }}</p>
                           <div class="map-container mapC_vis mapC_vis2">
                              <div id="singleMap" data-latitude="{{ $property->map_latitude }}" data-longitude="{{ $property->map_longitude }}" data-mapTitle="Our Location" data-infotitle="House in Financial Distric" data-infotext="70 Bright St New York, USA"></div>
                              <div class="scrollContorl"></div>
                           </div>
                           <input id="pac-input" class="controls fl-wrap controls-mapwn" autocomplete="on" type="text" placeholder="¿Quieres buscar lugares cerca? " value="" />
                        </div>
                     </div>
                     <!-- list-single-main-item end -->
                  </div>
               </div>
            </div>

            <!-- listing-single content end-->
            <!-- sidebar -->

            <div class="col-md-4">
               <!--box-widget-->
               <div class="box-widget fl-wrap">
                  <div class="profile-widget">
                     <div class="profile-widget-header color-bg smpar fl-wrap">
                        <div class="pwh_bg"></div>
                        <div class="call-btn">
                           <a href="tel:123-456-7890" class="tolt color-bg" data-microtip-position="right" data-tooltip="Llamar ahora"><i class="fas fa-phone-alt"></i></a>
                        </div>

                        <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>

                        <div class="show-more-snopt-tooltip bxwt">
                           <a href="#"> <i class="fas fa-exclamation-triangle"></i> Reportar </a>
                        </div>
                        <div class="profile-widget-card">
                           <div class="profile-widget-image">
                              <img src="{{ asset('/templates/agencia-app/images/logo.png') }}" alt="" />
                           </div>
                           <div class="profile-widget-header-title">
                              <h4><a href="#">AGENCIA APP</a></h4>
                              <div class="clearfix"></div>
                              <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                           </div>
                        </div>
                     </div>
                     <div class="profile-widget-content fl-wrap">
                        <div class="contats-list fl-wrap">
                           <ul class="no-list-style">
                              <li>
                                 <span><i class="fal fa-phone"></i> Teléfono :</span> <a href="#">(60) + (4) 448 1740</a>
                              </li>
                              <li>
                                 <span><i class="fal fa-envelope"></i> Correo electrónico :</span> <a href="#">info@app.gov.co</a>
                              </li>
                              <li>
                                 <span><i class="fal fa-map"></i> Dirección : </span> Carrera 55 # 42-180 Local 203. Edificio Plaza de La Libertad, Medellín Colombia
                              </li>
                           </ul>
                        </div>
                        <div class="profile-widget-footer fl-wrap">
                           <a href="https://app.gov.co" class="btn float-btn color-bg small-btn" target="_blank">Ver sitio web</a>
                           {{-- <a href="#sec-contact" class="custom-scroll-link tolt" data-microtip-position="left" data-tooltip="Viewing Property"><i class="fal fa-paper-plane"></i></a> --}}
                        </div>
                     </div>
                  </div>
               </div>
               <!--box-widget end -->
               <!--box-widget end -->
               <!--box-widget-->
               {{-- <div class="box-widget fl-wrap hidden-section" style="margin-top: 30px;">
                  <div class="box-widget-content fl-wrap color-bg">
                     <div class="color-form reset-action">
                        <div class="color-form-title fl-wrap">
                           <h4>Calcula tu cuota</h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus.</p>
                        </div>
                        <form method="post" name="mortgage-form">
                           <div class="fl-wrap">
                              <label for="amt">Cantidad a prestar </label>
                              <input id="amt" name="amt" type="text" placeholder="0" value="0" />
                              <div class="use-current-price tolt" data-microtip-position="left" data-tooltip="Use current price"><i class="fal fa-tag"></i></div>
                           </div>
                           <label for="apr">Porcentaje a financiar</label>
                           <div class="price-rage-item fl-wrap">
                              <input type="text" id="apr" name="apr" class="price-range" data-min="0" data-max="100" data-step="1" value="0" data-prefix="%" />
                           </div>
                           <label for="trm">Plazo (Años)</label>
                           <div class="price-rage-item fl-wrap">
                              <input type="text" id="trm" name="trm" class="price-range" data-min="0" data-max="5" data-step="1" value="0" data-prefix="Y" />
                           </div>
                           <div class="clearfix"></div>
                           <button type="button" id="sbt" class="color2-bg">Calcular</button>
                           <div class="reset-form reset-btn"><i class="far fa-sync-alt"></i> Resetear</div>
                           <div class="monterage-title fl-wrap">
                              <h5>Cantidad a pagar:</h5>
                              <input type="text" id="pmt" name="mPmt" value="0" />
                              <div class="monterage-title-item">$<span></span></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div> --}}
               <!--box-widget end -->
               <!--box-widget-->
               <div class="box-widget fl-wrap">
                  <div class="box-widget-title fl-wrap">Documentos del inmueble</div>
                  <div class="box-widget-content fl-wrap">
                     <div class="bwc_download-list">
                        <a href="#" download>
                           <span><i class="fal fa-file-pdf"></i></span>Ficha catrastral
                        </a>
                        <a href="#" download>
                           <span><i class="fal fa-file-word"></i></span>VUR
                        </a>
                        <a href="#" download>
                           <span><i class="fal fa-file-pdf"></i></span>Planos
                        </a>
                     </div>
                  </div>
               </div>
               <!--box-widget end -->
               <!--box-widget-->
               <div class="box-widget fl-wrap">
                  <div class="box-widget-fixed-init fl-wrap" id="sec-contact">
                     <div class="box-widget-title fl-wrap box-widget-title-color color-bg">Solicitar más información</div>
                     <div class="box-widget-content fl-wrap">
                        <div class="custom-form">
                           <form method="post" name="contact-property-form" action="{{ route('user.request_info.store', $property) }}">
                              @csrf
                              <label>
                                 Nombre completo* <span class="dec-icon"><i class="fas fa-user"></i></span>
                              </label>
                              <input name="name" type="text"/>
                              <label>
                                 Correo electrónico * <span class="dec-icon"><i class="fas fa-envelope"></i></span>
                              </label>
                              <input name="email" type="email"/>
                              <label>Tu mensaje* </label>

                              <textarea name="info" class="form-control mb-2"> </textarea>

                              <input type="checkbox" class="form-check-input" id="create_account"> Crear mi cuenta                              

                              <button type="submit" class="btn float-btn color-bg fw-btn">Solicitar información</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!--box-widget end -->
            </div>
            <!--  sidebar end-->
         </div>
         <div class="fl-wrap limit-box"></div>
      </div>
   </div>
</div>
<!-- content end -->
<!-- subscribe-wrap -->
<div class="subscribe-wrap fl-wrap">
   <div class="container">
      <div class="subscribe-container fl-wrap color-bg">
         <div class="pwh_bg"></div>
         <div class="mrb_dec mrb_dec3"></div>
         <div class="row">
            <div class="col-md-6">
               <div class="subscribe-header">
                  <h4>Lista de email</h4>
                  <h3>Obtén actualizaciones periódicas de cuando publiquemos nuevos bienes.</h3>
               </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
               <div class="footer-widget fl-wrap">
                  <div class="subscribe-widget fl-wrap">
                     <div class="subcribe-form">
                        <form id="subscribe">
                           <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Ingresa tu correo electrónico" spellcheck="false" type="text" />
                           <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Suscribirse</button>
                           <label for="subscribe-email" class="subscribe-message"></label>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@include('templates.agencia-app.includes.footer.footer') @stop
@push('scripts')

<script src="{{ asset('templates/agencia-app/js/map-single.js' )}}"></script>
@endpush
