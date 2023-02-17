@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">Admin</h2>
    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <input type="submit" value="logout">
    </form>
</section>

<section id="admin">

    <section>
        <h3 class="h3">Portfolio</h3>
        <a href="{{ route('portfolio.create') }}" class="button">Create new portfolio</a>
        @foreach ($portfolios as $portfolio)
        <article>
            <div>
                <img src="{{ asset($portfolio -> image) }}" alt="{{ $portfolio -> name }}" title="{{ $portfolio -> name }}">
                <h5 class="h4">{{ $portfolio -> name }}</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('portfolio.edit', ['id' => $portfolio -> id]) }}" class="button">Edit</a>
                <form action="{{ route('portfolio.destroy', [$portfolio -> id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </div>
        </article>
        @endforeach
    </section>
    <section>
        <h3 class="h3">Blog</h3>
        <a href="{{ route('blog.create') }}" class="button">Create new blog</a>
        @foreach ($blogs as $blog)
            <article>
                <div>
                    <img src="{{ asset($blog -> image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
                    <h5 class="h4">{{ $blog -> title }}</h5>
                </div>
                <div class="buttons">
                    <a href="{{ route('blog.edit', ['id' => $blog -> id]) }}" class="button">Edit</a>
                    <form action="{{ route('blog.destroy', [$blog -> id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </article>
        @endforeach
    </section>
</section>

@endsection
