@extends('layouts.app')
@section('title','Edit Patient')
@section('content')
  <h2 style="color:#262345ff;margin-bottom:20px">Edit Patient</h2>

  <form method="POST" action="{{ route('patients.update',$patient) }}">
    @csrf
    @method('PUT')

    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name',$patient->first_name) }}">

    <label for="last_name">Last name</label>
    <input type="text" name="last_name" id="last_name" value="{{ old('last_name',$patient->last_name) }}">

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone',$patient->phone) }}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email',$patient->email) }}">

    <label for="dob">Date of birth</label>
    <input type="date" name="dob" id="dob" value="{{ old('dob',$patient->dob) }}">

    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
    <a href="{{ route('patients.index') }}" class="btn btn-secondary"><i class="fa fa-times"></i> Cancel</a>
  </form>
@endsection
