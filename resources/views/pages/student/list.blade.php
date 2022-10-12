@extends('layouts.dashboard')

@section('content')
    @if ($message = Session::get('notif'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">Input</a>
    <form class="row g-3" action="{{ route('student.index') }}" method="GET">
        <div class="col-auto">
            <select name="filter" id="filter" class="form-select">
                <option value="">All</option>
                @foreach ($majors as $major)
                    <option value="{{ $major->id }}" {{ request('filter') == $major->id ? 'selected' : '' }}>
                        {{ $major->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <label for="search" class="visually-hidden"></label>
            <input type="text" name="search" class="form-control" id="search" placeholder="Search"
                value="{{ request('search') }}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Cari</button>
        </div>
    </form>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Major</th>
                <th scope="col">Date Birth</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['gender'] == 'female' ? 'Female' : 'Male' }}</td>
                    <td>{{ $item['address'] }}</td>
                    <td>{{ $item->major->name }}</td>
                    <td>{{ $item->date_birth }}</td>
                    <td><img src="/storage/{{ $item->image }}" alt="" width="75px"></td>
                    <td>
                        <a href="{{ route('student.edit', ['student' => $item->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('student.destroy', ['student' => $item->id]) }}" class="d-inline"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
@endsection
