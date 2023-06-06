<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoTextBannerRequest;
use App\Http\Requests\StoreTextBannerImage;
use App\Models\PhotoTextBannerDescription;
use App\Models\TextBannerImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoTextBannerController extends Controller
{
    public function index(){
        $arcodian= PhotoTextBannerDescription::all();
        $image=TextBannerImage::first();
        return view('phototextbanner.index',compact('arcodian','image'));
    }
    public function create(){
        return view('phototextbanner.create');
    }
    public function store(PhotoTextBannerRequest $request){
        $request->validated();
        $accordian=new PhotoTextBannerDescription();
        $accordian->fill($request->input());
        $accordian->save();
        return redirect()->route('phototextbanner')->with('success','Sucessfully created acrodian');
    }
    public function createimage(){
        return view('phototextbanner.createimage');

    }
    public function storeimage(StoreTextBannerImage $request){
        $request->validated();
        $textbannerimage= new TextBannerImage();
        $image=$request->file('image');
        $filename=time()."textbanner.".$image->getClientOriginalExtension();
        $url=Storage::putFileAs("textBannerImage",$image,$filename);
        $textbannerimage->image=$url;
        $textbannerimage->save();
        return redirect()->route('phototextbanner')->with('success','Successfully added image');
    }
}
