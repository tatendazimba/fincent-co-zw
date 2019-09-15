<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicrofinanceController extends Controller
{
    public function index()
    {
        return view("micro-finance");
    }
}
