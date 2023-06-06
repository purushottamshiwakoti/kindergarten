@extends('layouts.master')

@section('content')
    <section class="page-not-found pb-800">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-content text-center">
                    <span>OPPS !!!</span>
                    <h2>404 <span>Page Error</span></h2>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                        duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <a href="#"><i class="fal fa-arrow-left"></i>Back to Hamper Home</a>
                </div>
                <div class="col-md-8 mx-auto img-wrapper">
                    <img src="{{ asset('website/assets/img/404.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@stop
