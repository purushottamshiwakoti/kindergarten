@extends('menu.common')

<div class="container mt-2">
    <div>
        <h3> Social Media Title </h3>
    </div>
    <div class="mb-3">
        <button class="btn btn-success">Edit</button>
    </div>
    <form action="{{ route('socialmedia.store') }}" method="post">
        {{-- <form action=""> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" disabled placeholder="Title here" value="{{ $socialmedia->title }}"
                class="form-control w-50">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="heading" placeholder="Heading here" disabled value="{{ $socialmedia->heading }}"
                class="form-control w-50">
            @if ($errors->has('heading'))
                <span class="text-danger">{{ $errors->first('heading') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Sub Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="subheading" placeholder="Sub Heading here" disabled
                value="{{ $socialmedia->subheading }}" class="form-control w-50">
            @if ($errors->has('subheading'))
                <span class="text-danger">{{ $errors->first('subheading') }}</span>
            @endif

        </div>
        {{-- <input class="btn btn-success" type="submit"> --}}
    </form>

</div>
