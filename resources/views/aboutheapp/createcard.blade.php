@extends('menu.common')

<div class="container mt-2">
    <div>
        <h3>Create Card</h3>
    </div>
    <form action="{{ route('aboutapp.storecard') }}" method="post" enctype="multipart/form-data">
        {{-- <form> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" placeholder="Title here" value="{{ old('title') }}"
                class="form-control w-50">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon
                <span class="text-danger">*</span>
            </label>
            <input type="file" accept="image/*" name="image" placeholder="Title here" class="form-control w-50">
            @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif

        </div>


        <input class="btn btn-success" type="submit">
    </form>

</div>
