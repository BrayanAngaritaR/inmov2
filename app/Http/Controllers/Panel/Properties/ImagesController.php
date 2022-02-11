<?php

namespace App\Http\Controllers\Panel\Properties;

use App\Http\Controllers\Controller;
use App\Models\Base\Image;
use App\Models\Property\Property;
use Illuminate\Http\Request;
use Str;

class ImagesController extends Controller
{
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
            $name = $property->id . '_' . Str::random(4) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('/images/' . $property->id . '/', $name, 'public');

            $property->image()->updateOrCreate(['thumbnail' => $name, 'url' => $name]);
         }

         return "Todo bien";
      }

      return "No images bien";
   }
}
