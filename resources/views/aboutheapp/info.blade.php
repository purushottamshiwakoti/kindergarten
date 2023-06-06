@extends('menu.common')

<div class="container mt-2">
    {{-- <a href="{{ route('aboutapp.createinfo') }}">
        <button class="btn btn-success">Create</button>
    </a> --}}

    <div>
        <h2>About The App Info</h2>
    </div>

    <form action="{{ route('aboutapp.storeinfo') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">App Rating
                <span class="text-danger">*</span>
                <span class="btn btn-success ms-2">Edit</span>
            </label>
            <input type="text" name="app_rating" disabled placeholder="Enter App Rating here"
                value="{{ $info->app_rating }}" class="form-control w-50">
            @if ($errors->has('app_rating'))
                <span class="text-danger">{{ $errors->first('app_rating') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Active Users
                <span class="text-danger">*</span>
            </label>
            <input type="text" disabled name="active_users" placeholder="Enter Active Users here"
                value="{{ $info->active_users }}" class="form-control w-50">
            @if ($errors->has('active_users'))
                <span class="text-danger">{{ $errors->first('active_users') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Protection Plan
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="protection_plan" placeholder="Enter Protection Plan here"
                value="{{ $info->protection_plan }}" disabled class="form-control w-50">
            @if ($errors->has('protection_plan'))
                <span class="text-danger">{{ $errors->first('protection_plan') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label class="form-label">Investment Plan
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="investment_plan" placeholder="Enter Invvestment Plan here"
                value="{{ $info->investment_plan }}" disabled class="form-control w-50">
            @if ($errors->has('investment_plan'))
                <span class="text-danger">{{ $errors->first('investment_plan') }}</span>
            @endif

        </div>
        {{-- <input type="submit" value="Add" class="btn btn-success"> --}}

    </form>
