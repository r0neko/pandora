@extends('utils.page')
@section('title', 'Login')
@section('content')
    <form method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2">Authenticate</button>
        <small>Are you new around here? Click here to <a href="{{ route('register') }}">register!</a></small>
    </form>
@endsection
