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


 
Route::get('/test1', function () {
    return 'Hello World';
});
route::get('/student',function(){
    return 'Student Name: Nahida Sultana
                Roll:147030';

});

route::redirect('/student','/test1');

route::get('/studentinfo',function(){
    return view('studentinfo');
});

route::get('/nahidainfo',function(){
    return view('nahidainfo');
});

route::get('ns1',function(){
    return view('info');
});

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('/profile/{name}', function ($name) {
    return 'profile '.$name;
});