<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Http\Controllers\add_admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddTeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\add_team;
use App\Models\Billing;

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
Route::get('/', [AddTeamController::class, 'home'])->middleware('guest');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'faiq athari',
        'email' => 'faiqathari@gmail.com',
        'image' => 'raffey.jpg'
    ]);
});

Route::get('/posts', [Postcontroller::class, 'index']);

Route::get('/posts/{post:slug}', [Postcontroller::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Posts',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Posts by Category : $category->name" ,
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Posts by Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('author', 'category')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard/index', [
        'title' => 'dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/add-team', AddTeamController::class)->middleware('auth');
Route::resource('/dashboard/add-admin', add_admin::class)->middleware('auth');
Route::get('/contact', function(){
    return view('contact');
})->middleware('guest');
Route::post('/contact/store', [ContactController::class, 'store'])->middleware('guest');
Route::get('/dashboard/contact/inbox', [ContactController::class, 'show'])->middleware('auth');

Route::get('/services', [ServiceController::class, 'create'])->middleware('guest');
Route::post('/services/store', [ServiceController::class, 'store'])->middleware('guest');
Route::get('/services/billing', [ServiceController::class, 'billing'])->middleware('guest');
Route::post('/services/billing/store', [ServiceController::class, 'billingstore'])->middleware('guest');
Route::get('/dashboard/billing/inbox', [ServiceController::class, 'servicesinbox'])->middleware('auth');
Route::get('/services/uiux', [ServiceController::class, 'uiux'])->middleware('guest');
Route::get('/services/webdevelopment', [ServiceController::class, 'webdevelopment'])->middleware('guest');
Route::get('/services/digitalmarketing', [ServiceController::class, 'digitalmarketing'])->middleware('guest');
Route::get('/services/contentwriting', [ServiceController::class, 'contentwriting'])->middleware('guest');
Route::get('/services/brandingidentity', [ServiceController::class, 'brandingidentity'])->middleware('guest');
Route::get('/testimonial', [ServiceController::class, 'brandingidentity'])->middleware('guest');

