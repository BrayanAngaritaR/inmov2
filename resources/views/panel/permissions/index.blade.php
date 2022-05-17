@extends('panel.app') 
@section('content') 
@section('title', 'Lista de permisos') 
@section('subtitle', 'Esta es la lista de permisos disponibles y sus roles.')
@section('buttons')
<div class="nk-block-head-content">
   <div class="toggle-wrap nk-block-tools-toggle">
      <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
      <div class="toggle-expand-content" data-content="pageMenu">
         <ul class="nk-block-tools g-3">
            <li class="nk-block-tools-opt">

               <!-- Modal Trigger Code -->
               <button type="button" class="btn btn-primary-outline mr-2" data-toggle="modal" data-target="#addPermissions"><em class="icon ni ni-plus"></em><span>Agregar permiso</span></button>
               <!-- Modal Content Code -->
               <div class="modal fade" tabindex="-1" id="addPermissions">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross"></em> </a>
                        <div class="modal-header"><h5 class="modal-title">Agregar permiso</h5></div>
                        <form action="{{ route('panel.permissions.store') }}" method="POST">
                           @csrf   
                           <div class="modal-body">
                              <div class="form-group">
                                 <label>Nombre del permiso</label>
                                 <input type="text" name="name" class="form-control">
                              </div>

                              <div class="form-group text-right">
                                 <button type="submit" class="btn btn-primary">
                                    Agregar
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>
@endsection

<div class="nk-block">
   <div class="card shadow-sm border-0 card-preview">
      <div class="row g-gs">
         <div class="table-responsive">
            <!-- Headline -->
            <div class="add-listing-headline">
               <div class="nk-tb-list is-separate mb-3">
                  <div class="nk-tb-item nk-tb-head">
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre del permiso</span></div>

                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Roles</span></div>

                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Total</span></div>

                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha de creación</span></div>
                  </div>

                  @foreach($permissions as $permission)
                  <div class="nk-tb-item">
                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $permission->name }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">
                           @forelse($permission->roles as $rol)
                           - {{ $rol->name }} 
                           @empty
                           @endforelse
                        </span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $permission->roles->count() }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $permission->created_at->diffForHumans() }}</span>
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
