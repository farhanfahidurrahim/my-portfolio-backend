<?php

use App\Http\Controllers\Backend\AboutSectionController;
use App\Http\Controllers\Backend\HomeSectionController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/* ======================================================================== */

/*
|--------------------------------------------------------------------------
| Frontend User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [IndexController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Backend Admin Routes
|--------------------------------------------------------------------------
*/
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    * Home Section Routes...
    */
    Route::resource('home', HomeSectionController::class);
    Route::post('/home/store', [HomeSectionController::class, 'storeAjax'])->name('home.store');
    Route::post('/home/update/{id}', [HomeSectionController::class, 'updateAjax'])->name('home.update');
    Route::delete('/home/delete/{id}', [HomeSectionController::class, 'deleteAjax'])->name('home.delete');
    Route::put('/home/status-change/{id}', [HomeSectionController::class, 'statusChangeAjax'])->name('home.status.change');

    /*
    * About Section Routes...
    */
    Route::resource('about', AboutSectionController::class);
});

require __DIR__ . '/auth.php';