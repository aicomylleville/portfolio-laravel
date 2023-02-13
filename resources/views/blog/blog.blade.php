@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">blog</h2>
    <h3 class="h2">My interests.</h3>
</section>

<section id="blogs">
    @foreach ($blogs as $blog)
        <a href="{{ route('blog.show', $blog -> id) }}" class="blog">
            <div class="text">
                <h5 class="h4">{{ $blog -> title }}</h5>
                <p>{{ $blog -> date }}</p>
            </div>
            <img src="{{ asset($blog -> image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
        </a>
    @endforeach
</section>

<a href="{{ route('about') }}" class="button">More about me</a>

@endsection
