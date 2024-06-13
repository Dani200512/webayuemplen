<?php

namespace App\Http\Controllers;
use App\Models\Reaction;
use App\Models\User;
use App\Models\Publication;
use Illuminate\Http\Request;

class ReactionController extends Controller
{

    public function index()
{
    $reactions = Reaction::orderBy('id', 'desc')->get();
    return view('reactions.listar', compact('reactions'));
}



    public function create(){
        $users= User::all();
        $publications= Publication::all();
        return view('reactions.create',compact('users','publications'));
    }

    public function store(Request $request){

        $reaction= new Reaction();
        $reaction->tipo_reaccion = $request->tipo_reaccion;
        $reaction->user_id = $request->user_id;
        $reaction->publication_id = $request->publication_id;
        $reaction->save();

        return $reaction;


    }

    public function show(Reaction $reaction){
        return view('reactions.show',compact('reaction'));

    }

    public function destroy (Reaction $reaction){
        $reaction->delete();
        return redirect()->route('reaction.index');
    }

    public function edit(Reaction  $reaction){
        return view('reactions.edit',compact('reaction'));
    }

    public function update(Request $request, Reaction $reaction){
        $reaction->tipo_reaccion  = $request->tipo_reaccion ;
        $reaction->save();

        return redirect()->route('reactions.index');
    }

}
