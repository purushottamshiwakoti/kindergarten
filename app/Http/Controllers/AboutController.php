<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutPageTitleRequest;
use App\Http\Requests\OurWorkUpdateRequest;
use App\Http\Requests\StoreOurWorkRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\OurWork;
use App\Settings\AboutSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;


class AboutController extends Controller
{
    public function home(AboutSettings $settings)
    {
        $ourWork = OurWork::get();
        $menu = Menu::where('slug', 'header')->first();
        $category = MenuItem::tree()->where('menu_id', $menu->id);
        return view('aboutpage.home', compact('ourWork', 'category'), $settings->toArray());
    }

    public function create()
    {
        return view('aboutpage.create');
    }

    public function store(StoreOurWorkRequest $request)
    {
        $request->validated();
        $image = $request->file('image');
        $resizeAboutImage = Image::make($image)->fit(1920, 1892)->encode();
        $filename = time() . "AboutPageImage." . $image->getClientOriginalExtension();
        // dd($filename);
        // dd($filename);
        Storage::put("AboutPageImage/{$filename}", $resizeAboutImage);
        $url = "AboutPageImage/$filename";
        // dd($url);

        $aboutPageDetails = new OurWork();
        $aboutPageDetails->image = $url;
        $aboutPageDetails->slug = Str::slug($request->title);
        $aboutPageDetails->fill($request->input());
        $aboutPageDetails->save();
        return redirect()->route('abouthome.index')->with('success', 'Sucessfully created data');
    }

    public function index()
    {
        $aboutDetails = OurWork::paginate(8);

        // return view('aboutpage.index', compact('aboutDetails'));
        return view('aboutpage.index', compact('aboutDetails'));
    }

    public function edit($id)
    {
        $ourWork = OurWork::find($id);
        return view('aboutpage.edit', compact('ourWork'));
    }

    public function update(OurWorkUpdateRequest $request, $id)
    {
        $ourWorkUpdate = OurWork::find($id);
        if (!empty($request->file('image'))) {
            $image = $request->file('image');
            $resizeAboutImage = Image::make($image)->fit(1920, 1892)->encode();
            $filename = time() . "AboutPageImage." . $image->getClientOriginalExtension();
            // dd($filename);
            // dd($filename);
            Storage::put("AboutPageImage/{$filename}", $resizeAboutImage);
            $url = "AboutPageImage/$filename";
        } else {
            $url = $ourWorkUpdate->image;
        }
        $ourWorkUpdate->image = $url;
        $ourWorkUpdate->update($request->input());

        return redirect()->route('abouthome.index')->with('success', 'Sucessfully updated data');
    }

    public function destroy($id)
    {
        $ourWorkDelete = OurWork::find($id);
        $ourWorkDelete->delete();
        return redirect()->route('abouthome.index')->with('success', 'Sucessfully deleted data');
    }

    //// for dynamic heading and title
    public function settings(AboutSettings $settings)
    {

        return view('aboutpage.settings', $settings->toArray());
    }

    public function settingsupdate(AboutSettings $settings, AboutPageTitleRequest $request)
    {
        $request->validated();
        $input = $request->all();
        $settings->fill($input);
        $settings->save();
        return redirect()->route('abouthome.settings')->with('success', 'Sucessfully updated data');
    }
}
