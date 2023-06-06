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

        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title <span style="color: red">*</span></label>
                <input type="text" class="form-control w-50" placeholder="enter blog title " name="title"
                    value="{{ old('title') }} " placeholder="Enter title here">
                @if ($errors->has('title'))
                    <span style="color:red">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control w-50" style="height:250px" name="description">{{ old('description') }}</textarea>
                <label>Description <span style="color: red">*</span></label>
                @if ($errors->has('description'))
                    <span style="color:red">{{ $errors->first('description') }}</span>
                @endif


            </div>
            <div class="mb-3">
                <label class="form-label">Image <span style="color: red">*</span></label>
                <input type="file" class="form-control w-50" name="image" accept="image/*">
                @if ($errors->has('image'))
                    <span style="color:red">{{ $errors->first('image') }}</span>
                @endif
            </div>

            <x-input label='Minutes Read' type='number' placeholder='Minutes read here' name='minutes_read' />

            <div class="mb-3">
                <select class="form-select w-50" aria-label="Default select example" name="category_id">
                    @foreach ($category as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                    @if ($errors->has('category_id'))
                        <span style="color:red">{{ $errors->first('category_id') }}</span>
                    @endif
            </div>

            {{-- <option selected>Category</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> --}}
            </select>
    </div>

    <input class="btn btn-success" type="submit">
    </form>

    </div>

@stop
