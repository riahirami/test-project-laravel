<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/anypet', function () {
    return view('anypet');
});

Route::get('/user/{id}', function (string $id) {
    return 'parameters '.$id;
});

Route::get('/id/{id}/name/{name}', function (string $name,string $id) {
    return 'id: '.$id.' name: '.$name;
});
