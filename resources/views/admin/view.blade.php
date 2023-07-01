@extends('menu.common')
{{-- @dd($permissions) --}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>Name::{{ $user->name }}</p>
                <p>Email::{{ $user->email }}</p>
                <p>Role::{{ $user->userRole->name }}</p>
                <p>Permission::

                    @foreach ($permissions as $permission)
                        {{ $permission->name }}
                    @endforeach

                </p>
            </div>
        </div>
    </div>

@stop
