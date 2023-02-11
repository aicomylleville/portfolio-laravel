@extends('layouts.app')

@section('content')

<section class="title">
    <h2 class="h1">Frile</h2>
    <h3 class="h2">E-commerce site</h3>
</section>

<section id="portfolio">
    <div class="part">
        <h4 class="h3">Overview</h4>
        <div class="content">
            <img src="{{ asset('images/frile.png') }}" alt="frile" title="frile">
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore explicabo error, vitae dicta quisquam voluptatum repudiandae esse quos suscipit dolore voluptate magni minima cumque! Accusantium at molestiae minus odit aspernatur.
            </p>
        </div>
    </div>

    <div class="part">
        <h4 class="h3">links</h4>
        
        <h5 class="h4">site url</h5>
        <p><a href="https://www.frile.be">https://www.frile.be</a></p>

        <h5 class="h4">github url</h5>
        <p><a href="https://www.github.com/aicomylleville/frile">https://www.github.com/aicomylleville/frile</a></p>
    </div>

    <div class="part">
        <h4 class="h3">details</h4>

        <h5 class="h4">responsibility</h5>
        <p>Design / Coding</p>

        <h5 class="h4">production time</h5>
        <p>2 weeks (2-3 hours a day)</p>

        <h5 class="h4">technology used</h5>
        <p>Laravel</p>

        <h5 class="h4">tools used</h5>
        <p>Figma / VSCode / GIT</p>
    </div>
</section>

@endsection