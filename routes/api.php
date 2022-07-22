<?php

use App\Http\Controllers\Account\Teacher\AuthContoller as TeacherAuthContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

# Register and Login all users 
Route::group(['prefix' =>'account'] ,  function (){
    # Register and Login Teacher        
    Route::group(['prefix' =>'teacher'] ,  function (){
        Route::post('register' , [TeacherAuthContoller::class , 'register']);
        Route::post('login' , function(){});
    });
    # Register and Login Student        
    Route::group(['prefix' =>'student'] ,  function (){
        Route::post('register' , function(){});
        Route::post('login' , function(){});
    });
    # Register and Login Admin        
    Route::group(['prefix' =>'admin'] ,  function (){
        Route::post('login' , function(){});
    }); 
    Route::group(['prefix' =>'provider'] , function(){
        Route::group(['prefix' =>'google'] , function(){
            Route::group(['prefix' =>'teacher'] ,  function (){
                Route::post('register' , function(){});
                Route::post('login' , function(){});
            });
            Route::group(['prefix' =>'student'] ,  function (){
                Route::post('register' , function(){});
                Route::post('login' , function(){});
            });
            Route::group(['prefix' =>'admin'] ,  function (){
                Route::post('login' , function(){});
            });     
        }); 
    });
});