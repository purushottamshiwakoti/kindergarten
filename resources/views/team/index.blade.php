@extends('menu.common')

@section('content')

    <div class="container mt-3">
        <h3> Team Section</h3>
        <div>
            <a href="{{ route('team.create') }}">
                <button class="btn btn-success">Add</button>
            </a>
        </div>
        <div class="mt-2">
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
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Position</th>
                        <th scope="col">Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($teamDetail) > 0)
                        @foreach ($teamDetail as $index => $team)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $team->title }}</td>
                                <td>
                                    <img style="width:50px;height:50px;object-fit:cover;border-radius:50%"
                                        src="{{ asset("storage/$team->image") }}" alt="img">
                                </td>
                                <td>{{ $team->position }}</td>
                                <td>
                                    @if (Str::length($team->description) > 90)
                                        {{ Str::substr($team->description, 0, 90) . '...' }}
                                    @else
                                        {{ $team->description }}
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('team.edit', $team->id) }}"><button
                                                class="btn btn-success">Edit</button></a>
                                        <a href="{{ route('team.destroy', $team->id) }}"><button
                                                class="btn btn-danger ms-2">Delete</button></a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <p class="text-danger">No record found in our database!</p>
                    @endif

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $teamDetail->links() !!}
            </div>

        </div>
    </div>


@stop
