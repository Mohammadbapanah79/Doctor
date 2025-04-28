<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileCompeleteRequest;
use App\Models\Doctor;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpParser\Comment\Doc;

class ProfileCompeleteController extends Controller
{

    public function show($id)
    {
        $doctor = Doctor::query()->find($id);
        return view('doctor.profile.show', compact('doctor'));
    }

    public function edit($id)
    {
        $genders = Gender::all();
        $doctor = Doctor::query()->find($id);
        return view('doctor.profile.edit', compact('doctor', 'genders'));
    }

    public function update(ProfileCompeleteRequest $request, $id)
    {
        $doctor = Doctor::query()->find($id);
        if ($request->has('image')) {
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads/'), $fileName);
            $image = uniqid() . $request->file('image')->getClientOriginalName();
        }
        $doctor->update([
            'name' => $request->post('name'),
            'lastname' => $request->post('lastname'),
            'address' => $request->post('address'),
            'phone' => $request->post('phone'),
            'email' => $request->post('email'),
            'fixed_phone' => $request->post('fixed_phone'),
            'instagram' => $request->post('instagram'),
            'telegram' => $request->post('telegram'),
            'facebook' => $request->post('facebook'),
            'year' => $request->post('year'),
            'city' => $request->post('city'),
            'gender_id' => $request->post('gender_id'),
            'expertise_id' => $request->post('expertise_id'),
            'short_description' => $request->post('short_description'),
            'description' => $request->post('description'),
            'image' => $request->has('image') ? $fileName : $doctor->image,
            'profile' => 1
        ]);
        return redirect()->back()->with('swal-success', 'ویرایش پروفایل با موفقیت انجام شد');
    }
}
