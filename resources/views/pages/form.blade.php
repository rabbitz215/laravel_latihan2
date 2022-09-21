@extends('layouts.dashboard')

@section('content')
    <h1>Students Input</h1>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <div class="text-muted text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-select">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender')
                <div class="text-muted text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" class="form-control" cols="30" rows="5"></textarea>
            @error('address')
                <div class="text-muted text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="major" class="form-label">Major</label>
            <select name="major" class="form-select">
                <option value="Informatic Computer">Informatic Computer</option>
                <option value="Accounting">Accounting</option>
                <option value="Office Management">Office Management</option>
            </select>
            @error('major')
                <div class="text-muted text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date_birth" class="form-label">Date Birth</label>
            <input type="date" class="form-control" name="date_birth">
            @error('date_birth')
                <div class="text-muted text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
