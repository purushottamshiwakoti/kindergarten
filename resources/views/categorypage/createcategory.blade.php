@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h4>Create Categories</h4>

        <form action="{{ route('blog.storecategory') }}" method="post">
            @csrf
            <x-input label='Category' type='text' placeholder='Add Category here' name='category' />
            <button class="btn btn-success">Add</button>
        </form>

    </div>
@stop
