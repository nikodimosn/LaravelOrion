<?php

use Orion\Facades\Orion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\HTTP\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Auth\LoginContrller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostCommentsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as'=>'api.'],function(){

    Orion::resource('posts',PostsController::class);
    Orion::morphManyResource('posts', 'comments', PostCommentsController::class);
    Orion :: resource ('users', UserController :: class);



});

Route::resource('postx',PostController::class);

?>
