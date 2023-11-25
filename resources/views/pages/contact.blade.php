@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="contact-section">
    <h1>Contact Me</h1>
    <p>Feel free to reach out to me using the form below:</p>

    <form action="/contact" method="post" class="contact-form">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
