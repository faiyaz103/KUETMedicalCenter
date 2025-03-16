<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::with(['schedule'])->get();

        return view('user.doctorsschedule', compact('doctors'));
    }
    public function list()
    {
        $doctors = Doctor::all();

        return view('admin.doctorsschedule.index', compact('doctors'));
    }

    public function edit(string $id)
    {
        $doctor = Doctor::with('schedule')->findOrFail($id);

        // Ensure a schedule object exists to avoid errors in the view
        if (!$doctor->schedule) {
            $doctor->schedule = new DoctorSchedule();
        }

        return view('admin.doctorsschedule.edit', compact('doctor'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'saturday' => 'nullable|string',
            'sunday' => 'nullable|string',
            'monday' => 'nullable|string',
            'tuesday' => 'nullable|string',
            'wednesday' => 'nullable|string',
            'thursday' => 'nullable|string',
            'friday' => 'nullable|string',
        ]);

        $doctor = Doctor::findOrFail($id);

        // Ensure the schedule exists
        DoctorSchedule::updateOrCreate(
            ['doctor_id' => $doctor->id], // Search condition
            $validated // Data to update or create
        );

        return redirect()->route('schedule.list')->with('success', 'Schedule updated successfully.');
    }


}
