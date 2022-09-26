@extends('layouts.app')

@section('title')
    <h1 data-page="blog"><a href="/">aicoMylleville</a><span>.blog()</span></h1>
@endsection

@section('content')

<main data-page="blogs">
    <section id="filter">
        <ul>
            <li><a href="{{ route('blog.index', ['filter' => 'all']) }}" class="selected" data-id="all">All</a></li>
            <li><a href="{{ route('blog.index', ['filter' => 'ti']) }}" data-id="ti">TI</a></li>
            <li><a href="{{ route('blog.index', ['filter' => 'personal']) }}" data-id="personal">Personal</a></li>
        </ul>
        @auth
            @if(auth()->user()->type == "admin")
                <a href="{{ route('blog.create') }}" class="button" id="create">Create</a>
            @endif
        @endauth
    </section>
    <section id="blogs">
        @foreach ($blogs as $blog)
            <a href="{{ route('blog.show', $blog -> id) }}" class="hiddenBlog">
                <article>
                    <div>
                        <h2>{{ $blog -> title }}</h2>
                        <h3>{{ $blog -> description }}</h3>
                        <h4>{{ $blog -> date }}</h4>
                    </div>
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
                </article>
            </a>
        @endforeach
    </section>
</main>

@endsection
