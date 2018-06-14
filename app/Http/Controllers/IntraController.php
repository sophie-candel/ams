<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntraController extends Controller
{
    public function index() {
        return redirect()->route('intranet.dashboard');
    }
    
    public function dashboard() {
        return view('intranet.dashboard');
    }
}
