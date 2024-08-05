<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AppointmentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function (Request $request) {
        if ($request->user()->role === 'patient') {
            return view('patient.dashboard');
        } elseif ($request->user()->role === 'doctor') {
            return view('doctor.dashboard');
        } else {
            return redirect()->route('dashboard'); // Default dashboard
        }
    })->name('dashboard');
    Route::get('/patient/appointments', function (Request $request) {
        if ($request->user()->role === 'patient') {
            return view('components.patient.appointments');
        }

    })->name('patient.appointments');
});


// web.php
Route::middleware(['auth:sanctum', 'role:doctor', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Routes accessible only to admin

});

Route::post('/request/appointment', [AppointmentsController::class, 'store_appointment'])->name('request.appointment');
Route::post('/accept/{id}/appointment/{date}', [AppointmentsController::class, 'accept_appointment'])->name('accept.appointment.patient');
Route::post('/decline/{id}/appointment', [AppointmentsController::class, 'decline-appointment'])->name('decline.appointment.patient');
// Routes accessible to admin and doctor





