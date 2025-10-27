@extends('layouts.app')
@section('title','Appointment')
@section('content')
<div style="background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);max-width:600px;">
  <h2 style="color:#262345ff;margin-top:0;margin-bottom:20px;">
    Appointment #{{ $appointment->id }}
  </h2>

  <p><strong>Patient:</strong> 
    <a href="{{ route('patients.show', $appointment->patient) }}" style="color:#007bff;text-decoration:none;">
      {{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}
    </a>
  </p>
  <p><strong>Scheduled:</strong> {{ $appointment->scheduled_at }}</p>
  <p><strong>Reason:</strong> {{ $appointment->reason }}</p>
  <p><strong>Status:</strong> {{ $appointment->status }}</p>

  <div style="margin-top:20px;">
    <a class="btn btn-success" href="{{ route('appointments.edit', $appointment) }}">
      <i class="fa fa-edit"></i> Edit
    </a>
    <a class="btn btn-secondary" href="{{ route('appointments.index') }}">
      <i class="fa fa-arrow-left"></i> Back
    </a>
  </div>
</div>
@endsection
