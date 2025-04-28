<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Day;
use App\Models\Doctor;
use App\Models\DoctorComment;
use App\Models\Expertise;
use App\Models\Faq;
use App\Models\Gender;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PhpParser\Comment\Doc;

class MainController extends Controller
{


    public function index()
    {
        $doctors = Doctor::query()->orderBy('id', 'desc')->paginate(4);
        $posts = Post::query()->orderBy('id', 'desc')->paginate(9);
        $faqs = Faq::query()->orderBy('id', 'desc')->paginate(6);
        $expertises = Expertise::query()->orderBy('id', 'desc')->get();
        $comments = Comment::query()->orderBy('id', 'desc')->get();
        return view('theme.index', compact([
            'doctors', 'posts', 'expertises', 'comments', 'faqs'
        ]));
    }

    public function show(Post $post)
    {
        $expertises = Expertise::query()->orderBy('id', 'desc')->get();
        $posts = Post::query()->orderBy('id', 'desc')->paginate(4);
        $comments = Comment::query()->orderBy('id', 'desc')->get();
        return view('theme.post', compact('post', 'comments', 'posts', 'expertises'));
    }

    public function showDoctor(Doctor $doctor)
    {
        $doctorComments = DoctorComment::query()->orderBy('id', 'desc')->get();
        $expertises = Expertise::all();
        $days = Day::query()->where('doctor_id', $doctor->id)->get();
        return view('theme.doctor', compact('doctor', 'expertises', 'doctorComments', 'days'));
    }

    public function doctors()
    {
        $genders = Gender::all();
        $doctors = Doctor::query()->orderBy('id', 'desc')->paginate(15);
        return view('theme.doctors', compact('doctors', 'genders'));
    }

    public function blog()
    {
        $posts = Post::query()->orderBy('id', 'desc')->paginate(20);
        return view('theme.posts', compact('posts'));
    }

    public function showPage($id)
    {
        $page = Page::query()->find($id);
        if ($page == false) {
            abort("404");
        }
        return view('showPage', compact('page'));
    }

    public function expertiseDoctor($exId)
    {
        $expertises = Expertise::all();
        $doctors = Doctor::query()->where('expertise_id', $exId)->get();
        return \view('theme.doctors', compact('doctors', 'expertises'));
    }

    public function postCategory($catId)
    {
        $categories = Category::all();
        $posts = Post::query()->where('category_id', $catId)->latest()->paginate(10);
        return view('theme.posts', compact('posts', 'categories'));
    }
}
