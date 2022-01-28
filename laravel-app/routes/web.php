<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::prefix('product-inventory-app')->group(function() {
    Route::get('/home', [CategoryController::class, 'index'])->name('pi-app-home');
    Route::get('/show-products', [CategoryController::class, 'showProducts'])->name('show-products');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category-info');
    Route::get('/add-category', [CategoryController::class, 'create'])->name('category-create');
    Route::post('/save', [CategoryController::class, 'store'])->name('category-save');

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/show-category', [ProductController::class, 'showCategory'])->name('show-category');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product-info');
});



