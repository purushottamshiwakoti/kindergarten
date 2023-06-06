<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutTheAppBanner;
use App\Http\Requests\StoreAboutTheAppCardRequest;
use App\Http\Requests\StoreAboutTheAppInfoRequest;
use App\Http\Requests\StoreAboutTheAppTitle;
use App\Models\AboutTheAppBanner;
use App\Models\AboutTheAppCard;
use App\Models\AboutTheAppInfo;
use App\Models\AboutTheAppTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutTheAppController extends Controller
{
    public function index(){
        $aboutAppTitle=AboutTheAppTitle::first();
        return view('aboutheapp.index',compact('aboutAppTitle'));
    }
    public function create(){
        return view('aboutheapp.create');
    }
    public function store(StoreAboutTheAppTitle $request){
        $request->validated();
        $aboutTheAppTitle=new AboutTheAppTitle;
        $aboutTheAppTitle->fill($request->input());
        $aboutTheAppTitle->save();
        return redirect()->route('aboutapp')->with('success','Sucessfully added About The app title');
    }
    public function createcard(){
        return view('aboutheapp.createcard');
    }
    public function storecard(StoreAboutTheAppCardRequest $request){
        $request->validated();
        $image=$request->file('image');
        $filaname=time()."cardicon.".$image->getClientOriginalExtension();
        $url=Storage::putFileAs("aboutTheAppCardIcons",$image,$filaname);
        $aboutTheAppCard=new AboutTheAppCard;
        $aboutTheAppCard->image=$url;
        $aboutTheAppCard->title=$request->input('title');
        $aboutTheAppCard->save();

        return redirect()->route('aboutapp.card')->with('success',"Successfully added card info");
    }
    public function indexcard(){
        $carddetails=AboutTheAppCard::all();

        return view('aboutheapp.indexcard',compact('carddetails'));
    }
    public function info(){
        $info=AboutTheAppInfo::first();
        return view('aboutheapp.info',compact('info'));
    }
    public function createinfo(){
        return view('aboutheapp.createinfo');
    }
    public function storeinfo(StoreAboutTheAppInfoRequest $request){
        $request->validated();
        $aboutAppInfo=new AboutTheAppInfo();
        $aboutAppInfo->fill($request->all());
        $aboutAppInfo->save();

        return redirect()->route('aboutapp.info')->with('success','Successfully created about app info');

    }
    public function indexbanner(){
        $bannerImage=AboutTheAppBanner::first();
        return view('aboutheapp.indexbanner',compact('bannerImage'));

    }
    public function createbanner(){
        return view('aboutheapp.createbanner');

    }
    public function storebanner(StoreAboutTheAppBanner $request){
        $request->validated();
        $image=$request->file('image');
        $filename=time()."abouttheappbanner.".$image->getClientOriginalExtension();
        $url=Storage::putFileAs("aboutTheAppBanner",$image,$filename);
        $bannerImage=new AboutTheAppBanner;
        $bannerImage->image=$url;
        $bannerImage->save();

        return redirect()->route('aboutapp.indexbanner')->with('success','Successfully created about app banner');


    }

}
