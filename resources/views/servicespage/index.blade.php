@extends('layouts.master')
{{-- @dd($allServices) --}}

@section('content')

    <div class="container">
        <div style="margin-top: 10%">
            <h3>All Services pages</h3>
        </div>
        <div>
            @foreach ($allServices as $services)
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('servicespage.detail', $services->slug) }}">
                                <h5 class="card-title">{{ $services->servicedetail }}</h5>
                            </a>

                        </div>
                        <div class="card-footer">
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

@stop
