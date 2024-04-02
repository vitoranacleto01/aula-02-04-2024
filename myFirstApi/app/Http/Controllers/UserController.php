<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
    
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', ['user' => $user]);
    }

    public function store(Request $request)
    {
       $user = User::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => $request->password,
       ]);

       return view('users.index');
    }

    public function update($id, Request $request)
    {
      $user = User::find($id);

      if(!$user) {
        return view();
      }
      

      return view();
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return view();
        
    }
}

