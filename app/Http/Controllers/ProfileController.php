<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index(){

     $profiles = Profile::orderBy('id','desc')->get();
     return view('profiles.listar',compact('profiles'));

   }

   public function create(){
    return view('profiles.create');
   }

   public function store(Request $request){
    $profile = new Profile();
    $profile->titulo=$request->titulo;
    $profile->descripcion=$request->decripcion;

    /*adjuntar archivo de hoja de vida*/
    $file = $request->file("Archivo_hvida");
    $hoja_vida = "pdf_" .time().".".$file->guessExtension();
    $request->file('Archivo_hvida')->storeAs('public/imagenes', $hoja_vida);
    $profile->Archivo_hvida = $hoja_vida;
    /*fin hoja vida*/

    /*adjunto foto*/
    $file1 = $request->file("foto_perfil"); // Obtener el archivo de la solicitud
    $foto_per = "photo_" . time() . "." . $file1->guessExtension(); // Generar un nombre único para el archivo de la foto de perfil
    $request->file('foto_perfil')->storeAs('public/profile_photos', $foto_per); // Almacenar la foto de perfil
    $profile->foto_perfil = $foto_per; // Asignar el nombre del archivo al atributo profile_photo_path del modelo User
    /*fin foto*/

    $profile->save();
    return $profile;
   }

   public function show(Profile $profile){
    return view('profiles.show',compact('profile'));
   }

   public function destroy (Profile $profile){
    $profile->delete();
    return redirect()->route('profile.index');
   }

   public function edit(Profile $profile){
    return view('profiles.edit',compact('profile'));
   }

   public function update(Request $request, Profile $profile){

    $profile->titulo=$request->titulo;
    $profile->descripcion=$request->descripcion;
    $profile->save();

    return redirect()->route('profile.index');

   }


}
