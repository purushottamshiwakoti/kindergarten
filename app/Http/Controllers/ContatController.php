<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostContactRequest;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class ContatController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $menu = Menu::where('slug', 'header')->first();
        $category = MenuItem::tree()->where('menu_id', $menu->id);
        return view('contact.index', compact('contact', 'category'));
    }
    // public function create(Request $request){
    public function create()
    {
        return view('contact.create');
    }
    public function store(PostContactRequest $request)
    {
        // dd("All good man");
        $request->validated();
        $contact = new Contact;
        $contact->fill($request->all());
        $contact->save();

        return redirect()->route('contact')->with("sucess", "Contact created successsfully");
    }
    public function edit($id)
    {
        $contact = Contact::find($id)->first();
        return view('contact.edit', compact('contact'));
    }
    public function update(PostContactRequest $request, $id)
    {
        $request->validated();
        $update = Contact::find($id);
        $update->update($request->all());

        return redirect()->route('contact')->with('sucess', 'successfully updated contact');
    }
    public function master()
    {
        $contact = Contact::first();
        return view("layouts.master", compact('contact'));
    }
}
