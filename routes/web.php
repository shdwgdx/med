<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();
Route::get('/', [SurveyController::class, 'indexOne'])->name('survey-first-one');
Route::get('/login', [ProfileController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [ProfileController::class, 'login'])->name('login');
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/search', [ProfileController::class, 'search'])->name('search');
    // Route::get('/{user_id}/1', [ProfileController::class, 'userSurveyFirst'])->name('user-survey-first');
    Route::get('/{user_id}/1/before', [ProfileController::class, 'userSurveyFirstOne'])->name('user-survey-first-one');
    Route::get('/{user_id}/1/after', [ProfileController::class, 'userSurveyFirstTwo'])->name('user-survey-first-two');
    Route::get('/{user_id}/2', [ProfileController::class, 'userSurveySecond'])->name('user-survey-second');
    Route::get('/{user_id}/3', [ProfileController::class, 'userSurveyThird'])->name('user-survey-third');
    // Route::post('/logout', [ProfileController::class, 'logout'])->name('logout')->middleware(['auth']);
    // Route::get('/', [ProfileController::class, 'index'])->name('dashboard')->middleware(['auth']);
    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
    Route::get('/', [ProfileController::class, 'index'])->name('dashboard');
});

Route::prefix('survey')->group(function () {
    Route::get('/1', [SurveyController::class, 'index'])->name('survey-first');
    Route::get('/1/before', [SurveyController::class, 'indexOne'])->name('survey-first-one');
    Route::get('/1/after', [SurveyController::class, 'indexTwo'])->name('survey-first-two')->middleware('auth');
    Route::get('/2', [SurveyController::class, 'second'])->name('survey-second')->middleware('auth');
    Route::get('/3', [SurveyController::class, 'third'])->name('survey-third')->middleware('auth');
    Route::post('/1', [SurveyController::class, 'answersFirst'])->name('answers-first');
    Route::post('/1/before', [SurveyController::class, 'answersFirstOne'])->name('answers-first-one');
    Route::post('/1/after', [SurveyController::class, 'answersFirstTwo'])->name('answers-first-two');
    Route::post('/2', [SurveyController::class, 'answersSecond'])->name('answers-second');
    Route::post('/3', [SurveyController::class, 'answersThird'])->name('answers-third');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
