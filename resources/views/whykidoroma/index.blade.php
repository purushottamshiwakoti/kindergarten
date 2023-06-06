@extends('menu.common')

<div class="container mt-2">
    <h3> Title For Why Kidoroma Section</h3>
    <form>
        <div class="mb-3">
            <label class="form-label">Sub Title
                <span class="text-danger">*</span>
                <span>
                    <button class="btn btn-success">Edit</button>
                </span>
            </label>
            <input type="text" name="subtitle" placeholder="SubTitle here" disabled
                value="{{ $kidoromaTitle->subtitle }}" class="form-control w-50">
            @if ($errors->has('subtitle'))
                <span class="text-danger">{{ $errors->first('subtitle') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Heading
                <span class="text-danger">*</span>
            </label>
            <input type="text" disabled name="heading" placeholder="Heading here"
                value="{{ $kidoromaTitle->heading }}" class="form-control w-50">
            @if ($errors->has('heading'))
                <span class="text-danger">{{ $errors->first('heading') }}</span>
            @endif

        </div>



    </form>


</div>
