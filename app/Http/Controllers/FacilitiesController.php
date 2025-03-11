<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use App\Models\Units;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    //
    public function index()
    {
        // $doctors = Doctor::all();
        $units=Units::all();
        $tests=Tests::all();

        return view('user.facilities', compact('units', 'tests'));
    }
}
