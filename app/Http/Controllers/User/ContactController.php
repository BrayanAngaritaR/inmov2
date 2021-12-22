<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\InfoRequest;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    protected $template;

   public function __construct()
   {
      $this->template = env('TEMPLATE');
   }
   
   public function index()
   {
      return view($this->template.'.user.contact');
   }

   public function store(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'name' => ['required', 'max:255', 'min:8'],
         'email' => ['required', 'email'],
      ], [
         'name.required' => 'Debes ingresar tu nombre completo',
         'name.max' => 'El nombre es demasiado largo',
         'name.min' => 'El nombre es demasiado corto',
         'email.required' => 'El correo electrónico es requerido',
         'email.email' => 'Debe ser un correo electrónico válido',
      ]);

      $info = array(
         "name" => $request->name,
         "email" => $request->email,
         "info" => $request->info,
      );

      if ($validator->passes()) {
         $info_request = InfoRequest::create([
            'type' => 'Contacto',
            'info' => json_encode($info),
         ]);
      }

      Session::flash('info', ['success', __('Formulario de contacto enviado correctamente, recibirás respuesta pronto.')]);
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
