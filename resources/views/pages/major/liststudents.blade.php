@extends('layouts.dashboard')

@section('content')
    <h1>Jurusan {{ $majors->name }}</h1>
    <h5>Jumlah Siswa : {{ $majors->students->count() }}</h5>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Students Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($majors->students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
