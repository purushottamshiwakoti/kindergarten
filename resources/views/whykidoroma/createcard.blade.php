@extends('menu.common')

<div class="container mt-2">
    <div>
        <h3>Create Why Kidoroma Card</h3>
    </div>
    <form action="{{ route('kidoroma.storecard') }}" method="post" enctype="multipart/form-data">
        {{-- <form> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title1" placeholder="Title here" value="{{ old('title1') }}"
                class="form-control w-50">
            @if ($errors->has('title1'))
                <span class="text-danger">{{ $errors->first('title1') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon
                <span class="text-danger">*</span>
            </label>
            <input type="file" accept="image/*" name="image1" placeholder="Title here" class="form-control w-50">
            @if ($errors->has('image1'))
                <span class="text-danger">{{ $errors->first('image1') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Title2
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title2" placeholder="Title here" value="{{ old('title2') }}"
                class="form-control w-50">
            @if ($errors->has('title2'))
                <span class="text-danger">{{ $errors->first('title2') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon2
                <span class="text-danger">*</span>
            </label>
            <input type="file" accept="image/*" name="image2" placeholder="Title here" class="form-control w-50">
            @if ($errors->has('image2'))
                <span class="text-danger">{{ $errors->first('image2') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Title3
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title3" placeholder="Title here" value="{{ old('title3') }}"
                class="form-control w-50">
            @if ($errors->has('title3'))
                <span class="text-danger">{{ $errors->first('title3') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon3
                <span class="text-danger">*</span>
            </label>
            <input type="file" accept="image/*" name="image3" placeholder="Title here" class="form-control w-50">
            @if ($errors->has('image3'))
                <span class="text-danger">{{ $errors->first('image3') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Title4
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title4" placeholder="Title here" value="{{ old('title4') }}"
                class="form-control w-50">
            @if ($errors->has('title4'))
                <span class="text-danger">{{ $errors->first('title4') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon4
                <span class="text-danger">*</span>
            </label>
            <input type="file" accept="image/*" name="image4" placeholder="Title here" class="form-control w-50">
            @if ($errors->has('image4'))
                <span class="text-danger">{{ $errors->first('image4') }}</span>
            @endif

        </div>


        <input class="btn btn-success" type="submit">
    </form>

</div>
