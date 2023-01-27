@extends('layouts.app')

@section('content')

    <section class="title">
        <h2 class="h1">contact</h2>
        <h3 class="h2">Let's work together.</h3>
    </section>

    <form action="#" method="POST">
        @csrf

        <div class="input">
            <label class="h4" for="firstname">firstname</label>
            <input type="text" id="firstname" name="firstname" placeholder="John">
        </div>
        <div class="input">
            <label class="h4" for="lastname">lastname</label>
            <input type="text" id="lastname" name="lastname" placeholder="Doe">
        </div>
        <div class="input">
            <label class="h4" for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="john.doe@mail.com">
        </div>
        <div class="input">
            <label class="h4" for="subject">subject</label>
            <input type="text" id="subject" name="subject" placeholder="Example subject">
        </div>
        <div class="input">
            <label class="h4" for="message">message</label>
            <textarea name="message" id="message" cols="30" rows="6" placeholder="Example message"></textarea>
        </div>
        <input type="submit" value="Send">
    </form>

    <section id="details">
        <img src="{{ asset('assets/icons/arrow-down.png') }}" alt="arrow" title="arrow">

        <h5 class="h4">location</h5>
        <p>Belgium - Ghent</p>
        
        <h5 class="h4">contact details</h5>
        <p>hello@aicomylleville.be</p>
        <p>+32 492 62 98 52</p>
        
        <h5 class="h4">socials</h5>
        <p>LinkedIn</p>
        <p>Github</p>
    </section>

@endsection
