@extends('layouts.master')

@section('content')
    <div class="container">
        <div style="margin-top: 10%">
            <h4>Fun Learning page</h4>

            @foreach ($funlearning as $learning)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $learning->title }}</h5>
                        <p class="card-text">{!! $learning->description !!}</p>
                    </div>
                </div>
            @endforeach
            <div>
                {!! $funlearning->links() !!}
            </div>
        </div>
    </div>

@stop
