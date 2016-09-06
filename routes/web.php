<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios', function( ) {
  $users = Louis\Models\User::all();
  $adresses = [];
  
  dd(compact('users','addresses'));
  return view ('users.index')->with(); 


    //resources/views/users/index.blade.php
    // dd( $u->toArray() );
    // return view('users_.index')->with(['userss' => $users_]);

});
