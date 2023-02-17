@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">{{ $portfolio -> name }}</h2>
    <h3 class="h2">{{ $portfolio -> type }}</h3>
</section>

<section id="portfolio">
    <div class="part">
        <h4 class="h3">Overview</h4>
        <div class="content">
            <img src="{{ asset($portfolio -> image) }}" alt="frile" title="frile">
            <p data-article="{{ $portfolio -> name }}" class="markdown">
                {{ $portfolio -> description }}
            </p>
        </div>
    </div>

    <div class="part">
        <h4 class="h3">links</h4>

        <h5 class="h4">site url</h5>
        <p><a href="{{ $portfolio -> site_url }}">{{ $portfolio -> site_url }}</a></p>

        <h5 class="h4">github url</h5>
        <p><a href="{{ $portfolio -> github_url }}">{{ $portfolio -> github_url }}</a></p>
    </div>

    <div class="part">
        <h4 class="h3">details</h4>

        <h5 class="h4">responsibility</h5>
        <p>{{ $portfolio -> responsibility }}</p>

        <h5 class="h4">production time</h5>
        <p>{{ $portfolio -> production_time }}</p>

        <h5 class="h4">technology used</h5>
        <p>{{ $portfolio -> technology }}</p>

        <h5 class="h4">tools used</h5>
        <p>{{ $portfolio -> tools }}</p>
    </div>
</section>

@endsection
