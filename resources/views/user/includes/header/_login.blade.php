<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

	<div class="small-dialog-header">
		<h3>Ingresar / Registrarse</h3>
	</div>

	<!--Tabs -->
	<div class="sign-in-form style-1">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Ingresar</a></li>
			<li><a href="#tab2">Registrarse</a></li>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="POST" class="login" action="{{ route('login') }}">
					@csrf

					<p class="form-row form-row-wide">
						<label for="login_email">Correo electrónico:
							<i class="im im-icon-Male"></i>
							<input type="text" class="input-text" name="email" id="login_email" value="" />
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="login_password">Contraseña:
							<i class="im im-icon-Lock-2"></i>
							<input class="input-text" type="password" name="password" id="login_password"/>
						</label>
						<span class="lost_password">
							<a href="#" >¿Olvidaste la contraseña?</a>
						</span>
					</p>

					<div class="form-row">
						<div class="checkboxes margin-top-10">
							<input id="remember-me" type="checkbox" name="check">
							<label for="remember-me">Recordar mis datos</label>
						</div>

						<input type="submit" class="button border margin-top-10" name="login" value="Ingresar" />
					</div>
					
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="POST" action="{{ route('register') }}" class="register">
            @csrf
				<p class="form-row form-row-wide">
					<label for="register_name">Nombre completo:
						<i class="im im-icon-Male"></i>
						<input type="text" class="input-text" name="name" id="register_name" value="" />
					</label>
				</p>
					
				<p class="form-row form-row-wide">
					<label for="register_email">Correo electrónico:
						<i class="im im-icon-Mail"></i>
						<input type="text" class="input-text" name="email" id="register_email" value="" />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="register_password">Contraseña:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password" id="register_password"/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password_confirmation">Repetir contraseña:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password_confirmation" id="password_confirmation"/>
					</label>
				</p>

				<input type="submit" class="button border fw margin-top-10" name="register" value="Registrarse" />

				</form>
			</div>

		</div>
	</div>
</div>