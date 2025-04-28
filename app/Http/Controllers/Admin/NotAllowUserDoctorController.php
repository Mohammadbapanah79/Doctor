<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class NotAllowUserDoctorController extends Controller
{

    public function index()
    {
        $users = User::query()->where('role', 'doctor')->orderBy('id', 'desc')->get();
        return view('admin.doctor_not_allow.index', compact('users'));
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
        return to_route('admin.docStatus.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }


    public function changeUserStatus($userId)
    {
        $user = User::find($userId);
        $currentStatus = $user->is_active;

        if ($currentStatus == 0) {
            $user->update([
                'is_active' => 1
            ]);

            if ($user->role == 'doctor') {
                $checkExistDoctor = Doctor::where('user_id', $user->id)->first();

                if (!$checkExistDoctor) {
                    Doctor::create([
                        'user_id' => $user->id,
                        'expertise_id' => 1,  // اضافه کردن مقادیر پیش‌فرض
                        'gender_id' => 1,     // اضافه کردن مقادیر پیش‌فرض
                        'name' => 'Default Name',  // مقدار پیش‌فرض
                        'lastname' => 'Default Lastname',  // مقدار پیش‌فرض
                        'status' => 1,        // مقدار پیش‌فرض
                        'profile' => 0,       // مقدار پیش‌فرض
                        'created_at' => now(),
                        'updated_at' => now(),
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
