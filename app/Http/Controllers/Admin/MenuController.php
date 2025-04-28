<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        $menus = Menu::query()->where('parent_id', 0)->get();
        $allMenus = Menu::query()->pluck('title', 'id')->all();
        return view('admin.menus.index', compact('menus', 'allMenus'));
    }

    public function create()
    {
        $menus = Menu::query()->where('parent_id', 0)->get();
        $allMenus = Menu::query()->pluck('title', 'id')->all();
        return view('admin.menus.create', compact('menus', 'allMenus'));
    }

    public function store(MenuRequest $request)
    {

        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        Menu::query()->create($input);
        return to_route('admin.menus.index')->with('swal-success', 'عملیات درج منو موفقیت آمیز بود ');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $menu = Menu::query()->find($id);
        $menus = Menu::query()->where('parent_id', 0)->get();
        $allMenus = Menu::query()->pluck('title', 'id')->all();
        return view('admin.menus.edit', compact('menu', 'menus', 'allMenus'));
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $menu->update([
            'parent_id' => $request->post('parent_id'),
            'title' => $request->post('title'),
            'link' => $request->post('link'),
        ]);
        return to_route('admin.menus.index')->with('swal-success', 'عملیات درج منو موفقیت آمیز بود ');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return to_route('admin.menus.index')->with('swal-success', 'عملیات موفقیت آمیز بود ');
    }
}
