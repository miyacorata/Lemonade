<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LilyDataController;
use App\Http\Controllers\Admin\TripleDataController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LilyController;
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

Route::get('/', [InfoController::class, 'index']);

Route::resource('/lily', LilyController::class, ['only' => ['index','show']]);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

    require __DIR__.'/auth.php';

    Route::resource('/lily', LilyDataController::class);
    Route::resource('/triple', TripleDataController::class);

});
