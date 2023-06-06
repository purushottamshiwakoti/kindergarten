@extends('menu.common')

<div class="container mt-2">
    <h2 class="text-center">{{ $message->fullname }} Message</h2>
    <div class=" mt-4 ">
        <p>Email: <b>{{ $message->email }}</b> </p>
        <p>Message: <b>{{ $message->message }}</b> </p>
        <a href="{{ route('message.index') }}"><button class="btn btn-success">Go Back</button></a>
    </div>

</div>
