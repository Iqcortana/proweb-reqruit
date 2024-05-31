<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'call' => 'required',
            'radio' => 'required|in:freelance,team,business',
            'message' => 'required'
        ]);

        Contact::create($validatedData);

        return redirect('/contact')->with('success', 'contact has been sent!');
    }

    public function show()
    {
        return view('dashboard.contact.inbox', [
            'contact' => Contact::all()
        ]);
    }

}
