<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\BackendController;
use App\Http\controllers\BrandController;
use App\Http\controllers\CategoryController;
use App\Http\controllers\ContactController;
use App\Http\controllers\HomeController;
use App\Http\controllers\FrontendController;
use App\Http\controllers\ProductController;
use App\Http\controllers\ProjectController;
use App\Http\controllers\SubCategoryController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/product/details/{id}', [FrontendController::class, 'details'])->name('product.details');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::post('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/customer/message', [ContactController::class, 'index'])->name('customer.message');
Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('customer.delete');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [BackendController::class, 'index'] )->name('dashboard');
    Route::get('/dashboard/logout', [BackendController::class, 'perform'] )->name('logout.perform');


    Route::get('/category/add', [CategoryController::class, 'index'] )->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'create'] )->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'] )->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'] )->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'] )->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'] )->name('category.delete');


    Route::get('/sub-category/add', [SubCategoryController::class, 'index'] )->name('sub-category.add');
    Route::post('/sub-category/create', [SubCategoryController::class, 'create'] )->name('sub-category.create');
    Route::get('/sub-category/manage', [SubCategoryController::class, 'manage'] )->name('sub-category.manage');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'] )->name('sub-category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'] )->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'] )->name('sub-category.delete');

    Route::get('/brand/add', [BrandController::class, 'index'] )->name('brand.add');
    Route::post('/brand/create', [BrandController::class, 'create'] )->name('brand.create');
    Route::get('/brand/manage', [BrandController::class, 'manage'] )->name('brand.manage');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'] )->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'] )->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'] )->name('brand.delete');


    Route::get('/product/add', [ProductController::class, 'index'] )->name('product.add');
    Route::post('/product/create', [ProductController::class, 'create'] )->name('product.create');
    Route::get('/product/manage', [ProductController::class, 'manage'] )->name('product.manage');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'] )->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'] )->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'] )->name('product.delete');

    Route::get('/project/add', [ProjectController::class, 'index'] )->name('project.add');
    Route::post('/project/create', [ProjectController::class, 'create'] )->name('project.create');
    Route::get('/project/manage', [ProjectController::class, 'manage'] )->name('project.manage');
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'] )->name('project.edit');
    Route::post('/project/update/{id}', [ProjectController::class, 'update'] )->name('project.update');
    Route::get('/project/delete/{id}', [ProjectController::class, 'delete'] )->name('project.delete');
});
