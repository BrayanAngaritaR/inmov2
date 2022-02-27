@extends('panel.app') @section('content') @section('title', 'Agregar rol a los usuarios') @section('subtitle', 'Aquí podrás agregar los roles a los usuarios.')

<div class="nk-block">
   <div class="card shadow-sm border-0 card-preview">
      <div class="row g-gs">
         <div class="col-sm-12">
         	<form class="p-5" action="{{ route('panel.roles.users.update', $role) }}" method="POST">
         		@csrf

         		<div class="form-group">
         			<label>Usuario</label>
         			<select name="user_id" class="form-control" name="user_id">
         				@foreach($users as $user)
         					<option value="{{ $user->id }}">
         						{{ $user->name }} ({{ $user->email }})
         					</option>
         				@endforeach
         			</select>
         		</div>

         		<div class="form-group text-right">
         			<button type="submit" class="btn btn-primary">
         				Actualizar
         			</button>
         		</div>
         	</form>
         </div>
      </div>
   </div>
</div>

<div class="nk-block">

	<h5 class="mb-4">Usuarios que ya tienen este rol</h5>

   <div class="card shadow-sm border-0 card-preview">

      <div class="row g-gs">
         <div class="table-responsive">
            <!-- Headline -->
            <div class="add-listing-headline">
               <div class="nk-tb-list is-separate mb-3">
                  <div class="nk-tb-item nk-tb-head">
                     <div class="nk-tb-col"><span class="sub-text">ID</span></div>
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre</span></div>
                     <div class="nk-tb-col tb-col-lg"><span class="sub-text">Correo electrónico</span></div>
                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Estado</span></div>
                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha de registro</span></div>
                     <div class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                           <li>
                              <em class="icon ni ni-more-h"></em>
                           </li>
                        </ul>
                     </div>
                  </div>

                  @foreach($role_users as $user)
                  <div class="nk-tb-item">
                     <div class="nk-tb-col">
                        <a href="#">
                           <div class="user-card">
                              <div class="user-avatar bg-primary"><span>{{ $user->id }}</span></div>
                           </div>
                        </a>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $user->name }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $user->email }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-status text-success">{{ __($user->status) }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $user->created_at->diffForHumans() }}</span>
                     </div>

                     <div class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                           <li>
                              <div class="drodown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                 <div class="dropdown-menu dropdown-menu-right" style="">
                                    <ul class="link-list-opt no-bdr">
                                       <li>
                                          <a href="#"><em class="icon ni ni-mail"></em><span>Enviar mensaje</span></a>
                                       </li>
                                       <li>
                                          <a href="#"><em class="icon ni ni-shield-star"></em><span>Quitar rol</span></a>
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
