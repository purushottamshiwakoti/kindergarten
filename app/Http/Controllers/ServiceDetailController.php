<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceDetailRequest;
use App\Http\Requests\UpdateServiceDetailRequest;
use App\Models\ServeceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServiceDetailController extends Controller
{
    public function index()
    {
        $serviceDetail = ServeceDetail::all();
        return view('servicedetail.index', compact('serviceDetail'));
    }

    public function create()
    {
        return view('servicedetail.create');
    }

    public function store(ServiceDetailRequest $request)
    {
        $request->validated();
        $serviceDetail = new ServeceDetail;
        $serviceDetail->slug = Str::slug($request->input('servicedetail'));
        $serviceDetail->fill($request->input());
        $serviceDetail->save();

        return redirect()->route('servicedetail')->with('success', 'Successfully created service detail');
    }
    public function edit($id)
    {
        $serviceDetail = ServeceDetail::find($id);
        return view('servicedetail.edit', compact('serviceDetail'));
    }
    public function update(UpdateServiceDetailRequest $request, $id)
    {
        $request->validated();
        $serviceDetail = ServeceDetail::find($id);
        $serviceDetail->update($request->input());
        return redirect()->route('servicedetail')->with('success', 'Successfully updated service detail');
    }

    public function destroy($id)
    {
        $serviceDetail = ServeceDetail::find($id);
        $serviceDetail->delete();
        return redirect()->route('servicedetail')->with('success', 'Successfully deleted service detail');
    }
}
