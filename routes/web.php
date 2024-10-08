<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms-view', [RoomController::class, 'show'])->name('rooms.show');
Route::get('/one-bedroom-apartment', [RoomController::class, 'showOneBed']);
Route::get('/two-bedroom-apartment', [RoomController::class, 'showTwoBed']);
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
