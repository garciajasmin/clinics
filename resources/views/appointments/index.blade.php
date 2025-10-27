@extends('layouts.app')
@section('title','Appointments')
@section('content')
<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px">
  <h2 style="color:#262345ff;">Appointments</h2>
  <div class="actions">
    <a href="{{ route('appointments.create') }}" class="btn btn-success">
      + New Appointment
    </a>
  </div>
</div>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Patient</th>
      <th>Scheduled</th>
      <th>Reason</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($appointments as $a)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $a->patient->last_name }}, {{ $a->patient->first_name }}</td>
        <td>{{ $a->scheduled_at }}</td>
        <td>{{ $a->reason }}</td>
        <td>{{ $a->status }}</td>
        <td>
          <a href="{{ route('appointments.show',$a) }}" class="btn btn-success">
            <i class="fa fa-eye"></i> View
          </a>
          <a href="{{ route('appointments.edit',$a) }}" class="btn btn-secondary">
            <i class="fa fa-edit"></i> Edit
          </a>
          <form style="display:inline" action="{{ route('appointments.destroy',$a) }}" method="POST" onsubmit="return confirm('Delete appointment?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-trash"></i> Delete
            </button>
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" style="text-align:center;">No appointments yet.</td>
      </tr>
    @endforelse
  </tbody>
</table>

<div style="margin-top:16px;">
  {{ $appointments->links() }}
</div>
@endsection
