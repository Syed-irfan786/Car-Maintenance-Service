<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;




Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/', function () {
    return view('home');
});


Route::get('/myweb', function () {
    return view('test');
});
Route::get('/createaccount', function () {
    return view('createaccount');
});


Route::post('/register', [UserController::class, 'register']);
Route::post('/booked', [UserController::class, 'appoinmentbooked']);
Route::Post('/bookedupdate/{id}', [UserController::class, 'bookingupdate']); //for update
Route::post('/booked1', [UserController::class, 'appoinmentbooked1']);
Route::get('/dashboard', [UserController::class, 'showDashboard']);

Route::get('/login' , function(){
    return view('login');
});

Route::get('/bookappointment' , function(){
    return view('appointment');
});
Route::get('/updatedata' , function(){
    return view('update');
});

// Route::post('/update',[UserController::class, 'update']);
// Route::post('/delete', [UserController::class, 'destroy']);
// Define route for updating appointments
Route::post('/appointments/{id}/update', [UserController::class, 'update'])->name('appointments.update');
// Route::get('/items/{id}/edit', 'ItemController@edit');

// Define route for deleting appointments
Route::delete('/appointments/{id}/delete', [UserController::class, 'destroy'])->name('appointments.destroy');



// Route::get('/dashboard' , function(){
//     return view('dashboard');
// });

// Route::post('/booked', [UserController::class, 'appoinmentbooked']);

// Route::post('/login', [UserController::class, 'login']);
