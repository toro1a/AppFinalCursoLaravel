<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserCreateFormRequest;

class AdminUsersController extends Controller
{
    
    public function index(){

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create(){

        $roles = Role::all();
        
        return view('admin.users.create', compact('roles'));
    }

    public function edit($id){

        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit', compact('user'),compact('roles'));
    }

    public function destroy($id){


    }

    public function store(UserCreateFormRequest $request){

        /*User::create($request->all());*/

        $entrada=$request->all();

        if($archivo=$request->file('foto')){

            $nombre=$archivo->getClientOriginalName();
            $archivo->move(storage_path('app').'/public/uploads/userpic', $nombre);
            $entrada['foto'] = $nombre;

        }

        $entrada['password'] = bcrypt($request->password); 
        User::create($entrada);
        
        return redirect('/admin/users');
    }
}
