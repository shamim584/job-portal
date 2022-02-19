<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobTypeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;



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
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('admin/job-types', JobTypeController::class)->middleware('is_admin');
Route::resource('admin/job', JobController::class)->middleware('is_admin');
Route::get('admin/job/deactive/{id}', [JobController::class, 'deactive'])->middleware('is_admin');
Route::get('admin/applicant', [ApplicantController::class, 'index'])->name('applicant.index')->middleware('is_admin');
Route::get('admin/applicant/show/{id}', [ApplicantController::class, 'show'])->name('applicant.show')->middleware('is_admin');



Route::get('/home', [HomeController::class, 'index'])->name('home');