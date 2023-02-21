@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">404</h2>
        <h3 class="h2">Oops! <br> Page not found</h3>
    </section>

    <section>
        <a href="{{ route('home.index') }}" class="button">Take me home</a>
    </section>

@endsection
