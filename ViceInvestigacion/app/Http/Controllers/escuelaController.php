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

}
