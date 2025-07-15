<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\ReviewController;

/*------------------------------------------
--------------------------------------------
All Frontend Routes List
--------------------------------------------
--------------------------------------------*/
//

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/destinations', [FrontendController::class, 'destinations'])->name('destination');
Route::get('/package', [FrontendController::class, 'packages'])->name('packages');
Route::get('/package/{slug}', [FrontendController::class, 'packageDetail'])->name('packageDetail');
Route::get('/contactUs', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs', [FrontendController::class, 'contactUsSubmit'])->name('contactUsSubmit');
Route::get('/galleries', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/review', [App\Http\Controllers\ReviewController::class, 'create'])->name('review.create');
Route::post('/review', [App\Http\Controllers\ReviewController::class, 'store'])->name('review.store');

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {

  Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

  Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
  // Route::get('/admin/destination', [HomeController::class, 'destination'])->name('admin.destination');

  // Destination routes
  Route::get('admin/destinations', [DestinationController::class, 'index'])->name('admin.destinations');
  Route::post('admin/destinations', [DestinationController::class, 'store'])->name('admin.destinations.store');
  Route::get('admin/destinations/{id}/edit', [DestinationController::class, 'edit'])->name('admin.destinations.edit');
  Route::put('admin/destinations/{id}', [DestinationController::class, 'update'])->name('admin.destinations.update');
  Route::delete('admin/destinations/{id}', [DestinationController::class, 'destroy'])->name('admin.destinations.destroy');

  // Gallery routes
  Route::get('admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
  Route::post('admin/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
  Route::delete('admin/gallery/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

  Route::get('admin/packages', [PackageController::class, 'index'])->name('admin.packages.index');
  Route::get('admin/packages/create', [PackageController::class, 'create'])->name('admin.packages.create');
  Route::post('admin/packages', [PackageController::class, 'store'])->name('admin.packages.store');
  Route::get('admin/packages/{id}', [PackageController::class, 'show'])->name('admin.packages.show');
  Route::get('admin/packages/{id}/edit', [PackageController::class, 'edit'])->name('admin.packages.edit');
  Route::put('admin/packages/{id}', [PackageController::class, 'update'])->name('admin.packages.update');
  Route::delete('admin/packages/{id}', [PackageController::class, 'destroy'])->name('admin.packages.destroy');

  Route::get('admin/contact', [HomeController::class, 'contactList'])->name('admin.contact');
  Route::delete('admin/contact/{id}', [HomeController::class, 'contactDestroy'])->name('admin.contact.destroy');

  // Reviews management
  Route::get('admin/reviews', [App\Http\Controllers\Backend\ReviewController::class, 'index'])->name('admin.reviews.index');
  Route::get('admin/reviews/{id}/approve', [App\Http\Controllers\Backend\ReviewController::class, 'approve'])->name('admin.reviews.approve');
  Route::get('admin/reviews/{id}/reject', [App\Http\Controllers\Backend\ReviewController::class, 'reject'])->name('admin.reviews.reject');
  Route::delete('admin/reviews/{id}', [App\Http\Controllers\Backend\ReviewController::class, 'destroy'])->name('admin.reviews.destroy');
});


