<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFooterHeaderRequest;
use App\Models\FooterHeading;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footerHeading=FooterHeading::first();
        return view('footer.index',compact('footerHeading'));
    }
    public function create(){
        return view('footer.create');
    }
    public function store(PostFooterHeaderRequest $request){
        $request->validated();
        $footerHeading=new FooterHeading;
        $footerHeading->fill($request->all());
        $footerHeading->save();

    }
    public function edit($id){
        $footerEdit=FooterHeading::find($id)->first();
        return view('footer.edit',compact('footerEdit'));
    }
    public function update(PostFooterHeaderRequest $request,$id){
        $request->validated();
        $footerUpdate=FooterHeading::find($id)->first();
        $footerUpdate->update($request->input());
        return redirect()->route('footer')->with('success','Sucessfully updated footer heading');


    }
}
