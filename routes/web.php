  
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

Route::get('/', function () {
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

Route::get('/home', 'HomeController@index')->name('home');

// affichage 
Route::get('/', 'PostController@index');

//insertion des posts

Route::get('/p', 'PostController@create')->name('Post.create');
Route::post('/p', 'PostController@store')->name('Post.store');

