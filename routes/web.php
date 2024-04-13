<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard', 'App\Http\Controllers\PortalController@dashboard')->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', 'App\Http\Controllers\PortalController@index')->middleware(['auth'])->name('dashboard');

Route::get('/search', 'App\Http\Controllers\HomepageController@search');

Route::get('/homepage', 'App\Http\Controllers\HomepageController@index');

Route::get('/logout', 'App\Http\Controllers\PortalController@logout');

require __DIR__.'/auth.php';
