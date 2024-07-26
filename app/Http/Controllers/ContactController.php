<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::all();

        return view('contact.index', compact('messages'));
    }

    
    
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect('/')->with('success', 'Mensaje enviado correctamente.');
    }

   
    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);

        return view('contact.show', compact('message'));
    }

    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['read' => true]);

        return redirect()->route('contact.index')->with('success', 'Mensaje marcado como leído.');
    }
}
