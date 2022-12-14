<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminBackgroundImageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminDivisionsController;
use App\Http\Controllers\adminFacilitiesController;
use App\Http\Controllers\AdminManageContact;
use App\Http\Controllers\AdminManageFeatureController;
use App\Http\Controllers\AdminManageSocmed;
use App\Http\Controllers\adminProfileController;
use App\Http\Controllers\adminPublicationsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\divisionsController;
use App\Http\Controllers\facilitiesController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\publicationsController;
use App\Http\Controllers\socialMediaController;
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
Route::get('/about', [landingController::class, 'about']);
Route::get('/divisions', [divisionsController::class, 'index']);
Route::get('/facilities', [facilitiesController::class, 'index']);
Route::get('/publications', [publicationsController::class, 'index']);
Route::get('/search', [publicationsController::class, 'search']);
Route::get('/socmed', [socialMediaController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/publications/{id}', [publicationsController::class, 'getArticle']);

Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [adminController::class, 'dashboard']);
    Route::get('/admin-about', [AdminAboutController::class, 'index']);
    Route::post('/admin-about-update-or-create', [AdminAboutController::class, 'createOrUpdate']);
    Route::get('/admin-profile', [adminProfileController::class, 'index']);
    Route::get('/admin-profile-update', [adminProfileController::class, 'update']);

    Route::get('/admin-divisions', [adminDivisionsController::class, 'index']);
    Route::get('/admin-divisions/add', [adminDivisionsController::class, 'create']);
    Route::post('/admin-divisions', [adminDivisionsController::class, 'store']);
    Route::get('/admin-divisions/edit/{id}', [adminDivisionsController::class, 'edit']);
    Route::put('/admin-divisions/update/{id}', [adminDivisionsController::class, 'update']);
    Route::get("/admin-divisions/search", [adminDivisionsController::class, 'search']);
    Route::delete("/admin-divisions/{id}", [adminDivisionsController::class, 'delete']);

    Route::get('/admin-facilities', [adminFacilitiesController::class, 'index']);
    Route::get('/admin-facilities/add', [adminFacilitiesController::class, 'create']);
    Route::post('/admin-facilities', [adminFacilitiesController::class, 'store']);
    Route::get('/admin-facilities/edit/{id}', [adminFacilitiesController::class, 'edit']);
    Route::put('/admin-facilities/update/{id}', [adminFacilitiesController::class, 'update']);
    Route::get("/admin-facilities/search", [adminFacilitiesController::class, 'search']);
    Route::delete("/admin-facilities/{id}", [adminFacilitiesController::class, 'delete']);

    Route::get('/admin-publications', [adminPublicationsController::class, 'index']);
    Route::get('/admin-publications/add', [adminPublicationsController::class, 'create']);
    Route::post('/admin-publications/upImage', [adminPublicationsController::class, 'storeImage'])->name('image.upload');
    Route::post('/admin-publications', [adminPublicationsController::class, 'store']);
    Route::get('/admin-publications/edit/{id}', [adminPublicationsController::class, 'edit']);
    Route::put('/admin-publications/update/{id}', [adminPublicationsController::class, 'update']);
    Route::get('/admin-publications/search', [adminPublicationsController::class, 'search']);
    Route::delete("/admin-publications/{id}", [adminPublicationsController::class, 'delete']);

    Route::get('/admin-Manage-Feature', [AdminManageFeatureController::class, 'index']);
    Route::get('/admin-Manage-Feature-change/{id}', [AdminManageFeatureController::class, 'changeActivity']);

    Route::get('/admin-backgroundImage', [AdminBackgroundImageController::class, 'index']);
    Route::get('/admin-backgroundImage/add', [AdminBackgroundImageController::class, 'create']);
    Route::post('/admin-backgroundImage', [AdminBackgroundImageController::class, 'store']);
    Route::get('/admin-backgroundImage/edit/{id}', [AdminBackgroundImageController::class, 'edit']);
    Route::put('/admin-backgroundImage/update/{id}', [AdminBackgroundImageController::class, 'update']);
    Route::get('/admin-backgroundImage/search', [AdminBackgroundImageController::class, 'search']);
    Route::delete("/admin-backgroundImage/{id}", [AdminBackgroundImageController::class, 'delete']);

    Route::get('/admin-manage-socmed', [AdminManageSocmed::class, 'index']);
    Route::get('/admin-manage-socmed/add', [AdminManageSocmed::class, 'create']);
    Route::post('/admin-manage-socmed', [AdminManageSocmed::class, 'store']);
    Route::get('/admin-manage-socmed/edit/{id}', [AdminManageSocmed::class, 'edit']);
    Route::get('/admin-manage-socmed-change/{id}', [AdminManageSocmed::class, 'changeActiveSocmed']);
    Route::put('/admin-manage-socmed/update/{id}', [AdminManageSocmed::class, 'update']);
    Route::delete("/admin-manage-socmed/{id}", [AdminManageSocmed::class, 'delete']);

    Route::get('/admin-manage-contact', [AdminManageContact::class, 'index']);
    Route::get('/admin-manage-contact/add', [AdminManageContact::class, 'create']);
    Route::post('/admin-manage-contact', [AdminManageContact::class, 'store']);
    Route::get('/admin-manage-contact/edit/{id}', [AdminManageContact::class, 'edit']);
    Route::put('/admin-manage-contact/update/{id}', [AdminManageContact::class, 'update']);
    Route::delete("/admin-manage-contact/{id}", [AdminManageContact::class, 'delete']);
});

Route::get('/admin-login', [loginController::class, 'index'])->name('admin-login');
Route::get('/admin-check-login', [loginController::class, 'checkLogin']);
Route::post('/admin-logout', [loginController::class, 'logout'])->name('admin-logout');
