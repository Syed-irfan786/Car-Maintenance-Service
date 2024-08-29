<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // public function showForm()
    // {
    //     $services = Service::all();
    //     return view('appointment.form', compact('services'));
    // }

    // public function submitForm(Request $request)
    // {
    //     $request->validate([
    //         'service_id' => 'required',
    //         'date' => 'required|date',
    //         'time' => 'required',
    //     ]);

    //     Appointment::create([
    //         'customer_id' => auth()->id(),
    //         'service_id' => $request->service_id,
    //         'date' => $request->date,
    //         'time' => $request->time,
    //     ]);

    //     return redirect()->route('home')->with('success', 'Appointment booked successfully!');
    // }
}
