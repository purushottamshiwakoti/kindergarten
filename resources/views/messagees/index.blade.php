@extends('menu.common')


<div class="container mt-2">
    <div>
        <h4 class="text-center ">Users messages</h4>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($message as $key => $messages)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $messages->fullname }}</td>
                    <td>{{ $messages->email }}</td>
                    <td>
                        @if (Str::length($messages->message) > 60)
                            {{ Str::substr($messages->message, 0, 60) . '...' }}
                        @else
                            {{ $messages->message }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('message.messagedetail', $messages->id) }}">
                            <button class="btn btn-success">View</button>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $message->links() !!}
    </div>
</div>
