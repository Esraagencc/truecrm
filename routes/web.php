<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [AdminController::class,'dashboard']);

Route::get('/musteriler', [CustomerController::class,'customers'])->name('customers');
Route::get('/musteri-ekle', [CustomerController::class,'customerAdd'])->name('customerAdd');
Route::post('/musteri-ekle', [CustomerController::class,'customerSave'])->name('customerSave');
Route::get('/musteri-sil/{id}', [CustomerController::class,'customerDelete'])->name('customerDelete');
Route::get('/musteri-detay/{id}', [CustomerController::class,'customerDetail'])->name('customerDetail');
Route::get('/musteri-düzenle/{id}', [CustomerController::class,'customerEdit'])->name('customerEdit');
Route::post('/musteri-düzenle/{id}', [CustomerController::class,'customerEditSave'])->name('customerEditSave');


Route::get('/klinikler', [ClinicController::class,'clinics'])->name('clinics');
Route::get('/klinik-ekle', [ClinicController::class,'clinicAdd'])->name('clinicAdd');
Route::post('/klinik-ekle', [ClinicController::class,'clinicSave'])->name('clinicSave');


Route::get('/doktorlar', [DoctorController::class,'doctors'])->name('doctors');
Route::get('/doktor-ekle', [DoctorController::class,'doctorAdd'])->name('doctorAdd');
Route::post('/doktor-ekle', [DoctorController::class,'doctorSave'])->name('doctorSave');
Route::get('/doktor-sil/{id}', [DoctorController::class,'doctorDelete'])->name('doctorDelete');

Route::get('/rezervasyonlar', [ReservationController::class,'reservations'])->name('reservations');
Route::get('/rezervasyon-olustur', [ReservationController::class,'reservationAdd'])->name('reservationAdd');
Route::post('/rezervasyon-olustur', [ReservationController::class,'reservationSave'])->name('reservationSave');
Route::get('/rezervasyon-sil/{id}', [ReservationController::class,'reservationDelete'])->name('reservationDelete');
Route::get('/rezervasyon-detay/{id}', [ReservationController::class,'reservationDetail'])->name('reservationDetail');
Route::get('/rezervasyon-düzenle/{id}', [ReservationController::class,'reservationEdit'])->name('reservationEdit');
Route::post('/rezervasyon-düzenle/{id}', [ReservationController::class,'reservationEditSave'])->name('reservationEditSave');

Route::get('/branslar', [BranchController::class,'branchs'])->name('branchs');
Route::get('/brans-ekle', [BranchController::class,'branchAdd'])->name('branchAdd');
Route::post('/brans-ekle', [BranchController::class,'branchSave'])->name('branchSave');
Route::get('/brans-sil/{id}', [BranchController::class,'branchDelete'])->name('branchDelete');





