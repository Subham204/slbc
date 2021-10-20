<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function homepage()
   {
        return view('Home');
   }

   public function service()
   {
        return view('service');
   }
}
