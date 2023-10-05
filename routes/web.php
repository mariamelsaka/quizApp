<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;




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
});



Route::group(['prefix'=>'login'],function (){

    Route::get('/',[AuthController::class,"getLoginView"])->name('login');
    Route::post('/',[AuthController::class,"doLogin"]);
});
Route::get("register",[AuthController::class,"register"]);
Route::post("registerRequest",[AuthController::class,"registerRequest"]);

Route::group(['prefix'=>'/admin','middleware'=>'isAdmin'],function (){
    Route::get('/dashboard',[AuthController::class,"getDashboardView"]);
    Route::get('/addquiz',[QuestionController::class,"addblogview"]);
    Route::post('/addquiz',[QuestionController::class,"DoAddQuiz"]);
});

Route::group(['prefix'=>'/','middleware'=>'isUser'],function (){

    Route::get('/take_quiz',[QuestionController::class,"takequizview"]);
    Route::get('/home',[QuestionController::class,"homeview3"]);

});

Route::get('/error',[QuestionController::class,"errorview2"]);









//Route::get("login",[users::class,"login"])->name("login")->middleware("guest");
//Route::post("loginRequest",[users::class,"loginRequest"])->middleware("guest");
//
//Route::get("register",[users::class,"register"])->middleware("guest");
//Route::post("registerRequest",[users::class,"registerRequest"])->middleware("guest");


