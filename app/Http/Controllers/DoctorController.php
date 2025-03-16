<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::all();
        return view('user.doctors', compact('doctors'));
    }
    public function list()
    {
        //
        $doctors = Doctor::orderBy('id', 'asc')->get();

        return view('admin.doctors.index', compact('doctors'));
    }


    public function create()
    {
        //

        return view('admin.doctors.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:doctors,email',
        ]);
    
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('doctors', 'public');
        }
    
        Doctor::create([
            'image' => $filePath,
            'name' => $request->name,
            'designation' => $request->designation,
            'specialization' => $request->specialization,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);

        return redirect()->route('doctors.list')->with('success', 'uploaded successfully!');
    }


    public function edit(string $id)
    {
        //
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctors.edit', compact('doctor'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:doctors,email,' . $id,
            'remove_image' => 'nullable|boolean',
        ]);

        $doctor = Doctor::findOrFail($id);

        if ($request->has('remove_image')) {
            if ($doctor->image) {
                Storage::disk('public')->delete($doctor->image);
            }
            $doctor->image = null;
        }

        if ($request->hasFile('image')) {
            if ($doctor->image) {
                Storage::disk('public')->delete($doctor->image);
            }
            $filePath = $request->file('image')->store('doctors', 'public');
            $doctor->image = $filePath;
        }

        $doctor->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'specialization' => $request->specialization,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);

        return redirect()->route('doctors.list')->with('success', 'Doctor updated successfully!');
    }


    public function destroy(string $id)
    {
        //
        $doctor = Doctor::findOrFail($id);

        // Delete file from storage
        if ($doctor->image){
            Storage::disk('public')->delete($doctor->image);
        }

        // Delete record from database
        $doctor->delete();

        return redirect()->route('doctors.list')->with('success', 'Deleted successfully!');
    }

}
