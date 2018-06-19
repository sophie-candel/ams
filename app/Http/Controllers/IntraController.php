<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Judoka;

class IntraController extends Controller
{
    public function index() {
        return redirect()->route('intranet.dashboard');
    }
    
    public function dashboard() {
        $judokas = DB::table('judokas')->count();
        $users = DB::table('users')->count();
        $lastjudoka = Judoka::latest()->first();

        return view('intranet.dashboard')
        ->withJudokas($judokas)
        ->withLastjudoka($lastjudoka)
        ->withUsers($users);
    }
}
