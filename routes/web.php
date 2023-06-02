<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CharityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


//Home
Route::get('/', [HomeController::class, 'index']);


//Charity
Route::get('/charity', [CharityController::class, 'charity']);
//Route::get('/charity/detail/{id}', [CharityController::class, 'show']);

Route::get('/charity/seacrh', [CharityController::class, 'search']);

Route::get('/detail', function () {
    return view('charities.detail-charity', [
        'title' => "Charity Detail"
    ]);
});

Route::get('/detail-activity', function () {
    return view('charities.detailCharity', [
        'title' => "Charity Detail"
    ]);
});

Route::get('/detail-services', function () {
    return view('charities.detail-services', [
        'title' => "Charity Detail"
    ]);
});

//Join Charity Activity
Route::get('/join-donation', function () {
    return view('charities.donationform', [
        'title' => "Form Donasi | BEEVOLUNTEER"
    ]);
});

Route::get('/join-services', function () {
    return view('charities.servicesform', [
        'title' => "Form Volunteer | BEEVOLUNTEER"
    ]);
});

//Organization
Route::get('/organization', [OrganizationController::class, 'index']);

//About Us
Route::get('/about-us', [TeamController::class, 'index']);

//Article
Route::get('/article', [ArticleController::class, 'article']);

//Dashboard Charity
Route::get('/dashboard-charity', [CharityController::class, 'index']); //Tampilan Dashboard Charity
Route::get('/charity/create', [CharityController::class, 'create'])->middleware(['checkRole:Organization']); //Tampilan Form Tambah Data
Route::post('/charity/store', [CharityController::class, 'store']); //Tampilan
Route::get('/charity/edit/{id}', [CharityController::class, 'edit']);
Route::put('/charity/update/{id}', [CharityController::class, 'update']);
Route::delete('/charity/delete/{id}', [CharityController::class, 'destroy']);

//Dashboard Article
Route::get('/dashboard-article', [ArticleController::class, 'index']);
Route::get('/article/create', [ArticleController::class, 'create']);
Route::post('/article/store', [ArticleController::class, 'store']);
Route::get('/article/edit/{id}', [ArticleController::class, 'edit']);
Route::put('/article/update/{id}', [ArticleController::class, 'update']);
Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy']);

//Dashboard User
Route::get('/dashboard-user', [UserController::class, 'index'])->middleware(['checkRole:Admin']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/update/{id}', [UserController::class, 'update']);

//Authentication
Route::get('/signin', [SigninController::class, 'index'])->name('signin')->middleware('guest');
Route::post('/signin', [SigninController::class, 'authenticate']);
Route::post('/signout', [SigninController::class, 'signout']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup/store', [SignupController::class, 'store'])->name('actionregister');

//Profile
Route::get('/profile', function () {
    return view('profile', [
        'title' => "Manage Profile | BEEVOLUNTEER"
    ]);
});
