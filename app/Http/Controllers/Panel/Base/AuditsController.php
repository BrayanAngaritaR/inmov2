<?php

namespace App\Http\Controllers\Panel\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditsController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $audits = \DB::table('audits')->get();

      // dd($audits);

      // +"id": 1
      // +"user_type": "App\Models\User"
      // +"user_id": 1
      // +"event": "created"
      // +"auditable_type": "App\Models\Property\Property"
      // +"auditable_id": 36
      // +"old_values": "[]"
      // +"new_values": "{"secure_code":"7753dd87-18d6-4bb8-9827-6e4b0138c3a4","code":"900","link":"https:\/\/drive.google.com\/drive\/u\/0\/folders\/13gbX54LZKTlosVAk8TKLNbiQ_qMEpwmj", ▶"
      // +"url": "https://inmo.app.gov.co/panel/properties/create"
      // +"ip_address": "172.16.21.1"
      // +"user_agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36"
      // +"tags": null
      // +"created_at": "2022-02-14 13:09:44"
      // +"updated_at": "2022-02-14 13:09:44"
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
