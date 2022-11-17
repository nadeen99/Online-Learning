<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'] )->name('home');
Route::get('/home', [HomeController::class, 'showcourses']);   

Route::get('/allCourses', [HomeController::class, 'allCourses']);   
Route::get('/myinstructors/{id}', [HomeController::class, 'myins'])->name('myins');        
Route::get('/coursesofinst/{id}', [HomeController::class, 'instructorCourses'])->name('instructorCourses'); 
Route::get('/store/{id}', [CourseController::class,'store'])->name('store');

Route::get('/toplanspage', function () {
    return view('toplanpage');
} ); 

Route::get('/coursesdtats', [HomeController::class,'courseNum']);




