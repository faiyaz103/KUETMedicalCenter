<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    //
    public function index()
    {
        $staff = Staff::all();
        return view('user.staff', compact('staff'));
    }
    public function list()
    {
        //
        $staff = Staff::orderBy('id', 'asc')->get();

        return view('admin.staff.index', compact('staff'));
    }


    public function create()
    {
        //

        return view('admin.staff.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:staff,email',
        ]);
    
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('staff', 'public');
        }
    
        Staff::create([
            'image' => $filePath,
            'name' => $request->name,
            'designation' => $request->designation,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);

        return redirect()->route('staff.list')->with('success', 'uploaded successfully!');
    }


    public function edit(string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        return view('admin.staff.edit', compact('staff'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:staff,email,' . $id,
        ]);

        $staff = Staff::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($staff->image) {
                Storage::disk('public')->delete($staff->image);
            }
            $filePath = $request->file('image')->store('staff', 'public');
            $staff->image = $filePath;
        }

        $staff->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);

        return redirect()->route('staff.list')->with('success', 'Staff updated successfully!');
    }


    public function destroy(string $id)
    {
        //
        $staff = Staff::findOrFail($id);

        // Delete file from storage
        if ($staff->image){
            Storage::disk('public')->delete($staff->image);
        }

        // Delete record from database
        $staff->delete();

        return redirect()->route('staff.list')->with('success', 'Deleted successfully!');
    }
}
