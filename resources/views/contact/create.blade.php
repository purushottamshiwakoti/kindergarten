@extends('menu.common')
<div class="container">
    <h2>Create contact page </h2>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Phone Number <span style="color:red">*</span></label>
            <input type="number" name="phone_number" class="form-control w-50" value="{{ old('phone_number') }}"
                placeholder="Enter phone number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">
                    {{ $errors->first('phone_number') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Email1 <span style="color:red">*</span></label>
            <input type="email" name="email1" class="form-control w-50" value="{{ old('email1') }}"
                placeholder="Enter email 1">

            @if ($errors->has('email1'))
                <span class="text-danger">
                    {{ $errors->first('email1') }}
                </span>
            @endif


        </div>
        <div class="mb-3">
            <label class="form-label">Email2 <span style="color:red">*</span></label>
            <input type="email" name="email2" class="form-control w-50" value="{{ old('email2') }}"
                placeholder="Enter email 2">
            @if ($errors->has('email2'))
                <span class="text-danger">
                    {{ $errors->first('email2') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Map street <span style="color:red">*</span></label>
            <input type="text" name="map_street" class="form-control w-50" placeholder="Enter map street"
                value="{{ old('map_street') }}">
            @if ($errors->has('map_street'))
                <span class="text-danger">
                    {{ $errors->first('map_street') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Add">
        </div>
    </form>
</div>
