<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/students', function () {
        return view('students');
    })->name('students');
    Route::get('/teachers',function () {
        return view('teachers');
    })->name('teachers');
    Route::get('/classes', function () {
        return view('classes');
    })->name('classes');
    Route::get('/students/create', function () {
        return view('addStudent');
    })->name('students.create');
    Route::get('/teachers/create', function () {
        return view('addTeacher');
    })->name('teachers.create');
    Route::post('save-student', [StudentController::class, 'saveStudent'])->name('student.save');
});
