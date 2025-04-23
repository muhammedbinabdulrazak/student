<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class, 'index'])->name('students.index');
Route::get('students/{class}', [StudentsController::class, 'getStudentByClass'])->name('students.getByClass');
Route::get('students', [StudentsController::class, 'getStudents'])->name('students.list');




Route::prefix('admin')->middleware(['guest'])->controller('App\Http\Controllers\Admin\AuthController')->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'store')->name('admin.login.post');
});


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('admin/students', [AdminStudentController::class, 'store'])->name('admin.students.store');
    Route::get('admin/students', [AdminStudentController::class, 'index'])->name('admin.students.index');
    Route::get('admin/students/create', [AdminStudentController::class, 'create'])->name('admin.students.create');
    Route::delete('admin/students/{student}', [AdminStudentController::class, 'destroy'])->name('admin.students.destroy');
    Route::put('admin/students/{student}', [AdminStudentController::class, 'update'])->name('students.update');
    Route::get('admin/students/{student}/edit', [AdminStudentController::class, 'edit'])->name('admin.students.edit');
    Route::get('admin/students/{class}', [AdminStudentController::class, 'getStudentByClass'])->name('admin.students.getByClass');
    Route::patch('admin/students/{student}', [AdminStudentController::class, 'update'])->name('admin.students.update');
});
