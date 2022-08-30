@extends('templates.agencia-app.app') 
@section('content')
<div class="content">
   <div style="height: 100vh; margin-top: 80px;">
      @include('templates.agencia-app.includes.map._right-navigation')

      <iframe src="https://agenciaapp.maps.arcgis.com/apps/webappviewer/index.html?id=a428552c53d14dda88b4612c1ddd3bd2" width="100%" height="900"></iframe>
   </div>
   <div class="limit-box fl-wrap"></div>
@stop