@extends('menu.common')

<div class="container">
    <div class="container mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <div>
            <h3 class="text-center">Contact Settings Section</h3>
        </div>
        <form action="{{ route('settings.updatecontact') }}" method="post">
            @csrf
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">contact title <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $contact_title }}" name="contact_title">
                @if ($errors->has('contact_title'))
                    <span class="text-danger">
                        {{ $errors->first('contact_title') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">contact description <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $contact_description }}"
                    name="contact_description">
                @if ($errors->has('contact_description'))
                    <span class="text-danger">
                        {{ $errors->first('contact_description') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">contact phone number <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $contact_phone_number }}"
                    name="contact_phone_number">
                @if ($errors->has('contact_phone_number'))
                    <span class="text-danger">
                        {{ $errors->first('contact_phone_number') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">contact email1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $contact_email1 }}" name="contact_email1">
                @if ($errors->has('contact_email1'))
                    <span class="text-danger">
                        {{ $errors->first('contact_email1') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">contact email2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $contact_email2 }}" name="contact_email2">
                @if ($errors->has('contact_email2'))
                    <span class="text-danger">
                        {{ $errors->first('contact_email2') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label style="text-transform: capitalize" class="form-label">contact mapstreet <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $contact_mapstreet }}"
                    name="contact_mapstreet">
                @if ($errors->has('contact_mapstreet'))
                    <span class="text-danger">
                        {{ $errors->first('contact_mapstreet') }}
                    </span>
                @endif
            </div>
            <input type="submit" value="Save info" class="btn btn-success">
        </form>
    </div>
