<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;
use Carbon\Carbon;

class ActualiteController extends Controller
{
    /** INDEX  **/
    public function index() {
        $actualites = Actualite::orderBy('id', 'desc')->paginate('10');
        return view('intranet.actualites.index')->withActualites($actualites);
    }

    /** CREATE  **/
    public function create() {
        return view('intranet.actualites.create');
    }

    /** STORE **/
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'status' => 'required|boolean',
        ]);

        $actualite = new Actualite();
        $actualite->title = $request->title;
        $actualite->content = $request->content;
        $actualite->status = $request->input('status', 0);

        if ($request->status === 1) {
            $date = Carbon::now();
            $date = $date->toDateString();
            $actualite->published_at = $date;
        }
        
        $actualite->save();

        return redirect()->route('actualites.show', ['id'=>$actualite->id]);
    }

    /** SHOW  **/
    public function show($id) {
        $actualite = Actualite::findOrFail($id);
        return view('intranet.actualites.show')->withActualite($actualite);
    }

    /** EDIT **/
    public function edit() {
        return view('intranet.actualites.edit');
    }

    /** UPDATE **/
    public function update() {
        $this->valdate($request, [
            'title' => 'filled',
            'content' => 'filled',
        ]);

        $actualite = Actualite::findOrFail($id);
        $actualite->title = $request->title;
        $actualite->content = $request->content;
        $actualite->save();

        return redirect()->route('actualites.show', ['id'=>$actualite->id]);
    }

}
