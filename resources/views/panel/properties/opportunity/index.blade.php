@extends('panel.app') 
@section('content') 
@section('title', 'Información para venta') 
@section('parent', 'Inmuebles')

@if($can_sell)
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
@endif

<div class="nk-block">
	<div class="card card-preview">
      <div class="card-inner">
      	<div class="preview-block">
      		@if($can_sell)
	      		@if($for_sale_property)
	      		<div class="row">

	      			<div class="col-sm-12 mb-5 text-center">
				      	<div class="alert alert-info">
				      		El bien @if($property->is_rph == 0) <b>NO</b> @endif cuenta con RPH
				      	</div>
				      </div>

						<div class="col-sm-12 col-lg-4 mb-3">
							<p><b>Área del predio (VUR)</b></p>
			            {{ $for_sale_property->area_according_to_vur }} {{ $property->units }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				      	<p><b>Área de lote catastral</b></p>
				    		{{ $property->cadastral_area }} {{ $property->units }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3">
				      	<p><b>Áreas comunes según FC</b></p>
			            {{ $for_sale_property->common_areas }} {{ $property->units }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Valor de ficha catrastal</b></p>
				    		${{ number_format($property->property_valuation) }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Área de construcción</b></p>
				    		{{ $property->construction_area }} {{ $property->units }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>% titularidad (RPH)</b></p>
				    		{{ $for_sale_property->percentage_of_fc_ownership }}%
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>% titularidad (VUR)</b></p>
				    		{{ $for_sale_property->ownership_percentage_vur }}%
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Valor m² zona geoconómica</b></p>
				    		${{ number_format($for_sale_property->geoeconomic_zone_value) }}
				      </div>


				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p class="text-primary"><b>Valor del avalúo</b></p>
				      	@if($property->has_appraise)
				    		${{ 0 }}
				    		@else
				    		Avalúo sin contratar
				    		@endif
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Destinación</b></p>
				    		{{ $for_sale_property->for_sale_destination }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Acción Agencia APP</b></p>
				    		{{ $for_sale_property->for_sale_action }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>¿Para vender?</b></p>
				    		@if($for_sale_property->for_sale == 1) Sí @else No @endif
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Área construida - Áreas comúnes</b></p>
				    		{{ $property->construction_area - $for_sale_property->common_areas }} {{ $property->units }}
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Coeficiente de titularidad del Municipio según RPH</b></p>
				      	@if($property->is_rph == 1)
				      	{{ $for_sale_property->rph_coefficient() }}
				      	@else
				    		No aplica
				    		@endif
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Coeficiente de titularidad del Municipio según VUR</b></p>
				    		{{ $for_sale_property->vur_coefficient() }}
				      </div>

				      @if($property->is_rph == 1)
				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Área efectiva RPH</b></p>
				    		{{ (($property->construction_area - $for_sale_property->common_areas) * $for_sale_property->rph_coefficient()) * $for_sale_property->vur_coefficient() }} {{ $property->units }}
				      </div>

				      @else
				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Área efectiva NPH</b></p>
				      	{{ (($property->construction_area - $for_sale_property->common_areas) * 1) * $for_sale_property->vur_coefficient() }} {{ $property->units }}
				      </div>
				      @endif


				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Valor de la titularidad del Municipio</b></p>
				      	@if($property->is_rph == 1)
				    			${{ number_format(((($property->construction_area - $for_sale_property->common_areas) * $for_sale_property->rph_coefficient()) * $for_sale_property->vur_coefficient()) * $for_sale_property->geoeconomic_zone_value) }}
				    		@else
				    			${{ number_format(((($property->construction_area - $for_sale_property->common_areas) * 1) * $for_sale_property->vur_coefficient()) * $for_sale_property->geoeconomic_zone_value) }}
				    		@endif
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Valor con descuento del FONPET (15%)</b></p>

				      	@if($property->is_rph == 1)
				    			${{ number_format((((($property->construction_area - $for_sale_property->common_areas) * $for_sale_property->rph_coefficient()) * $for_sale_property->vur_coefficient()) * $for_sale_property->geoeconomic_zone_value) * 0.85) }}
				    		@else
				    			${{ number_format((((($property->construction_area - $for_sale_property->common_areas) * 1) * $for_sale_property->vur_coefficient()) * $for_sale_property->geoeconomic_zone_value) * 0.85) }}
				    		@endif
				      </div>

				      <div class="col-sm-12 col-lg-4 mb-3 mt-4">
				      	<p><b>Valor con descuento CISA (3%) y FONPET (15%)</b></p>
				    		@if($property->is_rph == 1)
				    			${{ number_format((((($property->construction_area - $for_sale_property->common_areas) * $for_sale_property->rph_coefficient()) * $for_sale_property->vur_coefficient()) * $for_sale_property->geoeconomic_zone_value) * 0.82) }}
				    		@else
				    			${{ number_format((((($property->construction_area - $for_sale_property->common_areas) * 1) * $for_sale_property->vur_coefficient()) * $for_sale_property->geoeconomic_zone_value) * 0.82) }}
				    		@endif
				      </div>	

				      <div class="col-sm-12 mb-3 mt-3">
							<p><b>Observaciones</b></p>
							<p>{{ $for_sale_property->for_sale_observations }}</p>
				      </div>		      
				   </div>
				   @else
				   <div class="row">
				   	<div class="col-sm-12 mb-5 text-center">
				      	<div class="alert alert-danger">
				      		No hay información de ventas
				      	</div>

				      	<a href="{{ route('panel.properties.opportunity.edit', $property) }}" class="btn btn-primary">
		               	<em class="icon ni ni-plus"></em><span>Agregar información</span>
		               </a>
				      </div>
				   </div>
				   @endif
				@else
				<div class="row">
			   	<div class="col-sm-12 mb-5 text-center">
			      	<div class="alert alert-warning">
			      		Este inmueble <b>actualmente</b> no está en venta
			      	</div>

			      	<a href="{{ route('panel.properties.index') }}" class="btn btn-primary">
	               	<em class="icon ni ni-arrow-left"></em><span>Volver a la lista</span>
	               </a>
			      </div>
			   </div>
			   @endif
		   </div>
		</div>
	</div>
</div>
@stop
