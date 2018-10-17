<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resolucionBE;

class resolucionController extends Controller
{
    public function index()
    {
        return resolucionBE::all();
    }
}
