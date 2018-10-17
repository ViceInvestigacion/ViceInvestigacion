<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\universidadBE;
class universidadController extends Controller
{
    public function index()
    {
        return universidadBE::all();
    }
}
