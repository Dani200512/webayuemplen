<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use App\Models\Profile;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){

        $publications = Publication::orderBy('id', 'desc')->get();
        return view('publications.listar', compact('publications'));

    }

    //Create
    public function create(){
        $profiles = Profile::all();
        return view('publications.create',compact('profiles'));

    }

    //store

    public function store(Request $request){


        $publication= new Publication();
        $publication->publication_type=$request->publication_type;
        /*adjunto contenido*/
        $file = $request->file("content"); // Obtener el archivo de la solicitud
        $nombreArchivo = "content" . time() . "." . $file->guessExtension(); // Generar un nombre único para el archivo de la foto de perfil
        $request->file('content')->storeAs('public/content', $nombreArchivo); // Almacenar la foto de perfil
        $publication->content = $nombreArchivo; // Asignar el nombre del archivo al atributo profile_photo_path del modelo User
        /*fin contenido*/
        $publication->description=$request->description;
        $publication->number_likes=$request->number_likes;
        $publication->number_comments=$request->number_comments;
        $publication->profile_id=$request->profile_id;
        $publication->save();

        return $publication;

    }

    public function show(Publication $publication){

        return view('publications.show',compact('publication'));

      }

      public function destroy (Publication $publication){
        $publication->delete();
        return redirect()->route('publication.index');
      }


      public function edit(Publication $publication){

        return view('publications.edit',compact('publication'));

      }

      public function update(Request $request, Publication $publication){

        $publication->publication_type=$request->publication_type;
        $publication->description=$request->description;
        $publication->number_likes=$request->number_likes;
        $publication->number_comments=$request->number_comments;

        $publication->save();

        return redirect()->route('publication.index');

      }


}
