<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
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


Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('/marketplace', [HomeController::class, 'fetch_data'])->name('marketplace');

Route::post('/search', [HomeController::class, 'search_data'])->name("search.data");

Route::get('/gig/{id}', [HomeController::class, 'fetch_gig'])-> name('gig.data');

Route::get('/howtohire', function(){
    return view('howtohire');
})->name('howtohire');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/categories', [HomeController::class, 'fetch_categories'])->name('categories');

Route::get('/order/{gig_id}', [HomeController::class, 'order_page'])->name('order_page');

Route::post('/order/{id}', [HomeController::class, 'save_order'])->name('order.save');
Route::get('/admin/gigs',[GigController::class, 'show_gigs'])->name('admin.gigs')->middleware('auth');


Route::get('orderdetails/{order_id}/{review?}', [HomeController::class, 'order_details'])->name('order.details');

Route::get('/admin/orders', function(){
    return view('admin.orders');
})->name('admin.orders')->middleware('auth');

Route::get('/admin/reviews', function(){
    return view('admin.reviews');
})->name('admin.reviews')->middleware('auth');

Route::get('/admin/seller', function(){
    return view('admin.becomeseller');
})->name('admin.seller')->middleware('auth');

Route::post('/admin/seller', [GigController::class, 'store_gig_data'] )->name('store_gig_data')->middleware('auth');

Route::get('success', function(){
    return view('ordersucess');
})->name('ordersucess');

// routes/web.php

Route::post('/feedback', [HomeController::class, 'feedback'])->name('storefeedback');

Route::get('/feedback/{gig_id}/{order_id}', [HomeController::class, 'addreview'])->name('addfeedback');

Route::get('feedbacksuccess/{order_id}', [HomeController::class,'feedback_redirect'])->name('feedbacksuccess');

Route::get('/dashboard', [GigController::class, 'View_dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
