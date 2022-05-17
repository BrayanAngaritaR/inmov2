<?php

namespace App\Http\Controllers\Panel\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;

class RolePermissionsController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index(Role $role)
   {
      $permissions = Permission::orderBy('name')->get();
      $role_permissions = $role->permissions->pluck('id')->toArray();

      return view('panel.roles.permissions.index', compact([
         'role', 'permissions', 'role_permissions'
      ]));
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
   public function store(Request $request, Role $role)
   {
      $permissions = $request->permissions;

      //dd($permissions);

      $role->syncPermissions($permissions);

      // $check_role_permission = \DB::table('role_has_permissions')
      //    ->where('permission_id', $permission_id)
      //    ->where('role_id', $role->id)
      //    ->first();

      // if ($check_role_permission) {
      //    Session::flash('info', ['error', __('El rol ya tenía el permiso')]);
      //    return back();
      // } else {
      //    $permission = Permission::whereId($permission_id)->first();
      //    $role->givePermissionTo($permission);
      // }

      Session::flash('info', ['success', __('Información actualizada correctamente')]);
      return back();

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
