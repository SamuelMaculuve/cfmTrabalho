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
    return view('teste-home');
});
Route::get('/departament', function () {
    return view('teste-home');
});
Route::get('/profile', function () {
    return view('perfil');
});

Route::resource('employees',  'EmployeesController');
Route::resource('departaments',  'DepartmentsController');
Route::resource('recipients',  'RecipientsController');
Route::resource('senders',  'SendersController');
Route::resource('person-contacts',  'PersonContactsController');
Route::resource('sender',  'SendersController');
Route::resource('merchandises',  'MerchandisesController');
Route::resource('category',  'CategoryController');
Route::resource('travels',  'TravelsController');
Route::resource('wagons',  'WagonsController');
Route::resource('passagers',  'PassagersController');
Route::resource('tarins',  'TarinsController');
Route::resource('train-travel',  'TrainTravelController');
Route::resource('tickets',  'TicketsController');
Route::resource('passager-train',  'PassagerTrainsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
