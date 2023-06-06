@extends('menu.common')

@section('content')

    <div class="container mt-3">
        <h3>Update Team Cards</h3>
        <div>
            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
            </div>
            <form action="{{ route('team.update', $ourTeam->id) }}" method="post" enctype="multipart/form-data">
                {{-- <form> --}}
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Title
                        <span class="text-danger">*</span>

                    </label>
                    <input value="{{ $ourTeam->title }}" class="form-control w-50" name="title" type="text"
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
                    <div class="mb-3">
                        <img style="width:50px;height:50px;object-fit:cover;border-radius:50%"
                            src="{{ asset("storage/$ourTeam->image") }}" alt="image" srcset="">
                    </div>
                    <input class="form-control w-50" name="image" type="file" accept="image/*">
                    @if ($errors->has('image'))
                        <span class="text-danger">
                            {{ $errors->first('image') }}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Position
                        <span class="text-danger">*</span>

                    </label>
                    <input placeholder="Enter Position Here" type="text" name="position" class="form-control w-50 "
                        value="{{ $ourTeam->position }}">
                    @if ($errors->has('position'))
                        <span class="text-danger">
                            {{ $errors->first('position') }}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description
                        <span class="text-danger">*</span>

                    </label>
                    <textarea style="height: 200px" name="description" class="form-control w-50 " placeholder="Enter description here">{{ $ourTeam->description }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">
                            {{ $errors->first('description') }}
                        </span>
                    @endif
                </div>




                <input type="submit" value="Update" class="btn btn-success">
            </form>

        </div>
    </div>

@stop
