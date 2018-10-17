<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personalBE;

class personalController extends Controller
{
    public function index()
    {
        return personalBE::all();
    }
}
