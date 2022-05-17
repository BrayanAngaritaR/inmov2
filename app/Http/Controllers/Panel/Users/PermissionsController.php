<?php

namespace App\Http\Controllers\Panel\Users;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PermissionsController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin']);
   }

   public function index()
   {
      $permissions = Permission::with('roles')->get();
      return view('panel.permissions.index', compact('permissions'));
   }

   public function index_role(Role $role)
   {
      $roles = Role::withCount('users')->get();
      return view('panel.roles.index', compact('roles'));
   }

   public function store(Request $request)
   {
      Permission::create(['name' => $request->name]);
      Session::flash('info', ['success', __('Permiso agregado')]);
      return back();
   }
}
