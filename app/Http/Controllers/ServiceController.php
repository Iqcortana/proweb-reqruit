<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Billing;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        return view('services');
    }

    public function store(Request $request)
    {
        // Proses data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'location' => 'required|string',
            'uiux' => 'nullable|boolean',
            'webdevelopment' => 'nullable|boolean',
            'digitalmarketing' => 'nullable|boolean',
            'contentwriting' => 'nullable|boolean',
            'brandingidentity' => 'nullable|boolean',
            'price' => 'required|numeric',
        ]);

        // Atur nilai checkbox yang tidak dicentang ke false
        $validatedData['uiux'] = $request->has('uiux') ? true : false;
        $validatedData['webdevelopment'] = $request->has('webdevelopment') ? true : false;
        $validatedData['digitalmarketing'] = $request->has('digitalmarketing') ? true : false;
        $validatedData['contentwriting'] = $request->has('contentwriting') ? true : false;
        $validatedData['brandingidentity'] = $request->has('brandingidentity') ? true : false;

        Service::create($validatedData);

        return redirect('/services/billing')->with('success', 'Form services submitted successfully!');
    }

    public function uiux()
    {
        return view('uiux');
    }

    public function webdevelopment()
    {
        return view('webdevelopment');
    }

    public function digitalmarketing()
    {
        return view('digitalmarketing');
    }

    public function contentwriting()
    {
        return view('contentwriting');
    }

    public function brandingidentity()
    {
        return view('brandingidentity');
    }

    public function billing()
    {
        return view('billing');
    }

    public function billingstore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'photo' => 'image|file'
        ]);

        if($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('billing-images');
        }
    
        Billing::create($validatedData);
    
        return redirect()->back()->with('success', 'Payment\'s Picture sent successfully!');
    }

    public function servicesinbox()
    {
        return view('dashboard.billing.inbox', [
            'services' => Service::all(),
            'inboxes' => Billing::all()
        ]);
    }
}
