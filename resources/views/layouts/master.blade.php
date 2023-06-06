<!DOCTYPE html>
<html lang="en">
{{-- @dd($category) --}}

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Light Gallery -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.11/dist/css/lightgallery.min.css">

    <!-- Youtube Video Player -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/css/jquery.mb.YTPlayer.min.css"
        integrity="sha512-+HWFHCZZfMe4XQRKS0bOzQ1r4+G2eknhMqP+FhFIkcmWPJlB4uFaIagSIRCKDOZI3IHc0t7z4+N/g2hIaO/JIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Drop Zone -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- magnific-popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('website/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('website/assets/img/favicon.png') }}">
    <title>Kidoroma FED</title>
</head>
<header class="sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-3 logo">
                <a href="index.php">
                    <img src="{{ $header_image }}" alt="" />
                </a>
            </div>
            <div class="col-lg-9 col-2 justify-content-end menu-toggler d-lg-none d-flex align-items-center">
                <div class="icon menu-toggle-icon">
                    <svg id="custom-navbar-toggler" viewBox="0 0 24 24" width="30" height="30" stroke="#DAAE40"
                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        class="css-i6dzq1">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </div>
            </div>
            <div class="col-lg-10 col-7 menu-content-wrapper">
                <nav class="h-100 d-flex align-items-center justify-content-between">
                    <ul class="menu h-100">
                        @foreach ($category as $categories)
                            <i class="fal fa-times d-lg-none" id="menuClose"></i>
                            @if ($categories->children->isNotEmpty())
                                <li class="nav-item active ">
                                    <a href="{{ $categories->url }}"
                                        class="d-flex align-items-center justify-content-between">
                                        {{ $categories->title }}
                                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </a>
                                    <ul class="submenu">
                                        @foreach ($categories->children as $child)
                                            <li class="submenu-item">
                                                @if ($child->children->isNotEmpty())
                                                    <a class="d-flex align-items-center justify-content-between">
                                                        {{ $child->title }}

                                                        <svg viewBox="0 0 24 24" width="20" height="20"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="right-arrow">
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>

                                                    </a>
                                                @else
                                                    <a href="{{ $child->url }}"
                                                        class="d-flex align-items-center justify-content-between">
                                                        {{ $child->title }}
                                                    </a>
                                                @endif



                                                {{-- <a href="{{ $child->url }}"
                                                    class="d-flex align-items-center justify-content-between">
                                                    {{ $child->title }}
                                                    @if ($child->children->isNotEmpty())
                                                        <svg viewBox="0 0 24 24" width="20" height="20"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="right-arrow">
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    @endif
                                                </a> --}}
                                                <ul class="submenu1">
                                                    @if ($child->children->isNotEmpty())
                                                        @foreach ($child->children as $menu)
                                                            <li><a href="{{ $menu->url }}">{{ $menu->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif

                                                </ul>
                                            </li>
                                        @endforeach

                                    </ul>

                                </li>
                            @endif
                            @if ($categories->children->isEmpty())
                                <li class="nav-item ">
                                    <a href="{{ $categories->url }}">{{ $categories->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <a href="view-demo" class="btn text-primary btn-transparent btn-custom view-demo"><span>View
                            Demo</span></a>
                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-custom btn-primary"><span>Download our app</span></a>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</header>







<body>


    <body>
        @yield('content')
        <footer class="pb-60 mt-5">
            <img class="w-100" src="{{ 'website/assets/img/footer-banner-1.webp' }}" alt="">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-6 mb-4 mb-lg-0 info-wrapper">
                        <div class="content">
                            <h4 class="font-40 gradient-text mb-4">{{ $contact_title }}</h4>
                            <p class="text-paragraph">{{ $contact_description }}</p>
                            <div class="contact-info text-grey fw-600 mt-5">
                                <span class="font-24 fw-600 mb-4 text-grey d-block mb-3">Contact Info</span>
                                <div class="item">
                                    <div class="icon-wrapper">

                                    </div>

                                    Phone Number : <a
                                        href="tel:{{ $contact_phone_number }}">{{ $contact_phone_number }}</a>
                                </div>
                                <div class="item">
                                    <div class="icon-wrapper">

                                    </div>
                                    Email : <div class="email">
                                        <a href="mailTo:" class="d-block">{{ $contact_email1 }}</a>
                                        <a href="#" class="d-block">{{ $contact_email2 }}</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="icon-wrapper">

                                    </div>
                                    Map Street :
                                    {{ $contact_mapstreet }}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 form-wrapper">
                        <form id="submitForm" action="{{ route('message.store') }}">
                            @csrf
                            {{-- <div id="successmessage" class="alert alert-success" id="successmessage" role="alert">
                            Hello
                        </div> --}}
                            <div class="alert alert-primary" role="alert" id="successmessage"
                                style="display: none">
                                Message sent successfully
                            </div>


                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <div class="input-group">
                                    <input id="fullname" name="fullname" type="text"
                                        placeholder="Enter your name here" class="form-control">
                                </div>
                                <span class="text-danger" id="fullnameError"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                    <input type="email" name="email" id="email"
                                        placeholder="Enter your name here" class="form-control">
                                </div>
                                <span class="text-danger" id="emailError"></span>

                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <div class="input-group">
                                    <textarea class="form-control textarea" name="message" id="message" cols="30" rows="10"
                                        placeholder="Enter your message here"></textarea>
                                </div>
                                <span class="text-danger" id="messageError"></span>

                            </div>
                            <div class="btn-wapper d-flex justify-content-end">
                                <input type="submit" class="btn bt-primary btn-custom text-white">
                            </div>
                    </div>
                    <div class="col-12 mt-60 footer-menu d-sm-flex justify-content-between">
                        <ul>
                            <li> <a href="#">Features</a> </li>
                            <li> <a href="#">Screenshot</a> </li>
                            <li> <a href="{{ route('team') }}">Team</a> </li>
                            <li> <a href="{{ route('abouthome') }}">About</a> </li>
                            <li> <a href="{{ route('contact.home') }}">Contact</a> </li>
                        </ul>
                        <p>© 2022 KidOrama. All rights reserved</p>
                    </div>
                    </form>
                </div>
            </div>
        </footer>
        <a href="javascript:void(0)" id="return-to-top">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="#fff" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
        </a>

        <!-- scripts -->


        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.11/dist/js/lightgallery-all.min.js">
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"
            integrity="sha512-rVFx7vXgVV8cmgG7RsZNQ68CNBZ7GL3xTYl6GAVgl3iQiSwtuDjTeE1GESgPSCwkEn/ijFJyslZ1uzbN3smwYg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- DropZone -->
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


        <!-- magnific-popup -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
            integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
            integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
            integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="{{ asset('website/assets/js/style.js') }}"></script>
        <script type="text/javascript" src="{{ asset('website/assets/js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('website/assets/js/range-slider.js') }}"></script>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}

        <!-- HTML code -->
        <form id="ajax-form" action="your_action_url" method="POST">
            <!-- Form fields here -->
            {{-- <input type="submit" value="Submit"> --}}
        </form>
        <div id="error-message"></div>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}

        <script type="text/javascript">
            $('#submitForm').on('submit', function(e) {
                e.preventDefault();
                var url = $(this).attr("action")
                let fullname = $('#fullname').val();
                let email = $('#email').val();
                let message = $('#message').val();
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        fullname: fullname,
                        email: email,
                        message: message,
                    },
                    success: function(response) {

                        $('#successmessage').show();

                        fullname: $('#fullname').val("");
                        email: $('#email').val("");
                        message: $('#message').val("");
                        $('#fullnameError').text('');
                        $('#emailError').text('');
                        $('#messageError').text('');
                        console.log(response);

                    },
                    error: function(response) {
                        $('#fullnameError').text('');
                        $('#emailError').text('');
                        $('#messageError').text('');
                        $('#fullnameError').text(response.responseJSON.errors
                            .fullname);

                        $('#emailError').text(response.responseJSON.errors.email);

                        $('#messageError').text(response.responseJSON.errors.message);


                    }
                })
            })
        </script>



    </body>

</html>
