<?php

namespace App\Http\Controllers\Panel\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin']);
   }
   
   public function index()
   {
      $users = User::role('Collaborator')->get();
      return view('panel.users.index', compact('users'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
   //
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
   //
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
   //
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
