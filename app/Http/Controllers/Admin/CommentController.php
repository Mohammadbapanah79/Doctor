<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.comment.index', compact('comments'));
    }

    public function create()
    {
        //
    }

    public function store(CommentRequest $request)
    {
        Comment::query()->create([
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,
            'description' => $request->post('description'),
        ]);
        return to_route('home')->with('swal-success','نظر شما با موفقیت ثبت شد و بعد از تایید نمایش داده خواهد شد');
    }

    public function show(Comment $comment)
    {
        return view('admin.comment.show', compact('comment'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return to_route('admin.comments.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
