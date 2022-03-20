<!DOCTYPE html>
<html lang="en">
   <head>
      <!--=============== basic  ===============-->
      <meta charset="UTF-8" />
      <title>@yield('title', 'Inmo APP - Plataforma de gestión de bienes inmuebles')</title>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="robots" content="index, follow" />
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <!--=============== css  ===============-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/plugins.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/style.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/color.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/custom.css')}}" />
      <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
      <!--=============== favicons ===============-->
      <link rel="shortcut icon" href="{{ asset('templates/agencia-app/images/favicon.ico')}}" />
      @stack('styles')
   </head>
   <body>
      <!--loader-->
      <div class="loader-wrap">
         <div class="loader-inner">
            <svg>
               <defs>
                  <filter id="goo">
                     <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                     <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                     <fecomposite in="SourceGraphic" in2="gooey" operator="atop" />
                  </filter>
               </defs>
            </svg>
         </div>
      </div>
      <!--loader end-->
      <!-- main -->
      <div id="main">
         <!-- header -->
         @include('templates.agencia-app.includes.header.header')
         <!-- header end  -->
         <!-- wrapper  -->
         <div id="wrapper">
            <!-- content -->
            <div class="content">
               @yield('content')
            </div>
            <!-- content end -->
         </div>
         <!-- wrapper end -->

         @include('templates.agencia-app.includes.auth._modal')
      </div>
      <!-- Main end -->
      <!--=============== scripts  ===============-->
      <script src="{{ asset('templates/agencia-app/js/jquery.min.js' )}}"></script>
      <script src="{{ asset('templates/agencia-app/js/plugins.js' )}}"></script>
      <script src="{{ asset('templates/agencia-app/js/scripts.js' )}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuZG3kop9LguoZtwoDdypGB23EnY5f9p4&libraries=places"></script>
      <script src="{{ asset('templates/agencia-app/js/map-plugins.js' )}}"></script>

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

      @stack('scripts')
   </body>
</html>
