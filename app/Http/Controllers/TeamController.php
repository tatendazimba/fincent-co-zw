<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($leader = "ndodana-mguquka") {
        return view("team.index", compact("leader"));
    }
}
