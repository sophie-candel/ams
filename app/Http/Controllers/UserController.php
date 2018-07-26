<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Session;
use Hash;
// use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('role:superadministrator');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->paginate(20);
        return view('intranet.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prenom' => 'required|max:255',
            'nom' => 'required|max:255',
            'email' => 'required|email|unique:users'
        ]);

        if ($request->filled('password')) {
            $password = trim($request->password);
        } else {
            $password = Hash::make(str_random(8));
        }


        $user = new User();
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->save();

        return redirect()->route('users.show', ['id'=>$user->id]);

        // if($user->save){
        //     return redirect()->route('users.show', $user->id);
        // } else {
        //     Session::flash('danger', 'Sorry, a problem occured while creating this user.');
        //     return redirect()->route('users.create');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
        return view("intranet.users.show")->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::where('id', $id)->with('roles')->first();
        return view("intranet.users.edit")->withUser($user)->withRoles($roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'prenom' => 'filled|max:255',
            'nom' => 'filled|max:255',
            'email' => 'filled'
        ]);
        
        if($request->password_options == 'auto') {
            $password = Hash::make(str_random(8));
        } 
        elseif($request->password_options == 'manual') {
            $user->password = Hash::make($request->password);
        }

        $user = User::findOrFail($id);
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->email = $request->email;
        //$user->password = $request->password;

        $user->save();

        $user->syncRoles(explode(',', $request->roles));

        return redirect()->route('users.show', ['id'=>$user->id]);

        // if($user->save){
        //     return redirect()->route('users.show', $id); 
        // } else {
        //     Session::flash('danger', 'Sorry, a problem occured while creating this user.');
        //     return redirect()->route('users.edit', $id);
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->route('users.index'); 
    }
}
