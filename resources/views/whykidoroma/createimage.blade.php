@extends('menu.common')

<div class="container mt-2">
    <h1>Create why Kidoroma Images</h1>
    <div>
        <form action="{{ route('kidoroma.storeimage') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Image1
                    <span class="text-danger">*</span>
                </label>
                <input type="file" accept="image/*" name="image1" placeholder="Image here" class="form-control w-50">
                @if ($errors->has('image1'))
                    <span class="text-danger">{{ $errors->first('image1') }}</span>
                @endif

            </div>
            <div class="mb-3">
                <label class="form-label">Image2
                    <span class="text-danger">*</span>
                </label>
                <input type="file" accept="image/*" name="image2"
                    class="form-control w-50">
                @if ($errors->has('image2'))
                    <span class="text-danger">{{ $errors->first('image2') }}</span>
                @endif

            </div>
            <div class="mb-3">
                <label class="form-label">Image3
                    <span class="text-danger">*</span>
                </label>
                <input type="file" accept="image/*" name="image3" placeholder="Title here"
                    class="form-control w-50">
                @if ($errors->has('image3'))
                    <span class="text-danger">{{ $errors->first('image3') }}</span>
                @endif

            </div>
            <div class="mb-3">
                <label class="form-label">Image4
                    <span class="text-danger">*</span>
                </label>
                <input type="file" accept="image/*" name="image4" placeholder="Title here"
                    class="form-control w-50">
                @if ($errors->has('image1'))
                    <span class="text-danger">{{ $errors->first('image4') }}</span>
                @endif

            </div>
            <input type="submit" class="btn btn-success">
        </form>
    </div>

</div>
