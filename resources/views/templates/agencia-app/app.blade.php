<!DOCTYPE html>
<html lang="en">
   <head>
      <!--=============== Meta  ===============-->
      @include('templates.agencia-app.includes.header._meta')
      <!--=============== CSS  ===============-->
      @include('templates.agencia-app.includes.header._css')
   </head>
   <body>
      <!--loader-->
      @include('templates.agencia-app.includes._loader')
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
      @include('templates.agencia-app.includes.footer._scripts')
   </body>
</html>
