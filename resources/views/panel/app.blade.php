<!DOCTYPE html>
<html lang="zxx" class="js">
   <head>
      <meta charset="utf-8" />
      <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita @brayanangaritar">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Aplicativo para conocer los bienes inmuebles gestionados por la AGENCIA APP - Subdurección Inmobiliaria - Alcaldía de Medellín">
      <link rel="shortcut icon" href="{{ asset('logo.png') }}">
      <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
      <title>@yield('title', 'AEEP') - AGENCIA APP</title>
      <!-- Fav Icon  -->
      <link rel="shortcut icon" href="./images/favicon.png" />
      <!-- Page Title  -->
      <title>@yield('title', 'InmoAPP') - AGENCIA APP</title>
      <!-- StyleSheets  -->

      <meta name="csrf-token" content="{{ csrf_token() }}" />
      
      <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.7.0')}}" />
      <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.7.0')}}" />
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" />
   </head>

   <body class="nk-body bg-lighter npc-default has-sidebar">
      <div class="nk-app-root">
         <!-- main @s -->
         <div class="nk-main">
            <!-- sidebar @s -->
            @include('panel.includes._sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap">
               <!-- main header @s -->
               <div class="nk-header nk-header-fixed is-light">
                  <div class="container-fluid">
                     <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                           <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                           <a href="{{ url('/') }}" class="logo-link">
                              <img class="logo-light logo-img" src="{{ asset('user/img/logo.png') }}" srcset="{{ asset('user/img/logo.png') }} 2x" alt="logo" />
                              <img class="logo-dark logo-img" src="{{ asset('user/img/logo.png') }}" srcset="{{ asset('user/img/logo.png') }} 2x" alt="logo-dark" />
                           </a>
                        </div>
                        <!-- .nk-header-brand -->
                        <div class="nk-header-news d-none d-xl-block">
                           <div class="nk-news-list">
                              <a class="nk-news-item" href="https://intranet.app.gov.co/equipo-app/subdireccion-de-gesti%C3%B3n-inmobiliaria" target="_blank">
                                 <div class="nk-news-icon">
                                    <em class="icon ni ni-card-view"></em>
                                 </div>
                                 <div class="nk-news-text">
                                    <p>Colaboradores de la subdirección Inmobiliaria </p>
                                    <em class="icon ni ni-external"></em>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <!-- .nk-header-news -->
                        <div class="nk-header-tools">
                           <ul class="nk-quick-nav">
                              <li class="dropdown user-dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="user-toggle">
                                       <div class="user-avatar sm">
                                          <em class="icon ni ni-user-alt"></em>
                                       </div>
                                       <div class="user-info d-none d-md-block">
                                          <div class="user-status">Administrador</div>
                                          <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                       <div class="user-card">
                                          <div class="user-avatar">
                                             <span>AB</span>
                                          </div>
                                          <div class="user-info">
                                             <span class="lead-text">{{ Auth::user()->name }}</span>
                                             <span class="sub-text">{{ Auth::user()->email }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li>
                                             <a href="#"><em class="icon ni ni-user-alt"></em><span>Ver perfil</span></a>
                                          </li>
                                          <li>
                                             <a href="#"><em class="icon ni ni-setting-alt"></em><span>Configurar mi cuenta</span></a>
                                          </li>
                                          <li>
                                             <a href="{{-- html/user-profile-activity.html --}}"><em class="icon ni ni-activity-alt"></em><span>Actividad de mi cuenta</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li>
                                             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                             <em class="icon ni ni-signout"></em> Cerrar sesión
                                             </a>
                                          </li>
                                          
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                          </form>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <!-- .dropdown -->
                              <li class="dropdown notification-dropdown mr-n1">
                                 <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                    <div class="dropdown-head">
                                       <span class="sub-title nk-dropdown-title">Notificaciones</span>
                                       <a href="#">Marcar como leído</a>
                                    </div>
                                    <div class="dropdown-body">
                                       <div class="nk-notification">
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">Bienvenido a la plataforma de gestión inmobiliaria</div>
                                                <div class="nk-notification-time">Hace 1 minuto</div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- .nk-notification -->
                                    </div>
                                    <!-- .nk-dropdown-body -->
                                    <div class="dropdown-foot center">
                                       <a href="#">Ver todas</a>
                                    </div>
                                 </div>
                              </li>
                              <!-- .dropdown -->
                           </ul>
                           <!-- .nk-quick-nav -->
                        </div>
                        <!-- .nk-header-tools -->
                     </div>
                     <!-- .nk-header-wrap -->
                  </div>
                  <!-- .container-fliud -->
               </div>
               <!-- main header @e -->
               <!-- content @s -->
               <div class="nk-content nk-content-fluid">
                  <div class="container-xl wide-lg">
                     <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                           <div class="nk-block-between">
                              <div class="nk-block-head-content">
                                 <h3 class="nk-block-title page-title">@yield('title', 'Inmobiliaria')</h3>
                                 <div class="nk-block-des text-soft">
                                    <p> {{-- <strong>{{ Auth::user()->name }}</strong>,  --}}@yield('subtitle', 'AGENCIA APP')</p>
                                 </div>
                              </div>
                              <!-- .nk-block-head-content -->
                              
                              @yield('head_content')

                              <!-- .nk-block-head-content -->
                           </div>
                           <!-- .nk-block-between -->
                        </div>
                        <!-- .nk-block-head -->
                        @yield('content')
                        <!-- .nk-block -->
                     </div>
                  </div>
               </div>
               <!-- content @e -->
               <!-- footer @s -->
               <div class="nk-footer">
                  <div class="container-fluid">
                     <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">&copy; {{ date('Y') }} <a href="https://app.gov.co" target="_blank">AGENCIA APP</a> - Subdirección Inmobiliaria</div>
                        <div class="nk-footer-links">
                           <ul class="nav nav-sm">
                              <li class="nav-item"><a class="nav-link" href="#">Términos y condiciones</a></li>
                              <li class="nav-item"><a class="nav-link" href="#">Privacidad</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- footer @e -->
            </div>
            <!-- wrap @e -->
         </div>
         <!-- main @e -->
      </div>
      <!-- app-root @e -->
      <!-- JavaScript -->
      <script src="{{ asset('assets/js/bundle.js?ver=2.7.0')}}"></script>
      <script src="{{ asset('assets/js/scripts.js?ver=2.7.0')}}"></script>
      <script src="{{ asset('assets/js/charts/gd-default.js?ver=2.7.0')}}"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      @if(Session::has('info'))
      <script type="text/javascript">
         Swal.fire({
            position: 'top-end',
            icon: '{{ Session::get('info')[0] }}',
            title: '{{ Session::get('info')[1] }}',
            showConfirmButton: false,
            timer: 2000
         });
      </script>
      @endif

      <script type="text/javascript">
         //Enviar peticiones POST dinámicamente
         function sendDynamicInfo(info, url_type, url){

            //Configurar el token CSRF en la petición
            $.ajaxSetup({
               headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
               },
            });

            //Retornar la respuesta del controlador
            return $.ajax({
               type: url_type,
               url: url,
               data: info,
               success: function (data) {
                  return data;
               },
            });
         }

         //Mostrar mensajes de alerta o de error
         function showToast(timer, icon, title){
            const Toast = Swal.mixin({
               toast: true,
               position: 'top-end',
               showConfirmButton: false,
               timer: timer,
               timerProgressBar: true,
               didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
               }
            });

            Toast.fire({
               icon: icon,
               title: title
            });
         }
      </script>

      @stack('scripts')
   </body>
</html>
