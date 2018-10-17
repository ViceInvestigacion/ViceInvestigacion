<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriptorBE;

class suscriptorController extends Controller
{
    public function index()
    {
        return suscriptorBE::all();
    }
}
