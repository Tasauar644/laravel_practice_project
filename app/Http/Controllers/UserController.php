<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function manage()
    {

      //  $users = User::with('posts')->paginate(10);

        //return view('userTableView', compact('users'));
        $users = User::all();
        //echo"<pre>";
        //print_r($users);
        return view("userTableView", compact("users"));
      

    }

    public function insert(){
      return view("register");
    }

    public function store(Request $request){

  
      $user= new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = hash::make($request->password);
      $user->save();

      return view('welcome');

    }
}
