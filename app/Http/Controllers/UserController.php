<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration-form');
    }
   

    public function register(Request $request)
    {
        $customer = new Customer() ;

        $customer->first_name = request('first_name');
        $customer->last_name = request('last_name');
        $customer->age = request('age');
        $customer->gender = request('gender');
        $customer->username  = request('username');
        $customer->password = request('password');
        $customer->save() ;

        // Redirect the user or perform any other actions
        return redirect("/")->with('success', 'Customer registered successfully!');
    }
    

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        // Retrieve the customer by username
        $customer = Customer::where('username', $username)->first();
        // Check if the customer exists and the password is correct
        if ($customer !== null) {
            if ($customer->password == $password) {
                // Authentication passed
    
                $id = $customer->id;
    
                return redirect('/bookappointment')->with(['success' => 'Login successful!', 'id' => $id]);
        
            }
        }
        
    
        // Authentication failed
        return redirect()->back()->with('error', 'Invalid username or password')->withInput();
    }

    public function appoinmentbooked(Request $request){
        $validatedData = $request->validate([
            'customer_id' => 'required',
            'name' => 'required',
            'email' => 'required|email', // Ensure that the email is in a valid format
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'room_type' => 'required',
            'message' => 'required',
        ]);
    
        $booking = new Booking();
        $booking->fill($validatedData);
        $booking->save();
        $id = request('customer_id');
      


        return redirect("/dashboard")->with(['success' => 'Login successful!', 'customer_id' => $id]);
    }
    

    public function bookingupdate(Request $request , $id){
        $booking = Booking::find($id);

        $customer_id = $booking->customer_id ;
        $booking->name = request('name');
        $booking->email = request('email');
        $booking->check_in = request('check_in');
        $booking->check_out = request('check_out');
        $booking->room_type =  request('room_type');
        $booking->message = request('message');
        $booking->save();
        $id = $customer_id;
      


        return redirect("/dashboard")->with(['success' => 'Login successful!', 'customer_id' => $id]);
    }



    public function appoinmentbooked1(Request $request){
        

        $customer_id = request('customer_id');

        // dump($customer_id);

      


        return redirect("/dashboard")->with(['success' => 'Login successful!', 'customer_id' => $customer_id]);
    }

    public function showDashboard()
    {
       
        $userId = session('customer_id');
        

        // Retrieve appointments for the user
        $booking = Booking::where('customer_id', $userId)->get();

        return view('dashboard',compact('booking'));
    }

    public function update()
    {
        $id = request('id');
        $item = Booking::find($id);
        return view('update', compact('item'));
        // $id = request('id');
        // // dump($id);
        // return redirect("/updatedata")->with(['success' => 'update!', 'id' => $id]);
    }



    public function destroy($id)
{
    // Find the appointment by ID
    $booking = Booking::findOrFail($id);
    $customerId = $booking->customer_id;
    // Delete the appointment
    $booking->delete();
    return redirect("/dashboard")->with(['success' => 'Deleted successfully!', 'customer_id' => $customerId]);

    // Redirect back or to a specific page after deletion
    // return redirect()->back()->with('success', 'Appointment deleted successfully');
}




    
    

    
    
}
