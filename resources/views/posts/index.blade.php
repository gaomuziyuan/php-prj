@extends('layouts.app')

@section('content')
    <h1>Post List</h1>
    <a href="{{ route('posts.create') }}">Create a New Post</a>
    <form action="{{ route('posts.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search posts" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <div>
                    <h4><a href="{{ route('posts.comments.index', $post->id) }}">View all comments</a></h4>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
@endsection
