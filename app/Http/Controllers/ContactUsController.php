<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactUS;
use App\Mail\PatientStored;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;

class ContactUsController extends Controller
{
    //
   public function store(Request $request)
{
    try {
        // Remove _token and any unnecessary fields
        $data = Arr::except($request->all(), ['_token']);

        // Save to database
        $lead = ContactUS::create($data);

        // Email recipients (add real emails here)
        // $recipients = [
        //     'schouhan77@gmail.com',
        //     'schouhan77@gmail.com',
        // ];

        // // // Send email to recipients
        // Mail::to($recipients)->send(new PatientData($lead));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Appointment booked successfully!');
    } catch (\Exception $e) {
        // Log error if needed: Log::error($e);
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }

}
    
}
