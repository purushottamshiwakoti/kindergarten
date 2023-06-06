@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h4>Edit Categories</h4>

        <form action="{{ route('blog.updatecategory', $category->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label ">Category <span style="color: red">*</span></label>
                <input type="text" class="form-control w-50" placeholder="Add Category here " name="category"
                    value="{{ $category->category }} ">
                @if ($errors->has($category))
                    <span style="color:red">{{ $errors->first($category) }}</span>
                @endif

            </div>
            <button class="btn btn-success">Update</button>
        </form>

    </div>
@stop
