<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contact = Contact::first();

        return view('user.contact', compact('contact'));
    }
    public function list()
    {
        //
        $contact = Contact::first();

        return view('admin.dashboard', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => [
            'required',
            'string',
            'email',
            'max:255',
            function ($attribute, $value, $fail) {
                if (!preg_match('/@kuet\.ac\.bd$/', $value)) {
                    $fail('Academic email required');
                }
            }]     
        ]);

        $contact = Contact::first();

        if($contact){
            $contact->update([
                'title' => $request->title,
                'organization' => $request->organization,
                'location' => $request->location,
                'telephone' => $request->telephone,
                'mobile' => $request->mobile,
                'email' => $request->email,
            ]);
        }
        else{
            Contact::create([
                'title' => $request->title,
                'organization' => $request->organization,
                'location' => $request->location,
                'telephone' => $request->telephone,
                'mobile' => $request->mobile,
                'email' => $request->email,
            ]);
        }

        

        return redirect()->route('admin.dashboard')->with('success', 'Information uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
