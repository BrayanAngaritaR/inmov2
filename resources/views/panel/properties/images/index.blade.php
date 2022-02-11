@extends('panel.app') @section('content') @section('title', 'Agregar imágenes al inmueble '. $property->id) @section('parent', 'Imágenes')

<div class="nk-block">
   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">
            <div class="alert alert-danger print-error-msg" style="display:none">
               <ul></ul>
            </div>
            <div class="row">
               @foreach($images as $image)
               <div class="col-sm-12 col-lg-4">
                  <img src="{{ asset('storage/images') }}/{{$property->id}}/{{ $image->url }}" class="img-fluid">
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