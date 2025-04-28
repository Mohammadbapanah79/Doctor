<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpertiseRequest;
use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{

    public function index()
    {
        $expertises = Expertise::query()->orderBy('id', 'desc')->get();
        return view('admin.expertises.index', compact('expertises'));
    }


    public function create()
    {
        return view('admin.expertises.create');
    }

    public function store(ExpertiseRequest $request)
    {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('uploads'), $fileName);
        $image = time() . $request->file('image')->getClientOriginalName();

        Expertise::query()->create([
            'name' => $request->post('name'),
            'label' => $request->post('label'),
            'icon' => $request->post('icon'),
            'image' => $image
        ]);
        return to_route('admin.expertises.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }

    public function show($id)
    {
        //
    }

    public function edit(Expertise $expertise)
    {
        return view('admin.expertises.edit', compact('expertise'));
    }

    public function update(ExpertiseRequest $request, Expertise $expertise)
    {
        if ($request->has('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads'), $fileName);
            $image = time() . $request->file('image')->getClientOriginalName();
        }
        $expertise->update([
            'name' => $request->post('name'),
            'label' => $request->post('label'),
            'icon' => $request->post('icon'),
            'image' => $request->has('image') ? $fileName : $expertise->image,

        ]);
        return to_route('admin.expertises.index')->with('swal-success', 'عملیات موفقیت آمیز بود');

    }

    public function destroy(Expertise $expertise)
    {
        $expertise->delete();
        return to_route('admin.expertises.index')->with('swal-success', 'عملیات موفقیت آمیز بود');

    }
}
