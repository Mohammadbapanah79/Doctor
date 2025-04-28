<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $setting = Setting::query()->where('id', 1)->get();
        return view('admin.setting.index');
    }

    public function show(Setting $setting)
    {

    }

    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        if ($request->has('logo')) {
            $fileName = time() . $request->file('logo')->getClientOriginalName();
            $request->logo->move(public_path('uploads/'), $fileName);
            time() . $request->file('logo')->getClientOriginalName();
        }
        $setting->update([
            'contacts' => $request->post('contacts'),
            'address' => $request->post('address'),
            'instagram' => $request->post('instagram'),
            'telegram' => $request->post('telegram'),
            'facebook' => $request->post('facebook'),
            'email' => $request->post('email'),
            'ad_title' => $request->post('ad_title'),
            'ad_text' => $request->post('ad_text'),
            'about_title' => $request->post('about_title'),
            'about_text' => $request->post('about_text'),
            'footer_description' => $request->post('footer_description'),
            'copy_right' => $request->post('copy_right'),
            'video_size' => $request->post("video_size"),
            'patient_text' => $request->post('patient_text'),
            'doctor_text' => $request->post('doctor_text'),
            'logo' => $request->has('logo') ? $fileName : $setting->logo
        ]);
        return to_route('admin.settings.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }

}
