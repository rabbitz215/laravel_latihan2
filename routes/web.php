<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hubungi', [HomeController::class, 'contact'])->name('contact');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/layanan', [HomeController::class, 'courses'])->name('courses');

// CRUD STUDENTS
// Route::get('/student', [StudentController::class, 'index']);
// Route::get('/student/create', [StudentController::class, 'create']);
// Route::get('/student/{id}/edit', [StudentController::class, 'edit']);

// Route::post('/student', [StudentController::class, 'store']);
// Route::put('/student/{id}', [StudentController::class, 'update']);
// Route::delete('/student/{id}', [StudentController::class, 'destroy']);

Route::resource('/student', StudentController::class);
