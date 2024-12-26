<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('emails.contact_form'); // The contact form view
    }

    /**
     * Handle form submission and send an email.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmail(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'recipient' => 'required|email',   // Ensure recipient email is valid
            'name' => 'required|string|max:255', // Name must be a string with max length of 255
            'email' => 'required|email',        // Ensure the sender email is valid
            'message' => 'required',            // Ensure message is not empty
        ]);

        // Prepare the email content
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        try {
            // Send the email to the recipient specified in the form
            Mail::to($request->recipient)->send(new ContactMail($details));

            // Return back to the form with a success message
            return back()->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            // Handle any errors and return a failure message
            return back()->withErrors(['error' => 'Failed to send email. Please try again.']);
        }
    }
}
