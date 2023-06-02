@extends('dashboard.layout.main')

@section('title')
    User
@endsection

@section('header')
    All Users
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

    {{-- <a href="/article/create" class="btn btn-success btn-sm">Add Article</a> --}}
    <br>
    <br>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user)
            <tr>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->user_role }}</td>
                <td>{{ $user->user_address }}</td>
                <td>{{ $user->user_phone }}</td>
                <td>{{ $user->user_dob }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin?');" action="/user/delete/{{ $user->id }}"
                        method="POST">

                        <a href="/user/edit/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
