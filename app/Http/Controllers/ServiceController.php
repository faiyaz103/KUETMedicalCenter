<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services=Service::all();

        return view('user.services', compact('services'));
    }
    public function list()
    {
        //
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }


    public function create()
    {
        //

        return view('admin.services.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'file_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('services', 'public');
        }
    
        Service::create([
            'file_path' => $filePath,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('services.list')->with('success', 'Uploaded successfully!');
    }


    public function edit(string $id)
    {
        //
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }


    public function update(Request $request, string $id)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'remove_image' => 'nullable|boolean',
    ]);

    $service = Service::findOrFail($id);

    // Remove the existing image if "Remove Image" is checked
    if ($request->has('remove_image')) {
        if ($service->file_path) {
            Storage::disk('public')->delete($service->file_path);
        }
        $service->file_path = null;
    }

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        if ($service->file_path) {
            Storage::disk('public')->delete($service->file_path);
        }
        $filePath = $request->file('image')->store('services', 'public');
        $service->file_path = $filePath;
    }

    $service->update([
        'name' => $request->name,
        'description' => $request->description,
        'file_path' => $service->file_path, // Keep updated file path or null if removed
    ]);

    return redirect()->route('services.list')->with('success', 'Updated successfully!');
}



    public function destroy(string $id)
    {
        //
        $service = Service::findOrFail($id);

        // Delete file from storage
        if ($service->image){
            Storage::disk('public')->delete($service->image);
        }

        // Delete record from database
        $service->delete();

        return redirect()->route('services.list')->with('success', 'Deleted successfully!');
    }

}    
