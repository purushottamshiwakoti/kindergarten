@extends('menu.common')

<div class="container">
    <div>
        <h2>Create Banner</h2>
    </div>
    <form action="{{ route('aboutapp.storebanner') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Banner
                <span class="text-danger">*</span>
            </label>
            <input type="file" accept="image/*" name="image" placeholder="Title here" class="form-control w-50">
            @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif

        </div>
        <input type="submit" class="btn btn-success" value="Add">
    </form>
</div>
