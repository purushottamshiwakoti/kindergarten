<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuItemRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{

    public function home($slug)
    {
        $menu = Menu::where('slug', $slug)->first();
        $menuItem = MenuItem::tree();
        
        return view('menuitem.home', compact('menu', 'menuItem', 'slug'));
    }

    public function index($slug)
    {
        $slugs = $slug;
        $menu = Menu::where('slug', $slug)->first();
        $menuItem = MenuItem::tree();

        return view('menuitem.index', compact('menu', 'menuItem', 'slug'));
    }

    public function create($slug)
    {
        $slugs = $slug;
        $menuItem = MenuItem::get();
        return view("menuitem.create", compact('menuItem', 'slugs'));
    }
    public function store(StoreMenuItemRequest $request, $slug)
    {
        $request->validated();
        // dd($request->all());
        $menu = Menu::where('slug', $slug)->first();

        $menuitem = new MenuItem;
        $menuitem->fill($request->all());
        $menuitem->menu_id = $menu->id;
        if ($request->input('parent_id') != 0) {
            $menuitem->parent_id = $request->input('parent_id');
        }
        $menuitem->save();

        return redirect()->route("menuitem", $slug)->with("success", 'Sucessfully added menu items');
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

    public function order(Request $request)
    {
        // dd($request->all());
        $list = json_decode($request->input('list'));

        // dd($list);

        foreach ($list as $index => $item) {
            // dd($item);
            MenuItem::where('id', $item->id)->update(['sort_order' => $index]);

            if (!empty($item->children)) {
                $this->updateMenuItems($item->children, $item->id);
            } else {
                MenuItem::where('id', $item->id)->update(['sort_order' => $index, 'parent_id' => 0]);
            }
        }


        return response()->json(['success' => 'Successfully received']);
    }
    protected function updateMenuItems($children, $parent)
    {
        foreach ($children as $index => $child) {
            // dd($children);
            MenuItem::where('id', $child->id)->update(['parent_id' => $parent, 'sort_order' => $index]);
            if (!empty($child->children)) {
                $this->updateMenuItems($child->children, $child->id);
            }
        }
    }
}
