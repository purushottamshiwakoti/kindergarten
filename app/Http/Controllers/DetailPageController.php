<?php

namespace App\Http\Controllers;

use App\Models\ServeceDetail;
use App\Models\Service;
use Illuminate\Http\Request;

class DetailPageController extends Controller
{
    public function funlearning()
    {
        // $funlearn = ServeceDetail::where('servicedetail', 'Fun Learning');
        $funlearn = ServeceDetail::all();
        // dd($funlearn);
        $funlearning = Service::where('servicedetail_id', 1)->paginate(3);



        return view('detailpages.funlearning', compact('funlearning'));
    }

    public function meetup()
    {
        $meetup = Service::where('servicedetail_id', 4)->get();
        dd($meetup);
        return view('detailpages.meetup');
    }
    public function secured()
    {
        return view('detailpages.secured');
    }
    public function virtual()
    {
        return view('detailpages.virtual');
    }
}
