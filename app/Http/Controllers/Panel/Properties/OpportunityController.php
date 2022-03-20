<?php

namespace App\Http\Controllers\Panel\Properties;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index(Property $property)
   {
      return view('panel.properties.opportunity.index', compact(['property']));
   }

   public function create()
   {
   //
   }

   public function store(Request $request)
   {
   //
   }

   public function show($id)
   {
   //
   }

   public function edit($id)
   {
   //
   }

   public function update(Request $request, $id)
   {
   //
   }

   public function destroy($id)
   {
   //
   }
}
