<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ponenteBE;

class ponenteController extends Controller
{
   public function index()
   {
       return ponenteBE::all();
   }
}
