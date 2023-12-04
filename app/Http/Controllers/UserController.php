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
      $url=('/create');
      return view("register",compact("url"));
    }

    public function store(Request $request){

  
      $user= new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = hash::make($request->password);
      $user->save();

      return view('welcome');

    }

    public function delete($id){
      $user= User::find($id);
      if(!is_null($user)){
        $user->delete();
        return redirect('getuserdata');
    
      }
      //return view('userTableView');
    }

    public function edit($id){
      $url=('/user/update').'/'.$id;
      $user= User::find($id);
      return view("register", compact("user","url"));
    
    }

    public function update(Request $request,$id){
      $user= User::find($id);
      if($request->name == null || $request->email == null || $request->password ==null){

        return redirect("getuserdata");
       
      }
   
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = hash::make($request->password);
      $user->save();

      return redirect('getuserdata');

    }
}
