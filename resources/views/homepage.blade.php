@extends('layouts.app')
@section('title', 'Home || x-factor')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <<a href="{{ route('single.post', $post->id) }}">

        <div class="container">
            <div class="card" style="width: 18rem;  margin:20px;">
                @if ($post->image)
                <img src="{{ asset('posts/' . $post->image) }}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <p class="card-title">{{ $post->category }}</p>
                </div>
            </div>
        </div>
    </a>
@endforeach
</div>
@endsection









{{-- @extends('layout.app')
@section('content')

@foreach ($posts as $post)
    <div class="card" style="width: 18rem;">
        @if ($post->image)
        <img src="{{ asset('posts/' . $post->image) }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <a href="#" class="btn btn-primary">{{ $post->category }}</a>
            <a href="{{ route('edit.post',  $post->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('delete.post', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button class= "btn btn-danger" type="submit">Delete</button>
            </form>
        </div>


    </div>
@endforeach

@endsection --}}
