@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">blog</h2>
    <h3 class="h2">My interests.</h3>
</section>

<section id="blogs">
    <div class="blog">
        <div class="text">
            <h5 class="h4">Locked Shields 2022</h5>
            <p>25/01/2023</p>
        </div>
        <img src="{{ asset('images/me.jpg') }}" alt="">
    </div>
    <div class="blog">
        <div class="text">
            <h5 class="h4">Locked Shields 2022</h5>
            <p>25/01/2023</p>
        </div>
        <img src="{{ asset('images/me.jpg') }}" alt="">
    </div>
</section>

<a href="{{ route('about') }}" class="button">More about me</a>

@endsection
