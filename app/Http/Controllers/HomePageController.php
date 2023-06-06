<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Post;
use App\Settings\ContactSettings;
use App\Settings\HeaderSeetings;
use App\Settings\HomePageSettings;

class HomePageController extends Controller
{
    public function index(HomePageSettings $settings, ContactSettings $contactSettings, HeaderSeetings $headersettings)
    {

        $blogs = Post::orderBy('created_at', 'asc')->get();
        $menu = Menu::where('slug', 'header')->first();
        $category = MenuItem::tree()->where('menu_id', $menu->id);


        return view('homepage.index', $settings->toArray(), compact('blogs', 'category'));
    }
}
