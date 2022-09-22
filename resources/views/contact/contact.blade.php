@extends('layouts.app')

@section('title')
    <h1 data-page="contact"><a href="/">aicoMylleville</a><span>.contact()</span></h1>
@endsection

@section('content')
<section id="contact">
    <h2>If you have any questions or job offers, don't hesitate to send me a message!</h2>

    <form action="{{ route('contact.mail') }}" method="post">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>

        <input type="submit" value="Send">
    </form>
</section>
@endsection
