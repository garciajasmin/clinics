<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('patient')->latest()->paginate(10);
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $patients = Patient::orderBy('last_name')->get();
        return view('appointments.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id'=>'required|exists:patients,id',
            'scheduled_at'=>'required|date',
            'reason'=>'nullable|string|max:255',
            'status'=>'nullable|string|max:50',
        ]);

        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success','Appointment created.');
    }

    public function show(Appointment $appointment)
    {
        $appointment->load('patient');
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        $patients = Patient::orderBy('last_name')->get();
        return view('appointments.edit', compact('appointment','patients'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'patient_id'=>'required|exists:patients,id',
            'scheduled_at'=>'required|date',
            'reason'=>'nullable|string|max:255',
            'status'=>'nullable|string|max:50',
        ]);

        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success','Appointment updated.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success','Appointment deleted.');
    }
}
