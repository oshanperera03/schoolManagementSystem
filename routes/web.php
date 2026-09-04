<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/teachers',[TeacherController::class, 'index']);
    Route::get('/classes', function () {
        return view('pages.class.classes');
    })->name('classes');
    Route::get('/students/create', function () {
        return view('pages.student.addStudent');
    })->name('students.create');
    Route::get('/teachers/create', function () {
        return view('pages.teacher.addTeacher');
    })->name('teachers.create');
    Route::post('save-student', [StudentController::class, 'saveStudent'])->name('student.save');
    Route::post('save-teacher', [TeacherController::class, 'saveTeacher'])->name('teacher.save');
    Route::get('students/edit/{id}', [StudentController::class, 'editStudent'])->name('student.edit');
    Route::put('students/update/{id}', [StudentController::class, 'updateStudent'])->name('student.update');
});
