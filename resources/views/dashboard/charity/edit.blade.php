@extends('dashboard.layout.main')

@section('title')
    Edit Charity
@endsection

@section('header')
    Edit Charity
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header">Edit Charity</div>
            <div class="card-body">
                <form action="/charity/update/{{ $charity->id }}" method="POST" enctype="multipart/form-data">
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
                        <label for="charity_title">Charity Name</label>
                        <input type="text" id="charity_title" name="charity_title" class="form-control" value="{{ $charity->charity_title }}">

                        @if ($errors->has('charity_title'))
                            <div class="text-danger">
                                {{ $errors->first('charity_title') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type_id" required id="type_id" class="form-control">
                            @foreach ($type as $type)
                            <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="charity_img" name="charity_img" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="charity_desc">Description</label>
                        <textarea name="charity_desc" id="charity_desc" cols="30" rows="5" class="form-control">{{ $charity->charity_desc }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="charity_excerpt">Excerpt</label>
                        <input type="text" id="charity_excerpt" name="charity_excerpt" class="form-control" value="{{ $charity->charity_excerpt }}">

                        @if ($errors->has('charity_excerpt'))
                            <div class="text-danger">
                                {{ $errors->first('charity_excerpt') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="charity_location">Location</label>
                        <input type="text" id="charity_location" name="charity_location" class="form-control" value="{{ $charity->charity_location }}">

                        @if ($errors->has('charity_location'))
                            <div class="text-danger">
                                {{ $errors->first('charity_location') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date">Charity Date</label>
                        <input type="date" id="charity_date" name="charity_date" class="form-control" value="{{ $charity->charity_date }}">
                    </div>

                    <button type="submit" class="btn btn-primary float-right" value="SIMPAN">Update</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
