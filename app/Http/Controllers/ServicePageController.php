<?php

namespace App\Http\Controllers;

use App\Models\ServeceDetail;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function index()
    {
        $allServices = ServeceDetail::all();
        return view('servicespage.index', compact('allServices'));
    }
    public function detail($slug)
    {
        $serviceDetail = ServeceDetail::where('slug', $slug)->first();
        $services = Service::where('servicedetail_id', $serviceDetail->id)->get();
        return view('servicespage.detail', compact('services'));
    }
}
