<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $doctor = Doctor::where('user_id', auth()->user()->id)->first();
        $files = File::query()->where('doctor_id', $doctor->id)->get();
        return view('doctor.file.index', compact('files'));
    }

    public function create(File $file)
    {
        return view('doctor.file.create', compact('file'));
    }

    public function store(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $request->file->move(public_path('files'), $fileName);
        $file = $request->file('file')->getClientOriginalName();
        $doctor = Doctor::where('user_id', auth()->user()->id)->first();
        $files = File::query()->orderBy('id', 'desc')->get();
        if (count($files) >= 3) {
            return to_route('doctor.files.index')->with('warning', 'بیش از سه فیلم نمیتوانید آپلود کنید');
        }
        File::query()->create([
            'doctor_id' => $doctor->id,
            'file' => $file,
        ]);
        return to_route('doctor.files.index')->with('swal-success', 'عملیات با موفقیت انجام شد ');

    }

    public function show($id)
    {
        //
    }

    public function edit(File $file)
    {
        return view('doctor.file.edit', compact('file'));
    }


    public function update(Request $request, File $file)
    {
        if ($request->has('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $request->file->move(public_path('files'), $fileName);
            $pdf = $request->file('file')->getClientOriginalName();
        }
        $file->update([
            'doctor_id' => auth()->user()->id,
            'file' => $request->has('file') ? $fileName : $file->file,
        ]);
        return to_route('doctor.files.index')->with('swal-success', 'عملیات با موفقیت انجام شد ');

    }

    public function destroy(File $file)
    {
        $file->delete();
        return to_route('doctor.files.index')->with('swal-success', 'عملیات با موفقیت انجام شد ');

    }
}
