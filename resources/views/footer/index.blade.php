@extends('menu.common')

<div class="container mt-2">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
        <h3 class="text-center">Footer Header</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title </th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $footerHeading->title }}</td>
                <td> {{ Str::substr($footerHeading->description, 0, 40) . '...' }} </td>
                <td>
                    <a href="{{ route('footer.edit', $footerHeading->id) }}">
                        <button class="btn btn-success">Edit</button>
                    </a>
                </td>
            </tr>

        </tbody>
    </table>
</div>
