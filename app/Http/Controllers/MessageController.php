<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Mail\AdminMessageMail;
use App\Mail\MessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Mail;

class MessageController extends Controller
{
    public function store(StoreMessageRequest $request){
        $request->validated();
        Message::create(
            $request->input()
        );
        $user=Message::latest()->first();
        $adminMailMessage=[
            'title'=>'You have received mail from'.$user->name,
            'body'=>$user->message,
            'from'=>$user->email,
        ];
        $mailData=[
            'title'=>'Thanks for messaging us '.$user->name,
            'body'=>'We appreciate your message and we will get back to you soon!',
        ];
        Mail::to($user->email)->queue(new MessageMail($mailData));
        Mail::to('admin@gmail.com')->queue((new AdminMessageMail($adminMailMessage)));
        Mail::to("admin@gmail.com")->send(new MessageMail([]));
        return response()->json(['success'=>'all good submitted successfully']);
    }

    public function index(){
        $message=Message::paginate(8);
        return view('messagees.index',compact('message'));
    }
    public function messagedetail($id){
        $message=Message::find($id);

        return view('messagees.detailmessage',compact('message'));

    }

    public function sendEmail(){


        dd("Yes");
    }

}
