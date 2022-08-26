@if (Route::has('login'))
    <div class="nm-nav">
        @auth
            <a>Welcome back, {{ Auth::user()->name }}</a>
            <a href="{{ route('home') }}" @if (Route::is('home')) class="active" @endif>Home</a>
            <a href="{{ route('download') }}" @if (Route::is('download')) class="active" @endif>Download</a>
            <a href="{{ route('logout') }}" @if (Route::is('logout')) class="active" @endif>Logout</a>
        @else
            <a href="{{ route('login') }}" @if (Route::is('login')) class="active" @endif>Login</a>
            <a href="{{ route('register') }}" @if (Route::is('register')) class="active" @endif>Register</a>
        @endauth
    </div>
@endif
