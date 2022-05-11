@extends('panel.app') 
@section('content') 
@section('title', 'Auditorías') 
@section('subtitle', 'Esta es la lista de auditorías por usuario.')

<div class="nk-block">
   <div class="card shadow-sm card-preview">
      <div class="row g-gs">
         <div class="table-responsive">
            <!-- Headline -->
            <div class="add-listing-headline">
               <div class="nk-tb-list is-separate mb-3">
                  <div class="nk-tb-item nk-tb-head">
                     <div class="nk-tb-col"><span class="sub-text">ID</span></div>
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre completo</span></div>
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Correo electrónico</span></div>
                     <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Auditorías</span></div>
                     <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Acciones</span></div>
                  </div>

                  @foreach($users as $user)
                  <div class="nk-tb-item">
                     <div class="nk-tb-col">
                        <a href="#">
                           <div class="user-card">
                              <div class="user-avatar bg-primary"><span>{{ $user->id }}</span></div>
                           </div>
                        </a>
                     </div>

                     <div class="nk-tb-col tb-col-lg">
                        <span class="tb-amount">{{ $user->name }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-lg">
                        <span class="tb-amount">{{ $user->email }}</span>
                     </div>


                     <div class="nk-tb-col tb-col-lg text-center">
                        <span class="tb-amount">{{ $user->auditables->count() }}</span>
                     </div>

                     <div class="nk-tb-col nk-tb-col-tools text-right">
                        <ul class="nk-tb-actions gx-1">
                           <li>
                              <div class="drodown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                 <div class="dropdown-menu dropdown-menu-right" style="">
                                    <ul class="link-list-opt no-bdr">
                                       <li>
                                          <a href="{{ route('panel.audits.index', $user) }}"><em class="icon ni ni-eye"></em><span>Ver auditorías</span></a>
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
