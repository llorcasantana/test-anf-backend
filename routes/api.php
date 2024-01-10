<?php

use App\Http\Controllers\PeoplesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    ['prefix'=>'management'],function (){
    Route::group(
        ['middleware' => ['api']],function (){
        Route::group(
            ['middleware' => ['auth:api']],function (){
            Route::post('peoples/post', [PeoplesController::class,'store']);
            Route::get('peoples/getList', [PeoplesController::class,'index']);
            Route::post('peoples/update/$id', [PeoplesController::class,'update']);
            Route::get('peoples/get/$id', [PeoplesController::class,'show']);
        }
        );
    }
    );
}
);
