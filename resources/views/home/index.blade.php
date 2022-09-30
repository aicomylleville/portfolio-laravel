@extends('layouts.app')

@section('title')
    <h1 data-page="home"><a href="/">aicoMylleville</a></h1>
@endsection

@section('content')

<main>
    <section id="home">
        <h2 class="h1">Hello World!</h2>
        <h3 class="h3">My name is Aico Mylleville and I'm a student software engineer.</h3>
        <ul>
            <li><a href="" class="button primary">About me</a></li>
            <li><a href="{{ route('contact') }}" class="button secondary">Contact me</a></li>
        </ul>
    </section>
</main>

@endsection
