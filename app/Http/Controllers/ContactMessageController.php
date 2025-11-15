<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    // Show contact form (public)
    public function create()
    {
        return view('contact');
    }

    // Store message (public)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact.create')->with('success', 'Message sent successfully!');
    }

    // Show all messages (admin)
    public function index()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.messages.index', compact('messages'));
    }
}