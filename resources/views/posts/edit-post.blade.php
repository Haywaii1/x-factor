@extends('layouts.app')
@section('title', 'create post')
@section( 'content')

    <div class="w-50 mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                Create Post
            </div>
            <div class="card-body">
                <form action="{{ route('update.post', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}" name="title" id="title" placeholder="Post title">

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $post->description }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" value="{{ $post->author }}" id="author" name="author"
                            placeholder="Enter author">
                        @error('author')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">category</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" value="{{ $post->category }}" id="category" name="category"
                            placeholder="Enter category">
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    @if($post->image){
                        <img src="{{ asset('posts/'.$post->image) }}" alt="post-image" width="300px" height="300px">
                    }
                    @endif

                     <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" id="image"
                            aria-describedby="inputGroupFileAddon04" name="image" aria-label="Upload">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Update Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection


