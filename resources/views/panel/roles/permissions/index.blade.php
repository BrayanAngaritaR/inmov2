@extends('panel.app') @section('content') @section('title', 'Rol ' . __($role->name)) @section('subtitle', 'Aquí podrás actualizar los permisos del rol')

{{-- <div class="nk-block">
   <div class="card shadow-sm border-0 card-preview">
      <div class="row g-gs">
         <div class="col-sm-12">
            <form class="p-5" action="{{ route('panel.role.permissions.store', $role) }}" method="POST">
               @csrf

               <div class="form-group">
                  <label>Permiso</label>
                  <select class="form-control" name="permission_id">
                     @foreach($permissions as $permission)
                        <option value="{{ $permission->id }}">
                           {{ $permission->name }}
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
</div> --}}

<div class="nk-block">

   <h5 class="mb-4">Permisos</h5>

   <form action="{{ route('panel.role.permissions.store', $role) }}" method="POST">
      @csrf

      <div class="card shadow-sm border-0 card-preview">
         <div class="p-4">
            <div class="row">
               @foreach($permissions as $permission)
               <div class="col-sm-12 col-lg-4">
                  <div class="form-check">
                     <input 
                        name="permissions[]" 
                        class="form-check-input" 
                        type="checkbox" 
                        value="{{ $permission->id }}" 
                        id="permission_{{ $permission->id }}" 

                        @if(in_array($permission->id, $role_permissions)) checked 
                        @endif>
                     <label class="form-check-label" for="permission_{{ $permission->id }}">
                     {{ $permission->name }}
                     </label>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   
      <div class="form-group text-right mt-4">
         <button type="submit" class="btn btn-primary">
            Actualizar
         </button>
      </div>
   </form>
</div>
@stop
