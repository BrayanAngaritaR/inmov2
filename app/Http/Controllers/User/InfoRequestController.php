<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use App\Models\User;
use App\Models\User\InfoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\Facades\Hash;
use Str;

class InfoRequestController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
   //
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
   public function store(Request $request, Property $property)
   {
      $validator = Validator::make($request->all(), [
         'name'  => ['required', 'max:255', 'min:8'],
         'email' => ['required', 'email'],
         'info'  => ['required'],
      ], [
         'name.required' => 'Debes ingresar tu nombre completo',
         'name.max' => 'El nombre es demasiado largo',
         'name.min' => 'El nombre es demasiado corto',
         'email.required' => 'El correo electrónico es requerido',
         'email.email' => 'Debe ser un correo electrónico válido',
         'info.required' => 'Debes ingresar algo de texto',
      ]);

      $info = array(
         "name" => $request->name,
         "email" => $request->email,
         "info" => $request->info,
      );

      if ($validator->passes()) {
         $info_request = InfoRequest::create([
            'property_id' => $property->id,
            'info' => json_encode($info),
         ]);
      }

      if($request->has('create_account')) {

         $check_user = User::whereEmail($request->email)->first();

         if ($check_user) {
            Session::flash('info', ['success', __('Se ha registrado tu solicitud, recibirás respuesta pronto. Tu cuenta no ha sido creada porque ya existe.')]);
         } else {
            $password = Str::random(10);

            User::create([
               "name" => $request->name,
               "email" => $request->email,
               "password" => Hash::make($password)
            ]);

            Session::flash('info', ['success', __('Se ha registrado tu solicitud, recibirás respuesta pronto. Tu cuenta ha sido creada y la contraseña ha sido enviada a tu correo electrónico.')]);
         }
      }

      Session::flash('info', ['success', __('Se ha registrado tu solicitud, recibirás respuesta pronto.')]);
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
