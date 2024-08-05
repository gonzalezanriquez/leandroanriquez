<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();

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


        Mail::to('gonzalezanriquez@gmail.com')->send(new TestMail(
            $request->name,
            $request->email,
            $request->message
        ));

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
        
        $message->update(['leido' => true]);

        return redirect()->route('contact.index')->with('success', 'Mensaje marcado como leído.');


    }
    public function markAsUnread($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['leido' => false]);
    
        return redirect()->route('contact.index')->with('success', 'Mensaje marcado como no leído.');
    }
    
    

    public function destroy($id)
    {
    $message = ContactMessage::findOrFail($id);
    $message->delete();

    return redirect()->route('contact.index')->with('success', 'Mensaje eliminado correctamente.');
    }

}
