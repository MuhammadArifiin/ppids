<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminDivisionsController;
use App\Http\Controllers\adminFacilitiesController;
use App\Http\Controllers\adminProfileController;
use App\Http\Controllers\adminPublicationsController;

use App\Http\Controllers\contactsController;
use App\Http\Controllers\divisionsController;
use App\Http\Controllers\facilitiesController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\publicationsController;
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


Route::get('/', [landingController::class, 'index']);
Route::get('/user/about', [landingController::class, 'about']);

Route::get('/user/divisions', [divisionsController::class, 'index']);
Route::get('/user/facilities', [facilitiesController::class, 'index']);
Route::get('/user/publications', [publicationsController::class, 'index']);
Route::get('/user/contact', [contactsController::class, 'index']);


Route::middleware('auth')->group(function(){
Route::get('/admin-dashboard', [adminController::class, 'dashboard']);
Route::get('/admin-profile', [adminProfileController::class, 'index']);
Route::get('/admin-profile-update', [adminProfileController::class, 'update']);

Route::get('/admin-divisions', [adminDivisionsController::class, 'index']);
Route::get('/admin-divisions/add', [adminDivisionsController::class, 'create']);
Route::post('/admin-divisions', [adminDivisionsController::class, 'store']);
Route::get('/admin-divisions/edit/{id}', [adminDivisionsController::class, 'edit']);
Route::post('/admin-divisions/update/{id}', [adminDivisionsController::class, 'update']);
Route::get("/admin-divisions/{id}", [adminDivisionsController::class, 'delete']);

Route::get('/admin-facilities', [adminFacilitiesController::class, 'index']);
Route::get('/admin-facilities/add', [adminFacilitiesController::class, 'create']);
Route::post('/admin-facilities', [adminFacilitiesController::class, 'store']);
Route::get('/admin-facilities/edit/{id}', [adminFacilitiesController::class, 'edit']);
Route::post('/admin-facilities/update/{id}', [adminFacilitiesController::class, 'update']);
Route::get("/admin-facilities/{id}", [adminFacilitiesController::class, 'delete']);

Route::get('/admin-publications', [adminPublicationsController::class, 'index']);
Route::get('/admin-publications/add', [adminPublicationsController::class, 'create']);
Route::post('/admin-publications', [adminPublicationsController::class, 'store']);
Route::get('/admin-publications/edit/{id}', [adminPublicationsController::class, 'edit']);
Route::post('/admin-publications/update/{id}', [adminPublicationsController::class, 'update']);
Route::get("/admin-publications/{id}", [adminPublicationsController::class, 'delete']);
});

Route::get('/admin-login', [loginController::class, 'index'])->name('admin-login');
Route::get('/admin-check-login', [loginController::class, 'checkLogin']);
