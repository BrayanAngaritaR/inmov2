<div class="custom-form">
   <form method="post" action="{{ route('login') }}" name="registerform">
      @csrf
      <label>
         Correo electrónico * <span class="dec-icon"><i class="fal fa-user"></i></span>
      </label>
      <input name="email" type="text" onclick="this.select()" value="" />
      <div class="pass-input-wrap fl-wrap">
         <label>
            Contraseña * <span class="dec-icon"><i class="fal fa-key"></i></span>
         </label>
         <input name="password" type="password" autocomplete="off" onclick="this.select()" value="" />
         <span class="eye"><i class="fal fa-eye"></i> </span>
      </div>
      <div class="lost_password">
         <a href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
      </div>
      <div class="filter-tags">
         <input id="check-a3" type="checkbox" name="check" />
         <label for="check-a3">Recordar mis datos</label>
      </div>
      <div class="clearfix"></div>
      <button type="submit" class="log_btn color-bg">Ingresar</button>
   </form>
</div>