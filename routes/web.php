<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ReservationController;

use App\Http\Controllers\ContactUsFormController;
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

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware(['auth','verified','admin'])->name('admin.')->prefix('admin')->group(function()
{
Route::get('/',[AdminController::class,'index'])->name('index');
Route::resource('/users',UserController::class);
Route::resource('/activity',ActivityController::class);
Route::resource('/reservation',ReservationController::class);
});
require __DIR__.'/auth.php';




Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');