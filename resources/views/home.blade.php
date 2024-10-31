@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container my-4">
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($posts as $post)
                <a href="{{ route('single.post', $post->id) }}" class="text-decoration-none text-dark" style="width: 18rem;">
                    <div class="card h-100">
                        @if ($post->image)
                            <div class="card-img-container">
                                <img src="{{ asset('posts/' . $post->image) }}" class="card-img-top" alt="Post image">
                            </div>
                        @endif
                        <div class="card-body">
                            <p class="text-muted mb-1">By {{ $post->user->first_name }} {{ $post->user->last_name }}</p>
                            <h5 class="card-title">Title: {{ $post->title }}</h5>
                            <p class="card-text">Description: {{ Str::limit($post->description, 80) }}</p>
                            <p class="text-muted">Category: {{ $post->category }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{-- Uncomment this line when pagination is available --}}
            {{-- {{ $posts->links() }} --}}
        </div>
    </div>

    <style>
        .card-img-container {
            height: 200px; /* Set a fixed height for uniformity */
            overflow: hidden; /* Hide overflow to maintain aspect ratio */
        }
        .card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image covers the container while maintaining aspect ratio */
        }
    </style>
@endsection
