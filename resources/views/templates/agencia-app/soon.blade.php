@extends('templates.agencia-app.app') @section('content')
<!-- content -->
<div class="content">
   <div class="text-center mt-5 pt-5 mb-5 pb-5">
      <img class="margin-top-20" src="{{ asset('templates/agencia-app/images/soon.svg') }}" width="800" />

      <div class="dashbard-menu-header">
         <div class="dashbard-menu-avatar fl-wrap">
            <img src="images/avatar/5.jpg" alt="" />
            <h4>Esta funcionalidad estará disponible <span>pronto</span>.</h4>
         </div>
      </div>
   </div>
</div>

<!-- content end -->

@include('templates.agencia-app.includes.footer.footer') @stop