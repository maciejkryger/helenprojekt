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
    return view('index');
});

Route::get('/project', function () {
    return view('menu/project');
});

Route::get('/about', function () {
    return view('menu/about');
});

Route::get('/publication', function () {
    return view('menu/publication');
});

Route::get('/contact', function () {
    return view('menu/contact');
});

Route::get('/project/mieszkanie-z-antresola-zalasewo-park', function () {
    return view('projects/mieszkanieAntresola');
});

Route::get('/project/parter-domu-w-suchym-lesie', function () {
    return view('projects/parterSuchyLas');
});

Route::get('/project/srodecka-lazienka', function () {
    return view('projects/srodeckaLazienka');
});

Route::get('/project/w-starym-mlynie', function () {
    return view('projects/staryMlyn');
});
