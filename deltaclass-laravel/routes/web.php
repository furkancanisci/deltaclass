<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GuidanceController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AppointmentController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Student Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student/exams', [ExamController::class, 'index'])->name('student.exams');
    Route::get('/student/exams/{exam}', [ExamController::class, 'show'])->name('student.exams.show');
    Route::get('/student/schedule', [ScheduleController::class, 'index'])->name('student.schedule');
    Route::get('/student/statistics', function () {
        return view('student.statistics');
    })->name('student.statistics');
    Route::get('/student/messages', [MessageController::class, 'index'])->name('student.messages');
});

// Teacher Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
    Route::get('/teacher/students', [TeacherController::class, 'students'])->name('teacher.students');
    Route::get('/teacher/students/{student}', [TeacherController::class, 'showStudent'])->name('teacher.students.show');
    Route::get('/teacher/exams', [ExamController::class, 'teacherIndex'])->name('teacher.exams');
    Route::get('/teacher/exams/{exam}', [ExamController::class, 'teacherShow'])->name('teacher.exams.show');
    Route::get('/teacher/messages', [MessageController::class, 'index'])->name('teacher.messages');
});

// Guidance Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/guidance/dashboard', [GuidanceController::class, 'dashboard'])->name('guidance.dashboard');
    Route::get('/guidance/students', [GuidanceController::class, 'students'])->name('guidance.students');
    Route::get('/guidance/students/{student}', [GuidanceController::class, 'showStudent'])->name('guidance.students.show');
    Route::get('/guidance/schedules', [ScheduleController::class, 'guidanceIndex'])->name('guidance.schedules');
    Route::get('/guidance/schedules/{schedule}', [ScheduleController::class, 'show'])->name('guidance.schedules.show');
    Route::get('/guidance/appointments', [AppointmentController::class, 'index'])->name('guidance.appointments');
    Route::get('/guidance/messages', [MessageController::class, 'index'])->name('guidance.messages');
});