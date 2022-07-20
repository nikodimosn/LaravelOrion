<?php
use App\User;
use App\Models\Post;
use App\Http\Controllers\PostControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Use App\Http\Controllers\HomeController;
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

Route::post('/home',[App\Http\Controllers\HomeController::class, 'upload']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function() {
    Route::post('login','login');
    Route::post('register','register');
    Route::post('logout','logout');

    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
