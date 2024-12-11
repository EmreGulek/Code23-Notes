<?php

use App\Http\Controllers\NoteController;
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

Route::get("/index",function (){
    return view('panel.index');
});



Route::get("/noteIndex",[NoteController::class,'index'])->name('noteIndex');
Route::post("/noteCreate",[NoteController::class,'create'])->name('noteCreate');