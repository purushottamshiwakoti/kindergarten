@extends('layouts.master')
@section('content')
    {{-- @dd($post) --}}


    <section class="blog-section">
        <div class="filter-div">
            <div class="d-flex align-items-center justify-content-center filter-div-wrapper">
                <h6>Filter</h6>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="20"
                    height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5" />
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb" class="my-40">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="mb-100 text-center blog-title-wrapper">
                    <h1>Blog</h1>
                    <p>Ut condimentum volutpat, eget mauris senectus. </p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <div class="blog-list-wrapper">
                        <div class="row">
                            {{-- @dd($post->first()) --}}
                            @php
                                $firstPost = $post->first();
                            @endphp
                            {{-- @dd($firstPost) --}}
                            <a href="{{ route('blog.details', $firstPost->slug) }}"
                                class="col-12 blog-card-hover blog-card-full">
                                <div class="image-wrapper">
                                    <img src="{{ asset("storage/blogsImage/$firstPost->image") }}" alt="">
                                </div>
                                <div class="bg-white p-44 content-wrapper">
                                    <h3>
                                        @if (Str::length($firstPost->title) > 50)
                                            {{ Str::substr($firstPost->title, 0, 50) . '...' }}
                                        @else
                                            {{ $firstPost->title }}
                                        @endif
                                    </h3>
                                    <p>
                                        @if (Str::length($firstPost->description) > 150)
                                            {{ Str::substr($firstPost->description, 0, 150) . '...' }}
                                        @else
                                            {{ $firstPost->description }}
                                        @endif
                                    </p>
                                    <span>{{ date('j, F Y', strtotime($firstPost->created_at)) }}</span>
                                </div>
                            </a>
                            <div class="row">

                                @foreach ($post as $index => $blog)
                                    @if ($index == 0)
                                        @continue
                                    @endif
                                    <div class="col-lg-6">
                                        <div class="col-12 blog-card-hover blog-card">
                                            <a href="{{ route('blog.details', $blog->slug) }}" href="">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset("storage/blogsImage/$blog->image") }}"
                                                        alt="">
                                                </div>
                                                <div class="bg-white p-20 content-wrapper">
                                                    <h3>
                                                        @if (Str::length($blog->title) > 50)
                                                            {{ Str::substr($blog->title, 0, 50) . '...' }}
                                                        @else
                                                            {{ $blog->title }}
                                                        @endif
                                                    </h3>
                                                    <span>{{ date('j, F Y', strtotime($blog->created_at)) }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="d-flex justify-content-center">
                                {!! $post->links() !!}
                            </div>



                            {{-- <div class="row">
                            <div class="col-12 mt-4">
                                {!! $post->links() !!}
                            </div>
                        </div> --}}
                            {{--
                        <div class="col-lg-6">
                            <div class="col-12 blog-card-hover blog-card">
                                <a href="blog-detail.php" href="">
                                    <div class="image-wrapper">
                                        <img src="assets/img/blog-2.png" alt="">
                                    </div>
                                    <div class="bg-white p-20 content-wrapper">
                                        <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                                        <span>2, Sept 2020</span>
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                            {{-- <div class="col-lg-6">
                            <div class="col-12 blog-card-hover blog-card">
                                <a href="blog-detail.php" href="blog-listings.php">
                                    <div class="image-wrapper">
                                        <img src="assets/img/blog-3.png" alt="">
                                    </div>
                                    <div class="bg-white p-20 content-wrapper">
                                        <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                                        <span>2, Sept 2020</span>
                                    </div>
                                </a>
                            </div>a
                        </div> --}}
                            {{-- <div class="col-lg-6">
                            <div class="col-12 blog-card-hover blog-card">
                                <a href="" href="blog-detail.php">
                                    <div class="image-wrapper">
                                        <img src="assets/img/blog-card.webp" alt="">
                                    </div>
                                    <div class="bg-white p-20 content-wrapper">
                                        <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                                        <span>2, Sept 2020</span>
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="side-bar">
                        <div class="close-sidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-x"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M10 10l4 4m0 -4l-4 4" />
                            </svg>
                        </div>
                        <div class="mb-60 categories">
                            <h5 class="heading">Categories</h5>
                            <ul class="list-unstyled blog-categories">
                                @foreach ($category as $blog)
                                    <li>
                                        <a
                                            href="@if ($blog->slug) {{ route('blog.category', $blog->slug) }} @else '' @endif">
                                            {{ $blog->category }}
                                        </a>
                                    </li>
                                @endforeach
                                {{-- <li>
                                <a href="">
                                    Camping
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Cities
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Destinations
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Explore
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    How to
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Road trip
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Tips
                                </a>
                            </li> --}}
                            </ul>
                        </div>
                        <div class="mb-60 archives">
                            <h5 class="heading">Archives</h5>
                            <ul class="list-unstyled blog-archives">
                                @foreach ($post as $key => $blog)
                                    @if ($key == 4)
                                    @break
                                @endif
                                <li>
                                    <a href="">
                                        {{ date('F Y', strtotime($blog->created_at)) }}
                                    </a>
                                </li>
                            @endforeach
                            {{-- <li>
                                <a href="">
                                    February 2020
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    January 2020
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    November 2019
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="mb-60 latest-blog">
                        @foreach ($post as $key => $blog)
                            @if ($key == 3)
                            @break;
                        @endif
                        <div class="latest-blog-wrapper">
                            <a href="">
                                <div class="d-flex align-items-center author-info-wrapper">
                                    <img src="{{ asset("storage/blogsImage/$blog->image") }}" alt="">
                                    <div class="author-info">
                                        <h4>{{ $blog->title }}</h4>
                                        <span>
                                            {{ date('j F Y', strtotime($blog->created_at)) }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    {{-- <div class="latest-blog-wrapper">
                            <a href="">
                                <div class="d-flex align-items-center author-info-wrapper">
                                    <img src="{{ asset('website/assets/img/blog-author.webp') }}" alt="">
                                    <div class="author-info">
                                        <h4>How it All Began - Creatt Wire Figma</h4>
                                        <span>
                                            13 March 2022
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    {{-- <div class="latest-blog-wrapper">
                            <a href="">
                                <div class="d-flex align-items-center author-info-wrapper">
                                    <img src="{{ asset('assets/img/blog-author.webp') }}" alt="">
                                    <div class="author-info">
                                        <h4>How it All Began - Creatt Wire Figma</h4>
                                        <span>
                                            13 March 2022
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                </div>
                <div class="tags">
                    <h5 class="heading">Tags</h5>
                    <ul class="list-unstyled d-flex flex-wrap">
                        <li>
                            <a href="">
                                Adventure
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Camping
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Cities
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Destinations
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Explore
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Tips
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop
