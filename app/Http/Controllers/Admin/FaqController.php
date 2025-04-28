<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        $faqs = Faq::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(FaqRequest $request)
    {
        Faq::query()->create($request->all());
        return to_route('admin.faqs.index')->with('swal-success', 'عملیات درج سوال و جواب موفقست آمیز بود ');
    }

    public function show($id)
    {
        //
    }

    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update($request->all());
        return to_route('admin.faqs.index')->with('swal-success', 'عملیات ویرایش سوال و جواب موفقیت آمیز بود ');

    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return to_route('admin.faqs.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');

    }
}
