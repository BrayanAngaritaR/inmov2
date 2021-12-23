<!--register form -->
<div class="main-register-wrap modal">
   <div class="reg-overlay"></div>
   <div class="main-register-holder tabs-act">
      <div class="main-register-wrapper modal_main fl-wrap">
         <div class="main-register-header color-bg">
            <div class="main-register-logo fl-wrap">
               <img src="templates/agencia-app/images/logo.png" style="height: 120px !important;" alt="" />
            </div>
            <div class="main-register-bg">
               <div class="mrb_pin"></div>
               <div class="mrb_pin mrb_pin2"></div>
            </div>
            <div class="mrb_dec"></div>
            <div class="mrb_dec mrb_dec2"></div>
         </div>
         <div class="main-register">
            <div class="close-reg"><i class="fal fa-times"></i></div>
            <ul class="tabs-menu fl-wrap no-list-style">
               <li class="current">
                  <a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Ingresar</a>
               </li>
               <li>
                  <a href="#tab-2"><i class="fal fa-user-plus"></i> Registrarse</a>
               </li>
            </ul>
            <!--tabs -->
            <div class="tabs-container">
               <div class="tab">
                  <!--tab -->
                  <div id="tab-1" class="tab-content first-tab">
                     @include('templates.agencia-app.includes.auth._login-form')
                  </div>
                  <!--tab end -->
                  <!--tab -->
                  <div class="tab">
                     <div id="tab-2" class="tab-content">
                        @include('templates.agencia-app.includes.auth._register-form')
                     </div>
                  </div>
                  <!--tab end -->
               </div>
               <!--tabs end -->
               <div class="log-separator fl-wrap"><span>o</span></div>
               <div class="soc-log fl-wrap">
                  <p>Para ingresar o crear tu cuenta más rápido usa una red social</p>
                  <a href="#" class="facebook-log"> Facebook</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--register form end -->