@extends('menu.common')

<div class="container mt-2">
    <div>
        <h3>Create footer Heading</h3>
        <form action="{{ route('footer.update', $footerEdit->id) }}" method="post">

            @csrf
            <div class="mb-3">
                <label class="form-label">Header
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="title" value="{{ $footerEdit->title }}" class="form-control w-50">
                @if ($errors->has('title'))
                    <span class="text-danger">
                        {{ $errors->first('title') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <div>
                    <label for="">Descripion
                        <span class="text-danger">*</span>
                    </label>
                </div>
                <textarea name="description" id="" cols="85" rows="10">
                    {{ $footerEdit->description }}
                </textarea>
                <div>
                    @if ($errors->has('description'))
                        <span class="text-danger">
                            {{ $errors->first('description') }}
                        </span>
                    @endif
                </div>

            </div>
            <input class="btn btn-success" type="submit" value="Update">
        </form>
    </div>

</div>
