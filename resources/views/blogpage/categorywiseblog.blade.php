@extends('layouts.master')

@section('content')
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
                            @foreach ($blogPosts as $blog)
                                <a href="blog-detail.php" class="col-12 blog-card-hover blog-card-full">
                                    <div class="image-wrapper">
                                        <img src="{{ asset("storage/blogsImage/$blog->image") }}" alt="">
                                    </div>
                                    <div class="bg-white p-44 content-wrapper">
                                        <h3>{{ Str::substr($blog->title, 0, 40) . '...' }}</h3>
                                        <p>
                                            {{ Str::substr($blog->description, 0, 140) . '...' }}
                                        </p>
                                        <span> {{ date('d,F Y', strtotime($blog->created_at)) }} </span>
                                    </div>
                                </a>
                            @endforeach
                            {{-- <div class="col-lg-6">
                                <div class="col-12 blog-card-hover blog-card">
                                    <a href="blog-detail.php" href="">
                                        <div class="image-wrapper">
                                            <img src="assets/img/blog-1.png" alt="">
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
                                </div>
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
                        <div class="d-flex justify-content-center">
                            {!! $blogPosts->links() !!}
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
                                        <a href="{{ route('blog.category', $blog->slug) }}">
                                            {{ $blog->category }}
                                        </a>
                                    </li>
                                @endforeach
                                {{-- <li>
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
                                {{-- @dd($blogs) --}}
                                @foreach ($blogPosts as $key => $blog)
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
                                        March 2020
                                    </a>
                                </li>
                                <li>
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
                        {{-- @dd($post) --}}
                        @foreach ($blogPosts as $key => $blog)
                            {{-- @dd($blog) --}}

                            @if ($key == 0)
                                @continue;
                            @elseif ($key == 4)
                            @break
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
                                        <img src="assets/img/blog-author.webp" alt="">
                                        <div class="author-info">
                                            <h4>How it All Began - Creatt Wire Figma</h4>
                                            <span>
                                                13 March 2022
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-blog-wrapper">
                                <a href="">
                                    <div class="d-flex align-items-center author-info-wrapper">
                                        <img src="assets/img/blog-author.webp" alt="">
                                        <div class="author-info">
                                            <h4>How it All Began - Creatt Wire Figma</h4>
                                            <span>
                                                13 March 2022
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-blog-wrapper">
                                <a href="">
                                    <div class="d-flex align-items-center author-info-wrapper">
                                        <img src="assets/img/blog-author.webp" alt="">
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
