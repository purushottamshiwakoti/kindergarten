@extends('menu.common')

@section('content')

    <div class="container mt-2">
        <div>
            <h3>Team Page Title</h3>
        </div>
        <div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}

                </div>
            @endif
        </div>
        <div>
            <form action="{{ route('team.settingsupdate') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Title
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" placeholder="Enter title here" value="{{ $team_title }}" name="team_title"
                        class="form-control w-50">
                    @if ($errors->has('team_title'))
                        <span class="text-danger">
                            {{ $errors->first('team_title') }}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sub Title
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" placeholder="Enter subtitle here" value="{{ $team_subtitle }}"
                        name="team_subtitle" class="form-control w-50">
                    @if ($errors->has('team_subtitle'))
                        <span class="text-danger">
                            {{ $errors->first('team_subtitle') }}
                        </span>
                    @endif
                </div>
                <input type="submit" class="btn btn-success" value="Save info">
            </form>
        </div>
    </div>

@stop
