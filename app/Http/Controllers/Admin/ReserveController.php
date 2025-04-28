<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{

    public function index()
    {
        $reserves = Reserve::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.reserves.index', compact('reserves'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => ['required'],
            'time' => ['required'],
        ]);


        
        $user_id = \auth()->user()->id;
        $patient = Patient::where('user_id', $user_id)->first();
        $pat_id = $patient->id;
        Reserve::query()->create([
            'doctor_id' => $request->post('doctor_id'),
            'patient_id' => $pat_id,
            'date' => $request->post('date'),
            'time' => $request->post('time'),
        ]);
        return to_route('home')->with('swal-success', 'رزرو شما با موفقیت ثبت شد ');
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
        $reserve = Reserve::query()->find($id);
        $reserve->delete();
        return to_route('admin.reserves.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
