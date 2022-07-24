@extends('templates.agencia-app.app') 
@section('content')
<div class="content">
   <div style="height: 90vh; margin-top: 80px;">
      @include('templates.agencia-app.includes.map._right-navigation')
      
      <iframe src="https://agenciaapp.maps.arcgis.com/apps/mapviewer/index.html?webmap=698339289dd2487eafba0563bec4d3ed" width="100%" height="900"></iframe>
   </div>
   <div class="limit-box fl-wrap"></div>
</div>
@stop