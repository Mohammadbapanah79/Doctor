<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.page.index', compact('pages'));
    }


    public function create()
    {
        return view('admin.page.create');
    }

    public function store(PageRequest $request)
    {
        Page::query()->create($request->all());
        return to_route('admin.pages.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }

    public function show($id)
    {
        //
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->all());
        return to_route('admin.pages.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');

    }

    public function destroy(Page $page)
    {
        $page->delete();
        return to_route('admin.pages.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
