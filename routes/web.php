<?php

use App\Http\Controllers\PlaceofinterestController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/country', function (){
    //return view('country');
//});
Route::get('/country/{country}', [CountryController::class, 'getThecountry'])->name('getThecountry');

Route::get('/placeofinterest/{placeofinterest}', [PlaceofinterestController::class, 'getTheplaceofinterest'])->name('getTheplaceofinterest');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [CountryController::class, 'getcountry'])->name('getcountry');  

Route::get('/bestemming', function (){
    return view('bestemming');
});
Route::get('/create/{country}', [PlaceofinterestController::class, 'getcreate'])->name('crud.create');
Route::post('/create/{country}', [PlaceofinterestController::class, 'postplaceofinterest'])->name('crud.create.country');