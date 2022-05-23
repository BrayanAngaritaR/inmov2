<?php

namespace App\Http\Controllers\Panel\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Dependency;
use App\Models\User\UserInfo;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin']);
   }
   
   public function index()
   {
      $users = User::latest()->get();
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
   public function show(User $user)
   {
      $dependencies = Dependency::orderBy('title')->get();
      $user_info = UserInfo::where('user_id', Auth::id())->first();
      return view('panel.users.show', compact(['user', 'user_info', 'dependencies']));
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
   public function update(Request $request)
   {
      $user = Auth::user();

      $user->name = $request->name;
      $user->update();

      $user_info = UserInfo::updateOrCreate([
         'phone' => $request->phone,
         'dependency_id' => $request->dependency_id,
         'position' => $request->position,
         'user_id' => $user->id
      ]);

      Session::flash('info', ['success', __('Perfil actualizado correctamente')]);
      return back();
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
