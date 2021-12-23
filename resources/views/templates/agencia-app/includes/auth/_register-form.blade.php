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
