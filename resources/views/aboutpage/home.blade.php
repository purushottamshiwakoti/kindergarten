@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top: 10%;">
        <div>
            <h2 style="color:#9B51A0" class="text-center">{{ $about_title }}</h2>
            <p class="text-center">{{ $about_description }}
            </p>
        </div>
        <div>
            <h3 style="color:#9B51A0">Our Works</h3>
            <div class="card-group">
                @foreach ($ourWork as $work)
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("storage/$work->image") }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                @if (Str::length($work->title) > 20)
                                    {{ Str::substr($work->title, 0, 20) . '...' }}
                                @else
                                    {{ $work->title }}
                                @endif
                            </h5>
                            <p class="card-text">
                                @if (Str::length($work->description) > 50)
                                    {{ Str::substr($work->description, 0, 90) . '...' }}
                                @else
                                    {{ $work->description }}
                                @endif
                            </p>
                            <button class="btn btn-primary">View More</button>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="card mx-2">
                    <img class="card-img-top"
                        src="https://static.vecteezy.com/system/resources/previews/005/112/502/original/happy-children-go-to-school-free-vector.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <button class="btn btn-primary">View More</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top"
                        src="https://static.vecteezy.com/system/resources/previews/005/112/502/original/happy-children-go-to-school-free-vector.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <button class="btn btn-primary">View More</button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


@stop
