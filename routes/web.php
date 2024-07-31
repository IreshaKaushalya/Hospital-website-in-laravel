<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;





Route::get('/',[HomeController::class,'index']);

Route::get('/about',[HomeController::class,'index1']);

Route::get('/news',[HomeController::class,'index3']);


Route::get('/contact',[HomeController::class,'contact']);

Route::get('/news_details',[HomeController::class,'news_details']);

Route::get('/prescription',[HomeController::class,'prescription']);


Route::get('/doctor_details',[HomeController::class,'doctor_details']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});



Route::get('/add_news',[AdminController::class,'addnews']);
Route::post('/upload_news',[AdminController::class,'upload1']);
Route::get('/shownews',[AdminController::class,'shownews']);
Route::get('/deletenews/{id}',[AdminController::class,'deletenews']);
Route::get('/updatenews/{id}',[AdminController::class,'updatenews']);
Route::post('/editnews/{id}',[AdminController::class,'editnews']);



Route::middleware(['auth'])->group(function () {
Route::post('/appointment',[HomeController::class,'appointment']);
});
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);




Route::post('/contact',[HomeController::class,'contact']);



Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);


Route::middleware(['auth'])->group(function () {
Route::post('/appointment',[HomeController::class,'appointment']);
});
Route::get('/mypriscription',[HomeController::class,'mypriscription']);




Route::get('/add_prescription_view',[AdminController::class,'addprescription']);
Route::post('/upload_prescription',[AdminController::class,'uploadPrescription']);
Route::get('/showPrescription',[AdminController::class,'showPrescription']);
Route::get('/updatePrescription/{id}',[AdminController::class,'updatePrescription']);
Route::post('/editprescription/{id}',[AdminController::class,'editprescription']);



Route::get('/add_pharmacy',[AdminController::class,'addpharmacy']);
Route::post('/upload_pharmacy',[AdminController::class,'uploadPharmacy']);
Route::get('/showpharmacy',[AdminController::class,'showpharmacy']);
Route::get('/deletePharmacy/{id}',[AdminController::class,'deletePharmacy']);
Route::get('/updatePharmacy/{id}',[AdminController::class,'updatePharmacy']);
Route::post('/editPharmacy/{id}',[AdminController::class,'editPharmacy']);


