<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorComment;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorComentController extends Controller
{

    public function index()
    {
        $doctorComments = DoctorComment::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.commentDoctor.index', compact('doctorComments'));
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => ['required']
        ]);
        DoctorComment::query()->create([
            'doctor_id' => $request->post('doctor_id'),
            'user_id' => auth()->user()->getAuthIdentifier(),
            'body' => $request->post('body')
        ]);
        return to_route('home')->with('swal-success','نظر شما با موفقیت ثبت شد و بعد از تایید نمایش داده خواهد شد');
    }

    public function show(DoctorComment $doctorComment)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(DoctorComment $doctorComment)
    {
        $doctorComment->delete();
        return to_route('admin.doctorComments.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
