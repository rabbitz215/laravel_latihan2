@extends('layouts.dashboard')

@section('content')
    <h1>{{ $student->id ? 'Edit Data' : 'Create Data' }}</h1>
    @if ($student->id)
        <form action="{{ route('student.update', ['student' => $student->id]) }}" method="POST">
            @method('PUT')
        @else
            <form action="{{ route('student.store') }}" method="POST">
    @endif
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
        @error('name')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" class="form-select">
            <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
        </select>
        @error('gender')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea name="address" class="form-control" cols="30" rows="5">{{ $student->address }}</textarea>
        @error('address')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="major" class="form-label">Major</label>
        <select name="major_id" class="form-select">
            @foreach ($majors as $major)
                <option value="{{ $major->id }}" {{ $student->major_id == $major->id ? 'selected' : '' }}>
                    {{ $major->name }}</option>
            @endforeach
        </select>
        @error('major')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date_birth" class="form-label">Date Birth</label>
        <input type="date" class="form-control" name="date_birth" value="{{ $student->date_birth }}">
        @error('date_birth')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
