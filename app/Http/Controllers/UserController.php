<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::latest() ->get();
        return view('users.index', [//paso mi vista
            'users' => $users
        ]);
    }
    public function store(Request $request){
        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => $request -> password
        ]);

        return back();  //retorna a la vista anterior
    }
    public function destroy(User $user){
        $user -> delete();

        return back();
    }
}
