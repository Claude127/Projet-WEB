<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function index()
    {
        return view('ideas.index');
    }

}
