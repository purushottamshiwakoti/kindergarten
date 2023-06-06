<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Settings\ContactSettings;
use App\Settings\HeaderSeetings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class BlogController extends Controller
{
    public function index(){
        $category=Category::all();
        $post=Post::latest()->paginate(7);
        return view('blogpage.index',compact('post','category'));
    }

    public function create(){
        $category=Category::all();
        return view('blogpage.create',compact('category'));
    }

    public function view(){
        $post=Post::paginate(5);
        return view('blogpage.view',compact('post'));
    }
    public function store(StorePostRequest $request){
        $request->validated();
        $image=$request->file('image');
        $filename=time()."blog.".$image->getClientOriginalExtension();
        $resizeBlogImage=Image::make($image)->fit(996,2048)->encode();
        $resizeBlogDetailImage=Image::make($image)->fit(1440,402)->encode();
        Storage::put("blogsImage/{$filename}",$resizeBlogImage);
        Storage::put("blogsDetailImage/{$filename}",$resizeBlogDetailImage);
        $path=$filename;
        $url=($path);
        $post=New Post;
        $post->image=$url;
        $post->slug=Str::slug($request->title);
        $post->fill($request->input());
        $post->save();
        return redirect()->route('blog.view')->with('success','Sucessfully added blog post');

    }

    public function edit(Request $request,$id){
        $post=Post::find($id);
        return view('blogpage.edit',compact('post'));
    }

    public function update(Request $request,$id){
        $post=Post::find($id);
        $post->update($request->input());

        return redirect()->route('blog.view')->with('success','Successfully updated post');
    }public function destroy($id){
        $post=Post::find($id);
        if($post->image){
            $imagePath=str_replace('storage/','',$post->image);
            Storage::delete($imagePath);
           }

           $post->delete();
        return redirect()->route('blog.view')->with('success','Successfully deleted post');
    }

    public function blogdetails($slug){
        $post=Post::where('slug',$slug)->first();
        $blogs=Post::all();
        $category=Category::all();

        return view('blogpage.blogdetails',compact('post','category','blogs'));
    }

    public function category($slug){
        $category=Category::all();
        $posts = Category::where('slug', $slug)->first();
        $blogPosts=Post::where('category_id',$posts->id)->paginate(5);
        return view('blogpage.categorywiseblog', compact('blogPosts','category'));

    }




}
