@extends('menu.common')

<div class="container mt-2">
    <div>
        <h4>Add Acordian</h4>
    </div>
    <div>
        <form action="{{ route('phototextbanner.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title
                    <span class="text-danger">*</span>
                </label>
                <input name="title" placeholder="Enter title here" type="text" value="{{ old('title') }}"
                    class="form-control w-50">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <div>
                    <label class="form-label">Description
                        <span class="text-danger">*</span>

                    </label>

                </div>
                <textarea name="description" placeholder="Enter description here" class="form-control w-50" name=""
                    id="" cols="30" rows="10">
                    {{ old('description') }}
                </textarea>
                @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <input type="submit" class="btn btn-success" value="Add">
        </form>
    </div>
</div>
