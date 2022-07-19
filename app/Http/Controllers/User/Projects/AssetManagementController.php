<?php

namespace App\Http\Controllers\User\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetManagementController extends Controller
{
   protected $template;

   public function __construct()
   {
      $this->template = env('TEMPLATE');
      $this->url = $currentURL = url()->full();
   }

   public function index()
   {
      return view($this->template.'properties.management.index');
   }
}
