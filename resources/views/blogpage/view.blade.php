@extends('layouts.admin')
@section('content')

    <div class="container mt-2">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <a href="{{ route('blog.create') }}"><button class="btn btn-success mb-2">Create Blog</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($post as $blog)
                    {{-- @if (Str::length($post) > 0) --}}
                    <tr>

                        <td>{{ $blog->title }}</td>
                        <td>
                            <a href="{{ route('blog.edit', $blog->id) }}"><button class="btn btn-success">Edit</button></a>
                            <a href="{{ route('blog.destroy', $blog->id) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>

                    </tr>
                    {{-- @else
                        <p>No posts found</p>
                    @endif --}}
                @endforeach


            </tbody>
        </table>
        {{-- @dd($post->links()) --}}
        {{-- <div class="d-flex justify-content-center">
            {!! $post->links() !!}
        </div>
    </div> --}}

@stop
