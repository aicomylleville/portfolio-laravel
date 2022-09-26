@extends('layouts.app')

@section('title')
    <h1><a href="/">aicoMylleville</a><span>.register()</span></h1>
@endsection

@section('content')

<main>
    <section id="register">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Name</label>
            <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            <label for="email">Email</label>
            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            <label for="password">Password</label>
            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            <input type="submit" value="Register">
        </form>
    </section>
</main>

@endsection
