<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::with(['schedule'])->get();

        return view('user.doctorsschedule', compact('doctors'));
    }
}
