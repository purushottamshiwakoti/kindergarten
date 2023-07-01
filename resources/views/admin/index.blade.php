@extends('menu.common')
@section('content')
    <div class="container">
        @can('create-users')
            <div class="mt-2">
                <a href="{{ route('admin.create') }}"><button class="btn btn-success">Add</button></a>
            </div>
        @endcan
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if (isset($user->userRole))
                                <td>{{ $user->userRole->name }}</td>
                            @else
                                <td>Null</td>
                            @endif
                            <td>

                                <a href="{{ route('admin.view', $user->id) }}">
                                    <button class="btn btn-primary">View</button></a>
                                @can('edit-users')
                                    <a href="{{ route('admin.edit', $user->id) }}"> <button
                                            class="btn btn-success">Edit</button></a>
                                @endcan

                                @can('delete-users')
                                    <a href="{{ route('admin.destroy', $user->id) }}">
                                        <button class="btn btn-danger">Delete</button></a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
        {!! $users->links() !!}
    </div>
@stop
