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

Route::resource('joinus', 'JoinUsController');
// Route::get('joinus', function () {
//     return view('joinus');
// });

// Route::group(['prefix' => 'joinus'], function () {
//     Route::get('/upload', function () {
//         return view('joinus');
//     });
// });
