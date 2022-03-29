<?php

namespace App\Http\Controllers\User\Projects;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use Illuminate\Http\Request;

class PIGPController extends Controller
{
   protected $template;

   public function __construct()
   {
      $this->template = env('TEMPLATE');
   }

   public function loader()
   {
      return view($this->template.'.projects.loader');
   }
   
   public function index()
   {
      $properties = Property::where('status', 'Published')
         ->with('district')
         ->get();

      return view($this->template.'.projects.pigp.index', compact('properties'));
   }

   public function store(Request $request)
   {
   //
   }

   public function show($id)
   {
   //
   }
}
