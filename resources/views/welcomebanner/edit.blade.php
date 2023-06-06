@extends('menu.common')

<div class="container mt-2">
    <h3>Add Heading For Banner</h3>
    <form action="{{ route('headerbanner.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Sub Title
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="subtitle" placeholder="SubTitle here" value="{{ old('subtitle') }}"
                class="form-control w-50">
            @if ($errors->has('subtitle'))
                <span class="text-danger">{{ $errors->first('subtitle') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="heading" placeholder="Heading here" value="{{ old('heading') }}"
                class="form-control w-50">
            @if ($errors->has('heading'))
                <span class="text-danger">{{ $errors->first('heading') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Paragraph
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="paragraph" placeholder="Paragraph here" value="{{ old('paragraph') }}"
                class="form-control w-50">
            @if ($errors->has('paragraph'))
                <span class="text-danger">{{ $errors->first('paragraph') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Button 1 Name
                <span class="text-danger">*</span>

            </label>
            <input type="text" name="button1" placeholder="First button name here" value="{{ old('button1') }}"
                class="form-control w-50">
            @if ($errors->has('button1'))
                <span class="text-danger">{{ $errors->first('button1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 1 Url
                <span class="text-danger">*</span>
            </label>
            <input type="url" name="buttonurl1" placeholder="First Button Url Here" value="{{ old('buttonurl1') }}"
                class="form-control w-50">
            @if ($errors->has('buttonurl1'))
                <span class="text-danger">{{ $errors->first('buttonurl1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 Name
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="button2" placeholder="Second Button Name" value="{{ old('button2') }}"
                class="form-control w-50">
            @if ($errors->has('button2'))
                <span class="text-danger">{{ $errors->first('button2') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 Url
                <span class="text-danger">*</span>

            </label>
            <input type="url" name="buttonurl2" placeholder="Second Button Url" value="{{ old('buttonurl2') }}"
                class="form-control w-50">
            @if ($errors->has('buttonurl2'))
                <span class="text-danger">{{ $errors->first('buttonurl2') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Image 1
                <span class="text-danger">*</span>
            </label>
            <input type="file" name="image1" accept="image/*" class="form-control w-50">
            @if ($errors->has('image1'))
                <span class="text-danger">{{ $errors->first('image1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Image 2
                <span class="text-danger">*</span>
            </label>
            <input type="file" name="image2" accept="image/*" class="form-control w-50">
            @if ($errors->has('image2'))
                <span class="text-danger">{{ $errors->first('image2') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Image 3
                <span class="text-danger">*</span>
            </label>
            <input type="file" name="image3" accept="image/*" class="form-control w-50">
            @if ($errors->has('image3'))
                <span class="text-danger">{{ $errors->first('image3') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Image 4
                <span class="text-danger">*</span>
            </label>
            <input type="file" name="image4" accept="image/*" class="form-control w-50">
            @if ($errors->has('image4'))
                <span class="text-danger">{{ $errors->first('image4') }}</span>
            @endif
        </div>
        <input type="submit" class="btn btn-success">


    </form>


</div>
