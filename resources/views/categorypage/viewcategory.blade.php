@extends('layouts.admin')
@section('content')

    <div class="container mt-2">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <a href="{{ route('blog.createcategory') }}"><button class="btn btn-success mb-2">Create Category</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($category as $blog)
                    <tr>

                        <td>{{ $blog->category }}</td>
                        <td>
                            <a href="{{ route('blog.editcategory', $blog->id) }}"><button
                                    class="btn btn-success">Edit</button></a>
                            <a href="{{ route('blog.destroycategory', $blog->id) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
        {{-- @dd($post->links()) --}}
        {{-- <div class="d-flex justify-content-center">
            {!! $post->links() !!}
        </div>
    </div> --}}

    @stop
