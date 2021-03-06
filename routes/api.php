<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\TeacherController;
use App\Http\Controllers\API\LessonController;
use App\Http\Controllers\API\FeedbackController;
use App\Http\Controllers\API\RegistrationController;
use App\Models\Lesson;

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
Route::get('/students',[StudentController::class,'index']);
Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/registrations',[RegistrationController::class,'index']);
Route::get('/feedback',[FeedbackController::class,'index']);
Route::get('/lessons',[LessonController::class,'index']);

// login
Route::post('/register',[StudentController::class, "register"]);
Route::post('/login',[StudentController::class, "login"]);

// guimail
Route::post('/register/verify/{code}',[StudentController::class, "verify"]);

// lich
Route::post('/lessons',[LessonController::class, "store"]);




// lấy thông tin của học sinh
Route::get('/studentInfomation/{id}',[StudentController::class, "getInformationStudent"]);