@extends('dashboard.layout.main')

@section('title')
    Article
@endsection

@section('header')
    All Articles
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

    <a href="/article/create" class="btn btn-success btn-sm">Add Article</a>
    <br>
    <br>
    <thead>
        <tr>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Post Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($article as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->excerpt }}</td>
                <td>{{ $article->created_at }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin?');" action="/article/delete/{{ $article->id }}"
                        method="POST">

                        <a href="/article/edit/{{ $article->id }}" class="btn btn-warning btn-sm">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
