@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">{{ $blog -> title }}</h2>
        <h3 class="h2">{{ $blog -> description }}</h3>
        <p>{{ $blog -> date }}</p>
    </section>

    <section id="blog">
        <img src="{{ asset($blog -> image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
        <article data-article="{{ $blog -> title }}" class="markdown">
            {{ $blog -> article }}
        </article>
    </section>

@endsection
