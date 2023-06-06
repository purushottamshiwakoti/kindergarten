@extends('menu.common')

@section('content')

    <div class="container mt-2">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <h3>This is index page</h3>
        <div>
            <a href="{{ route('service.create') }}">
                <button class="btn btn-success">Create</button>

            </a>
        </div>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        {{-- <th scope="col">Description</th> --}}
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $index => $service)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->service->servicedetail }}</td>

                            {{-- <td>{!! $service->description !!}</td> --}}
                            <td>
                                <a href="{{ route('service.edit', $service->id) }}"><button
                                        class="btn btn-success">Edit</button></a>
                                <a href="{{ route('service.destroy', $service->id) }}"><button
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $services->links() !!}
            </div>
        </div>
    </div>


@stop
