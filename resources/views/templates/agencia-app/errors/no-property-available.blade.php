@extends('templates.agencia-app.app')
@section('content')
<div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
   <div class="container">
      <div class="breadcrumbs-list">
         <a href="#">Inicio</a>
         <a href="#">Bienes</a>
         <span>La información de este inmueble no está disponible</span>
      </div>
   </div>

   <div class="gray-bg small-padding fl-wrap mt-5">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <img src="{{ asset('templates/agencia-app/images/empty.svg') }}" width="400">
               <h1 class="mt-5 lead">
                  La información de este inmueble no está disponible
               </h1>
            </div>
         </div>
         <div class="fl-wrap limit-box"></div>
      </div>
   </div>
</div>
   
@include('templates.agencia-app.includes.footer.footer') @stop
