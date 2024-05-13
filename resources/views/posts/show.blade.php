@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
    <div>
        <h4>Add Comment</h4>
        <form method="POST" action="{{ route('posts.comments.store', $post->id) }}">
            @csrf
            <textarea name="comment" placeholder="Type your comment here" required></textarea>
            <button type="submit">Post Comment</button>
        </form>
    </div>
    <h4>Comments</h4>
    <ul>
        @foreach ($post->comments as $comment)
            <li>{{ $comment->comment }}</li>
        @endforeach
    </ul>
@endsection
