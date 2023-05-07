@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">contact</h2>
        <h3 class="h2">Let's work together.</h3>
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

        <form action="{{ route('contact.mail') }}" method="POST">
            @csrf

            <div class="input">
                <label class="h4" for="firstname">firstname</label>
                <input type="text" id="firstname" name="firstname" placeholder="John" autocomplete="off">
            </div>
            <div class="input">
                <label class="h4" for="lastname">lastname</label>
                <input type="text" id="lastname" name="lastname" placeholder="Doe" autocomplete="off">
            </div>
            <div class="input">
                <label class="h4" for="email">e-mail</label>
                <input type="email" id="email" name="email" placeholder="john.doe@mail.com" autocomplete="off">
            </div>
            <div class="input">
                <label class="h4" for="subject">subject</label>
                <input type="text" id="subject" name="subject" placeholder="Example subject" autocomplete="off">
            </div>
            <div class="input">
                <label class="h4" for="message">message</label>
                <textarea name="message" id="message" cols="30" rows="6" placeholder="Example message"></textarea>
            </div>
            <input type="submit" value="Send">
        </form>
    </section>

    <section id="details">
        <img src="{{ asset('assets/icons/arrow-down.png') }}" alt="arrow" title="arrow">

        <h5 class="h4">location</h5>
        <p>Belgium - Ghent</p>

        <h5 class="h4">contact details</h5>
        <p><a href="mailto:hello@aicomylleville.be">hello@aicomylleville.be</a></p>
        <p><a href="tel:+32492629852">+32 492 62 98 52</a></p>

        <h5 class="h4">socials</h5>
        <p><a href="https://www.linkedin.com/in/aicomylleville/" target="blank">LinkedIn</a></p>
        <p><a href="https://github.com/aicomylleville" target="blank">Github</a></p>
    </section>

@endsection
