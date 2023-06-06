@extends('menu.common')

@section('content')
    <div class="container">
        <div>
            <h4>About Page Settings</h4>
        </div>
        <div class="mx-3">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

        </div>
        <form action="{{ route('abouthome.settingsupdate') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="form-label">Title
                    <span class="text-danger">*</span>
                </label>
                <input name="about_title" type="text" class="form-control w-50" value="{{ $about_title }}">
                @if ($errors->has('about_title'))
                    <span class="text-danger">{{ $errors->first('about_title') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="form-label">Description
                    <span class="text-danger">*</span>

                </label>
                <input name="about_description" type="text" class="form-control w-50" value="{{ $about_description }}">
                @if ($errors->has('about_description'))
                    <span class="text-danger">{{ $errors->first('about_description') }}</span>
                @endif
            </div>
            <input type="submit" class="btn btn-success" value="Save Info">

        </form>
    </div>
@stop
