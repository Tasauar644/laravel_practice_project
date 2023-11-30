<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function manage()
    {

      //  $users = User::with('posts')->paginate(10);

        //return view('userTableView', compact('users'));
        $users = User::all();
        return view("userTableView", compact("users"));
      

    }
}
