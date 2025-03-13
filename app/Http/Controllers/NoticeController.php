<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notices = Notice::orderBy('created_at', 'desc')->get();

        return view('admin.notices.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.notices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Store file in storage/app/public/notices/
        $filePath = $request->file('file')->store('notices', 'public');

        Notice::create([
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('notices.index')->with('success', 'Notice uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $notice = Notice::findOrFail($id);
        return response()->file(storage_path("app/public/{$notice->file_path}"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $notice = Notice::findOrFail($id);
        return view('admin.notices.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|mimes:pdf|max:2048', // File is optional
        ]);
    
        $notice = Notice::findOrFail($id);
    
        // Update title
        $notice->title = $request->title;
    
        // If a new file is uploaded, replace the old one
        if ($request->hasFile('file')) {
            // Delete the old file
            Storage::disk('public')->delete($notice->file_path);
    
            // Store new file
            $filePath = $request->file('file')->store('notices', 'public');
            $notice->file_path = $filePath;
        }
    
        // Save updated notice
        $notice->save();
    
        return redirect()->route('notices.index')->with('success', 'Notice updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $notice = Notice::findOrFail($id);

        // Delete file from storage
        Storage::disk('public')->delete($notice->file_path);

        // Delete record from database
        $notice->delete();

        return redirect()->route('notices.index')->with('success', 'Notice deleted successfully!');
    }
}
