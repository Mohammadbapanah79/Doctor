<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientNotAllowedController extends Controller
{
    public function index()
    {
        $users = User::query()->where('role', 'patient')->orderBy('id', 'desc')->paginate(10);
        return view('admin.patient_not_allow.index', compact('users'));
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


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = User::query()->find($id);
        $user->delete();
        return to_route('admin.patStatus.index')->with('swal-success','عملیات موفقیت آمیز بود ');
    }


    public function changeUserStatus($userId)
    {
        $user = User::find($userId);
        $curentStatus = $user->is_active;
        if ($curentStatus == 0) {
            $user->update([
                'is_active' => 1
            ]);
            if ($user->role == 'patient') {
                $checkExistPatient = Patient::where('user_id', $user->id)->first() ? false : true;

                if ($checkExistPatient) {
                    Patient::create([
                        'user_id' => $user->id,
                    ]);
                }

            } elseif ($user->role == 'doctor') {
                $checkExistDoctor = Doctor::where('user_id', $user->id)->first() ? false : true;

                if ($checkExistDoctor) {
                    Doctor::create([
                        'user_id' => $user->id,
                        'expertise_id' => 1
                    ]);
                }
            }
        } else {
            $user->update([
                'is_active' => 0
            ]);
        }
        return redirect()->back();
    }
}
