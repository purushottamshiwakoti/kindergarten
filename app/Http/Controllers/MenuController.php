<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Models\Menu;
use Str;

class MenuController extends Controller
{

    public function index()
    {
        $menu = Menu::all();
        // dd($menu);
        return view('menu.index', compact('menu'));
    }
    public function create()
    {
        return view('menu.create');
    }
    public function store(StoreMenuRequest $request)
    {
        $request->validated();
        $menu = new Menu;
        $menu->fill($request->input());
        $menu->slug = Str::slug($request->title);
        $menu->save();

        return redirect()->route('menu')->with('success', "Sucessfullly added menu ");
    }
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('menu.edit', compact('menu'));
    }
    public function update(StoreMenuRequest $request, $id)
    {
        $request->validated();
        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect()->route('menu')->with('success', 'Menu updated sucessfully');
    }
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menu')->with('success', 'Menu deleted sucessfully');
    }
}
