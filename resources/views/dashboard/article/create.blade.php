@extends('dashboard.layout.main')

@section('title')
    Add Article
@endsection

@section('header')
    Add Article
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header">Create a new article</div>
            <div class="card-body">
                <form action="/article/store" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="organization">Organization</label>
                        <select name="organization_id" required id="organization_id" class="form-control">
                            @foreach ($organization as $organization)
                                <option value="{{ $organization->id }}">{{ $organization->user->user_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Article Title</label>
                        <input type="text" id="title" name="title" class="form-control">

                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>
                        <textarea name="excerpt" id="excerpt" cols="30" rows="2" class="form-control"></textarea>

                        @if ($errors->has('excerpt'))
                            <div class="text-danger">
                                {{ $errors->first('excerpt') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="body">Article Text</label>
                        <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Create Article</button>
                </form>
            </div>
        </div>
    </div>
@endsection
