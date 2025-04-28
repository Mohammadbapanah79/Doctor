<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::query()->where('user_id',auth()->user()->id)->get();
        return view('doctor.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('doctor.post.create', compact('categories'));
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
        return to_route('doctor.posts.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }

    public function show(Post $post)
    {

    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('doctor.post.edit', compact('post', 'categories'));
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
        return redirect()->route('doctor.posts.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('doctor.posts.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
