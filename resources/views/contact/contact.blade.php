@extends('layouts.app')

@section('title')
    <h1 data-page="contact"><a href="/">aicoMylleville</a><span>.contact()</span></h1>
@endsection

@section('content')

<main>
    <section id="contact">
        <h2>I would love to hear from you!</h2>

        <form action="{{ route('contact.mail') }}" method="post">
            @csrf

            <label for="name">_name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">_email:</label>
            <input type="email" name="email" id="email" required>

            <label for="subject">_subject:</label>
            <input type="text" name="subject" id="subject" required>

            <label for="message">_message:</label>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>

            <input class="button primary" type="submit" value="Send">
        </form>
        <ul>
            <li><a href="mailto: hello@aicomylleville.be">hello@aicomylleville.be</a></li>
            <li><a href="tel: +32492629852">+32 492 62 98 52</a></li>
            <li><a href="https://www.linkedin.com/in/aicomylleville/"><img src="{{ asset('assets/icons/linkedin-footer.svg') }}" alt="linkedin" title="linkedin"></a><a href="https://github.com/AicoMylleville"><img src="{{ asset('assets/icons/github-footer.svg') }}" alt="github" title="github"></a></li>
        </ul>
    </section>
</main>

@endsection
