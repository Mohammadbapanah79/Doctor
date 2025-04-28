<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(PostStoreRequest $request)
    {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('uploads'), $fileName);
        $image = time() . $request->file('image')->getClientOriginalName();

        Post::query()->create([
            'category_id' => $request->post('category_id'),
            'user_id' => auth()->user()->getAuthIdentifier(),
            'title' => $request->post('title'),
            'body' => $request->post('body'),
            'image' => $image
        ]);
        return to_route('admin.posts.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }

    public function show(Post $post)
    {

    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        if ($request->has('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads'), $fileName);
            $image = time() . $request->file('image')->getClientOriginalName();
        }
        $post->update([
            'category_id' => $request->post('category_id'),
            'title' => $request->post('title'),
            'body' => $request->post('body'),
            'image' => $request->has('image') ? $fileName : $post->image,
        ]);
        return redirect()->route('admin.posts.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
