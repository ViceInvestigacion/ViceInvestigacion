<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyectoBE;

class proyectoController extends Controller
{
    public function index()
    {
        return proyectoBE::all();
    }
}
