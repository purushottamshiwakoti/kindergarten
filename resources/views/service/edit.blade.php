@extends('menu.common')

@section('content')
    <div class="container">
        <h3>Edit</h3>


        <div>
            <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">Title
                        <span class="text-danger">*</span>
                    </label>
                    <input class="form-control w-50" name="title" placeholder="Enter titile here" type="text"
                        value="{{ $service->title }}">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Description
                        <span class="text-danger">*</span>
                    </label>
                    <div class="">
                        <textarea class="form-control w-50" name="description" id="editor">{!! $service->description !!}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Category
                        <span class="text-danger">*</span>
                    </label>

                    <select name="servicedetail_id" class="form-select" aria-label="Default select example">
                        @foreach ($serviceDetail as $service)
                            <option value="{{ $service->id }}">{{ $service->servicedetail }}</option>
                        @endforeach

                    </select>
                    @if ($errors->has('servicedetail_id'))
                        <span class="text-danger">{{ $errors->first('servicedetail_id') }}</span>
                    @endif
                </div>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: `{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}`
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@stop
