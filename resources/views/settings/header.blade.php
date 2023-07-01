@extends('menu.common')
@section('content')
<div class="container">
    <div class="container mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <div>
            <h3 class="text-center">Header Settings Section</h3>
        </div>
        <form action="{{ route('settings.updateheader') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">Header Image <span
                        class="text-danger">*</span></label>
                <input type="file" accept="image/*" class="form-control w-50" name="header_image">
                @if ($errors->has('header_image'))
                    <span class="text-danger">
                        {{ $errors->first('header_image') }}
                    </span>
                @endif
            </div>
            <div class="mt-2">
                <img src="{{ $header_image }}" style="width: 50px; height:50px, object-fit: cover;" alt="header image">
            </div>

            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">headerbutton1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $headerbutton1 }}" name="headerbutton1">
                @if ($errors->has('headerbutton1'))
                    <span class="text-danger">
                        {{ $errors->first('headerbutton1') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">headerbutton2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $headerbutton2 }}" name="headerbutton2">
                @if ($errors->has('headerbutton2'))
                    <span class="text-danger">
                        {{ $errors->first('headerbutton2') }}
                    </span>
                @endif
            </div>
            <input type="submit" value="Save info" class="btn btn-success">
        </form>
    </div>
</div>
@endsection

