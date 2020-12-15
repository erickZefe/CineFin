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

// Route::resource('movies', 'MovieController');
Route::get('/movies.viewTable', 'MovieController@viewTable');

// Route::resource('consumables', 'ConsumableController');
// Route::resource('rooms', 'RoomController');

Route::resources([
    'movies' => 'MovieController',
    'consumables' => 'ConsumableController',
    'rooms' => 'RoomController',
    'entrances' => 'EntranceController',
    'funtions' => 'FuntionController'
]);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('movies-pdf', 'MovieController@exportToPDF')->name('movies.pdf');
Route::get('consumables-pdf', 'ConsumableController@exportToPDF')->name('consumables.pdf');
Route::get('entrances-pdf', 'EntranceController@exportToPDF')->name('entrances.pdf');
Route::get('funtions-pdf', 'FuntionController@exportToPDF')->name('funtions.pdf');

Route::get('/moviesXLS', 'MovieController@exportToXls');
Route::get('/moviesCSV', 'MovieController@exportToCsv');

Route::get('/entrancesXLS', 'EntranceController@exportToXls');
Route::get('/entrancesCSV', 'EntranceController@exportToCsv');

Route::get('/funtionsXLS', 'FuntionController@exportToXls');
Route::get('/funtionsCSV', 'FuntionController@exportToCsv');

Route::get('/consumablesXLS', 'ConsumableController@exportToXls');
Route::get('/consumablesCSV', 'ConsumableController@exportToCsv');