<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileCompeleteRequest;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientComepeleteProfileController extends Controller
{
    public function show($id)
    {
        $patient = Patient::query()->find($id);
        return view('patient.profile.show', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::query()->find($id);
        return view('patient.profile.edit', compact('patient'));
    }

    public function update(ProfileCompeleteRequest $request, $id)
    {
        $patient = Patient::query()->find($id);
        if ($request->has('image')) {
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads/'), $fileName);
            $image = uniqid() . $request->file('image')->getClientOriginalName();
        }
        $patient->update([
            'name' => $request->post('name'),
            'lastname' => $request->post('lastname'),
            'address' => $request->post('address'),
            'phone' => $request->post('phone'),
            'email' => $request->post('email'),
            'pass_number' => $request->post('pass_number'),
            'image' => $request->has('image') ? $fileName : $patient->image,
            'profile' => 1
        ]);
        return redirect()->back()->with('swal-success', 'ویرایش پروفایل با موفقیت انجام شد');
    }

}
