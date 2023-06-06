<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuItemRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index($id)
    {
        $menu = Menu::find($id);
        $menuItem = MenuItem::tree()->where('menu_id', $menu->id);
        return view('menuitem.index', compact('menu', 'menuItem'));
    }

    public function create($id)
    {
        $menu = Menu::find($id);
        $menuItem = MenuItem::where('menu_id', $id)->get();
        return view("menuitem.create", compact('menu', 'menuItem'));
    }
    // public function store(StoreMenuItemRequest $request, $id)
    public function store(Request $request, $id)
    {

        // $request->validated();
        $menuitem = new MenuItem;
        $menuitem->menu_id = $id;
        $menuitem->fill($request->input());
        $menuitem->save();

        // dd("All good");

        return redirect()->route("menuitem", $id)->with("success", 'Sucessfully added menu items');
    }

    public function edit($id)
    {
        $menuItem = MenuItem::find($id);
        $menu = Menu::where('slug', 'header')->first();
        $headerMenu = MenuItem::where('menu_id', $menu->id)->get();
        return view('menuitem.edit', compact('menuItem', 'headerMenu'));
    }
    public function update(StoreMenuItemRequest $request, $id)
    {
        // dd($request->all());
        $request->validated();
        $menuItem = MenuItem::find($id);
        $menuItem->update($request->input());
        return redirect()->route("menuitem", $menuItem->menu_id)->with("success", 'Sucessfully updated menu items');
    }
    public function destroy($id)
    {
        $menuItem = MenuItem::find($id);
        $menuItem->delete();
        return redirect()->route("menuitem", $menuItem->menu_id)->with("success", 'Sucessfully deleted menu items');
    }

    public function updateOrder(Request $request)
    {
        // $menuItems=
        dd($request->all());
    }
}
