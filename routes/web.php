<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PdfController;
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
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/animals', AnimalController::class)->except('show');
    Route::resource('/owners', OwnerController::class)->except('show');
    Route::resource('/appointments', AppointmentController::class)->except('show');
    Route::resource('/employees', EmployeeController::class)->middleware('isAdmin')->except('show');
    Route::get('/emails', [EmailController::class, 'create'])->name('mails.create');
    Route::post('/emails', [EmailController::class, 'store'])->name('mails.store');
    Route::get('/print',    [PdfController::class, 'print']);
});


require __DIR__.'/auth.php'; 