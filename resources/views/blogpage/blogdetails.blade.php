@extends('layouts.master')
{{-- @dd($post); --}}
@section('content')<section class="banner-section position-relative">
        <img src="{{ asset("storage/blogsDetailImage/$post->image") }}" alt="">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb" class="my-40 blog-detail-breadcrumb position-absolute top-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Nepal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Title Goes here</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="blog-detail-section blog-section pt-60">
        <div class="filter-div">
            <div class="d-flex align-items-center justify-content-center filter-div-wrapper">
                <h6>Filter</h6>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="20"
                    height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5" />
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <div class="detail-wrapper">
                        <h1>{{ $post->title }}</h1>
                        <div class="py-4 d-flex align-items-center justify-content-between blog-detail-info">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center justify-content-between post-time-wrapper">
                                    <span>written on {{ date('j, F Y', strtotime($post->created_at)) }}</span>
                                    <div class="time d-flex align-items-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1274_5504)">
                                                <path
                                                    d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10 5.83301V9.99967L12.5 12.4997" stroke="#A4A4A4"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1274_5504">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        {{ $post->minutes_read }} Minutes Read
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex float-end align-items-center social-share">
                                    <ul class="d-flex align-items-center m-0 list-unstyled icon-wrapper">
                                        <li>
                                            <a href="#">
                                                <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.84225 16V8.70218H8.49469L8.89264 5.85725H5.84225V4.04118C5.84225 3.21776 6.08893 2.65661 7.36946 2.65661L9 2.65599V0.111384C8.71802 0.0775563 7.75008 0 6.62351 0C4.27103 0 2.66048 1.32557 2.66048 3.75942V5.85725H0V8.70218H2.66048V16H5.84225Z"
                                                        fill="#ADADAD" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9593 4.70406C15.9218 3.85391 15.7843 3.26945 15.5874 2.763C15.3842 2.22542 15.0715 1.74412 14.662 1.34402C14.2618 0.937686 13.7772 0.62195 13.2458 0.421959C12.7363 0.22502 12.1548 0.0875418 11.3044 0.0500587C10.4478 0.00940127 10.1758 0 8.00311 0C5.83039 0 5.55844 0.00940127 4.70496 0.0468843C3.85465 0.0843673 3.27007 0.221968 2.76365 0.418784C2.22584 0.62195 1.74445 0.934512 1.34427 1.34402C0.937865 1.74412 0.62219 2.22859 0.422039 2.75995C0.225063 3.26945 0.0875585 3.85074 0.0500683 4.70088C0.00940307 5.55738 0 5.82928 0 8.00159C0 10.1739 0.00940307 10.4458 0.0468932 11.2991C0.0843834 12.1493 0.22201 12.7337 0.418986 13.2402C0.62219 13.7778 0.937865 14.2591 1.34427 14.6592C1.74445 15.0655 2.22902 15.3812 2.76047 15.5812C3.27007 15.7782 3.85147 15.9156 4.7019 15.9531C5.55526 15.9907 5.82734 16 8.00006 16C10.1728 16 10.4447 15.9907 11.2982 15.9531C12.1485 15.9156 12.7331 15.7782 13.2395 15.5812C14.315 15.1655 15.1653 14.3153 15.5811 13.2402C15.778 12.7307 15.9156 12.1493 15.9531 11.2991C15.9906 10.4458 16 10.1739 16 8.00159C16 5.82928 15.9968 5.55738 15.9593 4.70406ZM14.5182 11.2366C14.4838 12.018 14.3525 12.44 14.2431 12.7213C13.9742 13.4183 13.4209 13.9715 12.7237 14.2404C12.4423 14.3498 12.0172 14.481 11.2387 14.5153C10.3947 14.5529 10.1415 14.5622 8.00629 14.5622C5.87106 14.5622 5.61473 14.5529 4.77371 14.5153C3.99215 14.481 3.57011 14.3498 3.28876 14.2404C2.94182 14.1122 2.62602 13.909 2.3697 13.6433C2.10397 13.3839 1.90076 13.0713 1.77254 12.7244C1.66312 12.4431 1.53185 12.018 1.49753 11.2398C1.45992 10.3959 1.45064 10.1426 1.45064 8.00781C1.45064 5.87299 1.45992 5.61671 1.49753 4.77597C1.53185 3.99457 1.66312 3.57261 1.77254 3.2913C1.90076 2.94431 2.10397 2.6287 2.37287 2.3723C2.63225 2.10662 2.94487 1.90345 3.29193 1.77538C3.57329 1.66598 3.9985 1.53473 4.77688 1.5003C5.62096 1.46281 5.87423 1.45341 8.00934 1.45341C10.1477 1.45341 10.4009 1.46281 11.2419 1.5003C12.0235 1.53473 12.4455 1.66598 12.7269 1.77538C13.0738 1.90345 13.3896 2.10662 13.6459 2.3723C13.9117 2.63175 14.1149 2.94431 14.2431 3.2913C14.3525 3.57261 14.4838 3.99762 14.5182 4.77597C14.5557 5.61989 14.5651 5.87299 14.5651 8.00781C14.5651 10.1426 14.5557 10.3927 14.5182 11.2366Z"
                                                        fill="#ADADAD" />
                                                    <path
                                                        d="M8 4C5.79171 4 4 5.79159 4 8C4 10.2084 5.79171 12 8 12C10.2084 12 12 10.2084 12 8C12 5.79159 10.2084 4 8 4ZM8 10.5947C6.56737 10.5947 5.4053 9.43275 5.4053 8C5.4053 6.56725 6.56737 5.4053 8 5.4053C9.43275 5.4053 10.5947 6.56725 10.5947 8C10.5947 9.43275 9.43275 10.5947 8 10.5947V10.5947Z"
                                                        fill="#ADADAD" />
                                                    <path
                                                        d="M13 4C13 4.55223 12.5523 5 11.9999 5C11.4477 5 11 4.55223 11 4C11 3.44764 11.4477 3 11.9999 3C12.5523 3 13 3.44764 13 4V4Z"
                                                        fill="#ADADAD" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.3593 1.89415C19.627 2.21538 18.8467 2.42831 18.0331 2.53169C18.8701 2.032 19.5088 1.24677 19.8091 0.300308C19.0288 0.765538 18.1673 1.09415 17.2491 1.27754C16.5082 0.488616 15.4522 0 14.3002 0C12.0651 0 10.2658 1.81415 10.2658 4.03815C10.2658 4.35815 10.2928 4.66585 10.3593 4.95877C7.00299 4.79508 4.03315 3.18646 2.03807 0.736C1.68976 1.34031 1.48545 2.032 1.48545 2.77662C1.48545 4.17477 2.20545 5.41415 3.27868 6.13169C2.63007 6.11938 1.99376 5.93108 1.45468 5.63446C1.45468 5.64677 1.45468 5.66277 1.45468 5.67877C1.45468 7.64062 2.85407 9.27015 4.68915 9.64554C4.36053 9.73538 4.00238 9.77846 3.63068 9.77846C3.37222 9.77846 3.1113 9.76369 2.86638 9.70954C3.38945 11.3083 4.87376 12.4837 6.63869 12.5218C5.26515 13.5963 3.52115 14.2437 1.63315 14.2437C1.30207 14.2437 0.984531 14.2289 0.666992 14.1883C2.4553 15.3415 4.57468 16 6.86022 16C14.2891 16 18.3507 9.84615 18.3507 4.512C18.3507 4.33354 18.3445 4.16123 18.3359 3.99015C19.1371 3.42154 19.8104 2.71138 20.3593 1.89415Z"
                                                        fill="#ADADAD" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.8461 0H1.15393C0.516602 0 0 0.516602 0 1.15393V14.8461C0 15.4834 0.516602 16 1.15393 16H14.8461C15.4834 16 16 15.4834 16 14.8461V1.15393C16 0.516602 15.4834 0 14.8461 0V0ZM5.67529 12.0938H3.72693V6.23206H5.67529V12.0938ZM4.70117 5.43164H4.68848C4.03467 5.43164 3.61182 4.98157 3.61182 4.41907C3.61182 3.84387 4.04761 3.40625 4.71411 3.40625C5.38062 3.40625 5.79077 3.84387 5.80347 4.41907C5.80347 4.98157 5.38062 5.43164 4.70117 5.43164ZM12.7007 12.0938H10.7526V8.95789C10.7526 8.1698 10.4705 7.63232 9.7655 7.63232C9.22729 7.63232 8.90674 7.99487 8.76587 8.34485C8.71436 8.47009 8.70178 8.64514 8.70178 8.82031V12.0938H6.75354C6.75354 12.0938 6.77905 6.78198 6.75354 6.23206H8.70178V7.06201C8.96069 6.6626 9.42395 6.09448 10.4576 6.09448C11.7395 6.09448 12.7007 6.93225 12.7007 8.73267V12.0938Z"
                                                        fill="#ADADAD" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>{{ $post->description }}
                        </p>
                        <img src="assets/img/detail-banner.png" alt="">
                        <div class="mt-5 expandable-text">
                            <p>
                                When it comes to Nepal, there’s no doubt the best way to see it is via rugged trails,
                                trekked on
                                your own two feet. An intriguing nation of snowy mountain peaks, remote monasteries,
                                colourful
                                communities and jungle wildlife. When you spend time with the locals, hiking through
                                spectacular
                                villages and rugged mountain passes, you soon begin to uncover the extraordinary in the
                                everyday.
                                When it comes to Nepal, there’s no doubt the best way to see it is via rugged trails,
                                trekked on
                                your own two feet. An intriguing nation of snowy mountain peaks, remote monasteries,
                                colourful
                                communities and jungle wildlife. When you spend time with the locals, hiking through
                                spectacular
                                villages and rugged mountain passes, you soon begin to uncover the extraordinary in the
                                everyday.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Sed vulputate mi sit amet mauris commodo quis imperdiet.
                                Nulla
                                pellentesque dignissim enim sit amet venenatis. Velit ut tortor pretium viverra. Iaculis
                                at
                                erat
                                pellentesque adipiscing commodo elit at. Sed odio morbi quis commodo odio aenean sed
                                adipiscing
                                diam. Sit amet cursus sit amet dictum sit. Luctus accumsan tortor posuere ac. Eget mi
                                proin
                                sed
                                libero enim sed faucibus turpis....
                            </p>
                        </div>
                        <button class="p-0 see-more-btn text-center m-auto d-flex">Read More</button>
                        <p>When it comes to Nepal, there’s no doubt the best way to see it is via rugged trails, trekked on
                            your own two feet. An intriguing nation of snowy mountain peaks, remote monasteries, colourful
                            communities and jungle wildlife. When you spend time with the locals, hiking through spectacular
                            villages and rugged mountain passes, you soon begin to uncover the extraordinary in the
                            everyday.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="assets/img/bd1.png" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/bd2.png" alt="">
                            </div>
                        </div>
                        <p>When it comes to Nepal, there’s no doubt the best way to see it is via rugged trails, trekked on
                            your own two feet. An intriguing nation of snowy mountain peaks, remote monasteries, colourful
                            communities and jungle wildlife. When you spend time with the locals, hiking through spectacular
                            villages and rugged mountain passes, you soon begin to uncover the extraordinary in the
                            everyday.
                        </p>
                    </div>
                    <div class="text-center social-share">
                        <h3>Share this article</h3>
                        <ul class="d-flex justify-content-center align-items-center m-0 list-unstyled icon-wrapper">
                            <li>
                                <a href="#">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.84225 16V8.70218H8.49469L8.89264 5.85725H5.84225V4.04118C5.84225 3.21776 6.08893 2.65661 7.36946 2.65661L9 2.65599V0.111384C8.71802 0.0775563 7.75008 0 6.62351 0C4.27103 0 2.66048 1.32557 2.66048 3.75942V5.85725H0V8.70218H2.66048V16H5.84225Z"
                                            fill="#ADADAD"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.9593 4.70406C15.9218 3.85391 15.7843 3.26945 15.5874 2.763C15.3842 2.22542 15.0715 1.74412 14.662 1.34402C14.2618 0.937686 13.7772 0.62195 13.2458 0.421959C12.7363 0.22502 12.1548 0.0875418 11.3044 0.0500587C10.4478 0.00940127 10.1758 0 8.00311 0C5.83039 0 5.55844 0.00940127 4.70496 0.0468843C3.85465 0.0843673 3.27007 0.221968 2.76365 0.418784C2.22584 0.62195 1.74445 0.934512 1.34427 1.34402C0.937865 1.74412 0.62219 2.22859 0.422039 2.75995C0.225063 3.26945 0.0875585 3.85074 0.0500683 4.70088C0.00940307 5.55738 0 5.82928 0 8.00159C0 10.1739 0.00940307 10.4458 0.0468932 11.2991C0.0843834 12.1493 0.22201 12.7337 0.418986 13.2402C0.62219 13.7778 0.937865 14.2591 1.34427 14.6592C1.74445 15.0655 2.22902 15.3812 2.76047 15.5812C3.27007 15.7782 3.85147 15.9156 4.7019 15.9531C5.55526 15.9907 5.82734 16 8.00006 16C10.1728 16 10.4447 15.9907 11.2982 15.9531C12.1485 15.9156 12.7331 15.7782 13.2395 15.5812C14.315 15.1655 15.1653 14.3153 15.5811 13.2402C15.778 12.7307 15.9156 12.1493 15.9531 11.2991C15.9906 10.4458 16 10.1739 16 8.00159C16 5.82928 15.9968 5.55738 15.9593 4.70406ZM14.5182 11.2366C14.4838 12.018 14.3525 12.44 14.2431 12.7213C13.9742 13.4183 13.4209 13.9715 12.7237 14.2404C12.4423 14.3498 12.0172 14.481 11.2387 14.5153C10.3947 14.5529 10.1415 14.5622 8.00629 14.5622C5.87106 14.5622 5.61473 14.5529 4.77371 14.5153C3.99215 14.481 3.57011 14.3498 3.28876 14.2404C2.94182 14.1122 2.62602 13.909 2.3697 13.6433C2.10397 13.3839 1.90076 13.0713 1.77254 12.7244C1.66312 12.4431 1.53185 12.018 1.49753 11.2398C1.45992 10.3959 1.45064 10.1426 1.45064 8.00781C1.45064 5.87299 1.45992 5.61671 1.49753 4.77597C1.53185 3.99457 1.66312 3.57261 1.77254 3.2913C1.90076 2.94431 2.10397 2.6287 2.37287 2.3723C2.63225 2.10662 2.94487 1.90345 3.29193 1.77538C3.57329 1.66598 3.9985 1.53473 4.77688 1.5003C5.62096 1.46281 5.87423 1.45341 8.00934 1.45341C10.1477 1.45341 10.4009 1.46281 11.2419 1.5003C12.0235 1.53473 12.4455 1.66598 12.7269 1.77538C13.0738 1.90345 13.3896 2.10662 13.6459 2.3723C13.9117 2.63175 14.1149 2.94431 14.2431 3.2913C14.3525 3.57261 14.4838 3.99762 14.5182 4.77597C14.5557 5.61989 14.5651 5.87299 14.5651 8.00781C14.5651 10.1426 14.5557 10.3927 14.5182 11.2366Z"
                                            fill="#ADADAD"></path>
                                        <path
                                            d="M8 4C5.79171 4 4 5.79159 4 8C4 10.2084 5.79171 12 8 12C10.2084 12 12 10.2084 12 8C12 5.79159 10.2084 4 8 4ZM8 10.5947C6.56737 10.5947 5.4053 9.43275 5.4053 8C5.4053 6.56725 6.56737 5.4053 8 5.4053C9.43275 5.4053 10.5947 6.56725 10.5947 8C10.5947 9.43275 9.43275 10.5947 8 10.5947V10.5947Z"
                                            fill="#ADADAD"></path>
                                        <path
                                            d="M13 4C13 4.55223 12.5523 5 11.9999 5C11.4477 5 11 4.55223 11 4C11 3.44764 11.4477 3 11.9999 3C12.5523 3 13 3.44764 13 4V4Z"
                                            fill="#ADADAD"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.3593 1.89415C19.627 2.21538 18.8467 2.42831 18.0331 2.53169C18.8701 2.032 19.5088 1.24677 19.8091 0.300308C19.0288 0.765538 18.1673 1.09415 17.2491 1.27754C16.5082 0.488616 15.4522 0 14.3002 0C12.0651 0 10.2658 1.81415 10.2658 4.03815C10.2658 4.35815 10.2928 4.66585 10.3593 4.95877C7.00299 4.79508 4.03315 3.18646 2.03807 0.736C1.68976 1.34031 1.48545 2.032 1.48545 2.77662C1.48545 4.17477 2.20545 5.41415 3.27868 6.13169C2.63007 6.11938 1.99376 5.93108 1.45468 5.63446C1.45468 5.64677 1.45468 5.66277 1.45468 5.67877C1.45468 7.64062 2.85407 9.27015 4.68915 9.64554C4.36053 9.73538 4.00238 9.77846 3.63068 9.77846C3.37222 9.77846 3.1113 9.76369 2.86638 9.70954C3.38945 11.3083 4.87376 12.4837 6.63869 12.5218C5.26515 13.5963 3.52115 14.2437 1.63315 14.2437C1.30207 14.2437 0.984531 14.2289 0.666992 14.1883C2.4553 15.3415 4.57468 16 6.86022 16C14.2891 16 18.3507 9.84615 18.3507 4.512C18.3507 4.33354 18.3445 4.16123 18.3359 3.99015C19.1371 3.42154 19.8104 2.71138 20.3593 1.89415Z"
                                            fill="#ADADAD"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.8461 0H1.15393C0.516602 0 0 0.516602 0 1.15393V14.8461C0 15.4834 0.516602 16 1.15393 16H14.8461C15.4834 16 16 15.4834 16 14.8461V1.15393C16 0.516602 15.4834 0 14.8461 0V0ZM5.67529 12.0938H3.72693V6.23206H5.67529V12.0938ZM4.70117 5.43164H4.68848C4.03467 5.43164 3.61182 4.98157 3.61182 4.41907C3.61182 3.84387 4.04761 3.40625 4.71411 3.40625C5.38062 3.40625 5.79077 3.84387 5.80347 4.41907C5.80347 4.98157 5.38062 5.43164 4.70117 5.43164ZM12.7007 12.0938H10.7526V8.95789C10.7526 8.1698 10.4705 7.63232 9.7655 7.63232C9.22729 7.63232 8.90674 7.99487 8.76587 8.34485C8.71436 8.47009 8.70178 8.64514 8.70178 8.82031V12.0938H6.75354C6.75354 12.0938 6.77905 6.78198 6.75354 6.23206H8.70178V7.06201C8.96069 6.6626 9.42395 6.09448 10.4576 6.09448C11.7395 6.09448 12.7007 6.93225 12.7007 8.73267V12.0938Z"
                                            fill="#ADADAD"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
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
                                @foreach ($blogs as $key => $blog)
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
                        @foreach ($blogs as $key => $blog)
                            {{-- @dd($blog) --}}
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
    <div class="mt-60 recent-blog-wrapper">
        <div class="row">
            <div class="mb-60 title-wrapper">
                <h3>You might also like</h3>
            </div>
            <div class="recent-blog owl-carousel owl-theme">
                <div class="item blog-card-hover blog-card">
                    <a href="blog-detail.php">
                        <div class="image-wrapper">
                            <img src="assets/img/blog-1.png" alt="">
                        </div>
                        <div class="bg-white p-20 content-wrapper">
                            <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                            <span>2, Sept 2020</span>
                        </div>
                    </a>
                </div>
                <div class="item blog-card-hover blog-card">
                    <a href="">
                        <div class="image-wrapper">
                            <img src="assets/img/blog-2.png" alt="">
                        </div>
                        <div class="bg-white p-20 content-wrapper">
                            <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                            <span>2, Sept 2020</span>
                        </div>
                    </a>
                </div>
                <div class="item blog-card-hover blog-card">
                    <a href="">
                        <div class="image-wrapper">
                            <img src="assets/img/blog-card.webp" alt="">
                        </div>
                        <div class="bg-white p-20 content-wrapper">
                            <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                            <span>2, Sept 2020</span>
                        </div>
                    </a>
                </div>
                <div class="item blog-card-hover blog-card">
                    <a href="">
                        <div class="image-wrapper">
                            <img src="assets/img/blog-3.png" alt="">
                        </div>
                        <div class="bg-white p-20 content-wrapper">
                            <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                            <span>2, Sept 2020</span>
                        </div>
                    </a>
                </div>
                <div class="item blog-card-hover blog-card">
                    <a href="">
                        <div class="image-wrapper">
                            <img src="assets/img/blog-card.webp" alt="">
                        </div>
                        <div class="bg-white p-20 content-wrapper">
                            <h3>Porttitor pharetr consectetur viverra est nisl a, vulputate id...</h3>
                            <span>2, Sept 2020</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="recent-blog-section">
<div class="container">

</div>
</section>

@stop
