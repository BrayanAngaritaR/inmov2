<?php

namespace App\Http\Controllers\Panel\Properties;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Base\Image;
use App\Models\Property\Property;
use Illuminate\Http\Request;
use Storage;

use Str;

class ImagesController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }
   
   public function index(Property $property)
   {
      $images = Image::where('imageable_id', $property->id)
         ->where('imageable_type', 'App\Models\Property\Property')
         ->get();
      return view('panel.properties.images.index', compact(['property', 'images']));
   }

   public function store(Request $request, Property $property)
   {
      if ($request->hasfile('images')) {
         $images = $request->file('images');

         foreach ($images as $image) {
            $name = $property->code . '_' . Str::random(4) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('/images/' . $property->code . '/', $name, 'public');

            $property->image()->updateOrCreate(['thumbnail' => $name, 'url' => $name]);
         }

         Session::flash('info', ['success', __('Fotos actualizadas correctamente')]);
         return back();
      }

      Session::flash('info', ['error', __('Ha ocurrido un error')]);
      return back();
   }

   public function update(Request $request)
   {

      //Obtener la imagen que se quiere marcar como destacada
      $image_id = $request->image;

      //Obtener las otras imágenes de esa propiedad
      $images = Image::where('imageable_type', 'App\Models\Property\Property')
         ->where('imageable_id', $request->property)
         ->get();

      //Actualizar todas las imágenes
      foreach ($images as $image) {
         if ($image->id == $image_id) {
            $image->featured = true;
         } else {
            $image->featured = false;
         }
         $image->update();
      }

      return response()->json([
         'status' => 'ok'
      ]);
   }

   public function destroy(Request $request)
   {
      //Obtener la imagen que se quiere eliminar
      $image_id = $request->image;
      $image = Image::whereId($image_id)->first();
      $property = Property::whereId($request->property)->first();

      //Obtener la ruta de la imagen para eliminar

      $file = Storage::disk('public')->exists('images/' . $property->code . '/', $image->url);

      if ($file) {

         //Buscar la ruta exacta de la foto
         $image_path = public_path().'/storage/images/' . $property->code . '/'. $image->url;
         unlink($image_path);

         //Eliminar el registro
         $image->delete();

         return response()->json([
            'status' => 'ok'
         ]);
      }

      return response()->json(['error' => 'No se ha podido imaginar la imagen']);      
   }
}
