@extends('layouts.app')

@section('content')
    <h1>Comments for {{ $post->title }}</h1>
    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->comment }}</li>
        @endforeach
    </ul>
    <div class="m-16">
        {{ $comments->links() }}
    </div>
@endsection
