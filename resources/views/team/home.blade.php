@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top: 10%;">
        <div>
            <h2 style="color:#9B51A0" class="text-center">{{ $team_title }}</h2>
            <p class="text-center">{{ $team_subtitle }}
            </p>
            <div>
                <h3 style="color:#9B51A0">Our Teams</h3>
                <div class="card-group">
                    @foreach ($ourTeam as $team)
                        <div class="card">
                            <img class="card-img-top" src="{{ asset("storage/$team->image") }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $team->title }}</h5>
                                <p class="card-text">{{ $team->position }}</p>
                                <p class="card-text"><small class="text-muted">
                                        @if (Str::length($team->description > 40))
                                            {{ Str::substr($team->description, 0, 40) . '...' }}
                                        @else
                                            {{ $team->description }}
                                        @endif
                                    </small></p>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>

        @stop
