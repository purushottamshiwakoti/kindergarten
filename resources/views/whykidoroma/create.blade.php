@extends('menu.common')

<div class="container mt-2">
    <h3>Add Title For Why Kidoroma Section</h3>
    <form action="{{ route('kidoroma.store') }}" method="post">
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

        <input type="submit" class="btn btn-success">


    </form>


</div>
