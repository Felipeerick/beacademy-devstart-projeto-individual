<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErroController extends Controller
{
   public function errorView()
   {
     return view('errors.405');
   }
}
