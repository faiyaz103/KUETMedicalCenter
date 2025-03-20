<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use App\Models\donor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{   
    public function index()
    {   
        $donors = User::with('bloodType')->get();
        return view('student.bloodbank', compact('donors'));
    }

    // public function create()
    // {
    //     return view('student.donor.create');
    // }

    // // Store donor information
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'type' => 'required|string',
    //         'phone' => 'required|string|max:15',
    //     ]);


    //     BloodBank::create([
    //         'user_id' => Auth::id(),
    //         'type' => $request->type,
    //         'phone' => $request->phone,
    //     ]);

    //     return redirect()->route('donor.index')->with('success', 'You are now a donor.');
    // }

    // Show edit form for authenticated donor
    public function edit()
    {
        // $donor = BloodBank::where('user_id', Auth::id())->firstOrFail();
        // return view('student.donor.edit', compact('donor'));

        $donor = User::with('bloodType')->findOrFail(Auth::id());

        // Ensure a schedule object exists to avoid errors in the view
        if (!$donor->bloodType) {
            $donor->bloodType = new BloodBank();
        }

        return view('student.donor.edit', compact('donor'));
    }

    // Update donor information
    public function update(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'phone' => 'required|string|max:15',
        ]);

        $donor = User::findOrFail(Auth::id());

        // Ensure the schedule exists
        BloodBank::updateOrCreate(
            ['user_id' => $donor->id], // Search condition
            $validated // Data to update or create
        );

        return redirect()->route('donor.index')->with('success', 'Information updated.');
    }

    // Delete donor record
    public function destroy()
    {
        $donor = BloodBank::where('user_id', Auth::id())->firstOrFail();
        $donor->delete();

        return redirect()->route('donor.index')->with('success', 'Donor information removed.');
    }
}
