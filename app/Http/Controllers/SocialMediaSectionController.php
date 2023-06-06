<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSocialMediaSectionButtonrequest;
use App\Http\Requests\StoreSocialmediaSectionRequest;
use App\Models\SocialMediaSection;
use App\Models\SocialMediaSectionButton;
use App\Settings\GeneralSettings;
use App\Settings\NewSettings;
use Illuminate\Http\Request;

class SocialMediaSectionController extends Controller
{
    public function index(){
        $socialmedia=SocialMediaSection::first();
        return view('socialmediasection.index',compact('socialmedia'));

    }
    public function create(){
        return view('socialmediasection.create');
    }
    public function store(StoreSocialmediaSectionRequest $request){
        $request->validated();
        $socialmedia=new SocialMediaSection;
        $socialmedia->fill($request->input());
        $socialmedia->save();

        return redirect()->route('socialmedia')->with('success','Title created uccessfully');

    }

    public function indexbutton(){
        $socialmediaButton=SocialMediaSectionButton::first();
        return view('socialmediasection.buttonindex',compact('socialmediaButton'));
    }
    public function createbutton(){
        return view('socialmediasection.buttoncreate');
    }
    public function storebutton(StoreSocialMediaSectionButtonrequest $request){
        $request->validated();

        $socialMediaSectionButton=new SocialMediaSectionButton;
        $socialMediaSectionButton->fill($request->input());
        $socialMediaSectionButton->save();

        return redirect()->route('socialmedia.indexbutton')->with('success','Sucessfully added button');

    }
    // public function __invoke(GeneralSettings $settings){
    //     return view('socialmediasection.spatieindex',[
    //         'site_name'=>$settings->site_name,
    //     ]);

    // }

    public function spatie():string{
        return app(NewSettings::class);
    }
}
