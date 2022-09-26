@extends('layouts.app')

@section('title')
    <h1><a href="/">aicoMylleville</a><span>.verify()</span></h1>
@endsection

@section('content')

<main>
    <section id="verify">
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Click here to request another</button>.
        </form>
    </section>
</main>

@endsection
