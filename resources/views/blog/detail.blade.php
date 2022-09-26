@extends('layouts.app')

@section('title')
    <h1 data-page="blog"><span><a href="{{ route('blog.index') }}" class="theme">.blog</a>(</span><span id="blogTitle">'{{ $blog -> title }}'</span><span>)</span></h1>
@endsection

@section('content')

<main data-page="blog">
    <section id="blog">
        <h2 class="title">{{ $blog -> description }}</h2>
        <img src="{{ asset($blog -> image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
        <article>
            {{ $blog -> article }}
        </article>
        <p class="date">{{ $blog -> date }}</p>
        @auth
            @if(auth()->user()->type == "admin")
                <div class="buttons">
                    <a href="{{ route('blog.edit', $blog -> id) }}" class="button" id="edit">Edit</a>
                    <form action="{{ route('blog.destroy', $blog -> id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            @endisset
        @endauth
    </section>
</main>


@endsection
