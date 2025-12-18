<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(PostStoreRequest $request)
    {
        Post::create($request->validated() + [
            "slug" => Str::slug($request->validated()['body']),
            'user_id' => 1
        ]);

        return redirect()->route('posts.index');
    }
    public function show(string $id)
    {
        $post = Post::where('id', $id)->where('likes_count', '>', 5)->firstOrFail();
        return view('posts.show', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'slug' => 'required|string|unique:posts,slug,' . $id,
            'likes_count' => 'required|integer|min:0',
        ]);
        $post = Post::find($id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug,
            'likes_count' => $request->likes_count,
        ]);
        return redirect()->route('posts.index', $post->id)
            ->with('success', 'Post updated successfully!');
    }
}
