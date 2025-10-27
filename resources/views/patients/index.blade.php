@extends('layouts.app')
@section('title','Patients')
@section('content')
<div style="display:flex;justify-content:space-between;align-items:center">
  <h2>Patients</h2>
  <div class="actions"><a href="{{ route('patients.create') }}" class="btn btn-success">New Patient</a></div>
</div>

<table>
  <thead>
    <tr><th>#</th><th>Name</th><th>Phone</th><th>Email</th><th>Appointments</th><th>Actions</th></tr>
  </thead>
  <tbody>
    @forelse($patients as $p)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->last_name }}, {{ $p->first_name }}</td>
        <td>{{ $p->phone }}</td>
        <td>{{ $p->email }}</td>
        <td>{{ $p->appointments()->count() }}</td>
        <td>
          <a class="btn btn-secondary" href="{{ route('patients.show',$p) }}"><i class="fa fa-eye"></i> View</a>
          <a class="btn btn-success" href="{{ route('patients.edit',$p) }}"><i class="fa fa-edit"></i> Edit</a>
          <form style="display:inline" action="{{ route('patients.destroy',$p) }}" method="POST" onsubmit="return confirm('Delete this patient?')">
            @csrf @method('DELETE')
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="6">No patients yet.</td></tr>
    @endforelse
  </tbody>
</table>

<div style="margin-top:12px">{{ $patients->links() }}</div>
@endsection
