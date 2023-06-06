<?php

namespace App\Http\Controllers;

use App\Http\Requests\OurTeamRequest;
use App\Http\Requests\UpdateOurTeamRequest;
use App\Http\Requests\UpdateTeamSettingRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\OurTeam;
use App\Settings\TeamSettings;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function home(TeamSettings $settings)
    {
        $ourTeam = OurTeam::all();
        $menu = Menu::where('slug', 'header')->first();
        $category = MenuItem::tree()->where('menu_id', $menu->id);
        return view('team.home', compact('ourTeam', 'category'), $settings->toArray());
    }

    public function create()
    {
        return view('team.create');
    }

    public function index()
    {
        $teamDetail = OurTeam::paginate(8);
        return view('team.index', compact('teamDetail'));
    }
    public function store(OurTeamRequest $request)
    {
        $request->validated();
        $ourTeam = new OurTeam;
        $image = $request->file('image');
        $resizeTeamImage = Image::make($image)->fit(1920, 1892)->encode();
        $filename = time() . "OurTeamImage." . $image->getClientOriginalExtension();
        Storage::put("OurTeamImage/{$filename}", $resizeTeamImage);
        $url = "OurTeamImage/$filename";
        $ourTeam->image = $url;
        $ourTeam->slug = Str::slug($ourTeam->title);
        $ourTeam->fill($request->input());
        $ourTeam->save();
        return redirect()->route('team.index')->with('success', 'Successfully created card');
    }

    public function edit($id)
    {
        $ourTeam = OurTeam::find($id);

        return view('team.edit', compact('ourTeam'));
    }

    public function update(UpdateOurTeamRequest $request, $id)
    {
        $request->validated();
        $ourTeam = OurTeam::find($id);
        $ourTeam->update($request->all());
        return redirect()->route('team.index')->with('success', 'Successfully updated card');
    }

    public function destroy($id)
    {
        $ourTeam = OurTeam::find($id);
        $ourTeam->delete();
        return redirect()->route('team.index')->with('success', 'Successfully deleted card');
    }

    /// settings

    public function settings(TeamSettings $settings)
    {
        // dd($settings);
        return view('team.setting', $settings->toArray());
    }

    public function settingsupdate(TeamSettings $settings, UpdateTeamSettingRequest $request)
    {
        $request->validated();
        $input = $request->all();
        $settings->fill($input);
        $settings->save();
        return redirect()->route('team.settings')->with('success', 'Successfully updated title ');
    }
}
