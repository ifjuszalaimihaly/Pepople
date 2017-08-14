<?php

use App\Person;

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

Route::get('/', 'PersonController@create');

Route::resource('person', 'PersonController', ['except' => ['show']]);

Route::resource('image', 'ImageController', ['only' => ['destroy']]);

Route::get('person/{id}/countsublatern', 'PersonController@countsublatern');
?>