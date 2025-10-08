<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfilController::class, 'index'])->name('profile');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::resource('students', StudentController::class);
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians.index');
Route::resource('classrooms', ClassroomController::class);
Route::get('/subject', [SubjectController::class, 'index'])->name('subjects.index');
Route::get('/teacher', [TeacherController::class, 'index'])->name('teachers.index');
