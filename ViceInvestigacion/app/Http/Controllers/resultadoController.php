<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resultadoBE;

class resultadoController extends Controller
{
    public function index()
    {
        return resultadoBE::all();
    }
}
