<?php

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
    if(Auth::user()) {
        $role = Auth::user()->role;
        return redirect("/{$role}");
    }
    else return redirect('/login');
 });

Route::get('/login', [ 'as' => 'login', 'uses' => 'LoginController@getLogin' ]);
Route::post('/login', [ 'uses' => 'LoginController@postLogin' ]);

Route::get('/redirect', [ 'uses' => 'LoginController@redirectToProvider' ]);
Route::get('/callback', [ 'uses' => 'LoginController@handleProviderCallback' ]);

Route::get('/logout', [ 'uses' => 'LoginController@logout' ]);

Route::get('/admin', function () { return view('admin'); })->middleware('auth', 'admin');
Route::get('/leader', function () { return view('manager'); })->middleware('auth');
Route::get('/employee', function () { return view('employee'); })->middleware('auth');

Route::get('nopermit', function () { return "You do not permit to do that!"; });

// Route for test
Route::get('/test/add/user/default', [ 'uses' => 'TestController@testAddUserDefault' ]);
