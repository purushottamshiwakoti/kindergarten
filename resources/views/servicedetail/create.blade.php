@extends('menu.common')

@section('content')
    <div class="container">
        <div>
            <h5>Create Service Detail</h5>
        </div>
        <div>
            <form action="{{ route('servicedetail.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">Service Detail Name
                        <span class="text-danger">*</span>
                    </label>
                    <input name="servicedetail" class="form-control w-50" type="text"
                        placeholder="Enter Service detail name here">
                    @if ($errors->has('servicedetail'))
                        <span class="text-danger">
                            {{ $errors->first('servicedetail') }}
                        </span>
                    @endif
                </div>
                <input type="submit" value="Add" class="btn btn-success ">
            </form>
        </div>
    </div>
@stop
