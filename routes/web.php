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



Auth::routes();

Route::get('/dashboard/{user}',[App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/faq',[App\Http\Controllers\FaqController::class, 'index']);
Route::get('/intro',[App\Http\Controllers\IntroController::class, 'index']);

Route::get('/p/create',[App\Http\Controllers\PostsController::class, 'create']);
Route::get('/p/{post}',[App\Http\Controllers\PostsController::class, 'show']);

Route::post('/p',[App\Http\Controllers\PostsController::class, 'store']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');


Route::get('/grade/create',[App\Http\Controllers\GradesController::class, 'create']);

Route::post('/grade/{grade}',[App\Http\Controllers\GradesController::class, 'show']);

Route::post('/grade',[App\Http\Controllers\GradesController::class, 'store']);
