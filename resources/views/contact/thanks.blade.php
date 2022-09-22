@extends('layouts.app')

@section('title')
    <h1 data-page="contact"><a href="/">aicoMylleville</a><span><a href="{{ route('contact') }}" class="theme">.contact</a>(</span><span id="thanks">'Thank you!'</span><span>)</span></h1>
@endsection

@section('content')
<section id="thankYou">
    <h2>Thank you {{ $name }}</h2>
    <p>I will get back to you as soon as possible!</p>
</section>

@endsection
