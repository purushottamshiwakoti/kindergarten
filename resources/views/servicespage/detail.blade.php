@extends('layouts.master')
{{-- @dd($services); --}}

@section('content')

    <div class="container">
        <div style="margin-top: 10%">
            This is details page
        </div>

        <div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($services as $service)
                    <div class="col">
                        <div class="card">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text">{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@stop
