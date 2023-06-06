@extends('menu.common')

<div class="container mt-2">
    <div class="d-flex">
        <h3> Title </h3>
        <span class="ms-3">
            <button class="BTN BTN-SUCCESS">Edit</button>
        </span>
    </div>
    <form action="">
        <div class="mb-3">
            <label class="form-label">Title
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" disabled placeholder="Title here" value="{{ $aboutAppTitle->title }}"
                class="form-control w-50">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="heading" disabled placeholder="Heading here"
                value="{{ $aboutAppTitle->heading }}" class="form-control w-50">
            @if ($errors->has('heading'))
                <span class="text-danger">{{ $errors->first('heading') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Sub Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="subheading" disabled placeholder="Sub Heading here"
                value="{{ $aboutAppTitle->subheading }}" class="form-control w-50">
            @if ($errors->has('subheading'))
                <span class="text-danger">{{ $errors->first('subheading') }}</span>
            @endif

        </div>
        {{-- <input class="btn btn-success" type="submit"> --}}
    </form>

</div>
