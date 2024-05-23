<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

// Route::get('/', function () {
//     return view('home');
// });



Route::get('error', function () {
    return view('error');
});


Route::post('/insertData',[NotesController::class, 'insertData'])-> name('insertData');
Route::get('/', [NotesController::class, 'index'])->name('home');
Route::delete('/dataNote/{id}', [NotesController::class, 'delete'])->name('delete');
Route::post('/note/{id}', [NotesController::class, 'showNote'])->name('note');

