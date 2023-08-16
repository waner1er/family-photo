<?php

use App\Livewire\PhotoComponent;
use App\Livewire\DashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Livewire\CategoryComponent;
use App\Livewire\CategoryEdit;
use App\Livewire\PhotoCreate;
use App\Livewire\PhotoEdit;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/photos', PhotoComponent::class)->name('photos.index');
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('photos/{photo}', PhotoEdit::class)->name('photos.edit');
    Route::get('photos-create', PhotoCreate::class)->name('photos.create');

    Route::get('/categories', CategoryComponent::class)->name('categories.index');
    Route::get('/categories/{category:name}', CategoryEdit::class)->name('categories.edit');
});

require __DIR__.'/auth.php';
