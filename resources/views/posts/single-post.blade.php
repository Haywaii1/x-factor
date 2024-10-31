@extends('layouts.app')

@section('content')

<div class="container my-4">
    <div class="card mx-auto" style="width: 18rem;">
        @if ($post->image)
            <img src="{{ asset('posts/' . $post->image) }}" class="card-img-top" alt="Post image">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <p class="text-muted">{{ $post->category }}</p>

            {{-- Allow only the post owner to edit or delete --}}
            @if(auth()->user()->id == $post->user_id)
                <a href="{{ route('edit.post',  $post->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('delete.post', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-danger" onclick="confirmDelete(this.form)">Delete</button>
                </form>
            @endif
        </div>
    </div>

    <div class="my-4">
        <h4>Comments</h4>
        <form action="{{ route('comment', $post->id) }}" method="post" class="w-50">
            @csrf
            <div class="form-group mb-2">
                <label for="comment">Add a comment:</label>
                <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="mt-5">
        <h4>All comments</h4>
        @foreach ($post->comments as $comment)
            <div class="p-2 border-bottom">
                <strong>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</strong>
                <p class="mb-1">{{ $comment->comment }}</p>
                <small class="text-muted">{{ $comment->created_at->format('d/m/y') }}</small>
            </div>
        @endforeach
    </div>
</div>

@endsection

<script>
    function confirmDelete(form) {
        if (confirm('Are you sure you want to DELETE?')) {
            form.submit();
        }
    }
</script>
