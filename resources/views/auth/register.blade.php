@extends('utils.page')
@section('title', 'Register')
@section('content')
    <div class="alert alert-info">
        <strong>Attention!</strong>
        This service is under HEAVY DEVELOPMENT.<br />
        Expect sudden disconnections and missing features.<br />
        <br />
        <small>
            Please understand that it's kinda hard maintaining this by yourself. There are some things that
            have bigger priority than this project, like: university, family and work. Expect delayed
            updates or new features.
        </small>
    </div>
    <form method="post">
        @csrf
        <div class="row g-2 mb-4">
            <div class="col-md-6">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-md-6">
                <label for="password_repeat" class="form-label">Repeat the password</label>
                <input type="password" class="form-control" id="password_repeat" name="password_repeat">
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
    <style>
        .nm-content-card {
            width: 50rem;
        }
    </style>
@endsection
