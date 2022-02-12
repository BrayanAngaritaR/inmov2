@extends('panel.app') @section('content') @section('title', 'Agregar imágenes al inmueble '. $property->code) @section('parent', 'Imágenes')

<a href="{{ route('panel.properties.index') }}">
   <i class="lni lni-arrow-left"></i> Volver
</a>

<div class="nk-block mt-3">
   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">
            <div class="alert alert-danger print-error-msg" style="display:none">
               <ul></ul>
            </div>
            <div class="row">
               @foreach($images as $image)
                  <div class="col-sm-6 col-lg-4">
                     <div class="card">
                        <div class="card-inner">
                           <div class="team">
                              @if($image->featured)
                              <div class="team-status bg-dark text-white">
                                 <em class="icon ni ni-check"></em>
                              </div>
                              @endif
                              <div class="team-options">
                                 <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                       <ul class="link-list-opt no-bdr">
                                          <li>
                                             <a href="#" onclick="markAsFeatured({{$property->id}}, {{$image->id}});"><em class="icon ni ni-check"></em><span>Marcar como portada</span></a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="deleteImage({{$property->id}},{{$image->id}});"><em class="icon ni ni-trash"></em><span>Eliminar foto</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="user-card user-card-s2">
                                 <img src="{{ asset('storage/images') }}/{{$property->code}}/{{ $image->url }}">
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
               <form method="POST" action="{{ route('panel.properties.images.store', $property) }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <label class="form-label" for="propertyPhotosLabel">Subir fotos</label>
                     <div class="form-control-wrap">
                        <div class="custom-file">
                           <input type="file" name="images[]" multiple class="custom-file-input" id="propertyPhotos" accept="image/*" value="cas">
                           <label class="custom-file-label" for="propertyPhotos">Seleccionar fotos</label>
                        </div>
                     </div>
                  </div>

                  <div class="d-flex justify-content-end">
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
   function markAsFeatured($property, $image){
      let image = $image;
      let property = $property;

      let data = {image, property};

      const url = "{{route('panel.images.featured.update')}}";

      sendDynamicInfo(data, 'POST', url).done(function(response){
         if (response.status == 'ok') {
            showToast(5000, 'success', 'Imagen marcada como destacada.');
         } else {
            showToast(7000, 'error', 'Lo sentimos, algo ha salido mal.');
         }

         setTimeout(() => {
            location.reload();
         }, 5000);

      });
   }

   function deleteImage($property, $image){
      let image = $image;
      let property = $property;

      let data = {image, property};

      const url = "{{route('panel.images.featured.destroy')}}";

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