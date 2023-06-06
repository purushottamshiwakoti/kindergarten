<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\ServeceDetail;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(8);


        return view('service.index', compact('services'));
    }

    public function create()
    {
        $serviceDetail = ServeceDetail::all();
        return view('service.create', compact('serviceDetail'));
    }

    public function ckeditor(Request $request)
    {
        if ($request->hasFile('upload'));
        $uploaedImage = $request->file('upload');
        $filename = time() . "CkEditorImages." . $uploaedImage->getClientOriginalExtension();
        $path = Storage::putFileAs("CKEditorImages", $uploaedImage, $filename);
        $url = asset("storage/$path");

        return response()->json(['fileName' => $filename, 'uploaded' => 1, 'url' => $url]);
    }

    public function store(StoreServiceRequest $request)
    {
        // dd($request->all());
        $request->validated();
        $services = new Service;
        $services->slug = $request->input('title');
        $services->fill($request->all());
        // dd($services);
        $services->save();

        return redirect()->route('service')->with('success', 'Sucessfully created service page');
    }
    public function edit($id)
    {
        $serviceDetail = ServeceDetail::all();
        $service = Service::find($id);
        return view('service.edit', compact('serviceDetail', 'service'));
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service')->with('success', 'Sucessfully deleted service page');
    }
    public function update(StoreServiceRequest $request, $id)
    {
        $serviceUpdate = Service::find($id);
        $serviceUpdate->update($request->all());
        return redirect()->route('service')->with('success', 'Sucessfully edited service page');
    }
}
