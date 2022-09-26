@extends('layouts.app')

@section('title')
    <h1><a href="/">aicoMylleville</a><span>.login()</span></h1>
@endsection


@section('content')

<main>
    <section id="login">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <label for="password">Password</label>
            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <input type="submit" value="Login">

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
        </form>
    </section>
</main>

@endsection
