@extends('menu.common')
<div class="container mt-2">
    <h2>Demo Page Settings </h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <form action="{{ route('demo.update') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title <span style="color:red">*</span></label>
            <input type="text" name="title" class="form-control w-50" placeholder="Enter title "
                value="{{ $title }}">
            @if ($errors->has('title'))
                <span class="text-danger">
                    {{ $errors->first('title') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 1 <span style="color:red">*</span></label>
            <input type="text" name="button1" class="form-control w-50" placeholder="Enter button1 name "
                value="{{ $button1 }}">
            @if ($errors->has('button1'))
                <span class="text-danger">
                    {{ $errors->first('button1') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 2 <span style="color:red">*</span></label>
            <input type="text" name="button2" class="form-control w-50" placeholder="Enter button2 name "
                value="{{ $button2 }}">
            @if ($errors->has('button2'))
                <span class="text-danger">
                    {{ $errors->first('button2') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Button 3 <span style="color:red">*</span></label>
            <input type="text" name="button3" class="form-control w-50" placeholder="Enter button3 name "
                value="{{ $button3 }}">
            @if ($errors->has('button3'))
                <span class="text-danger">
                    {{ $errors->first('button3') }}
                </span>
            @endif
        </div>

        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Save info">
        </div>
    </form>
</div>
