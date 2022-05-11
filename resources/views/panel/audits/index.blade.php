@extends('panel.app') 
@section('content') 
@section('title', 'Auditorías para ' . $user->name) 
@section('subtitle', 'Estas son las auditorías para ' . $user->name)

<div class="nk-block">
   <div class="card shadow-sm card-preview">
      <div class="row g-gs">
         <div class="table-responsive">
            <!-- Headline -->
            <div class="add-listing-headline">
               <div class="nk-tb-list is-separate mb-3">
                  <div class="nk-tb-item nk-tb-head">
                     <div class="nk-tb-col"><span class="sub-text">ID</span></div>
                     <div class="nk-tb-col tb-col-mb"><span class="sub-text">Tipo de evento</span></div>
                     <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Tipo</span></div>
                     <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Origen</span></div>
                     <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Fecha del evento</span></div>
                     <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Detalles</span></div>
                  </div>

                  @forelse($audits as $audit)
                  <div class="nk-tb-item">
                     <div class="nk-tb-col">
                        <div class="user-card">
                           <div class="user-avatar bg-primary"><span>{{ $audit->id }}</span></div>
                        </div>
                     </div>

                     <div class="nk-tb-col tb-col-lg">
                        <span class="tb-amount">{{ __($audit->event) }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-lg">
                        <span class="tb-amount">{{ $audit->auditable_type }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-lg text-center">
                        <span class="tb-amount">{{ $audit->ip_address }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-lg text-center">
                        <span class="tb-amount">{{ $audit->created_at }}</span>
                     </div>

                     <div class="nk-tb-col tb-col-lg text-center">
                        <a href="#" data-toggle="modal" data-target="#audit{{ $audit->id }}"><em class="icon ni ni-eye mr-1"></em><span>Ver detalles</span></a>
                     </div>

                     <div class="modal fade" tabindex="-1" id="audit{{ $audit->id }}">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <a href="#" class="close" data-dismiss="modal" aria-label="Cerrar">
                                 <em class="icon ni ni-cross"></em>
                              </a>
                              <div class="modal-header">
                                 <h5 class="modal-title">Auditoría {{ $audit->id }}</h5>
                              </div>
                              <div class="modal-body">
                                 <h5>Valores anteriores</h5>
                                 <p>{{ $audit->old_values }}</p>
                                 <hr>
                                 <h5>Valores nuevos</h5>
                                 <p>{{ $audit->new_values }}</p>
                                 <hr>
                                 <h5>URL</h5>
                                 <p>{{ $audit->url }}</p>
                                 <hr>
                                 <h5>Navegador</h5>
                                 <p>{{ $audit->user_agent }}</p>
                              </div>
                              <div class="modal-footer bg-light">
                                 <span class="sub-text">Esta auditoría fue creada {{ $audit->created_at->diffForHumans() }}</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @empty
                  <div class="nk-tb-item">
                     <div class="nk-tb-col tb-col-lg">
                        <span class="tb-amount">No hay auditorías para este usuario</span>
                     </div>
                  </div>
                  @endforelse
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
