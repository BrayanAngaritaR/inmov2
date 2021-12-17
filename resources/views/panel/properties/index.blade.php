@extends('panel.app')
@section('content')

@section('title', 'Lista de inmuebles')
@section('subtitle', 'esta es la lista de inmuebles que están registrados.')

<div class="nk-block">
	<div class="card shadow-sm card-preview">
		<div class="row g-gs">
	   	<div class="table-responsive">
				<!-- Headline -->
				<div class="add-listing-headline">

					<div class="nk-tb-list is-separate mb-3">
					   <div class="nk-tb-item nk-tb-head">
					      <div class="nk-tb-col"><span class="sub-text">ID</span></div>
					      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Matrícula</span></div>
					      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Descripción</span></div>
					      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Avalúo</span></div>
					      <div class="nk-tb-col tb-col-md"><span class="sub-text">Estado</span></div>
					      <div class="nk-tb-col nk-tb-col-tools">
					         <ul class="nk-tb-actions gx-1 my-n1">
					            <li>
					               <div class="drodown">
					                  <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
					                  {{-- <div class="dropdown-menu dropdown-menu-right">
					                     <ul class="link-list-opt no-bdr">
					                        <li>
					                           <a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Password</span></a>
					                        </li>
					                     </ul>
					                  </div> --}}
					               </div>
					            </li>
					         </ul>
					      </div>
					   </div>

					   @foreach($properties as $property)
					   <div class="nk-tb-item">
					      <div class="nk-tb-col">
					         <a href="#">
					            <div class="user-card">
					               <div class="user-avatar bg-primary"><span>{{ $property->code }}</span></div>
					            </div>
					         </a>
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         <span class="tb-amount">{{ $property->plate }}</span>
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         <span class="tb-amount">{{ $property->sss_description }}</span>
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         <span class="tb-amount">${{ number_format($property->property_valuation) }} <span class="currency">COP</span></span>
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         <span class="tb-status text-success">{{ __($property->status) }}</span>
					      </div>

					      <div class="nk-tb-col nk-tb-col-tools">
					         <ul class="nk-tb-actions gx-1">
					            <li>
					               <div class="drodown">
					                  <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
					                  <div class="dropdown-menu dropdown-menu-right" style="">
					                     <ul class="link-list-opt no-bdr">
					                        <li>
					                           <a href="{{ route('user.properties.show', $property) }}"><em class="icon ni ni-eye"></em><span>Ver propiedad</span></a>
					                        </li>
					                        <li>
					                           <a href="{{ route('panel.properties.edit', $property) }}"><em class="icon ni ni-edit"></em><span>Editar propiedad</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-na"></em><span>Ocultar</span></a>
					                        </li>
					                     </ul>
					                  </div>
					               </div>
					            </li>
					         </ul>
					      </div>
					   </div>
					   @endforeach
					</div>



					
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@push('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('input[name="loan"]').click(function(){
			if($(this).prop("checked") == true){
				$('#loanDiv').fadeIn(500);
			}
			else if($(this).prop("checked") == false){
				$('#loanDiv').fadeOut(1000);
			}
		});
	});
</script>
@endpush