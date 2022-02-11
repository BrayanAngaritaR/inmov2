@extends('panel.app') @section('content') @section('title', 'Agregar archivos al inmueble '. $property->id) @section('parent', 'Archivos')

<div class="nk-block">
   <div class="card card-preview">
      <div class="card-inner">
         <div class="preview-block">
            <div class="alert alert-danger print-error-msg" style="display:none">
               <ul></ul>
            </div>
            <div class="row">
               @foreach($files as $file)
               <div class="col-sm-12 col-lg-4">
                  <a href="{{ asset('storage/files') }}/{{$property->id}}/{{ $file->url }}" target="_blank">
                     {{ asset('storage/files') }}/{{$property->id}}/{{ $file->url }}
                  </a>
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
               <form method="POST" action="{{ route('panel.properties.files.store', $property) }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <label class="form-label" for="propertyPhotosLabel">Subir archivos</label>
                     <div class="form-control-wrap">
                        <div class="custom-file">
                           <input type="file" name="files[]" multiple class="custom-file-input" id="propertyPhotos" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf" value="cas">
                           <label class="custom-file-label" for="propertyPhotos">Seleccionar archivos</label>
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