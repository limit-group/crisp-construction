<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// static pages -----------------------------------------------------------
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/terms-of-service',[HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy',[HomeController::class, 'privacy'])->name('privacy');

// Services--------------------------------------------------------------------------------------------------------------------
Route::get('/services',[HomeController::class, 'services'])->name('services');

//  Projects--------------------------------------------------------------------------------------------------------------------
Route::get('/projects',[HomeController::class, 'projects'])->name('projects');

// Blog Articles --------------------------------------------------------------------------------------------------------------------
Route::get('/blogs',[HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}',[HomeController::class, 'index'])->name('home');

// Contact --------------------------------------------------------------------------------------------------------------------
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/send-message',[HomeController::class, 'index'])->name('home');

// Qoutes --------------------------------------------------------------------------------------------------------------------
Route::post('/get-quote',[HomeController::class, 'index'])->name('home');

// Portfolio --------------------------------------------------------------------------------------------------------------------
Route::get('/portfolio',[HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{id}',[HomeController::class, 'index'])->name('home');

