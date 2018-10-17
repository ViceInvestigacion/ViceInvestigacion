<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoAsistenteBE;

class tipoAsistenteController extends Controller
{
    public function index()
    {
        return tipoAsistenteBE::all();
    }
}
