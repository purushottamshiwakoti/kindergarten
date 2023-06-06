<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErrorPageRequest;
use App\Settings\ContactSettings;
use App\Settings\ErrorSeetings;
use App\Settings\HeaderSeetings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ErrorPageController extends Controller
{
    public function error(HeaderSeetings $headersettings, ContactSettings $contactSettings){
        return view('error.index',[
             /// header
             'header_image'=>$headersettings->header_image,
             'headerbutton1'=>$headersettings->headerbutton1,
             'headerbutton2'=>$headersettings->headerbutton2,

             /// contact
             'contact_title'=>$contactSettings->contact_title,
             'contact_description'=>$contactSettings->contact_description,
             'contact_phone_number'=>$contactSettings->contact_phone_number,
             'contact_email1'=>$contactSettings->contact_email1,
             'contact_email2'=>$contactSettings->contact_email2,
             'contact_mapstreet'=>$contactSettings->contact_mapstreet,
        ]);
    }

    public function create(ErrorSeetings $settings){

        return view('error.create',[
            'error_title'=>$settings->error_title,
            'error_button'=>$settings->error_button,
            'error_image'=>$settings->error_image,
        ]);
    }

    public function update(ErrorPageRequest $request,ErrorSeetings $settings){
        $request->validated();

        if($request->file('error_image')){
            $image=$request->file('error_image');
            $filename=time()."errorImage.".$image->getClientOriginalExtension();
            $url=Storage::putFileAs("ErrorImage",$image,$filename);
            $path=asset("storage/$url");

        }
        else{
            $path=$settings->error_image;
        }

        $settings->error_title=$request->error_title;
        $settings->error_button=$request->error_button;
        $settings->error_image=$path;

        $settings->save();

        return redirect()->route("error.create")->with('success',"Sucessful updated error info");


    }
}
