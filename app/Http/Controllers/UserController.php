<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        $users = User::orderBy('id', 'desc')->get();
        return view('users.listar', compact('users'));

    }

    //Create
    public function create(){
        $profiles= Profile::all();
        return view('users.create',compact('profiles'));

    }
//Store
    public function store(Request $request){

        $user= new User();
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->birthdate=$request->birthdate;
        $user->location=$request->location;
        $user->gender=$request->gender;
        $user->documenttype=$request->documenttype;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password = bcrypt($request->password);
        $user->profile_id=$request->profile_id;
        $user->save();

        return $user;


}

public function show(User $user){

    return view('users.show',compact('user'));

  }

  public function destroy (User $user){
    $user->delete();
    return redirect()->route('user.index');
  }


  public function edit(User $user){

    return view('users.edit',compact('user'));

  }


  public function update(Request $request, User $user){

    $user->name=$request->name;
    $user->lastname=$request->lastname;
    $user->birthdate=$request->birthdate;
    $user->location=$request->location;
    $user->gender=$request->gender;
    $user->documenttype=$request->documenttype;
    $user->phone=$request->phone;
    $user->email=$request->email;

    $user->save();

    return redirect()->route('user.index');

  }

}
