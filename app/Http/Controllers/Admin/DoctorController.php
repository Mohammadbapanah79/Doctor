<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::query()->orderBy('id', 'desc')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show(Doctor $doctor)
    {
        return view('admin.doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update([
            'expertise_id' => $request->post('expertise_id'),
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
            'short_description' => $request->post('short_description'),
            'description' => $request->post('description'),
        ]);
        return to_route('admin.doctors.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return to_route('admin.doctors.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
