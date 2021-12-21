@extends('templates.agencia-app.app') @section('content')
<!-- content -->
<div class="content">
   <!--  section  -->
   <section class="hidden-section single-par2" data-scrollax-parent="true">
      <div class="bg-wrap bg-parallax-wrap-gradien">
         <div class="bg par-elem" data-bg="{{ asset('templates/agencia-app/images/bg/banner.jpeg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
      </div>
      <div class="container">
         <div class="section-title center-align big-title">
            <h2><span>Preguntas frencuentes</span></h2>
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
            <span>Preguntas frencuentes</span>
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
            <div class="col-md-4">
               <div class="box-widget fl-wrap fixed-column_menu-init" style="z-index: auto; position: relative; top: 0px;">
                  <div class="box-widget-content fl-wrap">
                     <div class="box-widget-title fl-wrap">Centro de ayuda</div>
                     <div class="faq-nav scroll-init fl-wrap">
                        <ul>
                           <li><a class="act-scrlink" href="#faq1">Pagos</a></li>
                           <li><a href="#faq2" class="">Suscripción</a></li>
                           <li><a href="#faq4" class="">Calculadoras</a></li>
                           <li><a href="#faq5" class="">Reservas</a></li>
                           <li><a href="#faq5" class="">Creación de cuentas</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-8">
               <div class="list-single-main-container">
                  <!--   list-single-main-item -->
                  <div class="list-single-main-item fl-wrap" id="faq1">
                     <div class="list-single-main-item-title big-lsmt fl-wrap">
                        <h3>Pagos</h3>
                     </div>

                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Qué medios de pago puedo utilizar dentro de la plataforma? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Puedo separar los bienes a través de la plataforma? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                              tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Puedo obtener un reembolso? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt.
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                  </div>
                  <!--   list-single-main-item end -->
                  <!--   list-single-main-item -->
                  <div class="list-single-main-item fl-wrap" id="faq2">
                     <div class="list-single-main-item-title big-lsmt fl-wrap">
                        <h3>Suscripción</h3>
                     </div>
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Puedo cancelar mi suscripción? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                              tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Puedo comprar paquetes para mi equipo?<i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt.
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                  </div>
                  <!--   list-single-main-item end -->
                  <!--   list-single-main-item -->
                  <div class="list-single-main-item fl-wrap" id="faq3">
                     <div class="list-single-main-item-title big-lsmt fl-wrap">
                        <h3>Calculadoras</h3>
                     </div>
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Pueden las calculadoras determinar cuántos apartamentos puedo construir en un lote basado en su área? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Puedo comprar solamente el acceso a una calculadora? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                              tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">Dejé de pagar la suscripción y ahora no veo las calculadoras <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt.
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                  </div>
                  <!--   list-single-main-item end -->
                  <!--   list-single-main-item -->
                  <div class="list-single-main-item fl-wrap" id="faq4">
                     <div class="list-single-main-item-title big-lsmt fl-wrap">
                        <h3>Reservas</h3>
                     </div>
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">Preguna 1 <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">Pregunta 2 <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                              tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">Pregunta 3<i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt.
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                  </div>
                  <!--   list-single-main-item end -->
                  <!--   list-single-main-item -->
                  <div class="list-single-main-item fl-wrap" id="faq5">
                     <div class="list-single-main-item-title big-lsmt fl-wrap">
                        <h3>Creación de cuentas</h3>
                     </div>
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Puedo registrame con mi correo electrónico? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                              tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                     <!--   accordion-lite -->
                     <div class="accordion-lite-container fl-wrap">
                        <div class="accordion-lite-header fl-wrap">¿Qué información obtienen desde mi Facebook? <i class="fas fa-plus"></i></div>
                        <div class="accordion-lite_content fl-wrap">
                           <p>
                              Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                              tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .
                           </p>
                        </div>
                     </div>
                     <!--   accordion-lite end -->
                  </div>
                  <!--   list-single-main-item end -->
               </div>
            </div>
         </div>
      </div>
      <div class="limit-box fl-wrap"></div>
   </section>
</div>
<!-- content end -->

@include('templates.agencia-app.includes.footer.footer') @stop
