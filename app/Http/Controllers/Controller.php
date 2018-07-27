<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Actualite;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        $actualites = DB::table('actualites')
            ->where('status', '=', 1)
            ->take(6)
            ->get();
        return view('home')->withActualites($actualites);
    }

    public function presentation() {
        return view('app.presentation');
    }
    public function disciplines() {
        return view('app.disciplines');
    }
    public function equipe() {
        return view('app.equipe');
    }
    public function horaires() {
        return view('app.horaires');
    }
    public function tarifs() {
        return view('app.tarifs');
    }
    public function calendrier() {
        return view('app.calendrier');
    }
    public function resultats() {
        return view('app.resultats');
    }
    public function galerie() {
        return view('app.galerie');
    }
}
