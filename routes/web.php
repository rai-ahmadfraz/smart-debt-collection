<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DebtorController;
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

Auth::routes();

Route::get('/home', [DebtorController::class, 'index'])->name('home');
Route::get('/accounts', [DebtorController::class, 'openAccount'])->name('openAccount');
Route::prefix('debtor')->group(function () {
    Route::get('/detail/{id}', [DebtorController::class, 'getDetail'])->name('getDetail');



});
//////////end debtor////////////////////
