<?php

namespace App\Http\Controllers\Panel\Properties;

use App\Http\Controllers\Controller;
use App\Models\Base\File;
use App\Models\Property\Property;
use Illuminate\Http\Request;
use Str;

class FilesController extends Controller
{
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
         $files = $request->file('files');

         foreach ($files as $image) {
            $name = $property->id . '_' . Str::random(4) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('/files/' . $property->id . '/', $name, 'public');

            $property->file()->updateOrCreate(['url' => $name]);
         }

         return "Todo bien";
      }

      return "No files bien";
   }
}
