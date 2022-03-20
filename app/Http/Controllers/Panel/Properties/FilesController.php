<?php

namespace App\Http\Controllers\Panel\Properties;

use App\Http\Controllers\Controller;
use App\Models\Base\File;
use App\Models\Property\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Storage;
use Str;

class FilesController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }
   
   public function index(Property $property)
   {
      $files = File::where('fileable_id', $property->id)
         ->where('fileable_type', 'App\Models\Property\Property')
         ->get();
      return view('panel.properties.files.index', compact(['property', 'files']));
   }

   public function store(Request $request, Property $property)
   {
      if ($request->hasfile('files')) {
         $file = $request->file('files');

         $extension = $file->getClientOriginalExtension();
         $name = $property->code . '_' . Str::random(4) . '.' . $extension;
         $path = $file->storeAs('/files/' . $property->code . '/', $name, 'public');
         $property->file()->updateOrCreate(['url' => $name, 'type' => $extension, 'title' => $request->title]);

         Session::flash('info', ['success', __('Se ha agregado el archivo')]);
         return back();
      }

      Session::flash('info', ['error', __('Ha ocurrido un error')]);
      return back();
   }

   public function destroy(Request $request)
   {
      //Obtener el archivo que se quiere eliminar
      $file_id = $request->file;
      $file = File::whereId($file_id)->first();
      $property = Property::whereId($request->property)->first();

      //Obtener la ruta de la filen para eliminar

      $storage_file = Storage::disk('public')->exists('files/' . $property->code . '/', $file->url);

      if ($storage_file) {

         //Buscar la ruta exacta de la foto
         $file_path = public_path().'/storage/files/' . $property->code . '/'. $file->url;
         unlink($file_path);

         //Eliminar el registro
         $file->delete();

         return response()->json([
            'status' => 'ok'
         ]);
      }

      return response()->json(['error' => 'No se ha podido imaginar la imagen']);      
   }
}