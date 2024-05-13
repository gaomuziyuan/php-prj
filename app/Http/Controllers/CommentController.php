<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($postId)
    {
        $post = Post::findOrFail($postId);
        $comments = $post->comments()->simplePaginate(1);
        $comments->withQueryString()->links('pagination::tailwind');

        return view('comments.index', compact('post', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($postId)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $postId)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $post = Post::findOrFail($postId);
        $comment = new Comment;
        $comment->post_id = $post->id;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Comment added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
