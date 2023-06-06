@extends('menu.common')

@section('content')
    <div class="container mt-2">
        <h3>This is error page</h3>
        <div class="mt-2">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
        <form action="{{ route('error.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title <span style="color:red">*</span></label>
                <input type="text" name="error_title" class="form-control w-50" placeholder="Enter title "
                    value="{{ $error_title }}">
                @if ($errors->has('error_title'))
                    <span class="text-danger">
                        {{ $errors->first('error_title') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Button <span style="color:red">*</span></label>
                <input type="text" name="error_button" class="form-control w-50" placeholder="Enter button name "
                    value="{{ $error_button }}">
                @if ($errors->has('error_button'))
                    <span class="text-danger">
                        {{ $errors->first('error_button') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Image <span style="color:rgb(255, 0, 0)">*</span></label>
                <input type="file" name="error_image" class="form-control w-50">
                @if ($errors->has('error_image'))
                    <span class="text-danger">
                        {{ $errors->first('error_image') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $error_image }}" style="width: 50px; height:50px, object-fit: cover;" alt="image">
                </div>
            </div>
            <input type="submit" value="Save info" class="btn btn-success">
        </form>
    </div>
@stop
