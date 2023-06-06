@extends('menu.common')
{{-- @dd($image) --}}

<div class="container mt-2">
    <div>
        <label for="" class="form-label">Banner Image</label>

        <div>
            <img style="width: 100px;height:100px" src="{{ asset("storage/$image->image") }}" alt=" banner image">
        </div>
        <span class="">
            <button class="btn btn-success mt-2">Edit</button>
        </span>
    </div>
    <div class="mt-3">
        <a href="{{ route('phototextbanner.create') }}">
            <button class="btn btn-success">Add Arcodian</button>

        </a>
    </div>
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arcodian as $index => $arcodians)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>
                        @if (Str::length($arcodians->title) > 30)
                            {{ Str::substr($arcodians->title, 0, 30) . '...' }}
                        @else
                            {{ $arcodians->title }}
                        @endif
                    </td>
                    <td>
                        @if (Str::length($arcodians->description) > 50)
                            {{ Str::substr($arcodians->description, 0, 50) . '...' }}
                        @else
                            {{ $arcodians->description }}
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-primary">View</button>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
