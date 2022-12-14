<?php

use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('country-state-city', [CountryStateCityController::class, 'index'])->name('country-state-city');
Route::post('api/fetch-states', [CountryStateCityController::class, 'fetchState'])->name('api.fetch-states');
Route::post('api/fetch-cities', [CountryStateCityController::class, 'fetchCity'])->name('api.fetch-cities');

require __DIR__.'/auth.php';
