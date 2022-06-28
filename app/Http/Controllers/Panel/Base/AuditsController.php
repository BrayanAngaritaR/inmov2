<?php

namespace App\Http\Controllers\Panel\Base;

use App\Http\Controllers\Controller;
use App\Models\Base\Audit;
use App\Models\Property\Property;
use App\Models\User;
use Illuminate\Http\Request;

class AuditsController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin|Supervisor']);
   }

   public function index(User $user)
   {
      $audits = Audit::where('user_id', $user->id)->latest()->get();
      return view('panel.audits.index', compact(['audits', 'user']));
   }
   
   public function show(Property $property)
   {
      $audits = Audit::where('auditable_type', 'App\Models\Property\Property')
         ->where('auditable_id', $property->id)
         ->latest()->get();
      return view('panel.audits.show.index', compact(['audits', 'property']));
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit($id)
   {
   //
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, $id)
   {
   //
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
   //
   }
}
