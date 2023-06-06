@extends('menu.common')
@section('content')

    <h1>This is header menu for our page</h1>
    @foreach ($menus as $menu)
        <h1>{{ $menu->title }}</h1>
    @endforeach
@stop
