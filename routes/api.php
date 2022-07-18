<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PostCommentsController;
use Orion\HTTP\Controllers\Controller;


use Orion\Facades\Orion;


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



})

?>
