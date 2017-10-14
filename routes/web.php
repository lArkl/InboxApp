<?php
use App\Workshop;
use Illuminate\Http\Request;

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
Route::resource('workshops','WorkshopController');

Route::resource('applications', 'ApplicationController');

Route::get('/', function () {
    return redirect('workshops');
    //return view('home2');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

