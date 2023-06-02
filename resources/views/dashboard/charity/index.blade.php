@extends('dashboard.layout.main')

@section('title')
    Charity
@endsection

@section('header')
    All Charities
@endsection

@section('content')
    <!-- Notifikasi menggunakan flash session data -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <a href="/charity/create" class="btn btn-success btn-sm">Add Charity</a>
    <br>
    <br>
    <thead>
        <tr>
            <th>Charity Name</th>
            <th>Type</th>
            <th>Category</th>
            <th>Location</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($charity as $charity)
            <tr>
                <td>{{ $charity->charity_title }}</td>
                <td>{{ $charity->type->type_name }}</td>
                <td>{{ $charity->category->category_name }}</td>
                <td>{{ $charity->charity_location }}</td>
                <td>{{ $charity->charity_date }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin?');" action="/charity/delete/{{ $charity->id }}"
                        method="POST">

                        <a href="/charity/edit/{{ $charity->id }}" class="btn btn-warning btn-sm">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
@endsection
