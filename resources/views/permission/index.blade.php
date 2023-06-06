@extends('menu.common')

@section('content')
    <div class="container">
        <div class="mt-2">
            <a href="{{ route('permission.create') }}"><button class="btn btn-success">Add</button></a>
        </div>
        <div class="my-2">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $index => $permission)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $permission->name }}</td>
                            <td>
                                <a href="{{ route('permission.destroy', $permission->id) }}">
                                    <button class="btn btn-danger">Delete</button>

                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
