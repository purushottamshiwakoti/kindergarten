@extends('menu.common')

<div class="container mt-2">
    <div>
        <h3> Why Kidoroma Card</h3>
    </div>
    <form action="{{ route('kidoroma.storecard') }}" method="post" enctype="multipart/form-data">
        {{-- <form> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title1
                <span class="text-danger">*</span>
                <span><button class="btn btn-success">Edit</button></span>
            </label>
            <input type="text" name="title1" placeholder="Title here" disabled value="{{ $kidoromacard->title1 }}"
                class="form-control w-50">
            @if ($errors->has('title1'))
                <span class="text-danger">{{ $errors->first('title1') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon1
                <span class="text-danger">*</span>
            </label>
            <img src="{{ asset("storage/$kidoromacard->image1") }}" alt="icon1">

        </div>
        <div class="mb-3">
            <label class="form-label">Title2
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title2" disabled placeholder="Title here" value="{{ $kidoromacard->title2 }}"
                class="form-control w-50">
            @if ($errors->has('title2'))
                <span class="text-danger">{{ $errors->first('title2') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon2
                <span class="text-danger">*</span>
            </label>
            <img src="{{ asset("storage/$kidoromacard->image2") }}" alt="icon2">

        </div>
        <div class="mb-3">
            <label class="form-label">Title3
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title3" disabled placeholder="Title here" value="{{ $kidoromacard->title3 }}"
                class="form-control w-50">
            @if ($errors->has('title3'))
                <span class="text-danger">{{ $errors->first('title3') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon3
                <span class="text-danger">*</span>
            </label>
            <img src="{{ asset("storage/$kidoromacard->image3") }}" alt="icon3">

        </div>
        <div class="mb-3">
            <label class="form-label">Title4
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="title4" disabled placeholder="Title here" value="{{ $kidoromacard->title4 }}"
                class="form-control w-50">
            @if ($errors->has('title4'))
                <span class="text-danger">{{ $errors->first('title4') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Icon4
                <span class="text-danger">*</span>
            </label>
            <img src="{{ asset("storage/$kidoromacard->image4") }}" alt="icon4">

        </div>


    </form>

</div>
