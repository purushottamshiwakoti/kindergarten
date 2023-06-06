{{-- @extends('adminlte::page')

@section('title', 'Create Blog')

@section('content_header')
    <h1>Add Blog</h1>
@stop

@section('content')
    <p>Create blogs !</p>
@stop --}}

@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        {{-- @dd($post) --}}

        <h4 style="text-align: center">Update Blogs</h4>
        <form action="{{ route('blog.update', $post->id) }}" method="post" enctype="multipart/form-data">
            {{-- <form> --}}
            @csrf
            <div class="mb-3">
                <label class="form-label">Title <span style="color: red">*</span></label>
                <input type="text" class="form-control w-50" placeholder="enter blog title " name="title"
                    value="{{ $post->title }} " placeholder="Enter title here">
                @if ($errors->has('title'))
                    <span style="color:red">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control w-50" style="height:250px" name="description">{{ $post->description }}</textarea>
                <label>Description <span style="color: red">*</span></label>
                @if ($errors->has('description'))
                    <span style="color:red">{{ $errors->first('description') }}</span>
                @endif


            </div>
            <div class="mb-3">
                <img src="{{ asset("storage/blogsImage/$post->image") }}" alt="image" style="width:50px;height:50px">

            </div>
            {{-- <input type="text" value="{{ asset("storage/blogsImage/$post->image") }}"> --}}
            <div class="mb-3">
                <label class="form-label">Update Image <span style="color: red">*</span></label>
                <input type="file" class="form-control w-50" name="image" accept="image/*" disabled>
                @if ($errors->has('image'))
                    <span style="color:red">{{ $errors->first('image') }}</span>
                @endif
            </div>

            <input class="btn btn-success" type="submit">
        </form>

    </div>

@stop
