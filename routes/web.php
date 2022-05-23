<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WelcomeEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard', [PostController::class, 'indexOfAdmin'])->name('dashboard');
Route::get('/dashboard/{id}', [PostController::class, 'adminPostDelete'])->name('admin.delete');
Route::get('admin/recruiter', [RecruiterController::class, 'recruiterAdmin'])->name('recruiter.admin');
Route::get('admin/recruiter/{id}', [RecruiterController::class, 'recruiterDelete'])->name('recruiter.delete');
Route::get('admin/candidate', [CandidateController::class, 'candidateAdmin'])->name('candidate.admin');
Route::get('admin/candidate/{id}', [CandidateController::class, 'candidateDelete'])->name('candidate.delete');
//Route::get('/', function () {
//    return view('posts.detail');
//});

Route::get('', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('CheckLogin')->group(function () {
    Route::get('candidates', [CandidateController::class, 'index'])->name('candidates.index');
    Route::get('apply', [CandidateController::class, 'create'])->name('candidates.create');
    Route::post('apply', [CandidateController::class, 'store'])->name('candidates.store');


    Route::prefix('/recruiters')->group(function () {
        Route::get('/', [RecruiterController::class, 'index'])->name('recruiters.index');
        Route::get('/create', [RecruiterController::class, 'create'])->name('recruiters.create');
        Route::post('/create', [RecruiterController::class, 'store'])->name('recruiters.store');
        Route::get('/edit/{id}', [RecruiterController::class, 'edit'])->name('recruiters.edit');
        Route::post('/edit/{id}', [RecruiterController::class, 'update'])->name('recruiters.update');
        Route::get('detail/{id}', [RecruiterController::class, 'detail'])->name('recruiters.detail');
        Route::get('/delete/{id}', [RecruiterController::class, 'destroy'])->name('recruiters.destroy');
    });
    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('create', [PostController::class, 'create'])->name('posts.create');
        Route::post('create', [PostController::class, 'store'])->name('posts.store');
        Route::get('edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
        Route::post('update/{id}', [PostController::class, 'update'])->name('posts.update');
        Route::get('detail/{id}', [PostController::class, 'detail'])->name('posts.detail');
        Route::get('employers/', [PostController::class, 'employers'])->name('posts.employers');
        Route::get('delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    });
});
Route::get('/register', function () {
    return view('registration');
})->name('formRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/send-welcomeEmail', [WelcomeEmail::class, 'sendWelcomeEmail'])->name('welcome-email');

Route::get('search/{id?}',[SearchController::class,'searchJob'])->name('searchJob');
Route::get('searchCategories/{id}', [SearchController::class, 'searchCategories'])->name('searchCategories');
Route::get('/dashboard/post-list', [PostController::class, 'indexOfAdmin'])->name('backend.post.index');


