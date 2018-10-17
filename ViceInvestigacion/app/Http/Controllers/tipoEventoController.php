<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoEventoBE;

class tipoEventoController extends Controller
{
    public function index()
    {
        return tipoEventoBE::all();
    }
}
