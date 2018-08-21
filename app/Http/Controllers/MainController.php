<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function resume() {
        return view('resume');
    }

    public function projects() {
        return view('projects');
    }
}
