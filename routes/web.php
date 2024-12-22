<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get("/templateTest", function () {
    return view('panel.layout.app');
})->name("templateTest");



// Note Route Start
Route::get('/panel/note/create', [NoteController::class, 'create'])->name('note.createPage');
Route::post('/panel/note/add', [NoteController::class, 'add'])->name('note.add');
Route::get('/panel/note/index', [NoteController::class, 'index'])->name('note.index');
Route::get('/panel/note/edit/{id}', [NoteController::class, 'edit'])->name('note.edit');
Route::post('/panel/note/update', [NoteController::class, 'update'])->name('note.update');
Route::get('/panel/note/noteDelete/{id}', [NoteController::class, 'noteDelete'])->name('note.delete');
// Note Route end


// Category Route Start
Route::get('/panel/categories/index',[CategoryController::class,'index'])->name('panel.categories.index');
Route::get('/panel/categories/create',[CategoryController::class,'create'])->name('panel.categoryCreatePage');
Route::post('/panel/categories/add',[CategoryController::class,'add'])->name('panel.categoryAdd');

// Category Route End


// Category Route Start
Route::get('/panel/categories/edit/{id}',[CategoryController::class,'edit'])->name('panel.categoryEditPage');
Route::post('/panel/categories/edit',[CategoryController::class,'update'])->name('panel.categoryUpdatePage');
Route::get('/panel/categories/delete/{id}',[CategoryController::class,'deleteCategory'])->name('panel.categoryDeletePage');
// Category Route End
