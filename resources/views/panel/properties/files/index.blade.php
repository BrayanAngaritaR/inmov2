@extends('panel.app') @section('content') @section('title', 'Agregar archivos al inmueble '. $property->code) @section('parent', 'Archivos')

<a href="{{ route('panel.properties.index') }}">
   <i class="lni lni-arrow-left"></i> Volver
</a>

<div class="nk-block mt-3">
   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">
            <div class="row">
               @foreach($files as $file)
                  <div class="col-sm-6 col-lg-3">
                     <div class="card">
                        <div class="card-inner">
                           <div class="team">
                              <div class="team-options">
                                 <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                       <ul class="link-list-opt no-bdr">
                                          <li>
                                             <a target="_blank" href="{{ asset('storage/files') }}/{{$property->code}}/{{ $file->url }}"><em class="icon ni ni-eye"></em><span>Ver archivo</span></a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="deleteFile({{$property->id}},{{$file->id}});"><em class="icon ni ni-trash"></em><span>Eliminar archivo</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="user-card user-card-s2">
                                 <img src="{{ asset('assets/images/files/') }}/{{ $file->type }}.png" width="50">

                                 <p class="mt-3">
                                    <a href="{{ asset('storage/files') }}/{{$property->code}}/{{ $file->url }}" target="_blank">
                                       {{ $file->title }}
                                    </a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach 
            </div>
         </div>
      </div>
   </div>

   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">

            <div class="col-sm-12 col-lg-6 offset-lg-3 mt-5">
               <h6 class="mb-4">Sube cada uno de los archivos y asígnales un título</h6>
               <form method="POST" action="{{ route('panel.properties.files.store', $property) }}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                     <label class="form-label" for="propertyPhotosLabel">Nombre del archivo</label>
                     <select class="form-control" name="title" required>
                        <option disabled selected>Selecciona un título de archivo</option>
                        <option value="Ficha castastral">Ficha castastral</option>
                        <option value="Ficha resumen">Ficha resumen</option>
                        <option value="Estado jurídico del inmueble">Estado jurídico del inmueble</option>
                        <option value="Certificado de tradición y libertad">Certificado de tradición y libertad</option>
                        <option value="Escrituras">Escrituras</option>
                     </select>
                     {{-- <input type="text" name="title" class="form-control"> --}}
                  </div>
                  <div class="form-group">
                     <label class="form-label" for="propertyPhotosLabel">Subir archivo</label>
                     <div class="form-control-wrap">
                        <div class="custom-file">
                           <input type="file" name="files" class="custom-file-input" id="propertyPhotos" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf,.xlsx" value="cas">
                           <label class="custom-file-label" for="propertyPhotos">Seleccionar archivos</label>
                        </div>
                     </div>
                  </div>

                  <div class="d-flex justify-content-end mt-5">
                     <button type="submit" class="btn btn-primary">
                        Actualizar
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@stop

@push('scripts')
<script type="text/javascript">
   function deleteFile($property, $file){
      let file = $file;
      let property = $property;

      let data = {file, property};

      const url = "{{route('panel.file.destroy')}}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {
            showToast(5000, 'success', 'Archivo eliminado exitosamente.');
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal.');
         }

         console.log(response);

         setTimeout(() => {
            location.reload();
         }, 5000);
      });
   }
</script>
@endpush