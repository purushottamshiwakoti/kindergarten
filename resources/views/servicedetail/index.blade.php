@extends('menu.common')

@section('content')
    <div class="container mt-2">
        <div>
            <a href="{{ route('servicedetail.create') }}"> <button class="btn btn-success">Add</button></a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($serviceDetail as $index => $service)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $service->servicedetail }}</td>
                            <td>
                                <a href="{{ route('servicedetail.edit', $service->id) }}"><button
                                        class="btn btn-success">Edit</button></a>
                                <a href="{{ route('servicedetail.destroy', $service->id) }}"><button
                                        class="btn btn-danger">Delete</button></a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop
