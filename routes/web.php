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
    return view('landing');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('{slug}', function () {
    return view('admin.index');
});
// Route::group(['prefix' => 'dashboard', 
// //'middleware' => 'authorized:view-dashboard'
// ], function () {
//     Route::get('/{vue_capture?}', function () {
//         return view('admin.index');
//     })->where('vue_capture', '[\/\w\.-]*');
// });
