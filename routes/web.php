<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return Inertia::render('HalamanDepan');
})->name('halaman_depan');

Route::get('/materi', function () {
    return Inertia::render('Materi');
})->name('materi');

Route::get('/belajar', function () {
    return Inertia::render('Belajar');
})->name('belajar');

Route::get('/credits', function () {
    return Inertia::render('Credits');
})->name('credits');
