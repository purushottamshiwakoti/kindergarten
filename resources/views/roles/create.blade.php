@extends('menu.common')

@section('content')

    <div class="container">
        <div class="my-3">
            <a href="{{ route('role.index') }}"> <button class="btn btn-success">Back</button></a>
        </div>
        <div>
            <h3>Create Roles</h3>
        </div>
        <div>
            <form action="{{ route('role.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">RoleName</label>
                    <input class="form-control w-50" name="role" type="text" placeholder="Rolename">
                </div>
                <input type="submit" class="btn btn-success" value="Add">
            </form>
        </div>
    </div>

@stop
