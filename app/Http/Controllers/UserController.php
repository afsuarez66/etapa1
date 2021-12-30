<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');    
        $this->middleware('verified'); 
    }




    public function index()
    {
        $users = User::all();

        return view('usuarios.index',['users' => $users]);
    }

    
    public function create()
    {
        return view('usuarios.create');
    }

    
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = bcrypt(request('password'));
        
        $usuario->save();

        return redirect('/usuarios');
    }

    
    public function show($id)
    {
        return view('usuarios.show',['user' => User::findOrFail($id)]);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        $usuario->delete();

        return redirect('/usuarios');

    }
}
