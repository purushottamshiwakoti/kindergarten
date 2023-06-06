@extends('layouts.master')


@php
    $kidoromaImage = json_decode($why_kidoroma_image, true);
    $arcodian = json_decode($photo_text_banner_accordion, true);
    $teamMember = json_decode($meet_our_team_description, true);
    $kidoromacard = json_decode($why_kidoroma_card, true);
    $abouAppCard = json_decode($about_app_card, true);
@endphp
{{-- @dd($why_kidoroma_card) --}}




@section('content')
    <section class="welcome-banner position-centered position-relative py-60  nav-mt-top">
        <img src="{{ asset('website/assets/img/banner-kid-1.webp') }}" alt="">
        <img src="{{ asset('website/assets/img/banner-kid-2.webp') }}" alt="">
        <img src="{{ asset('website/assets/img/banner-deco-1.webp') }}" alt="">
        <img src="{{ asset('website/assets/img/banner-deco-2.webp') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-12 text-content-wrapper">
                    <div class="text-content">
                        <span class="subtitle d-block">{{ $home_banner_title1 }}</span>
                        <h1 class="mb-4">{{ $home_banner_title2 }}</h1>
                        <p>{{ $home_banner_title3 }}</p>
                        <div class="btn-wrapper mt-5">
                            <a href="#" class="btn btn-custom btn-primary"><span>{{ $home_banner_button1 }}</span></a>
                            <a href="#" class="btn text-primary btn-transparent btn-custom"><span>
                                    {{ $home_banner_button2 }}
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-text-banner py-100">
        <div class="container">
            <div class="row">
                <svg class="svg1" width="157" height="154" viewBox="0 0 157 154" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.50363 1.14937C2.13734 9.6332 0.796388 18.37 0.509496 27.173C0.269174 35.9068 1.19044 44.9061 4.37394 53.1009C7.46963 61.0635 12.7512 67.9718 20.1237 72.396C23.5701 74.5277 27.3734 76.0189 31.3503 76.7976C34.4865 77.2952 37.6718 77.4086 40.8355 77.1354C47.1328 76.6988 53.3885 75.2652 59.7165 75.1491C65.3133 75.0437 70.8685 76.3774 74.2624 81.1872C76.632 84.5473 78.0139 88.6593 79.1851 92.5623C80.4302 96.7112 81.3334 100.947 82.3838 105.145C84.4039 113.201 87.2753 121.274 93.9278 126.691C101.628 132.96 111.878 134.584 121.239 136.934C126.079 138.148 130.892 139.565 135.394 141.744C140.13 144.031 144.351 147.178 148.854 149.859C151.005 151.156 153.255 152.28 155.584 153.22C157.001 153.772 157.566 151.505 156.172 150.94C151.328 149.006 147.072 145.929 142.687 143.162C138.4 140.436 133.792 138.254 128.967 136.664C124.461 135.192 119.842 134.158 115.228 133.039C110.329 131.837 105.315 130.588 100.788 128.321C96.809 126.397 93.3743 123.509 90.7965 119.919C88.511 116.646 87.0244 112.94 85.8791 109.136C83.3877 100.855 82.1764 92.2347 78.6053 84.2903C77.2634 81.3018 75.5468 78.4469 72.9324 76.422C70.7512 74.7598 68.199 73.6521 65.4951 73.194C59.5279 72.125 53.3828 73.2366 47.4693 74.0369C41.425 74.8378 35.0055 75.6415 29.0634 73.8093C20.8348 71.271 13.8509 65.7513 9.48017 58.3319C5.1086 50.9197 3.33293 42.2223 2.91962 33.7046C2.56474 24.9452 3.37041 16.1774 5.31563 7.62938C5.74914 5.64764 6.22878 3.68238 6.75457 1.7336C7.1594 0.271294 4.87862 -0.31719 4.48023 1.14678L4.50363 1.14937Z"
                        fill="#FF80A9" />
                </svg>
                <svg class="svg2" width="73" height="103" viewBox="0 0 73 103" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2 100.431L21.5895 98.9398L13.8736 80.8738L33.4585 79.3822L25.7426 61.3164L45.3328 59.8207L37.6163 41.7595L57.2018 40.2632L49.4906 22.1981L69.0769 20.6971L61.3657 2.63194"
                        stroke="#F8623F" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" />
                </svg>
                <svg class="svg3" width="221" height="274" viewBox="0 0 221 274" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M171.263 268.193C169.746 268.026 168.229 267.859 166.685 267.653C165.87 267.561 167.193 267.726 166.374 267.62L165.876 267.552L164.742 267.398L162.178 267.055C158.745 266.564 155.322 266.022 151.908 265.428C144.314 264.099 136.764 262.532 129.259 260.725C112.871 256.87 96.8128 251.731 81.2323 245.354C65.9821 238.994 50.676 231.037 37.8529 220.981C25.9666 211.674 15.6698 200.461 9.91541 186.419C8.62372 183.168 7.58459 179.821 6.80726 176.41C5.61535 171.743 5.30163 166.895 5.88208 162.113C6.58395 157.352 8.6756 152.904 11.8948 149.327C15.307 145.767 19.3255 142.843 23.7623 140.692C33.4643 135.659 44.1588 133.057 54.0857 128.545C61.122 125.335 67.4662 120.698 69.4968 112.862C72.0913 102.821 68.5051 92.5606 67.4202 82.5834C66.2763 72.8139 67.012 62.9159 69.5876 53.423C72.0351 44.6032 76.4148 36.4387 82.4092 29.5216C89.0598 22.0932 97.2518 16.2063 106.413 12.2719C114.976 8.51283 123.914 6.18009 133.208 6.36338C141.907 6.68577 150.51 8.30677 158.729 11.1726C176.194 16.9163 192.542 26.3064 207.217 37.2843C210.181 39.4969 213.105 41.9062 216.061 44.4076L215.392 41.8823L214.139 47.9914L210.714 64.5937L205.691 89.172L199.576 119.158L192.865 151.953L186.104 185.111L179.796 216.024L174.533 242.077L170.697 260.874C170.082 263.844 169.444 266.813 168.876 269.785C168.813 269.896 168.823 270.048 168.792 270.165C168.121 273.444 173.234 274.856 173.924 271.502L175.163 265.397L178.56 248.778L183.519 224.163L189.655 194.226L196.366 161.43L203.127 128.273L209.382 97.3042L214.7 71.2829L218.541 52.4766C219.141 49.5106 219.789 46.5473 220.356 43.5746L220.431 43.1902C220.546 42.7458 220.544 42.279 220.426 41.8355C220.307 41.392 220.075 40.9869 219.753 40.6596C205.833 28.6005 190.202 18.6733 173.368 11.2025C156.98 3.97735 138.178 -1.52408 120.194 2.18634C99.9648 6.39752 80.9973 18.671 70.7276 36.7974C65.8946 45.4932 62.9214 55.0985 61.9967 65.0041C61.4814 70.1159 61.4471 75.2648 61.8942 80.383C62.3713 86.1834 63.7027 91.8169 64.4859 97.5741C65.0732 101.935 65.4381 106.68 64.5111 110.827C63.9128 113.949 62.2793 116.778 59.8745 118.857C59.3264 119.38 58.7363 119.857 58.11 120.283C57.2934 120.851 56.4507 121.379 55.5767 121.876C53.7016 122.906 51.7714 123.832 49.7949 124.65C44.7077 126.834 39.4217 128.537 34.2228 130.45C24.318 134.119 13.6139 138.622 6.82449 147.121C3.48657 151.31 1.35667 156.331 0.66487 161.643C0.0790404 166.95 0.416348 172.318 1.66186 177.51C4.94827 192.609 13.709 205.869 24.6966 216.478C36.7704 228.192 51.3603 237.177 66.4463 244.457C82.3489 252.002 98.8915 258.117 115.878 262.729C130.862 266.913 146.105 270.103 161.508 272.279C164.76 272.73 168.02 273.133 171.287 273.487C171.986 273.476 172.654 273.191 173.145 272.693C173.636 272.194 173.912 271.523 173.913 270.823C173.895 270.128 173.609 269.466 173.116 268.976C172.622 268.486 171.958 268.206 171.263 268.193Z"
                        fill="#FF80A9" />
                </svg>



                <img class="cloud-1" src="{{ asset('website/assets/img/pt-deco-1.png') }}" alt="">
                <img class="cloud-2" src="{{ asset('website/assets/img/pt-deco-1.png') }}" alt="">
                <img class="cloud-3" src="{{ asset('website/assets/img/pt-deco-3.png') }}" alt="">
                <div class="col-md-5 img-wrapper">
                    <img src="{{ $photo_text_banner_image }}" alt="">
                </div>
                <div class="col-md-7 text-wrapper">
                    <div class="accordion" id="accordionExample">


                        <div class="accordion-item">
                            @foreach ($arcodian as $index => $arcodianDetails)
                                <h2 class="accordion-header" id="{{ 'headingOne' . $index }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="{{ '#collapseOne' . $index }}" aria-expanded="true"
                                        aria-controls="{{ 'collapseOne' . $index }}">
                                        {{ $arcodianDetails['title'] }}
                                    </button>
                                </h2>
                                <div id="{{ 'collapseOne' . $index }}" class="accordion-collapse collapse show"
                                    aria-labelledby="{{ 'headingOne' . $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $arcodianDetails['description'] }}
                                    </div>

                                </div>
                            @endforeach
                        </div>



                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Require dual-login parent and child
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex commodo consequat.
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Require dual-login parent and child
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex commodo consequat.
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home about position-relative pb-60">
        <img class="cloud" src="{{ asset('website/assets/img/about-bg-1.webp') }}" alt="">
        <img class="light-bg" src="{{ asset('website/assets/img/about-bg-3.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img-wrapper">
                    <img src="{{ $about_app_image }}" alt="">
                </div>
                <div class="col-md-6 text-content-wrapper">
                    <div class="text-content text-white">
                        <span class="font-18 fw-600 mb-3 d-block">About the App</span>
                        <h5 class="mb-3 text-white">{{ $about_app_title1 }}</h5>
                        <p class="font-18">{{ $about_app_title2 }} </p>
                    </div>
                    <div class="info-card-wrapper mt-40">
                        @foreach ($abouAppCard as $card)
                            <div class="item">
                                <div class="icon-div">
                                    <img src="{{ $card['image'] }}" alt="image">
                                </div>
                                <span class="gradient-text"> {{ $card['title'] }}</span>
                            </div>
                            {{-- <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-2.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Monitor your kid</span>
                        </div> --}}
                            {{-- <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-4.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Keep track</span>
                        </div> --}}
                            {{-- <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-5.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Security and safety</span>
                        </div> --}}
                            {{-- <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-1.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Parental guidance</span>
                        </div> --}}
                            {{-- <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-2.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Monitor your kid</span>
                        </div> --}}
                        @endforeach

                    </div>
                </div>
                <div class="col-md-12 count-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-6 count">
                            <div class="counter-div">
                                {{-- @dd($about_app_counter4) --}}
                                <span class="counter">{{ $about_app_counter1 }}</span>+
                            </div>
                            <span>200+ App Ratings</span>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-6 count">
                            <div class="counter-div">
                                <span class="counter">{{ $about_app_counter2 }}</span>+
                            </div>
                            <span>Active users</span>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-6 count">
                            <div class="counter-div"><span class="counter">{{ $about_app_counter3 }}</span>M</div>
                            <span>Protection Plan</span>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-6 count">
                            <div class="counter-div"><span class="counter">
                                    {{ $about_app_counter4 }}
                                </span>M</div>
                            <span>Investment plan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-kidoroma py-100">
        <div class="container">
            <div class="row">
                <div class="col-12 section-heading">
                    <h2>Why KidOroma</h2>
                    <p>{{ $why_kidoroma_title }}</p>
                </div>
            </div>

            <div class="row content-wrapper">
                @foreach ($kidoromacard as $kidoromaCardDetail)
                    {{-- 1st card  --}}
                    <div class="col-lg-6 item-wrapper">
                        <svg width="188" height="111" viewBox="0 0 188 111" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 106.5C0.895431 106.5 0 107.395 0 108.5C0 109.605 0.895431 110.5 2 110.5V106.5ZM187.414 16.4142C188.195 15.6332 188.195 14.3668 187.414 13.5858L174.686 0.857864C173.905 0.0768158 172.639 0.0768158 171.858 0.857864C171.077 1.63891 171.077 2.90524 171.858 3.68629L183.172 15L171.858 26.3137C171.077 27.0948 171.077 28.3611 171.858 29.1421C172.639 29.9232 173.905 29.9232 174.686 29.1421L187.414 16.4142ZM2 110.5H10.2424V106.5H2V110.5ZM16.4242 110.5H32.9091V106.5H16.4242V110.5ZM39.0909 110.5H55.5758V106.5H39.0909V110.5ZM61.7576 110.5H70V106.5H61.7576V110.5ZM70 110.5C72.5412 110.5 75.0007 110.135 77.3269 109.453L76.2015 105.614C74.237 106.19 72.1564 106.5 70 106.5V110.5ZM82.4639 107.323C86.8298 104.934 90.434 101.33 92.8229 96.9639L89.3139 95.0438C87.2919 98.7391 84.2391 101.792 80.5438 103.814L82.4639 107.323ZM94.9528 91.8269C95.6348 89.5007 96 87.0412 96 84.5H92C92 86.6564 91.6903 88.737 91.1144 90.7015L94.9528 91.8269ZM96 84.5V76.2273H92V84.5H96ZM96 70.0227V53.4773H92V70.0227H96ZM96 47.2727V39H92V47.2727H96ZM96 39C96 36.8436 96.3097 34.763 96.8856 32.7985L93.0472 31.6731C92.3652 33.9993 92 36.4588 92 39H96ZM98.6861 28.4562C100.708 24.7609 103.761 21.7081 107.456 19.6861L105.536 16.1771C101.17 18.566 97.566 22.1702 95.1771 26.5361L98.6861 28.4562ZM111.798 17.8856C113.763 17.3097 115.844 17 118 17V13C115.459 13 112.999 13.3652 110.673 14.0472L111.798 17.8856ZM118 17H126.242V13H118V17ZM132.424 17H148.909V13H132.424V17ZM155.091 17H171.576V13H155.091V17ZM177.758 17H186V13H177.758V17Z"
                                fill="#DC5629" />
                        </svg>

                        <div class="img-div">
                            <img src="{{ $kidoromaCardDetail['image'] }}" alt="image">
                            {{-- <input type="text" value="{{ $kidoromaImage[$i] }}" name="" id=""> --}}
                        </div>
                        <div class="info-card">
                            <div class="item">

                                <div class="icon-div">
                                    <img src="{{ $kidoromaCardDetail['image1'] }}" alt="">
                                </div>
                                <span class="gradient-text">{{ $kidoromaCardDetail['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- 2nd card    --}}
                {{-- <div class="col-lg-6 item-wrapper">



                    <svg width="178" height="44" viewBox="0 0 178 44" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M176 43.5C177.105 43.5 178 42.6046 178 41.5C178 40.3954 177.105 39.5 176 39.5V43.5ZM0.585786 13.5858C-0.195262 14.3668 -0.195262 15.6332 0.585786 16.4142L13.3137 29.1421C14.0948 29.9232 15.3611 29.9232 16.1421 29.1421C16.9232 28.3611 16.9232 27.0948 16.1421 26.3137L4.82843 15L16.1421 3.68629C16.9232 2.90524 16.9232 1.63891 16.1421 0.857864C15.3611 0.0768156 14.0948 0.0768156 13.3137 0.857864L0.585786 13.5858ZM2 17H10.9394V13H2V17ZM17.6439 17H35.5227V13H17.6439V17ZM42.2273 17H60.1061V13H42.2273V17ZM66.8106 17H75.75V13H66.8106V17ZM75.75 17C77.994 17 80.079 17.655 81.8314 18.7835L83.9971 15.4205C81.6184 13.8886 78.7849 13 75.75 13V17ZM85.2165 22.1686C86.345 23.921 87 26.006 87 28.25H91C91 25.2151 90.1114 22.3816 88.5795 20.0029L85.2165 22.1686ZM87 28.25C87 31.2849 87.8886 34.1184 89.4205 36.4971L92.7835 34.3314C91.655 32.579 91 30.494 91 28.25H87ZM94.0029 41.0795C96.3816 42.6114 99.2151 43.5 102.25 43.5V39.5C100.006 39.5 97.921 38.845 96.1686 37.7165L94.0029 41.0795ZM102.25 43.5H111.189V39.5H102.25V43.5ZM117.894 43.5H135.773V39.5H117.894V43.5ZM142.477 43.5H160.356V39.5H142.477V43.5ZM167.061 43.5H176V39.5H167.061V43.5Z"
                            fill="#DC5629" />
                    </svg>

                    <div class="img-div">
                        <img src="{{ $kidoromaImage[1] }}" alt="">
                    </div>
                    <div class="info-card">
                        <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-2.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Virtual friend meetup</span>
                        </div>
                    </div>
                </div> --}}

                {{-- 3rd card    --}}
                {{-- <div class="col-lg-6 item-wrapper">
                    <svg width="188" height="111" viewBox="0 0 188 111" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 106.5C0.895431 106.5 0 107.395 0 108.5C0 109.605 0.895431 110.5 2 110.5V106.5ZM187.414 16.4142C188.195 15.6332 188.195 14.3668 187.414 13.5858L174.686 0.857864C173.905 0.0768158 172.639 0.0768158 171.858 0.857864C171.077 1.63891 171.077 2.90524 171.858 3.68629L183.172 15L171.858 26.3137C171.077 27.0948 171.077 28.3611 171.858 29.1421C172.639 29.9232 173.905 29.9232 174.686 29.1421L187.414 16.4142ZM2 110.5H10.2424V106.5H2V110.5ZM16.4242 110.5H32.9091V106.5H16.4242V110.5ZM39.0909 110.5H55.5758V106.5H39.0909V110.5ZM61.7576 110.5H70V106.5H61.7576V110.5ZM70 110.5C72.5412 110.5 75.0007 110.135 77.3269 109.453L76.2015 105.614C74.237 106.19 72.1564 106.5 70 106.5V110.5ZM82.4639 107.323C86.8298 104.934 90.434 101.33 92.8229 96.9639L89.3139 95.0438C87.2919 98.7391 84.2391 101.792 80.5438 103.814L82.4639 107.323ZM94.9528 91.8269C95.6348 89.5007 96 87.0412 96 84.5H92C92 86.6564 91.6903 88.737 91.1144 90.7015L94.9528 91.8269ZM96 84.5V76.2273H92V84.5H96ZM96 70.0227V53.4773H92V70.0227H96ZM96 47.2727V39H92V47.2727H96ZM96 39C96 36.8436 96.3097 34.763 96.8856 32.7985L93.0472 31.6731C92.3652 33.9993 92 36.4588 92 39H96ZM98.6861 28.4562C100.708 24.7609 103.761 21.7081 107.456 19.6861L105.536 16.1771C101.17 18.566 97.566 22.1702 95.1771 26.5361L98.6861 28.4562ZM111.798 17.8856C113.763 17.3097 115.844 17 118 17V13C115.459 13 112.999 13.3652 110.673 14.0472L111.798 17.8856ZM118 17H126.242V13H118V17ZM132.424 17H148.909V13H132.424V17ZM155.091 17H171.576V13H155.091V17ZM177.758 17H186V13H177.758V17Z"
                            fill="#DC5629" />
                    </svg>

                    <div class="img-div">
                        <img src="{{ $kidoromaImage[2] }}" alt="">
                    </div>
                    <div class="info-card">
                        <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-5.webp') }}" alt="">
                            </div>
                            <span class="gradient-text">Secured content with enough Backcheck.</span>
                        </div>
                    </div>
                </div> --}}

                {{-- 4th card     --}}
                {{-- <div class="col-lg-6 item-wrapper">
                    <svg width="178" height="44" viewBox="0 0 178 44" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M176 43.5C177.105 43.5 178 42.6046 178 41.5C178 40.3954 177.105 39.5 176 39.5V43.5ZM0.585786 13.5858C-0.195262 14.3668 -0.195262 15.6332 0.585786 16.4142L13.3137 29.1421C14.0948 29.9232 15.3611 29.9232 16.1421 29.1421C16.9232 28.3611 16.9232 27.0948 16.1421 26.3137L4.82843 15L16.1421 3.68629C16.9232 2.90524 16.9232 1.63891 16.1421 0.857864C15.3611 0.0768156 14.0948 0.0768156 13.3137 0.857864L0.585786 13.5858ZM2 17H10.9394V13H2V17ZM17.6439 17H35.5227V13H17.6439V17ZM42.2273 17H60.1061V13H42.2273V17ZM66.8106 17H75.75V13H66.8106V17ZM75.75 17C77.994 17 80.079 17.655 81.8314 18.7835L83.9971 15.4205C81.6184 13.8886 78.7849 13 75.75 13V17ZM85.2165 22.1686C86.345 23.921 87 26.006 87 28.25H91C91 25.2151 90.1114 22.3816 88.5795 20.0029L85.2165 22.1686ZM87 28.25C87 31.2849 87.8886 34.1184 89.4205 36.4971L92.7835 34.3314C91.655 32.579 91 30.494 91 28.25H87ZM94.0029 41.0795C96.3816 42.6114 99.2151 43.5 102.25 43.5V39.5C100.006 39.5 97.921 38.845 96.1686 37.7165L94.0029 41.0795ZM102.25 43.5H111.189V39.5H102.25V43.5ZM117.894 43.5H135.773V39.5H117.894V43.5ZM142.477 43.5H160.356V39.5H142.477V43.5ZM167.061 43.5H176V39.5H167.061V43.5Z"
                            fill="#DC5629" />
                    </svg>

                    <div class="img-div">
                        <img src="{{ $kidoromaImage[3] }}" alt="">
                    </div>
                    <div class="info-card">
                        <div class="item">
                            <div class="icon-div">
                                <img src="{{ asset('website/assets/img/about-icon-4.webp') }}" alt="">
                            </div>
                            <span class="gradient-text"> Virtual friend meetup</span>
                        </div>
                    </div>
                </div> --}}



            </div>
        </div>
    </section>

    <section class="text-content-section pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-content-wrapper">
                    <div class="text-content">
                        <span class="subtitle d-block">{{ $text_content_title1 }}</span>
                        <h1 class="mb-4">{{ $text_content_title2 }}</h1>
                        <p>{{ $text_content_title3 }}</p>
                        <div class="btn-wrapper mt-5">
                            <a href="#" class="btn btn-custom btn-primary"><span>
                                    {{ $text_content_button1 }}</span></a>
                            <a href="#"
                                class="btn text-primary btn-transparent btn-custom"><span>{{ $text_content_button2 }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-the-inventor section-background">
        <img class="monkey" src="{{ asset('website/assets/img/monkey.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img-wrapper">
                    <svg width="162" height="84" viewBox="0 0 162 84" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1022_4653)">
                            <path d="M105.36 15.66C105.29 16.14 105.21 16.61 105.13 17.09" stroke="#D1517B"
                                stroke-width="0.97" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M104.58 19.94C100.73 36.59 89.1901 52.39 74.5801 60.6C58.7301 69.51 39.9301 69.11 27.2701 59.6C20.6001 54.6 15.4201 46.34 16.8301 36.77C18.2401 27.2 28.6101 17.77 36.3701 20.96C41.3701 22.96 43.5401 29.16 43.9101 35.17C44.9601 52.28 33.6501 71.6 18.0401 79.34C13.4714 81.6217 8.46409 82.8907 3.36011 83.06"
                                stroke="#D1517B" stroke-width="0.97" stroke-linecap="round" stroke-linejoin="round"
                                stroke-dasharray="2.9 2.9" />
                            <path d="M1.93999 83.08C1.44999 83.08 0.93999 83.08 0.48999 83.03" stroke="#D1517B"
                                stroke-width="0.97" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M85.77 35.41L112.49 70.75L161.99 0L85.77 35.41Z" fill="#D14372" />
                            <path d="M67.8601 13.08L85.7701 35.41L161.99 0L67.8601 13.08Z" fill="#FF80A9" />
                            <path d="M89.99 43.99L161.99 0L85.97 78.25L89.99 43.99Z" fill="#FF80A9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1022_4653">
                                <rect width="161.99" height="83.56" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="img-div">
                        <img src="{{ $about_the_inventor_image }}" alt="">
                    </div>
                    <div class="text-content">
                        <h6>{{ $about_the_inventor_name }}</h6>
                        <p>{{ $about_the_inventor_position }}</p>
                    </div>
                </div>
                <div class="col-md-6 expandable-text-wrapper">
                    <div class="expandable-text">
                        <p>
                            {{ $about_the_inventor_description }}
                        </p>
                    </div>
                    <div class="see-more-btn">{{ $about_the_inventor_button }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="meet-our-team section-background py-60">

        <div class="container">



            <div class="row">



                <div class="mb-60 text-center title-wrapper">
                    <h3>Meet our Team</h3>
                    <p>{{ $meet_our_team_title }}</p>
                </div>


                <div class="team-carousel owl-carousel owl-theme">

                    @foreach ($teamMember as $index => $teamMemberDetails)
                        <div class="item team-card-wrapper">
                            <div class="item team-card-wrapper">
                                <div class="image-wrapper">

                                    <div class="team-image-wrapper">
                                        <img src="{{ $teamMemberDetails['image'] }}" alt="image">
                                    </div>

                                    @if ($index % 2 == 0)
                                        {{-- svg 1   --}}

                                        <svg width="193" height="109" viewBox="0 0 193 109" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1223_4855)">
                                                <path
                                                    d="M131.46 81.8896L119.63 97.5896L109.01 93.9996L109.2 79.3596L129.69 73.8496L131.46 81.8896Z"
                                                    fill="#FFBA3B" />
                                                <path
                                                    d="M39.6101 32.4903L113.1 4.60026C145.93 -6.55974 175.75 2.66028 191.39 37.8703C197.27 55.2703 180.39 71.1102 161.86 75.2102L108.27 87.0702C103.562 88.1102 98.7189 88.4004 93.9201 87.9302L66.9201 85.3003C63.6227 84.9788 60.3621 84.3527 57.1801 83.4302L19.5301 72.4903C17.4161 71.8719 15.5067 70.6976 14.001 69.09C12.4954 67.4824 11.4487 65.5002 10.9701 63.3503L1.82007 21.9602L13.4901 19.3703C15.8193 18.8563 18.2336 18.8668 20.5582 19.4013C22.8827 19.9357 25.0593 20.9806 26.9301 22.4602L39.6101 32.4903Z"
                                                    fill="#FFBA3B" />
                                                <path
                                                    d="M143.09 42.6603L81.7099 56.2403C79.7043 56.674 77.8711 57.6897 76.4399 59.1603L59.8799 76.3102C58.2099 78.0402 60.8799 79.1802 64.6899 78.3102L88.5699 73.0303C90.6465 72.5817 92.6612 71.8832 94.5699 70.9502L144.39 46.0802C144.776 45.8629 145.071 45.5145 145.222 45.098C145.373 44.6816 145.369 44.2248 145.212 43.8108C145.054 43.3968 144.754 43.0529 144.364 42.8418C143.975 42.6307 143.523 42.5663 143.09 42.6603Z"
                                                    fill="#F8623F" />
                                                <path
                                                    d="M48.9999 54.3604L13.0699 62.3604C11.8985 62.6123 10.8274 63.2035 9.98991 64.0604L0.289903 74.0604C-0.710097 75.0604 0.89991 75.7404 3.10991 75.2504L17.1099 72.1605C18.3317 71.8983 19.517 71.4886 20.6399 70.9404L49.8099 56.3804C49.9426 56.3273 50.0634 56.2484 50.1656 56.1485C50.2678 56.0486 50.3493 55.9296 50.4054 55.7982C50.4616 55.6668 50.4914 55.5257 50.493 55.3828C50.4946 55.2399 50.4681 55.098 50.4149 54.9654C50.3617 54.8328 50.2829 54.7119 50.183 54.6097C50.0831 54.5075 49.9641 54.426 49.8327 54.3698C49.7013 54.3136 49.5601 54.2839 49.4172 54.2823C49.2743 54.2807 49.1325 54.3072 48.9999 54.3604Z"
                                                    fill="#F8623F" />
                                                <path
                                                    d="M145.62 0.490234L143.24 6.05029C142.8 7.07311 142.637 8.19345 142.767 9.29919C142.897 10.4049 143.315 11.4572 143.98 12.3502L157.63 30.6802C158.58 31.9552 159.878 32.9282 161.369 33.4818C162.859 34.0354 164.478 34.1461 166.03 33.8003L187.03 29.1703C176 11.2503 162.02 2.29023 145.62 0.490234Z"
                                                    fill="#414CEB" />
                                                <path
                                                    d="M188.78 32.73L166.86 37.58C164.587 38.0807 162.217 37.915 160.035 37.1027C157.854 36.2903 155.952 34.8658 154.56 33L140.91 14.67C139.846 13.2378 139.175 11.5519 138.964 9.77991C138.754 8.00796 139.011 6.2117 139.71 4.56995L141.71 0L142.63 0.400024L140.63 4.95996C139.998 6.44041 139.766 8.06064 139.955 9.65906C140.145 11.2575 140.75 12.7782 141.71 14.0699L155.36 32.4C156.637 34.1107 158.381 35.4167 160.381 36.1616C162.382 36.9066 164.555 37.0588 166.64 36.6L188.57 31.75L188.78 32.73Z"
                                                    fill="#D3953A" />
                                                <path
                                                    d="M80.3501 38.9099C80.6377 40.1861 80.5401 41.5189 80.0696 42.7397C79.5992 43.9604 78.7771 45.0142 77.7074 45.7674C76.6378 46.5206 75.3686 46.9395 74.0607 46.971C72.7528 47.0025 71.465 46.6451 70.3603 45.9442C69.2557 45.2432 68.3839 44.2302 67.8553 43.0335C67.3267 41.8368 67.1651 40.5101 67.391 39.2215C67.6169 37.9329 68.2202 36.7403 69.1243 35.7947C70.0284 34.8492 71.1929 34.1932 72.4701 33.9099C74.178 33.5282 75.9677 33.8405 77.4454 34.7781C78.9231 35.7158 79.9679 37.202 80.3501 38.9099Z"
                                                    fill="#35343D" />
                                                <path
                                                    d="M76.0299 49.9599C74.128 50.3804 72.144 50.2276 70.3289 49.5207C68.5138 48.8138 66.9491 47.5847 65.8325 45.9886C64.7159 44.3925 64.0976 42.5011 64.0557 40.5537C64.0139 38.6062 64.5504 36.6901 65.5975 35.0476C66.6445 33.405 68.1551 32.1098 69.9382 31.3256C71.7213 30.5415 73.6968 30.3036 75.6151 30.642C77.5333 30.9805 79.3081 31.8802 80.7152 33.2272C82.1222 34.5743 83.0982 36.3082 83.5199 38.2099C84.0774 40.7607 83.6025 43.4285 82.199 45.6302C80.7956 47.8319 78.5776 49.3885 76.0299 49.9599ZM72.0299 31.6999C70.3206 32.0775 68.7617 32.9535 67.5503 34.2171C66.3389 35.4807 65.5295 37.0752 65.2244 38.7989C64.9192 40.5226 65.1321 42.298 65.8361 43.9007C66.54 45.5034 67.7035 46.8614 69.1793 47.8028C70.6551 48.7442 72.3769 49.2268 74.127 49.1896C75.8771 49.1524 77.5768 48.597 79.0112 47.5937C80.4457 46.5904 81.5503 45.1843 82.1856 43.5532C82.8208 41.922 82.958 40.139 82.5799 38.4299C82.328 37.2918 81.8539 36.2147 81.1849 35.2602C80.516 34.3057 79.6653 33.4924 78.6815 32.8673C77.6978 32.2421 76.6003 31.8172 75.452 31.6169C74.3038 31.4166 73.1273 31.4447 71.9899 31.6999H72.0299Z"
                                                    fill="white" />
                                                <path
                                                    d="M104.63 43.6304C102.728 44.0514 100.743 43.8989 98.9275 43.1919C97.1118 42.485 95.5466 41.2554 94.4299 39.6588C93.3131 38.0622 92.695 36.1703 92.6536 34.2223C92.6122 32.2744 93.1495 30.3578 94.1974 28.7152C95.2454 27.0727 96.757 25.7778 98.5409 24.9944C100.325 24.211 102.301 23.9742 104.22 24.3141C106.138 24.654 107.913 25.5552 109.319 26.9038C110.725 28.2524 111.7 29.9878 112.12 31.8904C112.674 34.4397 112.198 37.1049 110.795 39.3043C109.392 41.5038 107.175 43.0589 104.63 43.6304ZM100.63 25.3704C98.9206 25.748 97.3617 26.624 96.1504 27.8876C94.939 29.1512 94.1295 30.7457 93.8244 32.4694C93.5192 34.1931 93.7321 35.9685 94.4361 37.5712C95.14 39.1739 96.3035 40.5317 97.7793 41.4732C99.255 42.4146 100.977 42.8972 102.727 42.86C104.477 42.8228 106.177 42.2675 107.611 41.2642C109.046 40.2609 110.15 38.8548 110.786 37.2237C111.421 35.5925 111.558 33.8095 111.18 32.1004C110.927 30.963 110.452 29.8866 109.783 28.9328C109.113 27.9789 108.263 27.1663 107.279 26.5413C106.296 25.9163 105.199 25.4912 104.051 25.2903C102.903 25.0894 101.727 25.1166 100.59 25.3704H100.63Z"
                                                    fill="white" />
                                                <path
                                                    d="M133.23 37.3003C131.328 37.7214 129.343 37.5687 127.527 36.8617C125.712 36.1548 124.147 34.9252 123.03 33.3286C121.913 31.732 121.295 29.8402 121.254 27.8922C121.212 25.9443 121.75 24.0277 122.798 22.3852C123.845 20.7426 125.357 19.4477 127.141 18.6643C128.925 17.8809 130.901 17.6442 132.82 17.984C134.738 18.3239 136.513 19.2252 137.919 20.5738C139.325 21.9223 140.3 23.6576 140.72 25.5602C141.283 28.1102 140.81 30.7794 139.405 32.9809C138.001 35.1823 135.78 36.736 133.23 37.3003ZM129.23 19.0403C127.521 19.4179 125.962 20.2938 124.75 21.5574C123.539 22.821 122.73 24.4155 122.424 26.1392C122.119 27.8629 122.332 29.6384 123.036 31.2411C123.74 32.8438 124.904 34.2017 126.379 35.1431C127.855 36.0845 129.577 36.5671 131.327 36.5299C133.077 36.4927 134.777 35.9374 136.211 34.9341C137.646 33.9308 138.75 32.5246 139.386 30.8935C140.021 29.2623 140.158 27.4794 139.78 25.7703C139.527 24.6329 139.052 23.5564 138.383 22.6026C137.713 21.6487 136.863 20.8361 135.879 20.2111C134.896 19.5861 133.799 19.161 132.651 18.9601C131.503 18.7592 130.327 18.7865 129.19 19.0403H129.23Z"
                                                    fill="white" />
                                                <path
                                                    d="M108.95 32.5903C109.238 33.867 109.141 35.2005 108.67 36.4217C108.2 37.643 107.377 38.6972 106.307 39.4506C105.237 40.2039 103.967 40.6227 102.659 40.6537C101.35 40.6847 100.062 40.3266 98.9575 39.6248C97.8528 38.9229 96.9813 37.9089 96.4535 36.7113C95.9257 35.5137 95.7652 34.1863 95.9926 32.8975C96.2199 31.6086 96.8247 30.4162 97.7303 29.4714C98.636 28.5266 99.8018 27.8719 101.08 27.5903C102.786 27.2117 104.573 27.5255 106.049 28.4629C107.524 29.4003 108.568 30.8846 108.95 32.5903Z"
                                                    fill="#35343D" />
                                                <path
                                                    d="M132.514 34.1328C136.082 33.3582 138.346 29.8382 137.571 26.2707C136.797 22.7032 133.277 20.4391 129.709 21.2137C126.142 21.9883 123.878 25.5082 124.652 29.0757C125.427 32.6432 128.947 34.9074 132.514 34.1328Z"
                                                    fill="#35343D" />
                                                <path
                                                    d="M131.282 81.4939L114.39 85.2295L114.606 86.2059L131.498 82.4703L131.282 81.4939Z"
                                                    fill="#D3953A" />
                                                <path
                                                    d="M121.53 91.2298C122.137 93.9813 121.915 96.8513 120.892 99.4767C119.869 102.102 118.09 104.365 115.781 105.98C113.472 107.595 110.736 108.489 107.918 108.549C105.101 108.609 102.329 107.832 99.9536 106.317C97.5777 104.802 95.7043 102.617 94.5701 100.037C93.436 97.4576 93.0921 94.5998 93.5819 91.8249C94.0717 89.05 95.3732 86.4826 97.3219 84.4472C99.2706 82.4118 101.779 80.9999 104.53 80.3898C108.222 79.5739 112.086 80.2573 115.274 82.2901C118.462 84.3228 120.712 87.5384 121.53 91.2298Z"
                                                    fill="#35343D" />
                                                <path
                                                    d="M113.91 92.9202C114.185 94.1642 114.085 95.4618 113.622 96.6489C113.16 97.836 112.355 98.8592 111.311 99.589C110.266 100.319 109.029 100.722 107.755 100.749C106.481 100.775 105.228 100.423 104.155 99.7372C103.081 99.0513 102.235 98.0623 101.724 96.8954C101.212 95.7285 101.058 94.4361 101.282 93.1818C101.505 91.9274 102.095 90.7674 102.978 89.8486C103.86 88.9298 104.996 88.2935 106.24 88.0201C107.907 87.654 109.651 87.9643 111.089 88.8831C112.527 89.8018 113.542 91.2539 113.91 92.9202Z"
                                                    fill="#6ECFBC" />
                                                <path
                                                    d="M11.4701 63.2598L10.4701 63.3397C9.31008 49.1797 18.4701 39.2097 39.4701 31.9697L39.8001 32.9098C12.9401 42.1998 10.7701 54.6798 11.4701 63.2598Z"
                                                    fill="#D3953A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1223_4855">
                                                    <rect width="192.58" height="108.56" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        {{-- svg 2 --}}
                                    @else
                                        <svg width="162" height="84" viewBox="0 0 162 84" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1223_4845)">
                                                <path d="M105.36 15.6602C105.29 16.1402 105.21 16.6101 105.13 17.0901"
                                                    stroke="#D1517B" stroke-width="0.97" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M104.58 19.9404C100.73 36.5904 89.1901 52.3905 74.5801 60.6005C58.7301 69.5105 39.9301 69.1105 27.2701 59.6005C20.6001 54.6005 15.4201 46.3404 16.8301 36.7704C18.2401 27.2004 28.6101 17.7704 36.3701 20.9604C41.3701 22.9604 43.5401 29.1605 43.9101 35.1705C44.9601 52.2805 33.6501 71.6005 18.0401 79.3405C13.4714 81.6222 8.46409 82.8911 3.36011 83.0605"
                                                    stroke="#D1517B" stroke-width="0.97" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-dasharray="2.9 2.9" />
                                                <path d="M1.93999 83.0803C1.44999 83.0803 0.93999 83.0803 0.48999 83.0303"
                                                    stroke="#D1517B" stroke-width="0.97" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M85.77 35.41L112.49 70.75L161.99 0L85.77 35.41Z"
                                                    fill="#D14372" />
                                                <path d="M67.8601 13.08L85.7701 35.41L161.99 0L67.8601 13.08Z"
                                                    fill="#FF80A9" />
                                                <path d="M89.99 43.99L161.99 0L85.97 78.25L89.99 43.99Z" fill="#FF80A9" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1223_4845">
                                                    <rect width="161.99" height="83.56" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    @endif
                                </div>

                                <h4>{{ $teamMemberDetails['name'] }} </h4>
                                <span>{{ $teamMemberDetails['position'] }}</span>
                                <p>{{ $teamMemberDetails['experiance'] }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section class="download py-60">
        <div class="container">
            <div class="row">
                <div class="d-flex download-wrapper">
                    <img class="bg-img" src="{{ 'website/assets/img/mobile-background.webp' }}" alt="">
                    <div class="col-lg-4 col-12">
                        <img src="{{ $text_journey_image }}" alt="">
                    </div>
                    <div class="col-lg-8 col-12 d-flex">
                        <div class="text-content align-self-center">
                            <h2>{{ $text_journey_title1 }}</h2>
                            <p>{{ $text_journey_title2 }}.</p>
                            <div class="store d-flex mt-40">
                                <a href="">
                                    <img src="{{ $text_journey_button1 }}" alt=""> </a>
                                <a href="">
                                    <img src="{{ $text_journey_button2 }}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-latest-blog-section pt-60">
        <div class="container">
            <div class="row">
                <div class="mb-60 text-center title-wrapper">
                    <h3>Our Latest Blogs</h3>
                    <p>{{ $latest_blogs_title }}</p>
                </div>
                <div class="mb-60 our-latest-blog owl-carousel owl-theme">
                    @foreach ($blogs as $index => $blog)
                        @if ($index == 3)
                        @break
                    @endif
                    <div class="item latest-blog-card">



                        <a href="blog-listings.php">
                            <div class="image-wrapper">
                                <img src="{{ asset("storage/blogsImage/$blog->image") }}" alt="">
                            </div>
                            <div class="content-wrapper">
                                <span>{{ date('j F Y', strtotime($blog->created_at)) }}</span>
                                <h4>{{ $blog->title }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{-- <div class="item latest-blog-card">
                        <a href="blog-listings.php">
                            <div class="image-wrapper">
                                <img src="{{ asset('website/assets/img/blog2.webp') }}" alt="">
                            </div>
                            <div class="content-wrapper">
                                <span>2, Sept 2020</span>
                                <h4>How to make a website look
                                    more attractive with
                                    illustrations.</h4>
                            </div>
                        </a>
                    </div> --}}
                {{-- <div class="item latest-blog-card">
                        <a href="">
                            <div class="image-wrapper">
                                <img src="{{ asset('website/assets/img/author.webp') }}" alt="">
                            </div>
                            <div class="content-wrapper">
                                <span>2, Sept 2020</span>
                                <h4>How to make a website look
                                    more attractive with
                                    illustrations.</h4>
                            </div>
                        </a>
                    </div> --}}
            </div>
            <div class="text-center">
                <button class="view-btn btn-custom"><span>{{ $latest_blogs_button }}</span></button>
            </div>
        </div>
    </div>
</section>
@stop
