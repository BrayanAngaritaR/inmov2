@extends('templates.agencia-app.app')
@section('content')
                <div class="content">
                    <section class="hidden-section   single-hero-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg-wrap bg-parallax-wrap-gradien">
                            <div class="bg par-elem "  data-bg="https://homeradar.kwst.net/images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
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
                                        <h1>{{ $random_title }} <span class="verified-badge tolt" data-microtip-position="bottom"  data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                                        <div class="geodir-category-location fl-wrap">
                                            <a href="#"><i class="fas fa-map-marker-alt"></i>  Área de expansión Altavista</a> 
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Excelente</span></div>
                                        </div>
                                        <div class="share-holder hid-share">
                                            <a href="#" class="share-btn showshare sfcs">  <i class="fas fa-share-alt"></i>  Compartir   </a>
                                            <div class="share-container  isShare"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-single-header-footer fl-wrap">
                                    <div class="list-single-header-price" data-propertyprise="50500"><strong>Avalúo catastral:</strong><span>$</span>50,000,000</div>
                                    <div class="list-single-header-date"><span>Publicado:</span>20.05.2021</div>
                                    <div class="list-single-stats">
                                        <ul class="no-list-style">
                                            <li><span class="viewed-counter"><i class="fas fa-eye"></i> Visitas -  156 </span></li>
                                            <li><span class="bookmark-counter"><i class="fas fa-heart"></i> En favoritos -  24 </span></li>
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
                                <span>{{ $random_title }}</span>
                            </div>
                            <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                            <div class="show-more-snopt-tooltip">
                                <a href="#"> <i class="fas fa-exclamation-triangle"></i> Reportar </a>
                            </div>
                            <a class="print-btn tolt" href="javascript:window.print()" data-microtip-position="bottom"  data-tooltip="Imprimir"><i class="fas fa-print"></i></a>
                            {{-- <a class="compare-top-btn tolt" data-microtip-position="bottom"  data-tooltip="Compare" href="#"><i class="fas fa-random"></i></a> --}}
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
                                                    <li><a class="act-scrlink" href="#sec1"><i class="fal fa-home-lg-alt"></i></a><span>Detalles</span></li>
                                                    <li><a  href="#sec2"><i class="fal fa-image"></i></a><span>Galería</span></li>
                                                    <li><a href="#sec3"><i class="fal fa-info"></i> </a><span>Información adicional</span></li>
                                                    {{-- <li><a href="#sec4"><i class="fal fa-bed"></i></a><span>Rooms</span></li>
                                                    <li><a href="#sec5"><i class="fal fa-video"></i></a><span>Video</span></li> --}}
                                                    <li><a href="#sec6"><i class="fal fa-map-pin"></i></a><span>Ubicación</span></li>
                                                    {{-- <li><a href="#sec7"><i class="fal fa-comment-alt-lines"></i></a><span>Reviews</span></li> --}}
                                                </ul>
                                                <div class="progress-indicator">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="-1 -1 34 34">
                                                        <circle cx="16" cy="16" r="15.9155"
                                                            class="progress-bar__background" />
                                                        <circle cx="16" cy="16" r="15.9155"
                                                            class="progress-bar__progress 
                                                            js-progress-bar" />
                                                    </svg>
                                                </div>
                                            </nav>
                                        </div>
                                        <!--  scroll-nav-wrap end-->
                                        <div class="list-single-main-media fl-wrap" id="sec2">
                                            <!-- gallery-items   -->
                                            {{-- <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                <!-- 1 -->
                                                <div class="gallery-item ">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/all/1.jpg"   alt="">
                                                            <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/all/8.jpg"   alt="">
                                                            <a href="images/all/8.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2 end -->
                                                <!-- 3 -->
                                                <div class="gallery-item gallery-item-second">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/all/3.jpg"   alt="">
                                                            <a href="images/all/3.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3 end -->
                                                <!-- 4 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/all/4.jpg"   alt="">
                                                            <a href="images/all/4.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 4 end -->
                                                <!-- 5 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/all/5.jpg"   alt="">
                                                            <a href="images/all/5.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 5 end -->
                                                <!-- 7 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/all/9.jpg"   alt="">
                                                            <a href="images/all/9.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 7 end -->
                                            </div> --}}
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
                                                    <p>Celebra la lluvia, los días soleados y las noches estrelladas. Celebra la dicha de vivir rodeado de naturaleza. Celebra el privilegio de vivir tranquilo. Celebra el vivir rodeado de bosque en lotes urbanizados con áreas desde 1.000 m2 hasta 4.000 m2. Podrás disfrutar de Portería, vías pavimentadas, redes subterráneas, acueducto y alcantarillado. Las Palmas, sector Charco Azul.</p>
                                                </div>
                                            </div>
                                            <!-- list-single-main-item end -->                                          
                                            <!-- list-single-main-item -->
                                            <div class="list-single-main-item fl-wrap">
                                                <div class="list-single-main-item-title">
                                                    <h3>Details</h3>
                                                </div>
                                                <div class="list-single-main-item_content fl-wrap">
                                                    <div class="details-list">
                                                        <ul>
                                                            <li><span>Código:</span>154</li>

                                                            <li><span>Barrio: </span>Área de Expansión Altavista</li>

                                                            <li><span>Área catastral (lote): </span>1942,44 m²</li>
                                                            <li><span>Área construida: </span>0 m²</li>
                                                            <li><span>Avalúo catastral: </span>$22,855,000 COP</li>
                                                            <li><span>Macroproyecto:</span>AIE_MED Borde Urbano Noroccidental</li>
                                                            <li><span>Instrumento de tercer nivel: </span>API</li>
                                                            <li><span>Uso del suelo: </span>Agrícola</li>
                                                            <li><span>:</span></li>
                                                            <li><span>:</span></li>
                                                            <li><span>:</span></li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- list-single-main-item end -->  
                                            <!--   list-single-main-item -->                                            
                                                                                                                         
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
                                                <div class="call-btn"><a href="tel:123-456-7890" class="tolt color-bg" data-microtip-position="right"  data-tooltip="Call Now"><i class="fas fa-phone-alt"></i></a></div>
                                                <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                <div class="show-more-snopt-tooltip bxwt">
                                                    <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                                                    <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                </div>
                                                <div class="profile-widget-card">
                                                    <div class="profile-widget-image">
                                                        <img src="{{ asset('/templates/agencia-app/images/logo.png') }}" alt="">
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
                                                        <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="#">(60) + (4) 448 1740</a></li>
                                                        <li><span><i class="fal fa-envelope"></i> Correo electrónico :</span> <a href="#">info@app.gov.co</a></li>
                                                        <li><span><i class="fal fa-map"></i> Dirección : </span class="mr-1"> Carrera 55 # 42-180 Local 203. Edificio Plaza de La Libertad, Medellín Colombia</li>
                                                    </ul>
                                                </div>
                                                <div class="profile-widget-footer fl-wrap">
                                                    <a href="https://app.gov.co" class="btn float-btn color-bg small-btn" target="_blank">Ver sitio web</a>
                                                    {{-- <a href="#sec-contact" class="custom-scroll-link tolt" data-microtip-position="left"  data-tooltip="Viewing Property"><i class="fal fa-paper-plane"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget end -->
                                    <!--box-widget end --> 
                                    <!--box-widget-->
                                    <div class="box-widget fl-wrap hidden-section" style="margin-top: 30px">
                                        <div class="box-widget-content fl-wrap color-bg">
                                            <div class="color-form reset-action">
                                                <div class="color-form-title fl-wrap">
                                                    <h4>Calcula tu cuota</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. </p>
                                                </div>
                                                <form method="post"  name="mortgage-form">
                                                    <div class="fl-wrap">
                                                        <label for="amt">Cantidad a prestar </label>   
                                                        <input  id="amt" name="amt" type="text"  placeholder="0"    value="0"> 
                                                        <div class="use-current-price tolt" data-microtip-position="left" data-tooltip="Use current price"><i class="fal fa-tag"></i></div>
                                                    </div>
                                                    <label for="apr">Porcentaje a financiar</label>
                                                    <div class="price-rage-item fl-wrap">
                                                        <input type="text" id="apr" name="apr" class="price-range" data-min="0" data-max="100"    data-step="1" value="0" data-prefix="%">
                                                    </div>
                                                    <label for="trm">Plazo (Años)</label>
                                                    <div class="price-rage-item fl-wrap">
                                                        <input type="text" id="trm" name="trm" class="price-range" data-min="0" data-max="5"    data-step="1" value="0" data-prefix="Y">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <button type="button" id="sbt" class="color2-bg">Calcular</button>
                                                    <div class="reset-form reset-btn"> <i class="far fa-sync-alt"></i> Resetear</div>
                                                    <div class="monterage-title fl-wrap">
                                                        <h5>Cantidad a pagar:</h5>
                                                        <input type="text" id="pmt" name="mPmt" value="0"> 
                                                        <div class="monterage-title-item">$<span></span></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget end -->                                   
                                    <!--box-widget-->
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-title fl-wrap">Documentos del inmueble</div>
                                        <div class="box-widget-content fl-wrap">
                                            <div class="bwc_download-list">
                                                <a href="#" download><span><i class="fal fa-file-pdf"></i></span>Ficha catrastral</a>
                                                <a href="#" download><span><i class="fal fa-file-word"></i></span>VUR</a>
                                                <a href="#" download><span><i class="fal fa-file-pdf"></i></span>Planos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget end -->                                
                                    <!--box-widget-->
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-fixed-init fl-wrap" id="sec-contact">
                                            <div class="box-widget-title fl-wrap box-widget-title-color color-bg"> Solicitar más información
</div>
                                            <div class="box-widget-content fl-wrap">
                                                <div class="custom-form">
                                                    <form method="post"  name="contact-property-form">
                                                        <label>Nombre completo* <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                                        <input   name="phone" type="text"    onClick="this.select()" value="">
                                                        <label>Correo electrónico  * <span class="dec-icon"><i class="fas fa-envelope"></i></span></label>
                                                        <input   name="email" type="email"    onClick="this.select()" value="">      
                                                        <label>Tu mensaje* </label>
                                                        <textarea> </textarea>

                                                        <input type="checkbox" name="account">Crear mi cuenta
                                                        <button type="submit" class="btn float-btn color-bg fw-btn"> Solicitar información</button>
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
                                                    <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Ingresa tu correo electrónico" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">  Suscribirse</button>
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
                @stop