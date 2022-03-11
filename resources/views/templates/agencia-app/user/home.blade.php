@extends('templates.agencia-app.app') @section('content')

<!-- content -->
<div class="content">
   <!--  section  -->
   <section class="no-padding-section">
      <div class="hero-slider-wrap carousel-wrap fl-wrap">
         <div class="hero-slider carousel">
            <!-- hero-slider-item -->
            <div class="hero-slider-item hero-slider-item_first fl-wrap">
               <div class="bg" data-bg="{{ asset('assets/images/hagamoslo.png') }}"></div>
               <div class="overlay"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="hero-title ht-column fl-wrap">
                           <h4>InmoAPP</h4>
                           <h2>
                              La mejor opción para gestión de bienes inmuebles de Medellín
                           </h2>
                           <p>InmoAPP es una plataforma desarrollada por la Subdirección de Gestión Inmobiliaria de la AGENCIA APP - Alcaldía de Medellín.</p>
                        </div>
                     </div>
                     <div class="col-md-2"></div>
                     <div class="col-md-4">
                        <div class="main-search-input-wrap shadow_msiw msiw-column fl-wrap">
                           <div class="msiw-column_title">¿Una búsqueda rápida?</div>
                           <div class="main-search-input fl-wrap">
                              <div class="main-search-input-item">
                                 <select data-placeholder="Acción" class="chosen-select no-search-select" id="opportunity_id">

                                    <option value="all">Todas</option>
                                    <option value="1">Oportunidad Inmobiliaria</option>
                                    <option value="2">Gestión comercial</option>
                                 </select>
                              </div>

                              <div class="main-search-input-item">
                                 <select data-placeholder="¿En dónde?" class="chosen-select no-search-select" id="commune_id">
                                    <option value="all">Todas las comunas</option>
                                    @foreach($communes as $commune)
                                    <option value="{{ $commune->id }}">
                                       {{ $commune->code }} - 
                                       {{ $commune->name }}
                                    </option>
                                    @endforeach
                                 </select>
                              </div>
                              <button class="main-search-button color-bg" onclick="searchByCommune();">Buscar <i class="far fa-search"></i></button>
                           </div>
                        </div>
                        <div class="hero-notifer fl-wrap">¿Y si mejor exploramos? <a href="{{ route('user.properties.index') }}?commune=all?district=all?destination=all?opportunity=all?action=all?area=all?macroproject=all?treatment=all?instrument=all?floor_use=all?rph=0?loan=0?bic=0?management=0">Explorar inmuebles</a></div>
                     </div>
                  </div>
                  <div class="scroll-down-wrap">
                     <div class="mousey">
                        <div class="scroller"></div>
                     </div>
                     <span>Sigue bajando para descubrir</span>
                  </div>
               </div>
            </div>
            <!--  hero-slider-item end  -->
            <!-- hero-slider-item -->
            <div class="hero-slider-item fl-wrap">
               <div class="bg" data-bg="{{ asset('assets/images/hagamoslo.png') }}"></div>
               <div class="overlay"></div>
               <div class="hero-listing-item">
                  <div class="container">
                     <h2><a href="https://app.gov.co" target="_blank">La AGENCIA APP</a></h2>
                     <div class="geodir-category-location fl-wrap">
                        <a href="#"><i class="fas fa-map-marker-alt"></i> 
                        Carrera 55 # 42-180 Local 203</a>
                     </div>
                     <div class="clearfix"></div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                     <div class="clearfix"></div>
                     <a href="https://app.gov.co" target="_blank" class="btn color-bg float-btn">Ver sitio web</a>
                  </div>
               </div>
            </div>
            <!--  hero-slider-item end  -->
         </div>
         <div class="hs-btn hs-btn_prev color-bg swiper-button-prev"><i class="far fa-angle-left"></i></div>
         <div class="hs-btn hs-btn_next color-bg swiper-button-next"><i class="far fa-angle-right"></i></div>
      </div>
   </section>
   <!--  section  end-->
   <!-- section -->
   <section>
      <div class="container">
         <!--about-wrap -->
         <div class="about-wrap">
            <div class="row">
               <div class="col-md-5">
                  <div class="about-title ab-hero fl-wrap">
                     <h2>¿Por qué usar nuestra plataforma?</h2>
                     <h4>Gestionamos los bienes del Municipio de Medellín</h4>
                  </div>
                  <div class="services-opions fl-wrap">
                     <ul>
                        <li>
                           <i class="fal fa-headset"></i>
                           <h4>Disponibilidad de 24 horas</h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                           <i class="fal fa-users-cog"></i>
                           <h4>Filtros avanzados</h4>
                           <p>Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Curabitur convallis fringilla diam sed aliquam.</p>
                        </li>
                        <li>
                           <i class="fal fa-phone-laptop"></i>
                           <h4>Multiplataforma</h4>
                           <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-1"></div>
               <div class="col-md-6">
                  <div class="about-img fl-wrap">
                     <img src="{{ asset('templates/agencia-app/images/all/27.jpeg') }}" class="respimg" alt="" />
                     <div class="about-img-hotifer color-bg">
                        <p>InmoAPP es una plataforma que facilitará la gestión de bienes inmuebles.</p>
                        <h4>Rodrigo Foronda</h4>
                        <h5>Director General</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- about-wrap end  -->
      </div>
   </section>
   <!-- section end-->
   <!-- section -->
   <section class="color-bg small-padding">
      <div class="container">
         <div class="main-facts fl-wrap">
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
               <div class="inline-facts">
                  <div class="milestone-counter">
                     <div class="stats animaper">
                        <div class="num" data-content="0" data-num="18">0</div>
                     </div>
                  </div>
                  <h6>Colaboradores</h6>
               </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
               <div class="inline-facts">
                  <div class="milestone-counter">
                     <div class="stats animaper">
                        <div class="num" data-content="0" data-num="12168">0</div>
                     </div>
                  </div>
                  <h6>Bienes gestionados</h6>
               </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
               <div class="inline-facts">
                  <div class="milestone-counter">
                     <div class="stats animaper">
                        <div class="num" data-content="0" data-num="172">0</div>
                     </div>
                  </div>
                  <h6>Disponibles para venta</h6>
               </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
               <div class="inline-facts">
                  <div class="milestone-counter">
                     <div class="stats animaper">
                        <div class="num" data-content="0" data-num="732">0</div>
                     </div>
                  </div>
                  <h6>Disponibles para arriendo</h6>
               </div>
            </div>
            <!-- inline-facts end -->
         </div>
      </div>
      <div class="svg-bg">
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
            <defs>
               <lineargradient id="bg">
                  <stop offset="0%" style="stop-color: rgba(255, 255, 255, 0.6);"></stop>
                  <stop offset="50%" style="stop-color: rgba(255, 255, 255, 0.1);"></stop>
                  <stop offset="100%" style="stop-color: rgba(255, 255, 255, 0.6);"></stop>
               </lineargradient>
               <path
                  id="wave"
                  stroke="url(#bg)"
                  fill="none"
                  d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                                        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"
               />
            </defs>
            <g>
               <use xlink:href="#wave">
                  <animatetransform
                     attributeName="transform"
                     attributeType="XML"
                     type="translate"
                     dur="10s"
                     calcMode="spline"
                     values="270 230; -334 180; 270 230"
                     keyTimes="0; .5; 1"
                     keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                     repeatCount="indefinite"
                  />
               </use>
               <use xlink:href="#wave">
                  <animatetransform
                     attributeName="transform"
                     attributeType="XML"
                     type="translate"
                     dur="8s"
                     calcMode="spline"
                     values="-270 230;243 220;-270 230"
                     keyTimes="0; .6; 1"
                     keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                     repeatCount="indefinite"
                  />
               </use>
               <use xlink:href="#wave">
                  <animatetransform
                     attributeName="transform"
                     attributeType="XML"
                     type="translate"
                     dur="6s"
                     calcMode="spline"
                     values="0 230;-140 200;0 230"
                     keyTimes="0; .4; 1"
                     keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                     repeatCount="indefinite"
                  />
               </use>
               <use xlink:href="#wave">
                  <animatetransform
                     attributeName="transform"
                     attributeType="XML"
                     type="translate"
                     dur="12s"
                     calcMode="spline"
                     values="0 240;140 200;0 230"
                     keyTimes="0; .4; 1"
                     keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                     repeatCount="indefinite"
                  />
               </use>
            </g>
         </svg>
      </div>
   </section>
   <!-- section end-->
   <!-- section -->
   <section class="gray-bg">
      <div class="container">
         <div class="section-title st-center fl-wrap">
            <h4>Testimonios</h4>
            <h2>Esto dicen nuestros aliados</h2>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="testimonials-slider-wrap">
         <div class="testimonials-slider">
            <!--slick-item -->
            <div class="slick-item">
               <div class="text-carousel-item fl-wrap">
                  <div class="text-carousel-item-header fl-wrap">
                     <div class="popup-avatar"><img src="{{ asset('templates/agencia-app/images/partners/epm.png') }}" alt="" /></div>
                     <div class="review-owner fl-wrap">INDER</div>
                     <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                  </div>
                  <div class="text-carousel-content fl-wrap">
                     <p>
                        "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh
                        euismod tincidunt ut laoreet dolore luptatum."
                     </p>
                     <a href="#" class="testim-link color-bg">Via Facebook</a>
                  </div>
               </div>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
               <div class="text-carousel-item fl-wrap">
                  <div class="text-carousel-item-header fl-wrap">
                     <div class="popup-avatar"><img src="{{ asset('templates/agencia-app/images/partners/sura.png') }}" alt="" /></div>
                     <div class="review-owner fl-wrap">SURA</div>
                     <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                  </div>
                  <div class="text-carousel-content fl-wrap">
                     <p>
                        "Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent blandit praesent luptatum zzril.Vulputate
                        urna. Nulla tristique mi a massa convallis."
                     </p>
                     <a href="#" class="testim-link color-bg">Via Twitter</a>
                  </div>
               </div>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
               <div class="text-carousel-item fl-wrap">
                  <div class="text-carousel-item-header fl-wrap">
                     <div class="popup-avatar"><img src="{{ asset('templates/agencia-app/images/partners/inder.jpeg') }}" alt="" /></div>
                     <div class="review-owner fl-wrap">INDER</div>
                     <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                  </div>
                  <div class="text-carousel-content fl-wrap">
                     <p>
                        "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh
                        euismod tincidunt ut laoreet dolore luptatum."
                     </p>
                     <a href="#" class="testim-link color-bg">Via Facebook</a>
                  </div>
               </div>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
               <div class="text-carousel-item fl-wrap">
                  <div class="text-carousel-item-header fl-wrap">
                     <div class="popup-avatar"><img src="{{ asset('templates/agencia-app/images/partners/invima.jpeg') }}" alt="" /></div>
                     <div class="review-owner fl-wrap">Invima</div>
                     <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                  </div>
                  <div class="text-carousel-content fl-wrap">
                     <p>
                        "Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent blandit praesent luptatum zzril.Vulputate
                        urna. Nulla tristique mi a massa convallis."
                     </p>
                     <a href="#" class="testim-link color-bg">Via Twitter</a>
                  </div>
               </div>
            </div>
            <!--slick-item end -->
         </div>
      </div>
   </section>
   <!-- section end-->
</div>
<!-- content end -->

@include('templates.agencia-app.includes.footer.footer') @stop

@push('scripts')
<script type="text/javascript">
   function searchByCommune(){

      let commune = $('#commune_id').val();
      let opportunity = $('#opportunity_id').val();
      let district = 'all';
      let destination = 'all';
      let area = 'all';
      let action = 'all';
      let macroproject = 'all';
      let treatment = 'all';
      let instrument = 'all';
      let floor_use = 'all';
      let rph = 0;
      let loan = 0;
      let management = 0;
      let bic = 0;
      
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
