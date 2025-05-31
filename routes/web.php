<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BookConsultantController;

// Route::get('', function () {
//     return view('welcome');
// });

// Home Page
Route::get('/', function () {
    return view('pages.home');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact_us', function () {
    return view('pages.contactus');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});


Route::get('/appointment', function () {
    return view('pages.appointment');
});

Route::get('/ganapathi_physiotherapist', function () {
    return view('pages.ganapathi-physio');
});

Route::get('/neuro_rehabilitation', function () {
    return view('pages.services.neuro_rehabilitation');
});

Route::get('/pediatric_rehabilitation', function () {
    return view('pages.services.pediatric_rehabilitation');
});


Route::get('/orthopedic', function () {
    return view('pages.services.orthopedic');
});


Route::get('/cardio_pulmonary_rehabilitation', function () {
    return view('pages.services.cardio_pulmonary_rehabilitation');
});


Route::get('/vestibular_rehabilitation_therapy', function () {
    return view('pages.services.vestibular_rehabilitation_therapy');
});



Route::get('/fitness_program', function () {
    return view('pages.services.fitness_program');
});





//Routes

Route::post('/contactUs', [ContactUsController::class, 'store']);
Route::post('/bookConsultant', [BookConsultantController::class, 'store']);
