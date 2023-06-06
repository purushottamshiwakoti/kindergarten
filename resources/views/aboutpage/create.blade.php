@extends('menu.common')

@section('content')

    <div class="container mt-3">
        <h3>Create About Section</h3>
        <div>
            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
            </div>
            <form action="{{ route('abouthome.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Title
                        <span class="text-danger">*</span>

                    </label>
                    <input value="{{ old('title') }}" class="form-control w-50" name="title" type="text"
                        placeholder="Enter title here">
                    @if ($errors->has('title'))
                        <span class="text-danger">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image
                        <span class="text-danger">*</span>

                    </label>
                    <input class="form-control w-50" name="image" type="file" accept="image/*">
                    @if ($errors->has('image'))
                        <span class="text-danger">
                            {{ $errors->first('image') }}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description
                        <span class="text-danger">*</span>

                    </label>
                    <textarea style="height: 200px" name="description" class="form-control w-50 ">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">
                            {{ $errors->first('description') }}
                        </span>
                    @endif
                </div>




                <input type="submit" value="Add" class="btn btn-success">
            </form>

        </div>
    </div>

@stop
