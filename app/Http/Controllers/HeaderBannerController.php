<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeaderBannerRequest;
use App\Models\HeaderBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderBannerController extends Controller
{
    public function index(){
        $headerBanner=HeaderBanner::first();
        return view('welcomebanner.index',compact('headerBanner'));
    }
    public function create(){
        return view('welcomebanner.create');
    }
    public function store(StoreHeaderBannerRequest $request){
        $request->validated();
        $image1=$request->file('image1');
        $filename1=time()."headerbanner1.".$image1->getClientOriginalExtension();
        $image2=$request->file('image2');
        $filename2=time()."headerbanner2.".$image2->getClientOriginalExtension();
        $image3=$request->file('image3');
        $filename3=time()."headerbanner3.".$image3->getClientOriginalExtension();
        $image4=$request->file('image4');
        $filename4=time()."headerbanner4.".$image4->getClientOriginalExtension();

        /// defining folder
            $folder="headerBannerImage";

        /// storing images
        Storage::putFileAs($folder,$image1,$filename1);
        Storage::putFileAs($folder,$image2,$filename2);
        Storage::putFileAs($folder,$image3,$filename3);
        Storage::putFileAs($folder,$image4,$filename4);


        /// storing images
        $headerBanner=new HeaderBanner;
        $headerBanner->image1=$filename1;
        $headerBanner->image2=$filename2;
        $headerBanner->image3=$filename3;
        $headerBanner->image4=$filename4;
        /// storing other inputs
        $headerBanner->fill($request->input());
        $headerBanner->save();

        return redirect()->route('headerbanner')->with('sucess','Sucessfully added header banner info');
    }
    public function edit($id){

        $headerBanner=HeaderBanner::find($id);
        return view('welcomebanner.edit');


    }
}
