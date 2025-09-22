<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamMemberController;

use App\Http\Controllers\Admin\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//routes for breeze
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('/services', function () {
    return view('cel2.services');
})->name('services');

Route::get('/portfolio', function () {
    return view('cel2.portfolio');
})->name('portfolio');

Route::get('/about', function () {
    return view('cel2.about');
})->name('about');


// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin');

Route::get('/contact', function () {
    return view('cel2.contact');
})->name('contact');

Route::get('/lets-talk', function () {
    return view('cel2.contact');
})->name('lets-talk');

Route::get('/team', function () {
    return view('cel2.team');
})->name('team');



// // Show the contact form
// Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
// // Handle form submission
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::resource('admin/clients', ClientController::class);
Route::resource('admin/categories', CategoryController::class);
Route::resource('admin/products', ProductController::class);

// routes for team member
Route::resource('team-members', TeamMemberController::class)->names('team-members');

// Shows all products OR products filtered by a category
Route::get('/products/{category_id?}', [ProductController::class, 'productIndex'])->name('cel2.portfolio');

// Admin Dashboard Route
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Admin Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

