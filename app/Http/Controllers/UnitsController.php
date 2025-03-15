<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        //
        $units=Units::all();

        return view('admin.units.index', compact('units'));
    }


    public function create()
    {
        //

        return view('admin.units.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        Units::create([
            'name' => $request->name,
        ]);

        return redirect()->route('units.list')->with('success', 'uploaded successfully!');
    }


    public function edit(string $id)
    {
        //
        $unit = Units::findOrFail($id);
        return view('admin.units.edit', compact('unit'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $unit = Units::findOrFail($id);

        $unit->update([
            'name' => $request->name,
        ]);

        return redirect()->route('units.list')->with('success', 'Updated successfully!');
    }


    public function destroy(string $id)
    {
        //
        $unit = Units::findOrFail($id);

        // Delete record from database
        $unit->delete();

        return redirect()->route('units.list')->with('success', 'Deleted successfully!');
    }
}
