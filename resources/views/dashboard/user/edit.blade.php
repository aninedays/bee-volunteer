@extends('dashboard.layout.main')

@section('title')
    Edit User
@endsection

@section('header')
    Edit User
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header">Edit User</div>
            <div class="card-body">
                <form action="/user/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" id="user_name" name="user_name" class="form-control" value="{{ $user->user_name }}">

                        @if ($errors->has('user_name'))
                            <div class="text-danger">
                                {{ $errors->first('user_name') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="text" id="user_email" name="user_email" class="form-control" value="{{ $user->user_email }}">

                        @if ($errors->has('user_email'))
                            <div class="text-danger">
                                {{ $errors->first('user_email') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="user_role">User Role</label>
                        <select name="user_role" required id="user_role" class="form-control">
                            <option value="user_role">Admin</option>
                            <option value="user_role">Organization</option>
                            <option value="user_role">Volunteer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="user_address">Address</label>
                        <input type="text" id="user_address" name="user_address" class="form-control" value="{{ $user->user_address }}">

                        @if ($errors->has('user_address'))
                            <div class="text-danger">
                                {{ $errors->first('user_address') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="user_phone">User Phone</label>
                        <input type="text" id="user_phone" name="user_phone" class="form-control" value="{{ $user->user_phone }}">

                        @if ($errors->has('user_phone'))
                            <div class="text-danger">
                                {{ $errors->first('user_phone') }}

                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="user_dob">Date of Birth</label>
                        <input type="date" id="user_dob" name="user_dob" class="form-control" value="{{ $user->user_dob }}">
                    </div>

                    <button type="submit" class="btn btn-primary float-right" value="SIMPAN">Update</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
