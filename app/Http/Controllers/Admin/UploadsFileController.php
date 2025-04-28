<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class UploadsFileController extends Controller
{
    public function index()
    {
        $files = File::query()->orderBy('id', 'desc')->get();
        return view('admin.files.index', compact('files'));
    }

    public function destroy($id)
    {
        $file = File::query()->find($id);
        $file->delete();
        return to_route('admin.uploads.index')->with('swal-success', 'عملیات موفقیت آمیز بود');
    }
}
