<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWhyKidoromaImagesRequest;
use App\Http\Requests\StoreWhyKidoromaTitleRequest;
use App\Http\Requests\WhyKidoromaCardRequest;
use App\Models\WhyKidoromaCard;
use App\Models\WhyKidoromaImages;
use App\Models\WhyKidoromaTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyKidoromaController extends Controller
{
    public function index(){
        $kidoromaTitle=WhyKidoromaTitle::first();
        return view('whykidoroma.index',compact('kidoromaTitle'));
    }

    public function create(){
        return view('whykidoroma.create');
    }
    public function store(StoreWhyKidoromaTitleRequest $request){
        $request->validated();
        $kidoromaTitle=new WhyKidoromaTitle;
        $kidoromaTitle->fill($request->input());
        $kidoromaTitle->save();

        return redirect()->route('kidoroma')->with('success','Sucessfully added Title');

    }
    public function indexcard(){
        $kidoromacard=WhyKidoromaCard::first();
        return view('whykidoroma.indexcard',compact('kidoromacard'));
    }
    public function createcard(){
        return view('whykidoroma.createcard');
    }
    public function storecard(WhyKidoromaCardRequest $request){
        $request->validated();
        $storage="whyKidoromaIcons";
        $image1=$request->file('image1');
        $filaname=time()."whykidoromaiconimage1.".$image1->getClientOriginalExtension();
        $url1=Storage::putFileAs($storage,$image1,$filaname);
        $image2=$request->file('image2');
        $filaname=time()."whykidoromaiconimage2.".$image2->getClientOriginalExtension();
        $url2=Storage::putFileAs($storage,$image2,$filaname);
        $image3=$request->file('image3');
        $filaname=time()."whykidoromaiconimage3.".$image3->getClientOriginalExtension();
        $url3=Storage::putFileAs($storage,$image3,$filaname);
        $image4=$request->file('image4');
        $filaname=time()."whykidoromaiconimage4.".$image4->getClientOriginalExtension();
        $url4=Storage::putFileAs($storage,$image4,$filaname);
        $aboutTheAppCard=new WhyKidoromaCard();
        $aboutTheAppCard->image1=$url1;
        $aboutTheAppCard->image2=$url2;
        $aboutTheAppCard->image3=$url3;
        $aboutTheAppCard->image4=$url4;
        $aboutTheAppCard->fill($request->input());
        $aboutTheAppCard->save();

        return redirect()->route('kidoroma.indexcard')->with('success','Sucessfully created card');
    }

    public function createimage(){
        return view('whykidoroma.createimage');
    }
    public function indeximage(){
        $kidoromaimage=WhyKidoromaImages::first();
        return view('whykidoroma.indeximage',compact('kidoromaimage'));
    }
    public function storeimage(StoreWhyKidoromaImagesRequest $request){
        $request->validated();
        $storage="whyKidoromaImages";
        $image1=$request->file('image1');
        $filaname=time()."whykidoromaimagesimage1.".$image1->getClientOriginalExtension();
        $url1=Storage::putFileAs($storage,$image1,$filaname);
        $image2=$request->file('image2');
        $filaname=time()."whykidoromaimagesimage2.".$image2->getClientOriginalExtension();
        $url2=Storage::putFileAs($storage,$image2,$filaname);
        $image3=$request->file('image3');
        $filaname=time()."whykidoromaimagesimage3.".$image3->getClientOriginalExtension();
        $url3=Storage::putFileAs($storage,$image3,$filaname);
        $image4=$request->file('image4');
        $filaname=time()."whykidoromaimagesimage4.".$image4->getClientOriginalExtension();
        $url4=Storage::putFileAs($storage,$image4,$filaname);
        $aboutTheAppCard=new WhyKidoromaImages();
        $aboutTheAppCard->image1=$url1;
        $aboutTheAppCard->image2=$url2;
        $aboutTheAppCard->image3=$url3;
        $aboutTheAppCard->image4=$url4;
        $aboutTheAppCard->save();

        return redirect()->route('kidoroma.indeximage')->with('success','Sucessfully created images');

    }
}
