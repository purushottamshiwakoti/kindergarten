@extends('menu.common')
{{-- @dd($contact->phone_number) --}}

<div class="container mt-2">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
        <h3 class="text-center">Contact details</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Phone Number</th>
                <th scope="col">Email1</th>
                <th scope="col">Email2</th>
                <th scope="col">Map Street</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $contact->phone_number }}</td>
                <td>{{ $contact->email1 }}</td>
                <td>{{ $contact->email2 }}</td>
                <td>{{ $contact->map_street }}</td>
                <td>
                    <a href="{{ route('contact.edit', $contact->id) }}">
                        <button class="btn btn-success">Edit</button>
                    </a>
                </td>
            </tr>

        </tbody>
    </table>
</div>
