<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('student-app')->group(function() {
    Route::get('/home', [StudentController::class, 'home'])->name('student-home');
    Route::get('/profile', [StudentController::class, 'myProfile'])->name('profile');
    Route::get('/enrolled-subjects', [StudentController::class, 'enrolledSubjects'])->name('enrolled_subjects');
    Route::get('/grades', [StudentController::class, 'grades'])->name('grades');
});



