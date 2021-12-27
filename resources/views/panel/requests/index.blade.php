@extends('panel.app') @section('content') @section('title', 'Lista de solicitudes') @section('subtitle', 'esta es la lista de solicitudes de más información y/o de contacto.')

<div class="nk-block">
   <div class="card shadow-sm card-preview">
      <div class="row g-gs">
         <div class="table-responsive">
            <!-- Headline -->
            <div class="add-listing-headline">
               <div class="nk-tb-list is-separate mb-3">
                  <div class="nk-tb-item nk-tb-head">
                     <div class="nk-tb-col"><span class="sub-text">ID</span></div>
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Tipo</span></div>
                     <div class="nk-tb-col tb-col-lg"><span class="sub-text">Información</span></div>
                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Estado</span></div>
                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha de creación</span></div>
                     <div class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                           <li>
                              <div class="drodown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                 {{--
                                 <div class="dropdown-menu dropdown-menu-right">
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
                                 </div>
                                 --}}
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>

                  @foreach($requests as $request)
                  <div class="nk-tb-item">
                     <div class="nk-tb-col">
                        <a href="#">
                           <div class="user-card">
                              <div class="user-avatar bg-primary"><span>{{ $request->id }}</span></div>
                           </div>
                        </a>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $request->type }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $request->info }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-status text-success">{{ __($request->status) }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $request->created_at->diffForHumans() }}</span>
                     </div>

                     <div class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                           <li>
                              <div class="drodown">
                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                 <div class="dropdown-menu dropdown-menu-right" style="">
                                    <ul class="link-list-opt no-bdr">
                                       <li>
                                          <a href="#"><em class="icon ni ni-eye"></em><span>Ver detalles</span></a>
                                       </li>

                                       <li>
                                          <a href="#"><em class="icon ni ni-eye"></em><span>Responder</span></a>
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
