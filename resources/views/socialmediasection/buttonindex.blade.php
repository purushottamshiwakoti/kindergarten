@extends('menu.common')

<div class="container">
    <div class="mb-3 mt-3">
        <h4> Buttons</h4>
    </div>
    <div>
        <button class="btn btn-success">Edit</button>
    </div>
    {{-- <form action="{{ route('socialmedia.storebutton') }}" method="post"> --}}
    <form>
        @csrf
        <div class="mb-3">
            <label class="form-label">Button 1 Name
                <span class="text-danger">*</span>

            </label>
            <input type="text" name="button1" disabled placeholder="First button name here"
                value="{{ $socialmediaButton->button1 }}" class="form-control w-50">
            @if ($errors->has('button1'))
                <span class="text-danger">{{ $errors->first('button1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 1 Url
                <span class="text-danger">*</span>
            </label>
            <input type="url" name="buttonurl1" disabled placeholder="First Button Url Here"
                value="{{ $socialmediaButton->buttonurl1 }}" class="form-control w-50">
            @if ($errors->has('buttonurl1'))
                <span class="text-danger">{{ $errors->first('buttonurl1') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 Name
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="button2" disabled placeholder="Second Button Name"
                value="{{ $socialmediaButton->button2 }}" class="form-control w-50">
            @if ($errors->has('button2'))
                <span class="text-danger">{{ $errors->first('button2') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 Url
                <span class="text-danger">*</span>

            </label>
            <input type="url" name="buttonurl2" disabled placeholder="Second Button Url"
                value="{{ $socialmediaButton->buttonurl2 }}" class="form-control w-50">
            @if ($errors->has('buttonurl2'))
                <span class="text-danger">{{ $errors->first('buttonurl2') }}</span>
            @endif
        </div>
        {{-- <input type="submit" value="Add" class="btn btn-success"> --}}
    </form>
</div>
