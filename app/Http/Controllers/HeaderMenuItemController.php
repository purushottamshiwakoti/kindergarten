<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class HeaderMenuItemController extends Controller
{
    public function index()
    {
        $menu = Menu::where('slug', 'header')->first();
        // $category = MenuItem::whereNull('parent_id')->get();
        $category = MenuItem::whereNull('parent_id')->orWhere('parent_id', 0)->with(['children'])->get();
        $menuTree = MenuItem::tree()->where('menu_id', $menu->id);
        // $menu = MenuItem::tree();

        return response()->json($menuTree);




        return view('headermenuitem.index', compact('category'));
    }
}
