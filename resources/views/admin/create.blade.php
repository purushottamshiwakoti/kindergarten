@extends('menu.common')

@section('content')

    <div class="container">
        <div class="my-3">
            <a href="{{ route('admin.home') }}"><button class="btn btn-success">Go Back</button></a>
        </div>
        <h3>Create Users</h3>
        <form action="{{ route('admin.store') }}" method="post">
            @csrf
            <label class="form-label" for="">Name</label>
            <input name="name" class="form-control w-50" type="text" placeholder="Enter name">
            <label class="form-label" for="">Email</label>
            <input name="email" class="form-control w-50" type="email" placeholder="Enter email">
            <label class="form-label" for="">Password</label>
            <input name="password" class="form-control w-50" type="password" placeholder="Password">
            <label class="form-label" for="">Role</label>
            <div>
                <select name="role_id" class="form-select w-50" aria-label="Default select example">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            <label class="form-label" for="">Permission</label>
            <div style=" display: flex;
            flex-wrap: wrap;" class="checkbox-group w-50">
                @foreach ($permissions as $permission)
                    <div style="" class=" ms-3  form-check">

                        <input name="permission_id[]" class="form-check-input" type="checkbox" value="{{ $permission->id }}"
                            id="permission_{{ $permission->id }}">
                        <label class="form-label" class="form-check-label  for="flexCheckDefault">
                            {{ $permission->name }}
                        </label class="form-label">

                    </div>
                @endforeach
            </div>
            {{-- <div class="form-check">
                <input name="permission" class="form-check-input" type="checkbox" value="2" id="flexCheckChecked"
                    checked>
                <label class="form-label" class="form-check-label class="form-label"" for="flexCheckChecked">
                    Checked checkbox
                </label class="form-label">
            </div> --}}

            <input type="submit" class="btn btn-success" value="Add">

        </form>
    </div>

@stop
