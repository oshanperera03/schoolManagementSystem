<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;

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
    Route::get('/classrooms', [ClassroomController::class, 'index']);
    
    Route::get('/students/create', function () {
        return view('pages.student.addStudent');
    })->name('students.create');
    Route::get('/teachers/create', function () {
        return view('pages.teacher.addTeacher');
    })->name('teachers.create');
    Route::get('/classrooms/create', function () {
        return view('pages.class.addClass');
    })->name('classrooms.create');

    Route::post('save-student', [StudentController::class, 'saveStudent'])->name('student.save');
    Route::post('save-teacher', [TeacherController::class, 'saveTeacher'])->name('teacher.save');
    Route::post('save-classroom', [ClassroomController::class, 'saveClassroom'])->name('classroom.save');

    Route::get('students/edit/{id}', [StudentController::class, 'editStudent'])->name('student.edit');
    Route::get('teachers/edit/{id}', [TeacherController::class, 'editTeacher'])->name('teacher.edit');
    Route::get('classrooms/edit/{id}', [ClassroomController::class, 'editClassroom'])->name('classroom.edit');

    Route::put('students/update/{id}', [StudentController::class, 'updateStudent'])->name('student.update');
    Route::put('teachers/update/{id}', [TeacherController::class, 'updateTeacher'])->name('teacher.update');
    Route::put('classrooms/update/{id}', [ClassroomController::class, 'updateClassroom'])->name('classroom.update');

    Route::get('students/delete/{id}', [StudentController::class, 'deleteStudent'])->name('student.delete');
    Route::get('teachers/delete/{id}', [TeacherController::class, 'deleteTeacher'])->name('teacher.delete');
    Route::get('classrooms/delete/{id}', [ClassroomController::class, 'deleteClassroom'])->name('classroom.delete');

});
