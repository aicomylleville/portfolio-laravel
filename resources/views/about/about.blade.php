@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">about me</h2>
        <h3 class="h2">To be a creator who makes beautiful software.</h3>
        <p>I'm in love with software that isn't only functional but also looks good. Less is more is my motive and I strive to be the best that I can be.</p>
    </section>

    <div class="part">
        <h4 class="h3">profile</h4>
        <div class="content">
            <img src="{{ asset('images/me.png') }}" alt="me" title="me">
            <div class="text">
                <h5 class="h4">Aico Mylleville</h5>
                <p>
                    I'm a Software Engineer student with a passion for full-stack development. Always enthousiastic to learn more.
                </p>

                <h5 class="h4">location</h5>
                <p>Belgium - Ghent</p>

                <h5 class="h4">contact details</h5>
                <p><a href="mailto:hello@aicomylleville.be">hello@aicomylleville.be</a></p>
                <p><a href="tel:+32492629852">+32 492 62 98 52</a></p>

                <h5 class="h4">socials</h5>
                <p><a href="https://www.linkedin.com/in/aicomylleville/" target="_blank">LinkedIn</a></p>
                <p><a href="https://github.com/aicomylleville" target="_blank">Github</a></p>
            </div>
        </div>
    </div>

    <div class="part">
        <h4 class="h3">skills</h5>

        <h5 class="h4">coding</h5>
        <p>Laravel</p>
        <p>Java</p>
        <p>JavaScript</p>
        <p>VueJS</p>
        <p>GO</p>
        <p>HTML, (S)CSS</p>
        <p>(No)SQL</p>

        <h5 class="h4">tools</h5>
        <p>Git</p>
        <p>Figma</p>
        <p>Adobe</p>
        <p>IDEs</p>

        <h5 class="h4">languages</h5>
        <p><span>Dutch:</span> native</p>
        <p><span>English:</span> excellent</p>
        <p><span>French:</span> mediocre</p>
    </div>

    <div class="part">
        <h4 class="h3">experience</h4>

        <h5 class="h4">student job</h5>
        <p class="small">march 2023 - present</p>
        <p class="bold">o2o, Ghent</p>
        <p>Full-stack development and integration of a website in Laravel and VueJS. Also helped the design operations team with UX/UI tasks.</p>

        <h5 class="h4">internship</h5>
        <p class="small">september 2022 - december 2022</p>
        <p class="bold">Liantis, Brugge</p>
        <p>Full-stack development and integration of a website in Spring Boot Java and Angular</p>

        <h5 class="h4">student job</h5>
        <p class="small">september 2014 - februari 2023</p>
        <p class="bold">Different companies, Ghent & Ypres</p>
        <p>From delivery driver to IT employee, gained as much experience as possible in the working world.</p>
    </div>

    <div class="part">
        <h4 class="h3">education</h4>

        <h5 class="h4">bachelor, software engineer</h5>
        <p class="small">september 2019 - present</p>
        <p class="bold">Howest, Brugge</p>
    </div>

    <a href="{{ asset('files/cv_aico-mylleville.pdf') }}" class="button" download>Download my resume</a>

@endsection
