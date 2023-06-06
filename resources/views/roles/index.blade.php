@extends('menu.common')

@section('content')
    <div class="container">
        <div class="mt-2">
            <a href="{{ route('role.create') }}"><button class="btn btn-success">Add</button></a>
        </div>
        @if ($message = Session::get('success'))
            <div class=" my-2 alert alert-success">
                {{ $message }}
            </div>
        @endif
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Role</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $index => $role)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $role->role }}</td>
                            {{-- <td></td> --}}
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@stop
