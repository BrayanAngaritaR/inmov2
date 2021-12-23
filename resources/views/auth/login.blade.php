@extends('templates.agencia-app.app') 
@section('title', 'Ingreso a la plataforma')
@section('content')

<div class="content mt-5 pt-5 mb-5 pb-5">
   <div class="row container">
      <div class="col-sm-12 col-lg-6 my-auto text-start">
         <img src="{{ asset('templates/agencia-app/images/big-logo.png') }}" height="120"/>
      </div>
      <div class="col-sm-12 col-lg-6 my-auto">
         
         @include('templates.agencia-app.includes.auth._login-form')
         <div class="log-separator fl-wrap"><span>o</span></div>
         <div class="soc-log fl-wrap">
            <p>Para ingresar o crear tu cuenta más rápido usa una red social</p>
            <a href="#" class="facebook-log"> Facebook</a>
         </div>
      </div>
   </div>
</div>

@include('templates.agencia-app.includes.footer.footer') @stop
