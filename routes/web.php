<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\travelcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/userdashboard', [usercontroller::class, 'index']);
Route::get('/admindashboard', [admincontroller::class, 'index'])->middleware(['auth','admin']);


Route::get('/usertravel', [travelcontroller::class, 'usertravel'])->name('user.travel');
Route::delete('/usertravel/{Tra}', [travelcontroller::class, 'purchasetravel'])->name('purchase.travel');


Route::get('/addtravel', [travelcontroller::class, 'index'])->name('view.travel')->middleware(['auth','admin']);
Route::post('/addtravel', [travelcontroller::class, 'store'])->name('add.travel')->middleware(['auth','admin']);
Route::delete('/addtravel/{Tra}', [travelcontroller::class, 'destroy'])->name('delete.travel')->middleware(['auth','admin']);
Route::get('/travel/{id}/edit', [travelController::class, 'edit'])->name('edit.travel')->middleware(['auth','admin']);
Route::put('/travel/{id}', [travelController::class, 'update'])->name('update.travel')->middleware(['auth','admin']);


require __DIR__.'/auth.php';
