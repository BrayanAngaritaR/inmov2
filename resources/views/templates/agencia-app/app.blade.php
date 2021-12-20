<!DOCTYPE html>
<html lang="en">
   <head>
      <!--=============== basic  ===============-->
      <meta charset="UTF-8" />
      <title>Inmo APP - Plataforma de gestión de bienes inmuebles</title>
      <meta name="robots" content="index, follow" />
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <!--=============== css  ===============-->
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/plugins.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/style.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/color.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('templates/agencia-app/css/custom.css')}}" />
      <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
      <!--=============== favicons ===============-->
      <link rel="shortcut icon" href="{{ asset('templates/agencia-app/images/favicon.ico')}}" />
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
      <script src="{{ asset('templates/agencia-app/js/map-listing.js' )}}"></script>
   </body>
</html>
