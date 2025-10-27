<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointment;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPatients = Patient::count();
        $totalAppointments = Appointment::count();

        // upcoming — appointments scheduled in next 7 days
        $now = Carbon::now();
        $upcoming = Appointment::where('scheduled_at', '>=', $now)
                       ->where('scheduled_at', '<=', $now->copy()->addDays(7))
                       ->with('patient')
                       ->orderBy('scheduled_at')
                       ->get();

        return view('dashboard.index', compact('totalPatients', 'totalAppointments', 'upcoming'));
    }
}
