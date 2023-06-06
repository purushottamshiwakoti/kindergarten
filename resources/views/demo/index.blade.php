@extends('layouts.master')

@section('content')

    <section class="py-40 tabs-section">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb" class="my-40">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Demo Page</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="text-center title-wrapper">
                    <h1>View Demo</h1>
                    <p>{{ $title }} </p>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">{{ $button1 }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">{{ $button2 }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">{{ $button3 }}</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-12">
                                <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="450"
                                    src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FTLSUQxI6MYvGrKnVSD8Dqw%2FKidorama%3Fnode-id%3D212%253A3563%26scaling%3Dscale-down%26page-id%3D204%253A3015%26starting-point-node-id%3D212%253A12082%26show-proto-sidebar%3D1"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-12">
                                <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="450"
                                    src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FTLSUQxI6MYvGrKnVSD8Dqw%2FKidorama%3Fnode-id%3D212%253A22308%26scaling%3Dmin-zoom%26page-id%3D212%253A13897%26starting-point-node-id%3D212%253A22308%26show-proto-sidebar%3D1"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-12">
                                <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="450"
                                    src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FTLSUQxI6MYvGrKnVSD8Dqw%2FKidorama%3Fnode-id%3D633%253A5113%26scaling%3Dmin-zoom%26page-id%3D633%253A4707%26starting-point-node-id%3D633%253A11439%26show-proto-sidebar%3D1"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
