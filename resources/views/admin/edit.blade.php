@extends('menu.common')

{{-- @dd($allPermissions) --}}

@section('content')

    <div class="container">
        <div class="my-3">
            <a href="{{ route('admin.home') }}"><button class="btn btn-success">Go Back</button></a>
        </div>

        <h3>Edit Users</h3>

        <form action="{{ route('admin.update', $user->id) }}" method="post">
            {{-- <form> --}}
            @csrf
            <label class="form-label" for="">Name
                <span class="text-danger">*</span>
            </label>
            <input name="name" class="form-control w-50" type="text" placeholder="Enter name"
                value="{{ $user->name }}">
            @if ($errors->has('name'))
                <div class="text-danger">{{ $errors->first('name') }}</div>
            @endif
            <label class="form-label" for="">Email<span class="text-danger">*</span></label>
            <input name="email" class="form-control w-50" type="email" placeholder="Enter email"
                value="{{ $user->email }}">
            @if ($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
            <div style="" class="">
                <label class="form-label" for="">Change Password</label>
                <div class="mb-3">
                    <label class="form-label" for="">Old Password </label>
                    <input name="old_password" class="form-control  w-50 " type="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label class="form-label mx-3" for="">New Password </label>
                    <input name="new_password" class="form-control  w-50 " type="password" placeholder="Password">
                </div>

                <div class="mb-3">
                    <label class="form-label mx-3" for="">Confirm New Password </label>
                    <input name="confirm_password" class="form-control w-50 " type="password" placeholder="Password">
                </div>

            </div>
            @if ($errors->has('password'))
                <div class="text-danger">{{ $errors->first('password') }}</div>
            @endif
            <label class="form-label" for="">Role <span class="text-danger">*</span></label>
            <div>
                <select name="role_id" class="form-select w-50" aria-label="Default select example">
                    @if (!empty($user->role_id))
                        <option value="{{ $user->role_id }}">{{ $user->userRole->name }}</option>
                    @endif
                    @foreach ($roles as $role)
                        @if ($user->role_id === $role->id)
                            @continue
                        @endif
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('role_id'))
                    <div class="text-danger">{{ $errors->first('role_id') }}</div>
                @endif
            </div>
            <label class="form-label" for="">Permission <span class="text-danger">*</span></label>
            <div style=" display: flex;
            flex-wrap: wrap;" class="checkbox-group w-50">

                @foreach ($permissions as $permission)
                    @if (in_array($permission->name, $allPermissions->toArray()))
                        <div class=" ms-3  form-check">
                            <input name="permission_id[]" class="form-check-input" type="checkbox" checked
                                value="{{ $permission->id }}">
                            <label class="form-label" class="form-check-label  for="flexCheckDefault">
                                {{ $permission->name }}
                            </label class="form-label">
                        </div>
                        @continue
                    @endif
                    <div class=" ms-3  form-check">
                        <input name="permission_id[]" class="form-check-input" type="checkbox"
                            value="{{ $permission->id }}">
                        <label class="form-label" class="form-check-label  for="flexCheckDefault">
                            {{ $permission->name }}
                        </label class="form-label">
                    </div>
                @endforeach

            </div>
            @if ($errors->has('permission_id'))
                <div class="text-danger">{{ $errors->first('permission_id') }}</div>
            @endif
            {{-- <div class="form-check">
                <input name="permission" class="form-check-input" type="checkbox" value="2" id="flexCheckChecked"
                    checked>
                <label class="form-label" class="form-check-label class="form-label"" for="flexCheckChecked">
                    Checked checkbox
                </label class="form-label">
            </div> --}}

            <input type="submit" class="btn btn-success" value="Update">

        </form>
    </div>

@stop
