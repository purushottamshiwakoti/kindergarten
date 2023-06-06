@extends('menu.common')

@section('content')

    <div class="container">
        <div class="my-3">
            <a href="{{ route('permission.index') }}"> <button class="btn btn-success">Back</button></a>
        </div>
        <div>
            <h3>Create Permission</h3>
        </div>
        <div>
            <form action="{{ route('permission.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Permission Name</label>
                    <input class="form-control w-50" name="name" type="text" placeholder="Permission Name">
                </div>
                <input type="submit" class="btn btn-success" value="Add">
            </form>
        </div>
    </div>

@stop
