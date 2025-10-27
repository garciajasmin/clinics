@extends('layouts.app')
@section('title','Create Appointment')
@section('content')
<div style="background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);max-width:600px;">
  <h2 style="color:#262345ff;margin-top:0;margin-bottom:20px;">New Appointment</h2>

  @if($errors->any())
    <div style="background:#ffeef0;border-left:4px solid #262345ff,2828;padding:10px;border-radius:4px;margin-bottom:15px;">
      <ul style="margin:0;padding-left:18px;">
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('appointments.store') }}">
    @csrf

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Patient</label>
      <select name="patient_id" required style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
        <option value="">-- Select patient --</option>
        @foreach($patients as $p)
          <option value="{{ $p->id }}" {{ request('patient_id') == $p->id ? 'selected' : '' }}>
            {{ $p->last_name }}, {{ $p->first_name }}
          </option>
        @endforeach
      </select>
    </div>

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Scheduled At</label>
      <input type="datetime-local" 
             name="scheduled_at" 
             value="{{ old('scheduled_at') }}" 
             required
             style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
    </div>

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Reason</label>
      <input name="reason" 
             value="{{ old('reason') }}" 
             style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
    </div>

    <div style="margin-bottom:12px;">
      <label style="font-weight:bold;">Status</label>
      <select name="status" style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
        <option value="scheduled" {{ old('status')=='scheduled' ? 'selected':'' }}>Scheduled</option>
        <option value="done" {{ old('status')=='done' ? 'selected':'' }}>Done</option>
        <option value="canceled" {{ old('status')=='canceled' ? 'selected':'' }}>Canceled</option>
      </select>
    </div>

    <div style="margin-top:20px;">
      <button class="btn btn-success" type="submit">
        <i class="fa fa-save"></i> Save
      </button>
      <a class="btn btn-secondary" href="{{ route('appointments.index') }}">
        <i class="fa fa-times"></i> Cancel
      </a>
    </div>
  </form>
</div>
@endsection
