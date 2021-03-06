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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// route resource 
// Route::resource('/admin/users', 'UserController');


// Route prefix
Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(

    function() {
        Route::resource('users', 'UserController');
    }
);


Route::get('/posts' , 'PostController@index') ;



Route::get('{any}', function () {
    return view('welcome');
})->where('any','.*');
