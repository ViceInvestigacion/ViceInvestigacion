<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\especialidadBE;

class especialidadController extends Controller
{
    public function index()
    {
        return especialidadBE::all();
    }
}
