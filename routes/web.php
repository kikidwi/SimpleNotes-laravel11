<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('notes', function () {
    return view('notes');
});

Route::get('error', function () {
    return view('error');
});

Route::resource('test', NotesController::class);

Route::post('/insertData',[NotesController::class, 'insertData'])-> name('insertData');
Route::get('/', [NotesController::class, 'index'])->name('home');
