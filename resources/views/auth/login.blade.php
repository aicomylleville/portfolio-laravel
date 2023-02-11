@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">Login</h2>
    </section>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        
        <div>
            <label for="email" class="h4">E-mail</label>
            <input type="email" name="email" id="email" placeholder="john.doe@mail.com">
        </div>
        <div>
            <label for="password" class="h4">Password</label>
            <input type="password" name="password" id="password" placeholder="A very secret password">
        </div>
        <input type="submit" value="Login">
        
    </form>

@endsection
