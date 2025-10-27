@extends('layouts.app')
@section('title','Patient Details')
@section('content')
    <h2>Patient: {{ $patient->first_name }} {{ $patient->last_name }}</h2>

    <p><strong>Phone:</strong> {{ $patient->phone }}</p>
    <p><strong>Email:</strong> {{ $patient->email }}</p>
    <p><strong>DOB:</strong> {{ $patient->dob }}</p>
@endsection
