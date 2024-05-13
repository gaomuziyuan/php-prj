@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <a href="{{ route('posts.create') }}">Create a New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
@endsection
