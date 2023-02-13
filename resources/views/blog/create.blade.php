@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">Create blog</h2>
    <h3 class="h2">Woop woop, new event!</h3>
</section>

<section>
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

        <div>
            <label class="h4" for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" autocomplete="off">
        </div>

        <div>
            <label class="h4" for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="description" autocomplete="off">
        </div>

        <div>
            <label class="h4" for="type">Type</label>
            <select name="type" id="type">
                <option value="ti">TI</option>
                <option value="personal">Personal</option>
            </select>
        </div>

        <div>
            <label for="image" class="h4">Image</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg">
        </div>

        <div>
            <label for="article" class="h4">Article</label>
            <textarea name="article" id="article" cols="30" rows="10" placeholder="Article" autocomplete="off"></textarea>
        </div>

        <input type="submit" value="Post">
    </form>

</section>

@endsection
