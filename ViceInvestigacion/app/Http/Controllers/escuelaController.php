<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\escuelaBE;

class escuelaController extends Controller
{
    public function index()
    {
        return escuelaBE::all();
    }

    public function find_escuelas($facultad)
    {
        return  escuelaBE::where('facultadId_Escuela',$facultad)->get();
    }

}
