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
    Route::post('/save-category', [CategoryController::class, 'store'])->name('category-save');
    Route::get('/confirm-delete-category/{id}', [CategoryController::class, 'confirmDelete'])->name('category-confirm-delete');
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category-update');
    Route::get('/category-search', [CategoryController::class, 'search'])->name('category-search');

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/show-category', [ProductController::class, 'showCategory'])->name('show-category');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product-info');
    Route::get('/add-product', [ProductController::class, 'create'])->name('product-create');
    Route::post('/save-product', [ProductController::class, 'store'])->name('product-save');
    Route::get('/confirm-delete-product/{id}', [ProductController::class, 'confirmDelete'])->name('product-confirm-delete');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product-update');
    Route::get('/product-search', [ProductController::class, 'search'])->name('product-search');
});



