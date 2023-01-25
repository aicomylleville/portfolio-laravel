@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">aico mylleville <span>portfolio site.</span></h2>
        <p>Software engineer based in Belgium - Ghent</p>
    </section>

    <section id="projects">
        <div class="project">
            <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
            <div class="text">
                <h5 class="h4">Frile</h5>
                <p>E-commerce site</p>
            </div>
        </div>
    </section>

    <div class="about">
        <h3 class="h2">Aico Mylleville</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis error amet quisquam officiis aliquid atque debitis consequatur temporibus similique.</p>
        <a href="{{ route('about') }}" class="button">About me</a>
    </div>

    <div class="contact">
        <div>
            <img src="{{ asset('images/me.jpg') }}" alt="me" title="me">
            <p>Please feel free to contact me by e-mail or <a href="{{ route('contact') }}">form</a>.</p>
        </div>
        <a href="mailto:hello@aicomylleville.be">hello@aicomylleville.be <img src="{{ asset('assets/icons/arrow-up.png') }}" alt=""></a>
    </div>

@endsection
