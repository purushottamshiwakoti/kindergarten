<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('categorypage.viewcategory',compact('category'));
    }
    public function create(){

        return view('categorypage.createcategory');
    }
    public function store(PostCategoryRequest $request){
        $request->validated();
        $category=new Category();
        $category->slug=Str::slug($request->category);
        $category->fill($request->input());
        $category->save();

        return redirect()->route('blog.viewcategory')->with('success','Sucessfully created category');
    }

    public function edit($id){
        $category=Category::find($id);
        return view('categorypage.editcategory',compact('category'));
    }
    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->update($request->input());

        return redirect()->route('blog.viewcategory')->with('success','Sucessfully updated category');
}
public function destroy($id){
    $category=Category::find($id);
    $category->delete();
    return redirect()->route('blog.viewcategory')->with('success','Successfully deleted category');
}



}
