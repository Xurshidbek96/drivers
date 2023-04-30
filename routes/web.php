<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Driver\MainController;
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
    return redirect()->route('driver.dashboard');
});

// Driver Routes
Route::prefix('driver')->name('driver.')->middleware(['auth:driver'])->group(function(){
    
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('edit/{id}', [MainController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [MainController::class, 'update'])->name('update');
    Route::get('rating', [MainController::class, 'rating'])->name('rating');
    
});

// Admin Routes
Route::prefix('admin/')->name('admin.')->middleware(['auth'])->group(function(){

    Route::get('dashboard', function () {
        return view('admin.layouts.dashboard');
    })->name('dashboard');
    
    Route::resources([
        'users' => UserController::class,
        'drivers' => DriverController::class,
        'cars' => CarController::class
    ]);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';