@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">aico mylleville<br> <span>portfolio site.</span></h2>
        <p>Software engineer based in Belgium - Ghent</p>
    </section>

    <section id="projects">
        <div class="project">
            <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
            <div class="text">
                <h5 class="h4">Frile</h5>
                <p>E-commerce site</p>
                <p>Frile is an artist who creates greeting cards and sells them online and in store. This is the website I made for her to sell her beautiful products.</p>
                <a href="#" class="button">More about Frile</a>
            </div>
        </div>
        <div class="project">
            <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
            <div class="text">
                <h5 class="h4">Frile</h5>
                <p>E-commerce site</p>
                <p>Frile is an artist who creates greeting cards and sells them online and in store. This is the website I made for her to sell her beautiful products.</p>
                <a href="#" class="button">More about Frile</a>
            </div>
        </div>
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
