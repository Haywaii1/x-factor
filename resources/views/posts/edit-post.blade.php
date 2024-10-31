@extends('layouts.app')
@section('title', 'Update Post')
@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Update Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.post', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                value="{{ $post->title }}" name="title" id="title" placeholder="Post title">
                            @error('title')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                id="description" name="description" placeholder="Write your post description here...">{{ $post->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control @error('author') is-invalid @enderror"
                                value="{{ $post->author }}" id="author" name="author" placeholder="Enter author name">
                            @error('author')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror"
                                value="{{ $post->category }}" id="category" name="category" placeholder="Enter category">
                            @error('category')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        @if($post->image)
                            <div class="mb-4 text-center">
                                <img src="{{ asset('posts/'.$post->image) }}" alt="post-image" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                            </div>
                        @endif

                        <div class="mb-4">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                id="image" name="image" aria-label="Upload">
                            @error('image')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
