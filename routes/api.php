<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\LeadController;

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

Route::namespace('Api')
    ->prefix('projects')
    ->group(function(){
        Route::get('/',[ProjectController::class, 'index']);
        Route::get('/search',[ProjectController::class, 'search']);
        Route::get('/project-type/{id}',[ProjectController::class, 'getByType']);
        Route::get('/project-technology/{id}',[ProjectController::class, 'getByTechnology']);
        Route::get('/{slug}',[ProjectController::class, 'show']);
    });

Route::post('/contacts', [LeadController::class, 'store']);
