<?php
namespace App\Http\Controllers;
    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\ImageUploadController;
use App\Http\Controllers\auth\LogoutController;
// use App\Http\Controllers\AboutPageController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\UserImageController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\UserPostController;
// use App\Http\Controllers\PostLikeController;

Route::get('/', function () {
    return view('about');
})->name('about');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// Register
Route::get('/signup', [RegisterController::class, 'index'])->name('register');
Route::post('/signup', [RegisterController::class, 'store']);


// about
Route::get('/about', [AboutPageController::class, 'index'])->name('about');

// imageupload
Route::get('/profile_picture', [ImageUploadController::class, 'index'])->name('image_upload');
Route::post('/profile_picture', [ImageUploadController::class, 'store']);
// ->name('image.upload.post')

// posts. dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// User Profile
Route::get('/profile', [UserImageController::class, 'index'])->name('profile');
Route::get('/profile/{id}', [UserImageController::class, 'profile'])->name('user_profile');

// Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


// SHOWing his/her posts
Route::get('/users/{user}/posts', [UserPostController::class, 'index'])->name('users.posts');

// like dislike
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');





