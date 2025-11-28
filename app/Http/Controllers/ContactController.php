<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|in:venue_inquiry,partnership,support,billing,other',
            'message' => 'required|string|max:2000',
            'newsletter' => 'nullable|boolean'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please correct the errors below.');
        }

        try {
            // Prepare email data
            $contactData = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'newsletter' => $request->has('newsletter'),
                'submitted_at' => now()
            ];

            // Send email to admin/support team
            Mail::send('emails.contact-form', $contactData, function ($message) use ($contactData) {
                $message->to(config('mail.contact_email', 'info@venuehub.com'))
                        ->subject('New Contact Form Submission: ' . ucfirst(str_replace('_', ' ', $contactData['subject'])))
                        ->replyTo($contactData['email'], $contactData['first_name'] . ' ' . $contactData['last_name']);
            });

            // Send confirmation email to user (optional)
            if ($request->has('newsletter')) {
                // Handle newsletter subscription
                // You could integrate with a newsletter service here
            }

            return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form submission failed: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Sorry, there was an error sending your message. Please try again or contact us directly.');
        }
    }
}
