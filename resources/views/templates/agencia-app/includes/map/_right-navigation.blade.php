<nav class="scroll-nav horizontal horizontal-right scroll-init fixed-column_menu-init">
   <ul class="no-list-style">
      <li class="cursor-pointer" onclick='window.location.href = "{{ route('user.properties.mangement.index') }}"'>
         <p class="tooltip-trigger filter-opportunities font-20">
            <i class="fas fa-circle"></i>
         </p>
         <span class="me-2 tooltip-drop tooltip-left selector-links">
            Gestión de activos
         </span>
      </li>

      <li class="cursor-pointer" onclick='window.location.href = "{{ route('user.properties.index') }}?commune=all?district=all?destination=all?opportunity=1?action=all?area=all?macroproject=all?treatment=all?instrument=all?floor_use=all?rph=0?loan=0?bic=0?management=0"'>
         <p class="tooltip-trigger text-danger font-20">
            <i class="fas fa-circle"></i>
         </p>
         <span class="me-2 tooltip-left selector-links ">
            Oportunidades inmobiliarias
         </span>
      </li>

      <li class="cursor-pointer" onclick='window.location.href = "#"'>
         <p class="tooltip-trigger filter-projects font-20">
            <i class="fas fa-circle"></i>
         </p>
         <span class="me-2 tooltip-left selector-links ">
            Plan rector
         </span>
      </li>

      <li class="cursor-pointer" onclick='window.location.href = "#"'>
         <p class="tooltip-trigger filter-plans font-20">
            <i class="fas fa-circle"></i>
         </p>
         <span class="me-2 tooltip-left selector-links ">
            Gestión de Prado
         </span>
      </li>

      <li class="cursor-pointer" onclick='window.location.href = "#"'>
         <p class="tooltip-trigger filter-projects font-20">
            <i class="fas fa-circle"></i>
         </p>
         <span class="me-2 tooltip-left selector-links ">
            Proyectos
         </span>
      </li>
   </ul>
</nav>