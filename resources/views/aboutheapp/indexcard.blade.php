@extends('menu.common')

<div class="container mt-2">
    <div>
        <h4 class="text-center">Card Info</h4>
    </div>
    <div>
        <a href="{{ route('aboutapp.createcard') }}">
            <button class="btn btn-success">Create</button>

        </a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($carddetails as $index => $carddetail)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td colspan="2">{{ $carddetail->title }}</td>
                        <td>
                            <img src="{{ asset("storage/$carddetail->image") }}" style="width: 30px;height:30px"
                                alt="icon" />
                        </td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
