<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function show()
    {
        return view('frontend.contact');
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        // Here you can add logic to save the contact form data or send an email
        // For now, we'll just redirect back with a success message

        return redirect()->route('contact.show')->with('success', 'Thank you for your message. 
        We\'ll get back to you soon!');
    }
}
