@extends('templates.agencia-app.app')
@section('content')
<!-- content -->
<div class="content">
   <!--  section  -->
   <section class="hidden-section single-par2" data-scrollax-parent="true">
      <div class="bg-wrap bg-parallax-wrap-gradien">
         <div class="bg par-elem" data-bg="http://inmo.test/templates/agencia-app/images/bg/banner.jpeg" data-scrollax="properties: { translateY: '30%' }"></div>
      </div>
      <div class="container">
         <div class="section-title center-align big-title">
            <h2><span>Sobre nosotros</span></h2>
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
            <span>Sobre nosotros</span>
         </div>

         <div class="share-holder hid-share">
            <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Compartir </a>
            <div class="share-container isShare"></div>
         </div>
      </div>
   </div>
   <!-- breadcrumbs end -->
   <!-- section -->
   <section class="gray-bg small-padding">
      <div class="container">
         <div class="row">
            <!-- services-item -->
            <div class="col-md-4">
               <div class="services-item fl-wrap">
                  <i class="lni lni-world"></i>
                  <h4>Alta disponibilidad<span>01</span></h4>
                  <p>InmoApp se encuentra alojada en nuestros servidores, donde proporcionamos una disponibilidad superior al 99%.</p>
                  @include('templates.agencia-app.includes.auth._login-link')
               </div>
            </div>
            <!-- services-item  end-->
            <!-- services-item -->
            <div class="col-md-4">
               <div class="services-item fl-wrap">
                  <i class="lni lni-bullhorn"></i>
                  <h4>Mayor alcance <span>02</span></h4>
                  <p>Contamos con un equipo altamente preparado para que los bienes publicados lleguen a más empresas/personas interesadas.</p>
                  @include('templates.agencia-app.includes.auth._login-link')
               </div>
            </div>
            <!-- services-item  end-->
            <!-- services-item -->
            <div class="col-md-4">
               <div class="services-item fl-wrap">
                  <i class="fal fa-phone-laptop"></i>
                  <h4>Múltiples dispositivos <span>03</span></h4>
                  <p>InmoAPP está disponible para móviles, tablets y dispositivos de escritorio. En todos usas la misma cuenta.</p>
                  @include('templates.agencia-app.includes.auth._login-link')
               </div>
            </div>
            <!-- services-item  end-->
         </div>
      </div>
   </section>
   <!-- section end-->
   <!-- section -->
   <section>
      <div class="container">
         <!--about-wrap -->
         <div class="about-wrap">
            <div class="row">
               <div class="col-md-5">
                  <div class="about-title fl-wrap">
                     <h2>Sobre subdirección <span>inmobiliaria</span></h2>
                     <h4>AGENCIA APP</h4>
                  </div>
                  <p class="font-regular">
                     Desarrolla modelos inmobiliarios novedosos que permiten gestionar alianzas público privadas en los bienes inmuebles propiedad del Municipio de Medellín (diferentes a la Ley 1508) para el desarrollo de proyectos públicos. Igualmente, genera recursos para su cualificación, mantenimiento y sostenimiento.
                  </p>

                  <p class="font-regular">
                     En el área de Gestión Inmobiliaria nuestra líder es la ingeniera civil Natacha Gómez, quien además es especialista en gerencia de proyectos de la Universidad EAFIT. Natacha tiene en su hoja de vida experiencia en el sector privado y público. Trabajó con Vértice Ingeniería S.A, inicialmente; posteriormente, laboró en la Unidad de Gestión de Riesgos del Área Metropolitana del Valle de Aburrá. En diciembre de 2017 asumió su actual cargo como subdirectora de gestión inmobiliaria.
                  </p>
                  <a href="#" class="btn small-btn float-btn color-bg">Read More</a>
               </div>
               <div class="col-md-1"></div>
               <div class="col-md-6">
                  <div class="about-img fl-wrap">
                     <img src="{{ asset('templates/agencia-app/images/rodrigo.foronda.jpg') }}" width="60%" alt="" />
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
   <section>
      <div class="container">
         <!-- section-title -->
         <div class="section-title st-center fl-wrap">
            <h4>El equipo</h4>
            <h2>Nuestro increíble equipo</h2>
         </div>
         <!-- section-title end -->
         <div class="clearfix"></div>
         <div class="row">
            <!-- team-item -->
            <div class="col-md-4">
               <div class="team-item fl-wrap">
                  <div class="team-img fl-wrap">
                     <img src="{{ asset('templates/agencia-app/images/team/natacha.gomez.jpg') }}" class="respimg" alt="" />
                  </div>
                  <div class="team-content fl-wrap">
                     <h4>Natacha Gómez</h4>
                     <h5>Subdirectora - Ingeniera Civil</h5>
                     <p><b>Especialista en Gestión de proyectos</b>. Natacha apoya la gestión técnica de los proyectos y procesos de la Subdirección de Gestión de Alianzas Público Privadas de la Agencia APP</p>
                  </div>
                  <div class="team-footer fl-wrap">
                     <ul class="team-social">
                        <li>
                           <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                     </ul>
                     <a href="mailto:yourmail@email.com" class="tolt tf-btn" data-microtip-position="top-right" data-tooltip="Enviar mensaje"><i class="fal fa-envelope"></i></a>
                  </div>
               </div>
            </div>
            <!-- team-item end -->
            <!-- team-item -->
            <div class="col-md-4">
               <div class="team-item fl-wrap">
                  <div class="team-img fl-wrap">
                     <img src="{{ asset('templates/agencia-app/images/team/santiago.castro.jpg') }}" class="respimg" alt="" />
                  </div>
                  <div class="team-content fl-wrap">
                     <h4>Santiago Castro Hernández</h4>
                     <h5>Arquitecto</h5>
                     <p>Apoya la gestión técnica de los proyectos y procesos de la Subdirección de Gestión de Alianzas Público Privadas de la Agencia APP</p>
                  </div>
                  <div class="team-footer fl-wrap">
                     <ul class="team-social">
                        <li>
                           <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                     </ul>
                     <a href="mailto:yourmail@email.com" class="tolt tf-btn" data-microtip-position="top-right" data-tooltip="Enviar mensaje"><i class="fal fa-envelope"></i></a>
                  </div>
               </div>
            </div>
            <!-- team-item end -->
            <!-- team-item -->
            <div class="col-md-4">
               <div class="team-item fl-wrap">
                  <div class="team-img fl-wrap">
                     <img src="{{ asset('templates/agencia-app/images/team/tatiana.delosrios.jpg') }}" class="respimg" alt="" />
                  </div>
                  <div class="team-content fl-wrap">
                     <h4>Tatiana De Los Ríos Gaviria</h4>
                     <h5>Arquitecta</h5>
                     <p>Apoya desde el componente técnico la gestión de proyectos.</p>
                  </div>
                  <div class="team-footer fl-wrap">
                     <ul class="team-social">
                        <li>
                           <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                     </ul>
                     <a href="mailto:yourmail@email.com" class="tolt tf-btn" data-microtip-position="top-right" data-tooltip="Enviar mensaje"><i class="fal fa-envelope"></i></a>
                  </div>
               </div>
            </div>
            <!-- team-item end -->
         </div>
      </div>
   </section>
</div>
<!-- content end -->

@include('templates.agencia-app.includes.footer.footer')
@stop



