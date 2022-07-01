<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Pages.index', [
        'title' => 'Dashboard',
        'page' => 'dashboard'
    ]);
});


Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('User');
    Route::get('/list', [UserController::class, 'list'])->name('User.list');
    Route::post('/store', [UserController::class, 'store'])->name('User.store');
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('User.detail');
    Route::post('/update', [UserController::class, 'update'])->name('User.update');
    Route::delete('/delete', [UserController::class, 'destroy'])->name('User.delete');
});
