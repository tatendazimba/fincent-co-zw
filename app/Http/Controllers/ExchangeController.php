<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function index()
    {
        return view("exchange");
    }

    public function rates()
    {
        return view("rates.board");
    }
}
