@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">blog</h2>
    <h3 class="h2">My interests.</h3>
</section>


<section id="filter">
    <ul>
        <li><a href="{{ route('blog.index', ['filter' => 'all']) }}" class="selected" data-filter="all">All</a></li>
        <li><a href="{{ route('blog.index', ['filter' => 'ti']) }}" data-filter="ti">TI</a></li>
        <li><a href="{{ route('blog.index', ['filter' => 'personal']) }}" data-filter="personal">Personal</a></li>
    </ul>
</section>

@if (sizeof($blogs) == 0)
    <section>
        <h2 class="h3">No blogs yet</h2>
        <h3 class="h4">They're in the making, I promise!</h3>
    </section>
@else
<section id="blogs">
    @foreach ($blogs as $blog)
        <a href="{{ route('blog.show', $blog -> id) }}" class="blog">
            <div class="text">
                <h5 class="h4">{{ $blog -> title }}</h5>
                <p>{{ $blog -> date }}</p>
            </div>
            <img src="{{ asset($blog -> image) }}" alt="{{ $blog -> title }}" title="{{ $blog -> title }}">
        </a>
    @endforeach
</section>
@endif


<a href="{{ route('about') }}" class="button">More about me</a>

@endsection
