<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
{
    $comments = Comment::orderBy('id', 'desc')->get();
    return view('comments.listar', compact('comments'));
}


    public function create(){
        $publications= Publication::all();
        return view('comments.create',compact('publications'));

    }

    public function store(Request $request){

        $comment= new Comment();
        $comment->content = $request->content; // corrected line
        $comment->publication_id = $request->publication_id;
        $comment->save();

        return $comment;

    }

    public function show(Comment $comment){
        return view('comments.show',compact('comment'));

    }

    public function destroy (Comment $comment){
        $comment->delete();
        return redirect()->route('comment.index');
    }

    public function edit(Comment $comment){
        return view('comments.edit',compact('comment'));
    }


    public function update(Request $request, Comment $comment){
        $comment->content = $request->content;
        $comment->save();

        return redirect()->route('comments.index');
    }


}
