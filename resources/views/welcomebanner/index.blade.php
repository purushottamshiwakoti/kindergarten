@extends('menu.common')
{{-- @dd($headerBanner) --}}

<div class="container mt-2">
    <div>
        <a href="{{ route('headerbanner.create') }}">
            <button class="btn btn-success mb-2">Edit</button>
        </a>
    </div>
    <form action="{{ route('headerbanner.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Sub Title
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="subtitle" placeholder="SubTitle here" disabled
                value="{{ $headerBanner->subtitle }}" class="form-control w-50">
            @if ($errors->has('subtitle'))
                <span class="text-danger">{{ $errors->first('subtitle') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="heading" placeholder="Heading here" disabled
                value="{{ $headerBanner->heading }}" class="form-control w-50">
            @if ($errors->has('heading'))
                <span class="text-danger">{{ $errors->first('heading') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Paragraph
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="paragraph" placeholder="Paragraph here" disabled
                value="{{ $headerBanner->paragraph }}" class="form-control w-50">
            @if ($errors->has('paragraph'))
                <span class="text-danger">{{ $errors->first('paragraph') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Button 1 Name
                <span class="text-danger">*</span>

            </label>
            <input type="text" name="button1" placeholder="First button name here"
                value="{{ $headerBanner->button1 }}" disabled class="form-control w-50">
            @if ($errors->has('button1'))
                <span class="text-danger">{{ $errors->first('button1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 1 Url
                <span class="text-danger">*</span>
            </label>
            <input type="url" name="buttonurl1" disabled placeholder="First Button Url Here"
                value="{{ $headerBanner->buttonurl1 }}" class="form-control w-50">
            @if ($errors->has('buttonurl1'))
                <span class="text-danger">{{ $errors->first('buttonurl1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 Name
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="button2" disabled placeholder="Second Button Name"
                value="{{ $headerBanner->button2 }}" class="form-control w-50">
            @if ($errors->has('button2'))
                <span class="text-danger">{{ $errors->first('button2') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 Url
                <span class="text-danger">*</span>

            </label>
            <input type="url" name="buttonurl2" placeholder="Second Button Url"
                value="{{ $headerBanner->buttonurl2 }}" disabled class="form-control w-50">
            @if ($errors->has('buttonurl2'))
                <span class="text-danger">{{ $errors->first('buttonurl2') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Image 1
                <span class="text-danger">*</span>
            </label>
            <img style="width: 50px; height:50px; "
                src="{{ asset("storage/headerBannerImage/$headerBanner->image1") }}" alt="bannerimg1">
        </div>
        <div class="mb-3">
            <label class="form-label">Image 2
                <span class="text-danger">*</span>
            </label>
            <img style="width: 50px; height:50px; "
                src="{{ asset("storage/headerBannerImage/$headerBanner->image2") }}" alt="bannerimg2">

        </div>
        <div class="mb-3">
            <label class="form-label">Image 3
                <span class="text-danger">*</span>
            </label>
            <img style="width: 50px; height:50px; "
                src="{{ asset("storage/headerBannerImage/$headerBanner->image3") }}" alt="bannerimg3">

        </div>
        <div class="mb-3">
            <label class="form-label">Image 4
                <span class="text-danger">*</span>
            </label>
            <img style="width: 50px; height:50px; "
                src="{{ asset("storage/headerBannerImage/$headerBanner->image4") }}" alt="bannerimg4">

        </div>
        {{-- <input type="submit" class="btn btn-success"> --}}


    </form>

</div>
