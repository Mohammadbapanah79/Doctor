<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Reserve;
use Illuminate\Http\Request;

class PatientReserveController extends Controller
{

    public function index()
    {
        $pat_id = Patient::query()->where('user_id', auth()->user()->id)->first();

        $reserves = Reserve::query()->where('patient_id', $pat_id->id)->get();
        return view('patient.reservation.index', [
            'reserves' => $reserves,
        ]);
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
        //
    }
}
