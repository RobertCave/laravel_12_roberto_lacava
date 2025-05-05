<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');;

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

 Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');


// BLOG

// Leggere tutti gli articoli nel database
Route::get('/post/index', [PostsController::class, 'index'])->name('post.index');

//  per la pagina inserisci post
Route::get('/post/create', [PostsController::class, 'create'])->name('post.create')->middleware('auth');

// rotta per lo store in Database
Route::post('/post/store',[PostsController::class, 'store'])->name('post.store')->middleware('auth');

// rotta per la visualizzazione di un solo post
Route::get('/post/show/{post}', [PostsController::class, 'show'])->name('post.show');

// rotta per l'edit del post
Route::get('/post/edit/{post}', [PostsController::class, 'edit'])->name('post.edit')->middleware('auth');


// rotta per l'update del post
Route::put('/post/update/{post}', [PostsController::class, 'update'])->name('post.update')->middleware('auth');


// Rotta per la cancellazione di un post
Route::delete('/post/delete/{post}', [PostsController::class, 'delete'])->name('post.delete')->middleware('auth');