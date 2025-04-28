<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public function index()
    {

        $categories = Category::query()->orderBy('id','desc')->get();
        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::query()->create($request->all());
        return to_route('admin.categories.index')->with('swal-success', 'ایجاد دسته بندی با موفقیت انجام شد ');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return to_route('admin.categories.index')->with('swal-success', 'ویرایش دسته بندی با موفقیت انجام شد ');

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('admin.categories.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
