<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttackController extends Controller
{
    public function index()
    {
        return view('attacks');
    }
}
