<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::query()->orderBy('id', 'desc')->get();
        return view('admin.patients.index', compact('patients'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $patient->update([
            'name' => $request->post('name'),
            'lastname' => $request->post('lastname'),
            'phone' => $request->post('phone'),
            'address' => $request->post('address'),
            'pass_number' => $request->post('pass_number'),
        ]);
        return redirect()->route('admin.patients.index')->with('swal-success', 'عملیات موفقیت آمیز بود');

    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return to_route('admin.patients.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
