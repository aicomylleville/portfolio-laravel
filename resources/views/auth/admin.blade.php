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
        <article>
            <div>
                <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
                <h5 class="h4">Frile</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('portfolio.edit', [1]) }}" class="button">Edit</a>
                <a href="{{ route('portfolio.destroy', [1]) }}" class="button">Delete</a>
            </div>
        </article>
        <article>
            <div>
                <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
                <h5 class="h4">Frile</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('portfolio.edit', [1]) }}" class="button">Edit</a>
                <a href="{{ route('portfolio.destroy', [1]) }}" class="button">Delete</a>
            </div>
        </article>
        <article>
            <div>
                <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
                <h5 class="h4">Frile</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('portfolio.edit', [1]) }}" class="button">Edit</a>
                <a href="{{ route('portfolio.destroy', [1]) }}" class="button">Delete</a>
            </div>
        </article>
    </section>
    <section>
        <h3 class="h3">Blog</h3>
        <a href="{{ route('blog.create') }}" class="button">Create new blog</a>
        <article>
            <div>
                <img src="{{ asset('images/me.jpg') }}" alt="me" title="me">
                <h5 class="h4">Locked Shields 2022</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('blog.edit', [1]) }}" class="button">Edit</a>
                <a href="{{ route('blog.destroy', [1]) }}" class="button">Delete</a>
            </div>
        </article>
        <article>
            <div>
                <img src="{{ asset('images/me.jpg') }}" alt="me" title="me">
                <h5 class="h4">Locked Shields 2022</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('blog.edit', [1]) }}" class="button">Edit</a>
                <a href="{{ route('blog.destroy', [1]) }}" class="button">Delete</a>
            </div>
        </article>
        <article>
            <div>
                <img src="{{ asset('images/me.jpg') }}" alt="me" title="me">
                <h5 class="h4">Locked Shields 2022</h5>
            </div>
            <div class="buttons">
                <a href="{{ route('blog.edit', [1]) }}" class="button">Edit</a>
                <a href="{{ route('blog.destroy', [1]) }}" class="button">Delete</a>
            </div>
        </article>
    </section>
</section>

@endsection