<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
   <div class="nk-sidebar-element nk-sidebar-head">
      <div class="nk-sidebar-brand">
         <a href="{{ url('/') }}" class="logo-link nk-sidebar-logo">
            <img class="logo-light logo-img" src="{{ asset('templates/agencia-app/images/logo.svg') }}" srcset="{{ asset('templates/agencia-app/images/logo.svg') }} 2x" width="180" alt="logo" />            <img class="logo-dark logo-img" src="{{ asset('templates/agencia-app/images/logo.svg') }}" srcset="{{ asset('templates/agencia-app/images/logo.svg') }} 2x" width="180" alt="logo-dark" />
         </a>
      </div>
      <div class="nk-menu-trigger mr-n2">
         <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
         <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
      </div>
   </div>
   <!-- .nk-sidebar-element -->
   <div class="nk-sidebar-element">
      <div class="nk-sidebar-content">
         <div class="nk-sidebar-menu" data-simplebar>
            <ul class="nk-menu">
                  <li class="nk-menu-heading">
                     <h6 class="overline-title text-primary-alt">Estadísticas</h6>
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                     <a href="{{ route('panel.statistics.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                        <span class="nk-menu-text">Resumen</span>
                        <span class="nk-menu-badge badge-danger">Nuevo</span>
                     </a>
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-heading">
                     <h6 class="overline-title text-primary-alt">Contenido</h6>
                  </li>
                  <!-- .nk-menu-heading -->
                  <li class="nk-menu-item has-sub">
                     <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                        <span class="nk-menu-text">Bienes</span>
                     </a>
                     <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                           <a href="{{ route('panel.properties.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar un bien</span></a>
                        </li>
                        <li class="nk-menu-item">
                           <a href="{{ route('panel.properties.index') }}" class="nk-menu-link"><span class="nk-menu-text">Todos los bienes</span></a>
                        </li>
                        <li class="nk-menu-item">
                           <a href="{{ route('panel.properties.pending.index') }}" class="nk-menu-link"><span class="nk-menu-text">Por revisar</span></a>
                        </li>
                     </ul>
                     <!-- .nk-menu-sub -->
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-item has-sub">
                     <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                        <span class="nk-menu-text">Usuarios</span>
                     </a>
                     <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                           <a href="{{ route('panel.users.index') }}" class="nk-menu-link"><span class="nk-menu-text">Usuarios registrados</span></a>
                        </li>
                        <li class="nk-menu-item">
                           <a href="{{ route('panel.users.collaborators.index') }}" class="nk-menu-link"><span class="nk-menu-text">Colaboradores</span></a>
                        </li>
                     </ul>
                     <!-- .nk-menu-sub -->
                  </li>
                  <!-- .nk-menu-item -->

                  <li class="nk-menu-heading">
                     <h6 class="overline-title text-primary-alt">Solicitudes</h6>
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                     <a href="{{ route('panel.requests.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-question"></em></span>
                        <span class="nk-menu-text">Lista de solicitudes</span>
                     </a>
                  </li>
                  <!-- .nk-menu-item -->
               </ul>
            <!-- .nk-menu -->
         </div>
         <!-- .nk-sidebar-menu -->

         <div class="nk-sidebar-footer">
               <ul class="nk-menu nk-menu-footer">
                  <li class="nk-menu-item">
                     <a target="_blank" href="mailto:brayan.angarita@app.gov.co" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                        <span class="nk-menu-text">Soporte</span>
                     </a>
                  </li>
                  <li class="nk-menu-item ml-auto">
                     <div class="dropup">
                        <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                           <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                           <span class="nk-menu-text">Español</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <ul class="language-list">
                              <li>
                                 <a href="#" class="language-item">
                                    <img src="./images/flags/english.png" alt="" class="language-flag" />
                                    <span class="language-name">English (Soon)</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="language-item">
                                    <img src="./images/flags/spanish.png" alt="" class="language-flag" />
                                    <span class="language-name">Español</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </li>
               </ul>
               <!-- .nk-footer-menu -->
            </div>
            
      </div>
      <!-- .nk-sidebar-content -->
   </div>
   <!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->