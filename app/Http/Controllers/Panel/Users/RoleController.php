<?php

namespace App\Http\Controllers\Panel\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class RoleController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin']);
   }

   public function index()
   {
      $roles = Role::withCount('users')->get();
      return view('panel.roles.index', compact('roles'));
   }

   public function store(Request $request)
   {
      Role::create(['name' => $request->name]);
      Session::flash('info', ['success', __('Rol agregado')]);
      return back();
   }

   public function show(Role $role)
   {
      $users = User::role($role->name)->get();
      return view('panel.roles.users.index', compact('users'));
   }
    
   public function edit(Role $role)
   {
      $users = User::all();
      $role_users = User::role($role->name)->get();
      return view('panel.roles.users.edit', compact(['users', 'role_users', 'role']));
   }

   public function update(Request $request, Role $role)
   {
      $check_role = \DB::table('model_has_roles')
         ->where('model_type', 'App\Models\User')
         ->where('model_id', $request->user_id)
         ->where('role_id', $role->id)
         ->first();

      if ($check_role) {
         Session::flash('info', ['error', __('El usuario ya tenía el rol')]);
         return back();
      } else {
         \DB::table('model_has_roles')
            ->insert([
               'model_type' => 'App\Models\User',
               'model_id' => $request->user_id,
               'role_id' => $role->id,
            ]);
      }

      Session::flash('info', ['success', __('Usuario actualizado correctamente')]);
      return back();
   }

   public function destroy($id)
   {
   //
   }
}
