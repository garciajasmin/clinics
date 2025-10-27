@extends('layouts.app')
@section('title','Create Patient')
@section('content')
<div style="background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);max-width:600px;">
  <h2 style="color:#262345ff;margin-top:0;margin-bottom:20px;">New Patient</h2>

  @if($errors->any())
    <div style="background:#ffeef0;border-left:4px solid #c62828;padding:10px;border-radius:4px;margin-bottom:15px;">
      <ul style="margin:0;padding-left:18px;">
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('patients.store') }}">
    @csrf
    <div style="display:flex;gap:15px;margin-bottom:15px;">
      <div style="flex:1;">
        <label style="font-weight:bold;">First Name</label>
        <input name="first_name" 
               value="{{ old('first_name') }}" 
               required
               style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
      </div>
      <div style="flex:1;">
        <label style="font-weight:bold;">Last Name</label>
        <input name="last_name" 
               value="{{ old('last_name') }}" 
               required
               style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
      </div>
    </div>

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Phone</label>
      <input name="phone" 
             value="{{ old('phone') }}" 
             style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
    </div>

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Email</label>
      <input type="email" 
             name="email" 
             value="{{ old('email') }}" 
             style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
    </div>

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Date of Birth</label>
      <input type="date" 
             name="dob" 
             value="{{ old('dob') }}" 
             style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
    </div>

    <div style="margin-top:20px;">
      <button class="btn btn-success" type="submit">
        <i class="fa fa-save"></i> Save
      </button>
      <a class="btn btn-secondary" href="{{ route('patients.index') }}">
        <i class="fa fa-times"></i> Cancel
      </a>
    </div>
  </form>
</div>
@endsection
