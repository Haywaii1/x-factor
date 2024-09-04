@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card" style="width: 18rem;  margin:20px;">
        @if ($post->image)
        <img src="{{ asset('posts/' . $post->image) }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <p class="card-title">{{ $post->category }}</p>

            {{-- this @if bellow allows on user who posted to be able to edit and delete --}}
            @if(auth()->user()->id == $post->user_id)
            <a href="{{ route('edit.post',  $post->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('delete.post', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button class= "btn btn-danger"  onclick="return check()">Delete</button>
            </form>
            @endif
        </div>
    </div>
    <div>
        <h4>Comments</h4>
    </div>
    <form action="{{ route('comment', $post->id) }}" method="post" class="w-50">
        @csrf
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div>
    <h4>All comments</h4>

    <div>
    {{-- @foreach ($comments as $comment)

    @if($post->id == $comment->post_id)
        <div>
            {{ $comment->comment }} <br>

        </div>
    @endif --}}
    {{-- @endforeach --}}

    {{-- @foreach ($post->user as $user) --}}
    @foreach ($post->comments as $comment)
         {{ $comment->user->first_name }} {{ $comment->user->first_name }} <br>
         {{ $comment->comment }} <br>
         {{ $comment->created_at->format('d/m/y') }} <br>

    {{-- @endforeach --}}
    @endforeach
</div>
</div>

@endsection

<script>
    const check = () => {
        const check = confirm('Are you sure you want to DELETE?')
        return check()
    }
</script>
