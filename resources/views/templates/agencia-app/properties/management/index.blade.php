@extends('templates.agencia-app.app') 
@section('content')
<div class="content">
   <div style="height: 100vh; margin-top: 80px;">
      @include('templates.agencia-app.includes.map._right-navigation')

      <iframe src="https://agenciaapp.maps.arcgis.com/apps/mapviewer/index.html?webmap=0e8553dd1e8042c3a2583e354b394b99" width="100%" height="900"></iframe>
   </div>
   <div class="limit-box fl-wrap"></div>
@stop