@extends('layouts.app')

@section('title')
    <h1 data-page="blog"><a href="{{ route('blog.index') }}"><span>.blog(</span></a>{{ $blog -> title }}<span>)</span></h1>
@endsection

@section('content')

    <section id="updateBlog">
        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blog.update', $blog -> id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $blog -> title }}">

            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ $blog -> description }}">

            <label for="type">Type</label>
            <select name="type" id="type" value="{{ $blog -> type }}">
                <option value="ti">TI</option>
                <option value="personal">Personal</option>
            </select>

            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg">

            <label for="article">Article</label>
            <textarea name="article" id="article" cols="30" rows="20">{{ $blog -> article }}</textarea>

            <input type="submit" value="Update">
        </form>
    </section>

@endsection
