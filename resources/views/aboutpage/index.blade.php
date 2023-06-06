@extends('menu.common')

@section('content')

    <div class="container mt-3">
        <h3> About Section</h3>
        <div>
            <a href="{{ route('abouthome.create') }}">
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
                        <th scope="col">Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($aboutDetails) > 0)
                        @foreach ($aboutDetails as $index => $about)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $about->title }}</td>
                                <td>
                                    <img style="width:50px;height:50px;object-fit:cover;border-radius:50%"
                                        src="{{ asset("storage/$about->image") }}" alt="img">
                                </td>
                                <td>
                                    @if (Str::length($about->description) > 90)
                                        {{ Str::substr($about->description, 0, 90) . '...' }}
                                    @else
                                        {{ $about->description }}
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('abouthome.edit', $about->id) }}"><button
                                                class="btn btn-success">Edit</button></a>
                                        <a href="{{ route('abouthome.destroy', $about->id) }}"><button
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
                {!! $aboutDetails->links() !!}
            </div>

        </div>
    </div>


@stop
