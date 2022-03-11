<nav>
   <ul class="no-list-style">
   	<li>
         <a href="/" class="act-link">Inicio</a>
      </li>

      <li>
         <a href="#">Propiedades <i class="fa fa-caret-down"></i></a>
         <!--second level -->
         <ul>
            <li><a href="{{ route('user.properties.index') }}?commune=all?district=all?destination=all?opportunity=1?action=all?area=all?macroproject=all?treatment=all?instrument=all?floor_use=all?rph=0?loan=0?bic=0?management=0">Oportunidad inmobiliaria</a></li>

            <li><a href="{{ route('user.properties.index') }}?commune=all?district=all?destination=all?opportunity=2?action=all?area=all?macroproject=all?treatment=all?instrument=all?floor_use=all?rph=0?loan=0?bic=0?management=0">Gestión comercial</a></li>
         </ul>
         <!--second level end-->
      </li>

      <li>
         <a href="{{ route('user.soon.index') }}" class="act-link">
            <b>Plan rector</b>
         </a>
      </li>

      <li>
         <a href="{{ route('user.soon.index') }}" class="act-link">
            <b>PIGP</b>
         </a>
      </li>

      <li>
         <a href="#">Proyectos <i class="fa fa-caret-down"></i></a>
         <!--second level -->
         <ul>
            <li><a href="{{ route('user.soon.index') }}">Hotel y centro de negocios Plaza Mayor</a></li>
            <li><a href="{{ route('user.soon.index') }}">Zona Franca Medellín</a></li>
            <li><a href="{{ route('user.soon.index') }}">Villa deportiva</a></li>
            <li><a href="{{ route('user.soon.index') }}">Unidad Hospitalaria Buenos Aires</a></li>
            <li><a href="{{ route('user.soon.index') }}">Terraza CAM</a></li>
            <li><a href="{{ route('user.soon.index') }}">Placita de Flórez</a></li>
            <li><a href="{{ route('user.soon.index') }}">La Aurora</a></li>
         </ul>
         <!--second level end-->
      </li>

      <li>
         <a href="#">Calculadora <i class="fa fa-caret-down"></i></a>
         <!--second level -->
         <ul>
            <li><a href="{{ route('user.soon.index') }}">Oportunidades</a></li>
            <li><a href="{{ route('user.soon.index') }}">Costos de estructuración</a></li>
            <li><a href="{{ route('user.soon.index') }}">Cabida normativa</a></li>
            <li><a href="{{ route('user.soon.index') }}">Producto inmobiliario</a></li>
            <li><a href="{{ route('user.soon.index') }}">CAPEX</a></li>
            <li><a href="{{ route('user.soon.index') }}">Rentabilidad</a></li>
         </ul>
         <!--second level end-->
      </li>
      <li>
         <a href="#">Más <i class="fa fa-caret-down"></i></a>
         <!--second level -->
         <ul>
            <li><a href="{{ route('user.about.index') }}">Blog</a></li>
            <li><a href="{{ route('user.about.index') }}">Noticias</a></li>
            <li><a href="{{ route('user.about.index') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('user.contact.index') }}">Contáctanos</a></li>
            <li><a href="{{ route('user.faq.index') }}">Preguntas frecuentes</a></li>
         </ul>
         <!--second level end-->
      </li>

      @auth
      <li>
         <a href="#">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></a>
         <!--second level -->
         <ul>
            <li><a href="{{ route('panel.properties.index') }}">Panel</a></li>
            <li><a href="{{ route('user.soon.index') }}">Mi perfil</a></li>
            <li><a href="{{ route('user.soon.index') }}">Configuración</a></li>
            <li><a href="{{ route('user.soon.index') }}">Suscripción</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>

         </ul>
         <!--second level end-->
      </li>
      @endauth
   </ul>
</nav>