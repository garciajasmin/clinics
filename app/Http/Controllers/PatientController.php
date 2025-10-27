<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest()->paginate(10);
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email'=>'nullable|email',
            'phone'=>'nullable|string|max:50',
            'dob'=>'nullable|date',
        ]);

        Patient::create($request->all());
        return redirect()->route('patients.index')->with('success','Patient created.');
    }

    public function show(Patient $patient)
    {
        // eager load appointments
        $patient->load('appointments');
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email'=>'nullable|email',
            'phone'=>'nullable|string|max:50',
            'dob'=>'nullable|date',
        ]);

        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success','Patient updated.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success','Patient deleted.');
    }
}
