@extends('panel.app') @section('content') @section('title', 'Perfil del usuario') @section('subtitle', 'Este es el perfil del usuario ' . $user->name)
	<div class="nk-block">
	   <div class="card shadow-sm border-0 card-preview">
			<div class="container-xl wide-lg">
			   <div class="nk-content-body">
			   	<div class="modal fade" role="dialog" id="profile-edit">
					   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					      <div class="modal-content">
					         <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
					         <div class="modal-body modal-body-lg">
					            <h5 class="title">Actualizar perfil</h5>
			                  <form action="{{ route('panel.users.update') }}" method="POST">
			                  	@csrf
			                  	<div class="row gy-4">
				                     <div class="col-sm-12">
				                        <div class="form-group">
				                           <label class="form-label" for="full-name">Nombre completo</label><input type="text" class="form-control form-control-lg" name="name" value="{{ $user->name }}" placeholder="Nombre completo" />
				                        </div>
				                     </div>
				                     <div class="col-sm-12">
				                        <div class="form-group">
				                           <label class="form-label" for="display-name">Correo electrónico</label><input type="email" class="form-control form-control-lg" value="{{ $user->email }}" disabled placeholder="tucorreo@mail.com" />
				                           <small>Para cambiar tu correo electrónico deberás contactar al administrador</small>
				                        </div>
				                     </div>
				                     <div class="col-md-6">
				                        <div class="form-group"><label class="form-label" for="phone-no">Número de contacto</label><input type="text" class="form-control form-control-lg" id="phone" name="phone" @if($user_info) value="{{ $user_info->phone }}" @endif placeholder="Número de contacto" /></div>
				                     </div>
				                     <div class="col-md-6">
				                        <div class="form-group"><label class="form-label" for="birth-day">Fecha de creación</label><input type="text" class="form-control form-control-lg date-picker" id="birth-day" disabled value="{{ $user->created_at->format('m/d/Y') }}" placeholder="Ingresa tu fecha de nacimiento" /></div>
				                     </div>
				                     <div class="col-md-6">
				                        <div class="form-group"><label class="form-label" for="birth-day">Dependencia en AGENCIA APP</label>
				                        	<select class="form-control" name="dependency_id">
				                        		<option value="1">Sin dependencia</option>
				                        		@if(Auth::user()->goverment())
				                        		@foreach($dependencies as $dependency)
				                        		<option value="{{ $dependency->id }}">{{ $dependency->title }}</option>
				                        		@endforeach
				                        		<option value="Otra">Otra</option>
				                        		@endif
				                        	</select>
				                        </div>
				                     </div>
				                     <div class="col-md-6">
				                        <div class="form-group"><label class="form-label" for="phone-no">Cargo</label><input type="text" class="form-control form-control-lg" name="position" @if($user_info) value="{{ $user_info->position }}" @endif /></div>
				                     </div>
				                     <div class="col-12">
				                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
				                           <li>
				                           	<button type="submit" class="btn btn-lg btn-primary">
				                           		Actualizar perfil
				                           	</button>
				                           </li>
				                           <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancelar</a></li>
				                        </ul>
				                     </div>
				                  </div>
			                  </form>
					         </div>
					      </div>
					   </div>
					</div>

			      <ul class="nk-nav nav nav-tabs">
			         <li class="nav-item active current-page"><a class="nav-link" href="#">Personal</a></li>
			         <li class="nav-item"><a class="nav-link" href="#">Seguridad</a></li>
			         <li class="nav-item"><a class="nav-link" href="#">Notificaciones</a></li>
			      </ul>
			      <div class="nk-block">
			         <div class="nk-block-head">
			            <div class="nk-block-head-content">
			               <h5 class="nk-block-title">Información personal</h5>
			               <div class="nk-block-des"><p>Información básica como tu nombre, correo electrónico y dependencia.</p></div>
			            </div>
			         </div>
			         <div class="nk-data data-list">
			            <div class="data-head"><h6 class="overline-title">Básico</h6></div>
			            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
			               <div class="data-col"><span class="data-label">Nombre completo</span><span class="data-value">{{ $user->name }}</span></div>
			               <div class="data-col data-col-end">
			                  <span class="data-more"><em class="icon ni ni-forward-ios"></em></span>
			               </div>
			            </div>
			            <div class="data-item">
			               <div class="data-col"><span class="data-label">Correo electrónico</span><span class="data-value">{{ $user->email }}</span></div>
			               <div class="data-col data-col-end">
			                  <span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
			               </div>
			            </div>
			            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
			               <div class="data-col"><span class="data-label">Número de contacto</span><span class="data-value text-soft">3218057515</span></div>
			               <div class="data-col data-col-end">
			                  <span class="data-more"><em class="icon ni ni-forward-ios"></em></span>
			               </div>
			            </div>
			            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
			               <div class="data-col"><span class="data-label">Dependencia</span><span class="data-value">AGENCIA APP</span></div>
			               <div class="data-col data-col-end">
			                  <span class="data-more"><em class="icon ni ni-forward-ios"></em></span>
			               </div>
			            </div>
			            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
			               <div class="data-col"><span class="data-label">Profesión</span><span class="data-value">Ingeniero Informático</span></div>
			               <div class="data-col data-col-end">
			                  <span class="data-more"><em class="icon ni ni-forward-ios"></em></span>
			               </div>
			            </div>
			            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
			               <div class="data-col"><span class="data-label">Fecha de creación</span><span class="data-value">{{ $user->created_at->format('M d Y') }}</span></div>
			               <div class="data-col data-col-end">
			                  <span class="data-more"><em class="icon ni ni-forward-ios"></em></span>
			               </div>
			            </div>
			         </div>
			         <div class="nk-data data-list">
			            <div class="data-head"><h6 class="overline-title">Preferencias</h6></div>
			            <div class="data-item">
			               <div class="data-col"><span class="data-label">Idioma</span><span class="data-value">Español</span></div>
			               <div class="data-col data-col-end">
			               	<a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">{{-- Cambiar idioma --}}</a>
			               </div>
			            </div>
			            <div class="data-item">
			               <div class="data-col"><span class="data-label">Formato de fecha</span><span class="data-value">M d, YYYY</span></div>
			               <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">{{-- Change --}}</a></div>
			            </div>
			            <div class="data-item">
			               <div class="data-col"><span class="data-label">Zona horaria</span><span class="data-value">Bogotá (GMT-5)</span></div>
			               <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">{{-- Change --}}</a></div>
			            </div>
			         </div>
			      </div>
			   </div>
			</div>
		</div>
	</div>
@stop

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
@endpush