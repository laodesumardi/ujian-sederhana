<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route yang akan redirect berdasarkan role
Route::get('/dashboard', function () {
    if (auth()->user()->isAdmin()) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('student.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Student management
    Route::get('/students', [AdminController::class, 'students'])->name('students');
    Route::get('/students/create', [AdminController::class, 'createStudent'])->name('students.create');
    Route::post('/students', [AdminController::class, 'storeStudent'])->name('students.store');
    
    // Question management
    Route::get('/questions', [AdminController::class, 'questions'])->name('questions');
    Route::get('/questions/create', [AdminController::class, 'createQuestion'])->name('questions.create');
    Route::post('/questions', [AdminController::class, 'storeQuestion'])->name('questions.store');
    
    // Scores
    Route::get('/scores', [AdminController::class, 'scores'])->name('scores');
    
    // Exam Settings
    Route::get('/exam-settings', [AdminController::class, 'examSettings'])->name('exam-settings');
    Route::put('/exam-settings', [AdminController::class, 'updateExamSettings'])->name('exam-settings.update');
});

// Student routes
Route::middleware(['auth', 'siswa'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [ExamController::class, 'dashboard'])->name('dashboard');
    Route::get('/exam/start', [ExamController::class, 'startExam'])->name('exam.start');
    Route::post('/exam/submit', [ExamController::class, 'submitExam'])->name('exam.submit');
    Route::get('/result/{id}', [ExamController::class, 'showResult'])->name('result');
    Route::get('/history', [ExamController::class, 'history'])->name('history');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
