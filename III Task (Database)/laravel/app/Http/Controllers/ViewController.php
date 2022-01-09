<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View3d;

class ViewController extends Controller
{
    public function index()
    {
        $views = View3d::all();

        return view('welcome', compact('views'));
    }
}
