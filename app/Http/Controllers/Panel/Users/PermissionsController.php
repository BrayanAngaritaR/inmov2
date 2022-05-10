<?php

namespace App\Http\Controllers\Panel\Users;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin']);
   }

   public function index(Role $role)
   {
      $roles = Role::withCount('users')->get();
      return view('panel.roles.index', compact('roles'));
   }
}
