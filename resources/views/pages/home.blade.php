@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="welcome-section text-center">
    <div class="flex-container">
        <div class="text-container">
            <h1 class="display-4">Welcome to My Portfolio</h1>
            <p class="lead">Hi, I'm Ankon Chowdhury. I am a Software Engineer passionate about web development with
                Laravel.</p>
            <a href="/projects" class="btn btn-primary btn-lg">View Projects</a>
        </div>
        <img src="{{ asset('image.jpg') }}" alt="Ankon Chowdhury" class="profile-picture">
    </div>
</div>

@endsection