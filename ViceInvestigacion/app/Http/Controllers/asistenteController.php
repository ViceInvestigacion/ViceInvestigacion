<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asistenteBE;

class asistenteController extends Controller
{
    public function index ()
    {
        return asistenteBE::all();

    }
}
