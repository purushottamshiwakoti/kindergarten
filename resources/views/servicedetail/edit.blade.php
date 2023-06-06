@extends('menu.common')
{{-- @dd($serviceDetail->id) --}}
@section('content')
    <div class="container">
        <div>
            <h5>Edit Service Detail</h5>
        </div>
        <div>
            <form action="{{ route('servicedetail.update', $serviceDetail->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">Service Detail Name
                        <span class="text-danger">*</span>
                    </label>
                    <input name="servicedetail" class="form-control w-50" value="{{ $serviceDetail->servicedetail }}"
                        type="text" placeholder="Enter Service detail name here">
                    @if ($errors->has('servicedetail'))
                        <span class="text-danger">
                            {{ $errors->first('servicedetail') }}
                        </span>
                    @endif
                </div>
                <input type="button" value="Update" class="btn btn-success ">
            </form>
        </div>
    </div>
@stop
