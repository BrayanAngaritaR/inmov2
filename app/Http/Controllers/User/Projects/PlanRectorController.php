<?php

namespace App\Http\Controllers\User\Projects;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use Illuminate\Http\Request;

class PlanRectorController extends Controller
{
   protected $template;

   public function __construct()
   {
      $this->template = env('TEMPLATE');
   }
   
   public function index()
   {
      $properties = Property::where('status', 'Published')
         ->with('district')
         ->get();

      return view($this->template.'.projects.plan-rector.index', compact('properties'));
   }

   public function show()
   {
      return view($this->template.'.projects.plan-rector.show');
   }
}
