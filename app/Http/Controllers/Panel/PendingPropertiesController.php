<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use Illuminate\Http\Request;

class PendingPropertiesController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }
   
   public function index()
   {
      $properties = Property::with(['district', 'commune'])->where('status', 'Pending')->latest()->get();
      return view('panel.properties.index', compact(['properties']));
   }
}
