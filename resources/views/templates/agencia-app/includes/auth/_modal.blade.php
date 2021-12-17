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
                     <div class="custom-form">
                        <form method="post" action="{{ route('login') }}" name="registerform">
                        	@csrf
                           <label>
                              Correo electrónico * <span class="dec-icon"><i class="fal fa-user"></i></span>
                           </label>
                           <input name="email" type="text" onClick="this.select()" value="" />
                           <div class="pass-input-wrap fl-wrap">
                              <label>
                                 Contraseña * <span class="dec-icon"><i class="fal fa-key"></i></span>
                              </label>
                              <input name="password" type="password" autocomplete="off" onClick="this.select()" value="" />
                              <span class="eye"><i class="fal fa-eye"></i> </span>
                           </div>
                           <div class="lost_password">
                              <a href="#">¿Olvidaste la contraseña?</a>
                           </div>
                           <div class="filter-tags">
                              <input id="check-a3" type="checkbox" name="check" />
                              <label for="check-a3">Recordar mis datos</label>
                           </div>
                           <div class="clearfix"></div>
                           <button type="submit" class="log_btn color-bg">Ingresar</button>
                        </form>
                     </div>
                  </div>
                  <!--tab end -->
                  <!--tab -->
                  <div class="tab">
                     <div id="tab-2" class="tab-content">
                        <div class="custom-form">
                           <form method="post" action="{{ route('register') }}" name="registerform" class="main-register-form" id="main-register-form2">
                              
                              @csrf

                              <label>
                                 Nombre completo * <span class="dec-icon"><i class="fal fa-user"></i></span>
                              </label>
                              <input name="name" type="text" onClick="this.select()" value="" />
                              <label>
                                 Correo electrónico * <span class="dec-icon"><i class="fal fa-envelope"></i></span>
                              </label>
                              <input name="email" type="text" onClick="this.select()" value="" />
                              <div class="pass-input-wrap fl-wrap">
                                 <label>
                                    Contraseña * <span class="dec-icon"><i class="fal fa-key"></i></span>
                                 </label>
                                 <input name="password" type="password" autocomplete="off" onClick="this.select()" value="" />
                                 <span class="eye"><i class="fal fa-eye"></i> </span>
                              </div>

                              <div class="pass-input-wrap fl-wrap">
                                 <label>
                                    Confirmar contraseña * <span class="dec-icon"><i class="fal fa-key"></i></span>
                                 </label>
                                 <input name="password_confirmation" type="password" autocomplete="off" onClick="this.select()" value="" />
                                 <span class="eye"><i class="fal fa-eye"></i> </span>
                              </div>

                              <div class="filter-tags ft-list">
                                 <label for="check-a2">Al crear una cuenta estás de acuerdo con las <a href="#">Políticas de privacidad </a> y los <a href="#">Términos y condiciones</a>.</label>
                              </div>
                              <div class="clearfix"></div>
                              <button type="submit" class="log_btn color-bg mt-3">Registrarse</button>
                           </form>
                        </div>
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