<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
})->name('home');

Route::get('users', [UserController::class, 'index']) -> name('users.index');

Route::get('users/{id}', [UserController::class, 'show']) -> name('users.show');

Route::get('users/create', [UserController::class, 'create']) -> name('users.create');

Route::post('users', [UserController::class, 'store']) -> name('users.store');

Route::prefix('auth')->group(function () {
    Route::get('login', function() {
        return view('auth.login');
    })->name('auth.login.page');

    Route::post('login', [LoginController::class, 'login']) -> name('auth.login');

    Route::get('logout', [LoginController::class, 'logout']) -> name('auth.logout');
});