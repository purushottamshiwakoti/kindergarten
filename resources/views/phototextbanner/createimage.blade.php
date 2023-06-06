@extends('menu.common')

<div class="container mt-2">
    <div>
        <h3>Addimage</h3>
    </div>
    <form action="{{ route('phototextbanner.storeimage') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Image
                <span class="text-danger">*</span>
            </label>
            <input type="file" name="image" class="form-control w-50" placeholder="Add image here">
            @if ($errors->has('image'))
                <span class="text-danger">
                    {{ $errors->first('image') }}
                </span>
            @endif
        </div>
        <input type="submit" class="btn btn-success" value="Add">
    </form>
</div>
