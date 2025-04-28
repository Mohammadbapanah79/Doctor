<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Doctor;
use App\Models\DoctorComment;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function showPage($id)
    {
        $menus = Menu::all();
        $page = Page::query()->find($id);
        return view('showPage', compact('page', 'menus'));
    }

    public function changePostStatus($postStatus)
    {
        $post = Post::query()->find($postStatus);
        $postSt = $post->status;
        if ($post->status == 0) {
            $post->update([
                'status' => 1
            ]);
        } else {
            $post->update([
                'status' => 0
            ]);
        }
        return redirect()->back();
    }

    public function changeCommentStatus($commentStatus)
    {
        $comment = Comment::query()->find($commentStatus);
        $commentSt = $comment->status;
        if ($comment->status == 0) {
            $comment->update([
                'status' => 1
            ]);
        } else {
            $comment->update([
                'status' => 0
            ]);
        }
        return redirect()->back();
    }

    public function changeDoctorStatus($doctorStatus)
    {
        $doctor = Doctor::query()->find($doctorStatus);
        $doctorSt = $doctor->status;
        if ($doctor->status == 0) {
            $doctor->update([
                'status' => 1
            ]);
        } else {
            $doctor->update([
                'status' => 0
            ]);
        }
        return redirect()->back();
    }

    public function changeDoctorCommentStatus($doctorCommentStatus)
    {
        $doctorComment = DoctorComment::query()->find($doctorCommentStatus);
        $doctorCm = $doctorComment->status;
        if ($doctorComment->status) {
            $doctorComment->update([
                'status' => 0
            ]);
        } else {
            $doctorComment->update([
                'status' => 1
            ]);
        }
        return redirect()->back();
    }
}
