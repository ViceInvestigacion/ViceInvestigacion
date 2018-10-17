<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesionBE;

class profesionController extends Controller
{
    public function index()
    {
        return profesionBE::all();
    }
}
