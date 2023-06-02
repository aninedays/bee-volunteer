@extends('dashboard.layout.main')

@section('title')
    Edit Article
@endsection

@section('header')
    Edit Article
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header">Update this article</div>
            <div class="card-body">
                <form action="/article/update/{{ $article->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="organization">Organization</label>
                        <select name="organization_id" required id="organization_id" class="form-control">
                            @foreach ($organization as $organization)
                            <option value="{{ $organization->id }}" {{ $organization->id == $organization->id ? 'selected' : '' }}>
                                {{ $organization->user->user_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Article Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $article->title }}">

                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>
                        <textarea name="excerpt" id="excerpt" cols="30" rows="2" class="form-control">
                            {{ $article->excerpt }}
                        </textarea>

                        @if ($errors->has('excerpt'))
                            <div class="text-danger">
                                {{ $errors->first('excerpt') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="body">Article Text</label>
                        <textarea name="body" id="body" cols="30" rows="5" class="form-control">
                            {{ $article->body }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Update Article</button>
                </form>
            </div>
        </div>
    </div>
@endsection
