@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">aico mylleville<br> <span>portfolio site.</span></h2>
        <p>Software engineer based in Belgium - Ghent</p>
    </section>

    <section id="portfolios">
        @if (sizeof($portfolios) == 0)
            <div class="portfolio">
                <img src="{{ asset('images/no_portfolio.webp') }}" alt="No portfolios yet" title="No portfolios yet">
                <div class="text">
                    <h5 class="h4">No portfolios yet</h5>
                    <p>I'm working on it!</p>
                    <a href="{{ route('blog.index') }}" class="button">Check out my blogs</a>
                </div>
            </div>
        @endif
        @foreach ($portfolios as $portfolio)
            <div class="portfolio">
                <img src="{{ asset($portfolio -> image) }}" alt="{{ $portfolio -> name }}" title="{{ $portfolio -> name }}">
                <div class="text">
                    <h5 class="h4">{{ $portfolio -> name }}</h5>
                    <p>{{ $portfolio -> type }}</p>
                    <a href="{{ route('portfolio.show', ['name' => $portfolio -> name]) }}" class="button">More about {{ $portfolio -> name }}</a>
                </div>
            </div>
        @endforeach
    </section>

    <section class="about">
        <h3 class="h2">Aico Mylleville</h3>
        <p>
            I'm a Software Engineer student with a passion for full-stack development. Always enthousiastic to learn more.
        </p>
        <a href="{{ route('about') }}" class="button">About me</a>
    </section>

    <section class="contact">
        <div>
            <img src="{{ asset('images/me.jpg') }}" alt="me" title="me">
            <p>Please feel free to contact me by e-mail or <a href="{{ route('contact') }}">form</a>.</p>
        </div>
        <a href="mailto:hello@aicomylleville.be">hello@aicomylleville.be <img src="{{ asset('assets/icons/arrow-up.png') }}" alt=""></a>
    </section>

@endsection
