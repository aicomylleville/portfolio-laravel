@extends('layouts.app')

@section('title')
    <h1 data-page="blog"><a href="/">aicoMylleville</a><span>.blog()</span></h1>
@endsection

@section('content')
    <section id="createBlog">
        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" id="title">

            <label for="description">Description</label>
            <input type="text" name="description" id="description">

            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="ti">TI</option>
                <option value="personal">Personal</option>
            </select>

            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg">

            <label for="article">Article</label>
            <textarea name="article" id="article" cols="30" rows="20"></textarea>

            <input type="submit" value="Post">
        </form>
    </section>
@endsection
