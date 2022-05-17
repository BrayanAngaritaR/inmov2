@extends('panel.app') 
@section('content') 
@section('title', 'Lista de roles') 
@section('subtitle', 'Esta es la lista de roles disponibles.')
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

               <!-- Modal Trigger Code -->
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDefault"><em class="icon ni ni-plus"></em><span>Agregar rol</span></button>
               <!-- Modal Content Code -->
               <div class="modal fade" tabindex="-1" id="modalDefault">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross"></em> </a>
                        <div class="modal-header"><h5 class="modal-title">Agregar rol</h5></div>
                        <form action="{{ route('panel.roles.store') }}" method="POST">
                           @csrf   
                           <div class="modal-body">
                              <div class="form-group">
                                 <label>Nombre del rol</label>
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
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Título</span></div>
                     <div class="nk-tb-col tb-col-lg text-center"><span class="sub-text">Usuarios</span></div>
                     <div class="nk-tb-col tb-col-lg text-center"><span class="sub-text">Permisos</span></div>
                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha de creación</span></div>
                     <div class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                           <li>
                              <div class="drodown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>

                  @foreach($roles as $role)
                  <div class="nk-tb-item">
                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $role->name }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb text-center">
                        <span class="tb-amount">{{ $role->users->count() }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb text-center">
                        <span class="tb-amount">{{ $role->permissions->count() }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $role->created_at->diffForHumans() }}</span>
                     </div>

                     <div class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                           <li>
                              <div class="drodown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                 <div class="dropdown-menu dropdown-menu-right" style="">
                                    <ul class="link-list-opt no-bdr">
                                       <li>
                                          <a href="{{ route('panel.roles.users.show', $role) }}"><em class="icon ni ni-users"></em><span>Ver usuarios</span></a>
                                       </li>

                                       <li>
                                          <a href="{{ route('panel.roles.users.edit', $role) }}"><em class="icon ni ni-plus"></em><span>Agregar usuarios</span></a>
                                       </li>

                                       <li>
                                          <a href="{{ route('panel.role.permissions.index', $role) }}"><em class="icon ni ni-unlock"></em><span>Agregar permisos</span></a>
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
