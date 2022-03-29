@extends('panel.app') 
@section('content') 
@section('title', 'Información para venta') 
@section('parent', 'Inmuebles')

@section('buttons')
<div class="nk-block-head-content">
   <div class="toggle-wrap nk-block-tools-toggle">
      <div class="toggle-expand-content" data-content="pageMenu">
         <ul class="nk-block-tools g-3">
            <li class="nk-block-tools-opt">
               <a href="{{ route('panel.properties.opportunity.edit', $property) }}" class="btn btn-primary">
               	<em class="icon ni ni-edit"></em><span>Editar información</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
@endsection
<div class="nk-block">
	<div class="card card-preview">
      <div class="card-inner">
      	<div class="preview-block">
      		<div class="row">

      			<div class="col-sm-12 mb-5 text-center">
			      	<div class="alert alert-info">
			      		El bien @if($property->is_rph == 0) <b>NO</b> @endif cuenta con RPH
			      	</div>
			      </div>

					<div class="col-sm-12 col-lg-4 mb-3">
						<p><b>Área del predio (VUR)</b></p>
		            {{ $property->sale->area_according_to_vur }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			      	<p><b>Área de lote catastral</b></p>
			    		{{ $property->cadastral_area }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3">
			      	<p><b>Áreas comunes según FC</b></p>
		            {{ $property->sale->common_areas }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Valor de ficha catrastal</b></p>
			    		${{ number_format($property->property_valuation) }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Área de construcción</b></p>
			    		{{ $property->construction_area }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>% titularidad (RPH)</b></p>
			    		{{ $property->sale->percentage_of_fc_ownership }}%
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>% titularidad (VUR)</b></p>
			    		{{ $property->sale->ownership_percentage_vur }}%
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Valor m² zona geoconómica</b></p>
			    		${{ number_format($property->sale->geoeconomic_zone_value) }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Destinación</b></p>
			    		{{ $property->sale->for_sale_destination }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Acción Agencia APP</b></p>
			    		{{ $property->sale->for_sale_action }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>¿Para vender?</b></p>
			    		@if($property->sale->for_sale == 1) Sí @else No @endif
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Área construida - Áreas comúnes</b></p>
			    		{{ $property->construction_area - $property->common_areas }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Coeficiente de titularidad del Municipio según VUR</b></p>
			    		{{ $property->sale->vur_coefficient() }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Porcentaje de titularidad del Municipio según RPH</b></p>
			    		{{ $property->sale->percentage_of_fc_ownership }}%
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Área efectiva RPH</b></p>
			    		{{ $property->sale->rph_effective_area() }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Área efectiva NPH</b></p>
			    		{{ $property->sale->nph_effective_area() }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Área de titularidad del municipio</b></p>
			    		{{ $property->sale->ownership_area() }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Valor de la titularidad del Municipio</b></p>
			    		${{ number_format($property->sale->ownership_value()) }}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Valor con el descuento 15% del FONPET</b></p>
			    		${{ number_format($property->sale->fonpet_discount() )}}
			      </div>

			      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
			      	<p><b>Valor sin descuento CISA y 15% del FONPET</b></p>
			    		${{ number_format($property->sale->cisa_discount() )}}
			      </div>	

			      <div class="col-sm-12 mb-3 mt-3">
						<p><b>Observaciones</b></p>
						<p>{{ $property->sale->for_sale_observations }}</p>
			      </div>		      
			   </div>
		   </div>
		</div>
	</div>
</div>
@stop
