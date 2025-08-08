<?php

use App\Http\Controllers\studentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::name('students.')->prefix('students')->group(function(){

    Route::get('/', [studentsController::class, 'index'])->name('index');

    Route::get('/{studentsId}', [studentsController::class, 'show'])->name('students.show');

});
