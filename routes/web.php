<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechstackController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/project', function () {
//     return view('project');
// });

Route::get('project', [ProjectController::class, 'pageProject'])->name('project.page');
Route::get('blog', [BlogController::class, 'pageBlog'])->name('blog.page');
Route::get('about', [TechstackController::class, 'pageTechstack'])->name('about.page');
Route::get('/', [TechstackController::class,'pageHome'])->name('home.page');

//techstack route
Route::get('admin/techstack/index', [TechstackController::class, 'index'])->name('techstack.index');
Route::get('admin/techstack/create', [TechstackController::class, 'create'])->name('techstack.create');
Route::get('admin/techstack/{tech_slug}/edit', [TechstackController::class, 'edit'])->name('techstack.edit');
Route::post('admin/techstack/index', [TechstackController::class, 'store'])->name('techstack.store');
Route::put('admin/techstack/{tech_slug}', [TechstackController::class, 'update'])->name('techstack.update');
Route::delete('admin/techstack/{tech_slug}', [TechstackController::class, 'destroy'])->name('techstack.destroy');


//project route
Route::get('admin/project/index', [ProjectController::class, 'index'])->name('project.index');
Route::get('admin/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('admin/project/index', [ProjectController::class, 'store'])->name('project.store');
Route::get('admin/project/{pro_slug}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('admin/project/{pro_slug}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('admin/project/{pro_slug}', [ProjectController::class, 'destroy'])->name('project.destroy');

Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
