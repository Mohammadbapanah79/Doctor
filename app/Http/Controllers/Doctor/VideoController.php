<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoStoreRequest;
use App\Models\Doctor;
use App\Models\Setting;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::query()->where('doctor_id', auth()->user()->id)->orderBy('id', 'desc')->get();

        return view('doctor.video.index', compact('videos'));
    }

    public function create()
    {
        return view('doctor.video.create');
    }

    public function store(Request $request)
    {
        $setting = Setting::query()->where('id', 1)->first();
        $request->validate([
            'film' => ['required', 'mimes:mp4,mov', "max:$setting->video_size"]
        ]);
        $fileName = time() . $request->file('film')->getClientOriginalName();
        $request->film->move(public_path('videos/', $fileName));
        $video = time() . $request->file('film')->getClientOriginalName();
        $videos = Video::query()->orderBy('id', 'desc')->get();
        if (count($videos) >= 3) {
            return to_route('doctor.videos.index')->with('warning', 'بیش از سه فیلم نمیتوانید آپلود کنید');;
        }
        Video::query()->create([
            'film' => $video,
            'doctor_id' => auth()->user()->id
        ]);
        return to_route('doctor.videos.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }

    public function edit(Video $video)
    {
        return view('doctor.video.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        if ($request->has('film')) {
            $fileName = time() . $request->file('film')->getClientOriginalName();
            $request->film->move(public_path('videos', $fileName));
            $f = time() . $request->file('film')->getClientOriginalName();
        }
        $video->update([
            'film' => $request->has('film') ? $fileName : $video->film,
        ]);
        return to_route('doctor.videos.index')->with('swal-success', 'عملیات موفقیت آمیز بود');

    }

    public function destroy(Video $video)
    {
        $video->delete();
        return to_route('doctor.videos.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }
}
