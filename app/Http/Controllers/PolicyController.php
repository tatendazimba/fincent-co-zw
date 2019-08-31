<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function __invoke(Request $request, Post $policy)
    {
        return view("policy", compact("policy"));
    }
}
