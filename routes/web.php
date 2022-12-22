<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SyllabusController;


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

Route::get('/register',[App\Http\Controllers\RegisterController::class,'register']);
Route::post('/register-user',[App\Http\Controllers\RegisterController::class,'registerUser'])->name('register-user');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/login-user',[App\Http\Controllers\LoginController::class,'loginUser'])->name('login-user');
Route::get('/student-navbar',[App\Http\Controllers\LoginController::class,'studentnavbar']);

Route::get('/studentdashboard',[App\Http\Controllers\LoginController::class,'studentdashboard'])->name('studentdashboard');
Route::get('/staffdashboard',[App\Http\Controllers\LoginController::class,'staffdashboard']);
Route::get('/admindashboard',[App\Http\Controllers\LoginController::class,'admindashboard']);
Route::get('/index',[App\Http\Controllers\LoginController::class,'index']);

Route::get('/table',[App\Http\Controllers\RegisterController::class,'table']);
Route::get('/uploads',[App\Http\Controllers\RegisterController::class,'uploads']);
Route::get('/syllabus',[App\Http\Controllers\RegisterController::class,'syllabus']);
Route::get('/adminsyllabus',[App\Http\Controllers\RegisterController::class,'adminsyllabus']);
Route::get('/adminupload',[App\Http\Controllers\RegisterController::class,'adminupload']);
Route::get('/passwordupdate',[App\Http\Controllers\RegisterController::class,'passwordupdate']);
Route::get('/logout',[App\Http\Controllers\RegisterController::class,'logout'])->name('logout');


//inserting route
Route::get('create',[SyllabusController::class,'syllabus_form']);
Route::post('create',[SyllabusController::class,'insert']);

//view
Route::get('view',[SyllabusController::class,'list']);

//edit
Route::get('edit/{id}',[SyllabusController::class,'edit']);
Route::put('update/{id}',[SyllabusController::class,'update']);

//delet
Route::delete('delete/{id}',[SyllabusController::class,'delete']);

Route::get('syllabus',[SyllabusController::class,'listdetails']);
// Route::get('filter',[UserController::class,'index']);
// Route::get('/',function(){

//     return view('filter');
// });
Route::get('filt',[SyllabusController::class,'filt']);

Route::get('/syllabus',[SyllabusController::class,'index']);
Route::get('/adminsyllabus',[SyllabusController::class,'adminindex']);


