@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">Create portfolio</h2>
    <h3 class="h2">New portfolio, let's go!</h3>
</section>

<section>
    @if($errors->any())
        <h1>There are errors!</h1>
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name" class="h4">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" autocomplete="off">
        </div>

        <div>
            <label for="type" class="h4">Type</label>
            <input type="text" name="type" id="type" placeholder="Type" autocomplete="off">
        </div>

        <div>
            <label for="description" class="h4">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" autocomplete="off"></textarea>
        </div>

        <div>
            <label for="image" class="h4">Image</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg">
        </div>

        <div>
            <label for="site_url" class="h4">Site URL</label>
            <input type="text" name="site_url" id="site_url" placeholder="URL" autocomplete="off">
        </div>

        <div>
            <label for="github_url" class="h4">Github URL</label>
            <input type="text" name="github_url" id="github_url" placeholder="URL" autocomplete="off">
        </div>

        <div>
            <label for="responsibility" class="h4">Responsibility</label>
            <input type="text" name="responsibility" id="responsibility" placeholder="Responsibility" autocomplete="off">
        </div>

        <div>
            <label for="production_time" class="h4">Production time</label>
            <input type="text" name="production_time" id="production_time" placeholder="Time" autocomplete="off">
        </div>

        <div>
            <label for="technology" class="h4">Technology used</label>
            <input type="text" name="technology" id="technology" placeholder="Technology" autocomplete="off">
        </div>

        <div>
            <label for="tools" class="h4">Tools used</label>
            <input type="text" name="tools" id="tools" placeholder="Tools" autocomplete="off">
        </div>

        <input type="submit" value="Post">
    </form>
</section>

@endsection