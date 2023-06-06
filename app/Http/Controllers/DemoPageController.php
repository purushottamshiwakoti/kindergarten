<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoPageSettingsRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Settings\ContactSettings;
use App\Settings\DemoPageSettings;
use App\Settings\HeaderSeetings;
use Illuminate\Http\Request;

class DemoPageController extends Controller
{
    public function index(DemoPageSettings $settings)
    {
        $menu = Menu::where('slug', 'header')->first();
        $category = MenuItem::tree()->where('menu_id', $menu->id);
        return view('demo.index', $settings->toArray(), compact('category'));
    }

    public function create(DemoPageSettings $settings)
    {

        return view('demo.create', $settings->toArray());
    }
    public function update(DemoPageSettingsRequest $request, DemoPageSettings $settings)
    {
        $input = $request->all();
        $request->validated();
        $settings->fill($input);
        $settings->save();

        return redirect()->route('demo.create')->with('success', 'Sucessfully updated demopage');
    }
}
