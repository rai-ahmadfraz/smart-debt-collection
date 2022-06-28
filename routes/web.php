<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [DebtorController::class, 'index'])->name('home');
    Route::prefix('debtor')->group(function () {
        Route::get('/detail/{id}', [DebtorController::class, 'getDetail'])->name('getDetail');
    });


    Route::group(['middleware' => 'check_user_role'], function () {
        Route::prefix('accounts')->group(function(){
            Route::get('/create-user', [UserController::class, 'addNewUser'])->name('addNewUser');
            Route::get('/store-user', [UserController::class, 'storeNewUser'])->name('storeNewUser');
            Route::get('/update-user', [UserController::class, 'updateUser'])->name('updateUser');
            Route::get('/update-user-detail/{id}', [UserController::class, 'updateUserDetail'])->name('updateUserDetail');
            Route::get('/', [UserController::class, 'openAccount'])->name('openAccount');
            Route::get('/change-role/{id}', [UserController::class, 'changeUserRole'])->name('changeUserRole');
            Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
        });
        
    });
    
});
