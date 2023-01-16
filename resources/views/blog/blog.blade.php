@extends('layouts.app')

@section('title')
    <h1 data-page="blog"><a href="/">aicoMylleville</a><a href="{{ route('blog.index') }}"><span>.blog()</span></a></h1>
@endsection

@section('content')

<main data-page="blogs">
    <section id="blogs">
        <div id="filter">
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
        </div>
        <div id="articles">
            @foreach ($blogs as $blog)
            <a href="{{ route('blog.show', $blog -> id) }}" class="hiddenBlog">
                <article>
                    <div class="text">
                        <div class="title">
                            <h3 class="b">{{ $blog->type }}</h3>
                            <h2 class="h4">{{ $blog -> title }}</h2>
                        </div>
                        <p>{{ $blog -> description }}</p>
                        <h4 class="s">{{ $blog -> date }}</h4>
                    </div>
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
                </article>
            </a>
            @endforeach
        </div>
    </section>

    <section >

    </section>
</main>

@endsection
