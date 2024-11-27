<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DaysController;
use App\Http\Controllers\GendersController;
use App\Http\Controllers\LeavesController;
use App\Http\Controllers\PaymentTypesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReligionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\WarehousesController;
use App\Models\Stage;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/leaves', LeavesController::class);
    Route::resource('/post', PostsController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('statuses',StatusesController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('types', TypesController::class);
    Route::resource('warehouses', WarehousesController::class);
    Route::resource('stages', StagesController::class);
    Route::resource('religions', ReligionsController::class);
    Route::resource('genders', GendersController::class);
    Route::resource('paymenttypes', PaymentTypesController::class);
    Route::resource('days', DaysController::class);
    Route::resource('categories', CategoriesController::class);

});


require __DIR__.'/auth.php';
