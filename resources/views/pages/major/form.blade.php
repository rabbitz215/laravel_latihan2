@extends('layouts.dashboard')

@section('content')
    <h1>{{ $major->id ? 'Edit Data' : 'Create Data' }}</h1>
    @if ($major->id)
        <form action="{{ route('major.update', ['major' => $major->id]) }}" method="POST">
            @method('PUT')
        @else
            <form action="{{ route('major.store') }}" method="POST">
    @endif
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Major Name</label>
        <input type="text" class="form-control" name="name" value="{{ $major->name }}">
        @error('name')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Major Description</label>
        <textarea name="description" id="" class="form-control" cols="300" rows="5">{{ $major->description }}</textarea>
        @error('description')
            <div class="text-muted text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
