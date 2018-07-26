<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Judoka;

class JudokaController extends Controller
{
    
    /** INDEX  **/
    public function index()
    {
        $judokas = Judoka::orderBy('nom')->paginate(20);
        return view('intranet.judokas.index')->withJudokas($judokas);
    }

    /** CREATE  **/
    public function create()
    {
        return view('intranet.judokas.create');
    }

    /** STORE  **/
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'file' => 'filled|file|mimetypes:image/jpeg,image/png',
            'date_naissance' => 'required|date',
            'licence' => 'required',
            'dojo' => 'required',
            'grade' => 'required',
            'telephone' => 'required',
            'portable' => 'filled',
            'email' => 'filled', 
            'adresse_rue' => 'required',
            'adresse_cp' => 'required',
            'adresse_ville' => 'required'
        ]);

        // if ($request->filled('photo')) {
        //     $photoName = $judoka->nom.$judoka->prenom;
        //     $photoExtension = $request->photo->getClientOriginalExtension();
            
        //     $photo = $photoName.'.'.$photoExtension;
        //     $request->photo->storeAs('', $photoName.'.'.$photoExtension, 'photos');
        // } 

        $judoka = new Judoka();
        $judoka->nom = $request->nom;
        $judoka->prenom = $request->prenom;

        //$judoka->photo = $request->file->getClientOriginalName();

        //$judoka->photo = $request->photo;
        if($request->has('file')) {
            $judoka->photo = $request->file->getClientOriginalName();
        } 
        // else {
        //     $judoka->photo = 'photo.png';
        // }
        
        $judoka->date_naissance = $request->date_naissance;
        $judoka->licence = $request->licence;
        $judoka->dojo = $request->dojo;
        $judoka->grade = $request->grade;
        $judoka->telephone = $request->telephone;
        $judoka->portable = $request->portable;
        $judoka->email = $request->email;
        $judoka->adresse_rue = $request->adresse_rue;
        $judoka->adresse_cp = $request->adresse_cp;
        $judoka->adresse_ville = $request->adresse_ville;
        
        $judoka->save();

        if($request->has('file')) {
            $request->file->storeAs('assets/photos/judokas', $judoka->photo, 'public');
        }

        // $request->file->storeAs('assets', $judoka->photo, 'public');

        return redirect()->route('judokas.show', ['id'=>$judoka->id]);
    }

    /** SHOW  **/
    public function show($id)
    {
        $judoka = Judoka::findOrFail($id);
        return view('intranet.judokas.show')->withJudoka($judoka);
    }

    /** EDIT  **/
    public function edit($id)
    {
        $judoka = Judoka::findOrFail($id);
        return view('intranet.judokas.edit')->withJudoka($judoka);
    }

    /** UPDATE  **/
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'filled',
            'prenom' => 'filled',
            // 'file' => 'filled',
            'file' => 'filled|file|mimetypes:image/jpeg,image/png',
            'date_naissance' => 'filled|date',
            'licence' => 'filled',
            'dojo' => 'filled',
            'grade' => 'filled',
            'telephone' => 'filled',
            'portable' => 'filled',
            'email' => 'filled', 
            'adresse_rue' => 'filled',
            'adresse_cp' => 'filled',
            'adresse_ville' => 'filled'
        ]);

        $judoka = Judoka::findOrFail($id);
        $judoka->nom = $request->nom;
        $judoka->prenom = $request->prenom;
        $judoka->date_naissance = $request->date_naissance;
        $judoka->licence = $request->licence;
        $judoka->dojo = $request->dojo;
        $judoka->grade = $request->grade;
        $judoka->telephone = $request->telephone;
        $judoka->portable = $request->portable;
        $judoka->email = $request->email;
        $judoka->adresse_rue = $request->adresse_rue;
        $judoka->adresse_cp = $request->adresse_cp;
        $judoka->adresse_ville = $request->adresse_ville;

        // if($request->has('file')) {
        //     $judoka->photo = $request->file->getClientOriginalName();
        // } 

        // if(isset($request->file) && !empty($request->file)){
        //     $judoka->photo = $request->file->getClientOriginalName();
        //     $request->file->storeAs('assets/photos/judokas', $judoka->photo, 'public');
        // }

        if($request->has('file')) {
            $judoka->photo = $request->file->getClientOriginalName();
            $request->file->storeAs('assets/photos/judokas', $judoka->photo, 'public');
        } 
        
        $judoka->save();

        return redirect()->route('judokas.show', ['id'=>$judoka->id]);
    }

    /** DESTROY  **/
    public function destroy($id)
    {
        $judoka = Judoka::findOrFail($id);
        $judoka->delete();
        Storage::delete('public/assets/'.$judoka->photo);
        return view('intranet.judokas.index');
    }
}
