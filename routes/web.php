<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Crud perfil*/
Route::get('profiles/listar',[ProfileController::class,'index'])->name('profile.index');
Route::get('profiles/create',[ProfileController::class,'create']);
Route::post('profiles/store', [ProfileController::class,'store'])->name('profiles.store');
Route::get('profile/{profile}',[ProfileController::class,'show'])->name('profile.show');
Route::put('profile/{profile}',[ProfileController::class,'update'])->name('profile.update');
Route::delete('profile/{profile}',[ProfileController::class,'destroy'])->name('profile.destroy');
Route::get('profile/{profile}/editar',[ProfileController::class,'edit'])->name('profile.edit');
/*Crud perfil*/



/*Crud usuario*/
Route::get('users/listar',[UserController::class,'index'])->name('user.index');
Route::get('users/create',[UserController::class,'create']);
Route::post('users/store', [UserController::class,'store'])->name('users.store');
Route::get('user/{user}',[UserController::class,'show'])->name('user.show');
Route::put('user/{user}',[UserController::class,'update'])->name('user.update');
Route::delete('user/{user}',[UserController::class,'destroy'])->name('user.destroy');
Route::get('user/{user}/editar',[UserController::class,'edit'])->name('user.edit');
/*Crud usuario*/


/*Crud publiacion*/
Route::get('publications/listar',[PublicationController::class,'index'])->name('publication.index');
Route::get('publications/create',[PublicationController::class,'create']);
Route::post('publications/store', [PublicationController::class,'store'])->name('publications.store');
Route::get('publication/{publication}',[PublicationController::class,'show'])->name('publication.show');
Route::put('publication/{publication}',[PublicationController::class,'update'])->name('publication.update');
Route::delete('publication/{publication}',[PublicationController::class,'destroy'])->name('publication.destroy');
Route::get('publication/{publication}/editar',[PublicationController::class,'edit'])->name('publication.edit');
/*Crud publiacion*/

/*crud comentario*/
Route::get('comments/listar',[CommentController::class,'index'])->name('comment.index');
Route::get('comments/create',[CommentController::class,'create']);
Route::post('comments/store', [CommentController::class,'store'])->name('comments.store');
Route::get('comment/{comment}',[CommentController::class,'show'])->name('comment.show');
Route::put('comment/{comment}',[CommentController::class,'update'])->name('comment.update');
Route::delete('comment/{comment}',[CommentController::class,'destroy'])->name('comment.destroy');
Route::get('comment/{comment}/editar',[CommentController::class,'edit'])->name('comment.edit');
/*Crud comentario*/



/*Crud mensaje*/
Route::get('messages/listar',[MessageController::class,'index'])->name('messages.index');
Route::get('messages/create',[MessageController::class,'create']);
Route::post('messages/store', [MessageController::class,'store'])->name('messages.store');
Route::get('message/{message}',[MessageController::class,'show'])->name('message.show');
Route::put('message/{message}',[MessageController::class,'update'])->name('message.update');
Route::delete('message/{message}',[MessageController::class,'destroy'])->name('message.destroy');
Route::get('message/{message}/editar',[MessageController::class,'edit'])->name('message.edit');
/*Crud mensaje*/
