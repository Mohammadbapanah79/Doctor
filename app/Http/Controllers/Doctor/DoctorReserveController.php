<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Reserve;
use Illuminate\Http\Request;

class DoctorReserveController extends Controller
{
    public function index()
    {
        $doctor = Doctor::where('user_id', auth()->user()->id)->first();

        $reserves = Reserve::query()->where('doctor_id', $doctor->id)->get();
        return view('doctor.reservation.index', compact('reserves'));
    }


    public function changeStatus($reserveId)
    {
        $reserve = Reserve::find($reserveId);
        $curentStatus = $reserve->status;
        if ($curentStatus == 0) {
            $reserve->update([
                'status' => 1
            ]);
        } else {
            $reserve->update([
                'status' => 0
            ]);
        }
        return redirect()->back();
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $reserve = Reserve::query()->find($id);
        $reserve->delete();
        return redirect()->route('doctor.reserves.index')->with('swal-success', 'عملیات با موفقیت انجام شد');
    }
}
