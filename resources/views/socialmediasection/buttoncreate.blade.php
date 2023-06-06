@extends('menu.common')

<div class="container">
    <div class="mb-3 mt-3">
        <h4>Create Buttons</h4>
    </div>
    <form action="{{ route('socialmedia.storebutton') }}" method="post">
        @csrf
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
        <input type="submit" value="Add" class="btn btn-success">
    </form>
</div>
