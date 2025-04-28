<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::query()->orderBy('id', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderRequest $request)
    {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('uploads'), $fileName);
        $image = time() . $request->file('image')->getClientOriginalName();
        Slider::query()->create([
            'title' => $request->post('title'),
            'image' => $image,
            'link' => $request->post('link')
        ]);
        return to_route('admin.sliders.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }

    public function show($id)
    {
        //
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        if ($request->has('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads'), $fileName);
            $image = time() . $request->file('image')->getClientOriginalName();
        }
        $slider->update([
            'title' => $request->post('title'),
            'image' => $request->has('image') ? $fileName : $slider->image,
            'link' => $request->post('link')
        ]);
        return to_route('admin.sliders.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');

    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return to_route('admin.sliders.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');

    }
}
