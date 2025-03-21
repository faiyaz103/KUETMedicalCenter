<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function list()
    {
        //
        $tests=Tests::all();

        return view('admin.medtests.index', compact('tests'));
    }


    public function create()
    {
        //

        return view('admin.medtests.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'fees' => 'required|integer|min:0'
        ]);
    
        Tests::create([
            'name' => $request->name,
            'fees' => $request->fees
        ]);

        return redirect()->route('tests.list')->with('success', 'uploaded successfully!');
    }


    public function edit(string $id)
    {
        //
        $test = Tests::findOrFail($id);
        return view('admin.medtests.edit', compact('test'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fees' => 'required|integer|min:0'
        ]);

        $test = Tests::findOrFail($id);

        $test->update([
            'name' => $request->name,
            'fees' => $request->fees
        ]);

        return redirect()->route('tests.list')->with('success', 'Updated successfully!');
    }


    public function destroy(string $id)
    {
        //
        $test = Tests::findOrFail($id);

        // Delete record from database
        $test->delete();

        return redirect()->route('tests.list')->with('success', 'Deleted successfully!');
    }
}
