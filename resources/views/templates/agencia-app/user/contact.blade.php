@extends('templates.agencia-app.app')
@section('content')
<!-- content -->
<div class="content">
   <!--  section  -->
   <section class="hidden-section single-par2" data-scrollax-parent="true">
      <div class="bg-wrap bg-parallax-wrap-gradien">
         <div class="bg par-elem" data-bg="{{ asset('templates/agencia-app/images/bg/banner.jpeg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
      </div>
      <div class="container">
         <div class="section-title center-align big-title">
            <h2><span>Contáctanos</span></h2>
            <h4>Plataforma de gestión inmobiliaria y el equipo que lo hace posible.</h4>
         </div>
         <div class="scroll-down-wrap">
            <div class="mousey">
               <div class="scroller"></div>
            </div>
            <span>Sigue bajando para ver más</span>
         </div>
      </div>
   </section>
   <!--  section  end-->
   <!-- breadcrumbs-->
   <div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap">
      <div class="container">
         <div class="breadcrumbs-list">
            <a href="#">Inicio</a> 
            <span>Contáctanos</span>
         </div>

         <div class="share-holder hid-share">
            <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Compartir </a>
            <div class="share-container isShare"></div>
         </div>
      </div>
   </div>
   <!-- breadcrumbs end -->
   
   <section class="gray-bg small-padding">
                        <div class="container">
                            <div class="row">
                                <!-- services-item -->
                                <div class="col-md-4">
                                    <div class="services-item fl-wrap">
                                        <i class="fal fa-envelope"></i>
                                        <h4>Nuestro correo <span>01</span></h4>
                                        <p>Puedes escribirnos directamente al correo electrónico.</p>
                                        <a href="#" class="serv-link sl-b">info@app.gov.co</a>
                                    </div>
                                </div>
                                <!-- services-item  end-->
                                <!-- services-item -->
                                <div class="col-md-4">
                                    <div class="services-item fl-wrap">
                                        <i class="fal fa-phone-rotary"></i>
                                        <h4>Número de contacto<span>02</span></h4>
                                        <p>Llámanos a nuestra oficina para un contacto más rápido.</p>
                                        <a href="#" class="serv-link sl-b">+(60) (4) 448 1740</a>
                                    </div>
                                </div>
                                <!-- services-item  end-->
                                <!-- services-item -->
                                <div class="col-md-4">
                                    <div class="services-item fl-wrap">
                                        <i class="fal fa-map-marked"></i>
                                        <h4>Ubicación <span>03</span></h4>
                                        <p>Si lo prefieres, visítanos en nuestra oficina y nos tomamos un café.</p>
                                        <a href="#" class="serv-link sl-b">Carrera 55 # 42-180 Local 203</a>
                                    </div>
                                </div>
                                <!-- services-item  end-->                       
                            </div>
                            <div class="clearfix"></div>
                            <div class="contacts-opt fl-wrap">
                                <div class="contact-social">
                                    <span class="cs-title">Síguenos: </span>
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn small-btn float-btn color-bg cf_btn">Enviar mensaje</a>
                                <div class="contact-notifer">O visita nuestro <a href="{{ route('user.faq.index') }}"> centro de ayuda</a></div>
                            </div>
                            <!--box-widget  -->       
                            <div class="box-widget">
                                <div class="box-widget-title single_bwt fl-wrap">Nuestras instalaciones</div>
                                <p>Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas. <b>Carrera 55 # 42-180 Local 203. Edificio Plaza de La Libertad</b>.</p>
                                <!--box-widget end-->
                            </div>
                            <!--box-widget-->
                            <div class="box-widget fl-wrap">
                                <div class="map-widget contacts-map fl-wrap">
                                 <div class="map-container">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1411705996925!2d-75.5770204852307!3d6.24511999547952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429ed3d98c01f%3A0xdbff67f7cf11138e!2sAGENCIA%20APP!5e0!3m2!1ses!2sco!4v1640029685344!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                 </div>
                                </div>
                            </div>
                            <!--box-widget end -->                            
                        </div>
                    </section>

</div>
<!-- content end -->

<!--contact-form-wrap -->  
        <div class="contact-form-wrap">
            <div class="contact-form-container">
                <div class="contact-form-main fl-wrap">
                    <div class="contact-form-header">
                        <h4>Enviar mensaje</h4>
                        <span class="close-contact-form"><i class="fal fa-times"></i></span>
                    </div>
                    <div id="contact-form" class="contact-form fl-wrap">
                        <div id="message"></div>
                        <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                            <fieldset>
                                <label>Nombre completo* <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                <input type="text" name="name" id="name"/>
                                <label>Correo electrónico* <span class="dec-icon"><i class="fas fa-envelope"></i></span></label>
                                <input type="text"  name="email" id="email"/>
                                <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Tu mensaje:"></textarea>
                            </fieldset>
                            <button class="btn float-btn color-bg" style="margin-top:15px;" id="submit">Enviar mensaje</button>
                        </form>
                    </div>
                    <!-- contact form  end-->               
                </div>
            </div>
            <div class="contact-form-overlay"></div>
        </div>
        <!--contact-form-wrap end-->   

@include('templates.agencia-app.includes.footer.footer')
@stop



