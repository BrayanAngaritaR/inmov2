<nav>
   <ul class="no-list-style">
   	<li>
         <a href="/" class="act-link">Inicio</a>
      </li>

      <li>
         <a href="#">Propiedades <i class="fa fa-caret-down"></i></a>
         <!--second level -->
         <ul>
            <li><a href="#">En venta</a></li>
            <li><a href="#">En arriendo</a></li>
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
            <li><a href="{{ route('user.about.index') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('user.contact.index') }}">Contáctanos</a></li>
            <li><a href="{{ route('user.faq.index') }}">Preguntas frecuentes</a></li>
         </ul>
         <!--second level end-->
      </li>
   </ul>
</nav>