<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/student',function (){
//     return view('student_view');
// });
 
// Route::get('/', [UserController::class, 'student']);
// Route::post('post-login', [UserController::class, 'postLogin'])->name('login.post'); 
Route::get('/',function(){
    return '<h1>welcome to School Management portal</h1>';
});
Route::get('/test1',function(){
    return view('test1');
})->name('testfirst');


Route::redirect('/test','/test1'); //if user type test in url it will redirect to test1 route . bookmark appl.

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('home', [AuthController::class, 'home_function']); 

Route::get('logout', [AuthController::class, 'logout'])->name('logout');