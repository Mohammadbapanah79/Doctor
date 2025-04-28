<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DayContrller extends Controller
{

    public function index()
    {
        $user_id = auth()->user()->id;
        $doctor = Doctor::query()->where('user_id', $user_id)->first();
        $doc_id = $doctor->id;
        $days = Day::query()->where('doctor_id', $doc_id)->get();
        return view('doctor.day.index', compact('days'));
    }

    public function create()
    {
        $user_id = auth()->user()->id;
        $doctor = Doctor::query()->where('user_id', $user_id)->get();
        return view('doctor.day.create', compact('doctor'));
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $doctor = Doctor::query()->where('user_id', $user_id)->first();
        $doc_id = $doctor->id;
        Day::query()->create([
            'doctor_id' => $doc_id,
            'week_number' => $request->post('week_number'),
            'month' => $request->post('month'),
            'saturday' => $request->post('saturday'),
            'sunday' => $request->post('sunday'),
            'monday' => $request->post('monday'),
            'tuesday' => $request->post('tuesday'),
            'wednesday' => $request->post('wednesday'),
            'thursday' => $request->post('thursday'),
            'friday' => $request->post('friday'),
        ]);

        return to_route('doctor.days.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }

    public function show($id)
    {
        //
    }

    public function edit(Day $day)
    {

        return view('doctor.day.edit', compact('day'));
    }

    public function update(Request $request, Day $day)
    {
        $day->update([
            'week_number' => $request->post('week_number'),
            'month' => $request->post('month'),
            'saturday' => $request->post('saturday'),
            'sunday' => $request->post('sunday'),
            'monday' => $request->post('monday'),
            'tuesday' => $request->post('tuesday'),
            'wednesday' => $request->post('wednesday'),
            'thursday' => $request->post('thursday'),
            'friday' => $request->post('friday'),
        ]);
        return to_route('doctor.days.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');

    }

    public function destroy(Day $day)
    {
        $day->delete();
        return to_route('doctor.days.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
