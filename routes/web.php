<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechstackController;

Route::get('project', [ProjectController::class, 'pageProject'])->name('project.page');
Route::get('blog', [BlogController::class, 'pageBlog'])->name('blog.page');
Route::get('about', [TechstackController::class, 'pageTechstack'])->name('about.page');
Route::get('/', [TechstackController::class,'pageHome'])->name('home.page')->middleware('throttle:5,1');
Route::post('/message', [MessageController::class, 'store'])->name('message.store')->middleware('throttle:5,1');
    


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

    //techstack route
    Route::get('admin/techstack/', [TechstackController::class, 'index'])->name('techstack.index');
    Route::get('admin/techstack/create', [TechstackController::class, 'create'])->name('techstack.create');
    Route::get('admin/techstack/{tech_slug}/edit', [TechstackController::class, 'edit'])->name('techstack.edit');
    Route::post('admin/techstack/', [TechstackController::class, 'store'])->name('techstack.store');
    Route::put('admin/techstack/{tech_slug}', [TechstackController::class, 'update'])->name('techstack.update');
    Route::delete('admin/techstack/{tech_slug}', [TechstackController::class, 'destroy'])->name('techstack.destroy');


    //project route
    Route::get('admin/project/', [ProjectController::class, 'index'])->name('project.index');
    Route::get('admin/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('admin/project/', [ProjectController::class, 'store'])->name('project.store');
    Route::get('admin/project/{pro_slug}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('admin/project/{pro_slug}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('admin/project/{pro_slug}', [ProjectController::class, 'destroy'])->name('project.destroy');

    //blog route
    Route::get('admin/blog/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('admin/blog/', [BlogController::class, 'store'])->name('blog.store');
    Route::get('admin/blog/{blog_slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('admin/blog/{blog_slug}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('admin/blog/{blog_slug}', [BlogController::class, 'destroy'])->name('blog.destroy');

    //message route
    Route::get('admin/message/', [MessageController::class, 'index'])->name('message.index');
    Route::delete('admin/message/{message}', [MessageController::class, 'destroy'])->name('message.destroy');


});

require __DIR__.'/auth.php';
