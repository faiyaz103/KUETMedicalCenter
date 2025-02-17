<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index()
    {
        $staff = Staff::all();
        return view('user.staff', compact('staff'));
    }
}
