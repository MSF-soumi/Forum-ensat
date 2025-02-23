  
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// General App Routing
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/p', function () {
    return view('Post');
});



//Authenfication 
Auth::routes();


// affichage 
Route::get('/', 'PostController@index')->name('home');
Route::get('/home', 'PostController@index')->name('home');

//insertion des posts

Route::get('/p', 'PostController@create')->name('Post.create');

Route::post('/p', 'PostController@store')->name('Post.store');

//afficher les details d'un post et ses commentaires

Route::get('/p/{post}', 'PostController@show');



//insert des commentaire 


Route::post('/p/{post}/comments', 'CommentController@store');
