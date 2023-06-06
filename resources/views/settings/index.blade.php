@extends('menu.common')
@php
    $arcodian = json_decode($photo_text_banner_accordion);
    $team = json_decode($meet_our_team_description);
    $aboutAppCard = json_decode($about_app_card, true);
@endphp
{{-- @dd($aboutAppCard) --}}



@section('content')
    <div class="container mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <div>
            <h3 class="text-center">Settings Section</h3>
        </div>
        <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Home Banner Title1 <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $home_banner_title1 }}" name="home_banner_title1">
                @if ($errors->has('home_banner_title1'))
                    <span class="text-danger">
                        {{ $errors->first('home_banner_title1') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Home Banner Title2 <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $home_banner_title2 }}" name="home_banner_title2">
                @if ($errors->has('home_banner_title2'))
                    <span class="text-danger">
                        {{ $errors->first('home_banner_title2') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Home Banner Title3 <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $home_banner_title3 }}" name="home_banner_title3">
                @if ($errors->has('home_banner_title3'))
                    <span class="text-danger">
                        {{ $errors->first('home_banner_title3') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">home banner button1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $home_banner_button1 }}"
                    name="home_banner_button1">
                @if ($errors->has('home_banner_button1'))
                    <span class="text-danger">
                        {{ $errors->first('home_banner_button1') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">home banner button2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $home_banner_button2 }}"
                    name="home_banner_button2">
                @if ($errors->has('home_banner_button2'))
                    <span class="text-danger">
                        {{ $errors->first('home_banner_button2') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">photo text banner image <span
                        class="text-danger">*</span></label>
                <input type="file" class="form-control w-50" accept="image/*" name="photo_text_banner_image">
                @if ($errors->has('photo_text_banner_image'))
                    <span class="text-danger">
                        {{ $errors->first('photo_text_banner_image') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $photo_text_banner_image }}" style="width: 50px; height:50px, object-fit: cover;"
                        alt="">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">photo text banner accordion <span
                        class="text-danger">*</span></label>
                <input id="arcodianadd" type="button" class="btn btn-success" value="Add"
                    name="photo_text_banner_accordion">
            </div>


            <div>
                @foreach ($arcodian as $index => $arcodianData)
                    @php
                        $input = $index + 1;
                    @endphp
                    <div id="arcodianData">
                        <input class="form-control w-50 mt-3" name="{{ "arcodian[$input][title]" }}" type="text"
                            value="{{ $arcodianData->title }}">

                        <textarea name="{{ "arcodian[$input][description]" }}" class="form-control w-50 mt-2">

@if (Str::length($arcodianData->description > 70))
{{ Str::substr($arcodianData->description, 0, 70) . '...' }}
@else
{{ $arcodianData->description }}
@endif
</textarea>
                        <div class="my-2">

                            <input type="button" class="deletearcodian btn btn-danger" class="btn btn-danger"
                                value="Delete">
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- add arcodian  --}}
            <div class="arcodiansection">

            </div>

            <div class="mb-3 mt-2">
                <label class="form-label" style="text-transform: capitalize">about app title1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_app_title1 }}" name="about_app_title1">
                @if ($errors->has('about_app_title1'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_title1') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about app title2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_app_title2 }}" name="about_app_title2">
                @if ($errors->has('about_app_title2'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_title2') }}
                    </span>
                @endif
            </div>


            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">photo text banner image <span
                        class="text-danger">*</span></label>
                <input type="file" class="form-control w-50" accept="image/*" name="about_app_image">
                @if ($errors->has('about_app_image'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_image') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $about_app_image }}" style="width: 50px; height:50px, object-fit: cover;"
                        alt="image">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">About App Card <span
                        class="text-danger">*</span></label>
                <button id="aboutappcard" class="btn btn-success">Add</button>
                @if ($errors->has('about_app_card'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_card') }}
                    </span>
                @endif
            </div>
            @if (!is_null($aboutAppCard))
                @foreach ($aboutAppCard as $index => $card)
                    @php
                        $input = $index + 1;
                    @endphp
                    <div class="mb-2">
                        <img src="{{ $card['image'] }}" name="{{ "aboutappcard[$input][image]" }}"
                            style="width: 20px; height:20px, object-fit: cover;" alt="" srcset="">
                        <input class="ms-2" type="text" name="{{ "aboutappcard[$input][title]" }}"
                            value="{{ $card['title'] }}" />
                        <input name="{{ "aboutappcard[$input][image]" }}" type="text" hidden
                            value="{{ $card['image'] }}" />

                        <input type="button" class="btn btn-danger" value="Delete">



                    </div>
                @endforeach
            @else
                <p>No data found!</p>

            @endif

            <div class="aboutappcardsection">

            </div>


            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about app counter1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_app_counter1 }}"
                    name="about_app_counter1">
                @if ($errors->has('about_app_counter1'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_counter1') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about app counter2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_app_counter2 }}"
                    name="about_app_counter2">
                @if ($errors->has('about_app_counter2'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_counter2') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about app counter3 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_app_counter3 }}"
                    name="about_app_counter3">
                @if ($errors->has('about_app_counter3'))
                    <span class="text-danger">
                        {{ $errors->first('about_app_counter3') }}
                    </span>
                @endif
            </div>




            @php
                $kidoromaImage = json_decode($why_kidoroma_image);
            @endphp

            <div class="d-flex">
                {{-- @foreach ($kidoromaImage as $kidImage)
                    <div class="mt-2 ms-2 ">
                        <img src="{{ $kidImage }}" style="width: 50px; height:50px, object-fit: cover;"
                            alt="image">
                    </div>
                @endforeach --}}
            </div>

            <div id="kidoromaimage">

            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">why kidoroma card <span
                        class="text-danger">*</span></label>
                {{-- <input type="text" class="form-control w-50" value="{{ $why_kidoroma_card }}"
                    name="why_kidoroma_card"> --}}
                @php
                    $kidoromacard = json_decode($why_kidoroma_card);
                @endphp
                {{-- @dd($kidoromacard) --}}


                <input id="kidoromacard" type="button" value="Add" class="btn btn-success">
                @if ($errors->has('why_kidoroma_card'))
                    <span class="text-danger">
                        {{ $errors->first('why_kidoroma_card') }}
                    </span>
                @endif
            </div>


            <div>
                @if (!is_null($kidoromacard))
                    @foreach ($kidoromacard as $index => $card)
                        <div class="removekidoroma">
                            @php
                                $input = $index + 1;
                            @endphp
                            <img name="{{ "whykidoroma[$input][image]" }}"
                                style="width: 30px;height:30px;object-fit:cover" src="{{ $card->image }}"
                                alt="">
                            <img name="{{ " whykidoroma[$input][image1]" }}" class="ms-2 mb-3"
                                style="width: 30px;height:30px;object-fit:cover" src="{{ $card->image1 }}"
                                alt="">

                            <input type="text" value="{{ $card->image }}"
                                name="{{ "whykidoroma[$input][images]" }}" hidden>
                            <input type="text" value="{{ $card->image1 }}"
                                name="{{ "whykidoroma[$input][images1]" }}" hidden>
                            <input name="{{ "whykidoroma[$input][title]" }}" style="width: 40%" type="text"
                                value="{{ $card->title }}">

                            <input type="button" class="btn btn-danger removekidoromacard" value="Delete">
                        </div>
                    @endforeach
                @else
                    <div>
                        <p>No data added</p>
                    </div>

                @endif
            </div>
            <div id="kidoromacarddetail">

            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text content title1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_content_title1 }}"
                    name="text_content_title1">
                @if ($errors->has('text_content_title1'))
                    <span class="text-danger">
                        {{ $errors->first('text_content_title1') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text content title2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_content_title2 }}"
                    name="text_content_title2">
                @if ($errors->has('text_content_title2'))
                    <span class="text-danger">
                        {{ $errors->first('text_content_title2') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text content title3 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_content_title3 }}"
                    name="text_content_title3">
                @if ($errors->has('text_content_title3'))
                    <span class="text-danger">
                        {{ $errors->first('text_content_title3') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text content button1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_content_button1 }}"
                    name="text_content_button1">
                @if ($errors->has('text_content_button1'))
                    <span class="text-danger">
                        {{ $errors->first('text_content_button1') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text content button2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_content_button2 }}"
                    name="text_content_button2">
                @if ($errors->has('text_content_button2'))
                    <span class="text-danger">
                        {{ $errors->first('text_content_button2') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about the inventor description <span
                        class="text-danger">*</span></label>

                <textarea class="form-control w-50" name="about_the_inventor_description" id="" cols="30"
                    rows="10">{{ $about_the_inventor_description }} </textarea>
                @if ($errors->has('about_the_inventor_description'))
                    <span class="text-danger">
                        {{ $errors->first('about_the_inventor_description') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about the inventor image <span
                        class="text-danger">*</span></label>
                <input type="file" accept="image/*" class="form-control w-50" name="about_the_inventor_image">
                @if ($errors->has('about_the_inventor_image'))
                    <span class="text-danger">
                        {{ $errors->first('about_the_inventor_image') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $about_the_inventor_image }}" style="width: 50px; height:50px, object-fit: cover;"
                        alt="image">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about the inventor name <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_the_inventor_name }}"
                    name="about_the_inventor_name">
                @if ($errors->has('about_the_inventor_name'))
                    <span class="text-danger">
                        {{ $errors->first('about_the_inventor_name') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about the inventor position <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_the_inventor_position }}"
                    name="about_the_inventor_position">
                @if ($errors->has('about_the_inventor_position'))
                    <span class="text-danger">
                        {{ $errors->first('about_the_inventor_position') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">about the inventor button <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $about_the_inventor_button }}"
                    name="about_the_inventor_button">
                @if ($errors->has('about_the_inventor_button'))
                    <span class="text-danger">
                        {{ $errors->first('about_the_inventor_button') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">meet our team title <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $meet_our_team_title }}"
                    name="meet_our_team_title">
                @if ($errors->has('meet_our_team_title'))
                    <span class="text-danger">
                        {{ $errors->first('meet_our_team_title') }}
                    </span>
                @endif
            </div>






            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">meet our team Details <span
                        class="text-danger">*</span></label>
                <input type="button" id="ourteamadd" value="Add" class="btn btn-success"
                    name="meet_our_team_description">
                @if ($errors->has('meet_our_team_description'))
                    <span class="text-danger">
                        {{ $errors->first('meet_our_team_description') }}
                    </span>
                @endif
            </div>
            <div>
                {{-- @dd($team) --}}
                @foreach ($team as $index => $ourTeam)
                    <div class="removeourteam">
                        @php
                            $input = $index + 1;
                        @endphp
                        {{-- <img name="{{ "ourteam[$input][image]" }}" src="{{ $ourTeam->image }}" alt=""
                            style="width: 30px;height:30px;object-fit:cover"> --}}



                        <img src="{{ $ourTeam->image }}" alt=""
                            style="width: 30px;height:30px;object-fit:cover">

                        {{-- <input type="text" name="{{ "ourteam[$input][image]" }}" value="{{ $ourTeam->image }}"
                            hidden> --}}

                        <input type="text" name="{{ "ourteam[$input][images]" }}" value="{{ $ourTeam->image }}"
                            hidden>
                        <input name="{{ "ourteam[$input][name]" }}" type="text" value="{{ $ourTeam->name }}">
                        <input type="text" name="{{ "ourteam[$input][position]" }}"
                            value="{{ $ourTeam->position }}">
                        <input type="text" name="{{ "ourteam[$input][experiance]" }}"
                            value="@if (Str::length($ourTeam->experiance) > 20) {{ Str::substr($ourTeam->experiance, 0, 20) . '...' }} @endif">

                        <input type="button" class="btn btn-danger my-2 removeteam" value="Delete">
                    </div>
                @endforeach
            </div>
            <div class="ourteamsection">

            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text journey title1 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_journey_title1 }}"
                    name="text_journey_title1">
                @if ($errors->has('text_journey_title1'))
                    <span class="text-danger">
                        {{ $errors->first('text_journey_title1') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text journey title2 <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $text_journey_title2 }}"
                    name="text_journey_title2">
                @if ($errors->has('text_journey_title2'))
                    <span class="text-danger">
                        {{ $errors->first('text_journey_title2') }}
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text journey image <span
                        class="text-danger">*</span></label>
                <input type="file" accept="image/*" class="form-control w-50" value="{{ $text_journey_image }}"
                    name="text_journey_image">
                @if ($errors->has('text_journey_image'))
                    <span class="text-danger">
                        {{ $errors->first('text_journey_image') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $text_journey_image }}" style="width: 50px; height:50px, object-fit: cover;"
                        alt="journey image">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text journey button1 Image <span
                        class="text-danger">*</span></label>
                <input type="file" class="form-control w-50" value="{{ $text_journey_button1 }}"
                    name="text_journey_button1">
                @if ($errors->has('text_journey_button1'))
                    <span class="text-danger">
                        {{ $errors->first('text_journey_button1') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $text_journey_button1 }}" style="width: 50px; height:50px, object-fit: cover;"
                        alt="button1 image">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">text journey button2 <span
                        class="text-danger">*</span></label>
                <input type="file" class="form-control w-50" value="{{ $text_journey_button2 }}"
                    name="text_journey_button2">
                @if ($errors->has('text_journey_button2'))
                    <span class="text-danger">
                        {{ $errors->first('text_journey_button2') }}
                    </span>
                @endif
                <div class="mt-2">
                    <img src="{{ $text_journey_button2 }}" style="width: 50px; height:50px, object-fit: cover;"
                        alt="button2 image">
                </div>
            </div>



            <div class="mb-3">
                <label class="form-label" style="text-transform: capitalize">latest blogs button <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-50" value="{{ $latest_blogs_button }}"
                    name="latest_blogs_button">
                @if ($errors->has('latest_blogs_button'))
                    <span class="text-latest_blogs_button">
                        {{ $errors->first('latest_blogs_button') }}
                    </span>
                @endif
            </div>






            <input type="submit" class="btn btn-success" value="Save Changes">

        </form>

    </div>
    @php
        $arcodianValue = count($arcodian);
        // $aboutappValue = count($aboutAppCard);
        $kidoromacardValue = !is_null($kidoromacard) ? count($kidoromacard) : 0;
        $ourteamValue = count($team);
        
        // $arcodianValue = 0;
        $aboutappValue = 0;
        // $kidoromacardValue = 0;
        // $ourteamValue = 0;
    @endphp
    {{-- @dd($ourteamValue) --}}


    <script>
        $(document).ready(function() {
            var count = @json($kidoromacardValue);
            var j = @json($ourteamValue);
            var arcodian = @json($arcodianValue);
            var aboutapp = @json($aboutappValue);

            /// image remove
            $(document).on('click', '.removebtn', function(e) {
                e.preventDefault();
                $(this).closest('.kidoimg').remove();
            })

            /// icon and title remove
            $(document).on('click', '.removecard', function(e) {
                e.preventDefault();
                $(this).closest('.kidoromacarddetail').remove();
            })

            // / our team remove
            $(document).on('click',
                '.removeourteam',
                function(e) {
                    e.preventDefault();
                    $(this).closest('.ourteamdetail').remove();
                })

            /// remove arcodian
            $(document).on('click', '.removearcodian', function(e) {
                e.preventDefault();
                $(this).closest('.addarcodian').remove();
            })

            /// remove app card
            $(document).on('click', '.removeappcard', function(e) {
                e.preventDefault();
                $(this).closest('#addingcard').remove();
            })

            //// remove arcodian value
            $(document).on('click', '.deletearcodian', function(e) {
                e.preventDefault();
                // alert('Deleted');
                $(this).closest("#arcodianData").remove();
            })

            /// remove kidoroma value

            $(document).on('click', '.removekidoromacard', function(e) {
                e.preventDefault();
                // alert('click');
                $(this).closest('.removekidoroma').remove();
            })

            //// remove team
            $(document).on('click', '.removeteam', function(e) {
                e.preventDefault();
                // alert('click');
                $(this).closest('.removeourteam').remove();

            })


            //// kidoroma image
            // $("#addkidoromaimage").click(function() {
            //     ++i;

            //     $('#kidoromaimage').append(`
        //     <div class='mb-2 kidoimg'>
        //         <label>Image
        //             <span class="text-danger">*</span>
        //             </label>
        //     <div class="d-flex">
        //         <input type='file' class="form-control m " style="width:40%"  class="form-label" name="why[` +
            //         i + `][whykidoromaimage]" />
        //     <span>
        //         <button class="btn btn-danger ms-2 removebtn ">Remove</button>
        //         </span>
        //         </div>
        //         </div>
        //     `)

            // })

            /// card adding
            $('#kidoromacard').click(function() {
                ++count;

                $('#kidoromacarddetail').append(
                    `
                    <div class='d-flex  mb-3 kidoromacarddetail'>
                        <label class="form-label ">Image
                            <span class="text-danger me-1">*</span>
                            </label>
                        <div>
                            <input
                        name="whykidoroma[` +
                    count +
                    `][image]"
                        class="form-control" type='file' />
                            </div>
                            <label class="form-label ms-2 ">Icon
                            <span class="text-danger me-1">*</span>
                            </label>
                        <div>
                            <input
                        name="whykidoroma[` +
                    count +
                    `][image1]"
                        class="form-control" type='file' />
                            </div>
                        <label  class="form-label ms-2 me-1">Title
                            <span class="text-danger">*</span>
                            </label>
                        <div>
                            <input  name="whykidoroma[` +
                    count +
                    `][title]" class="form-control" type='text'  />
                            </div>
                            <button class='btn btn-danger ms-2 removecard '>Remove</button>
                        </div>
                    `
                )
            })

            /// our team add
            $('#ourteamadd').click(function() {
                ++j;
                $('.ourteamsection').append(
                    `<div class='d-flex mb-3 ourteamdetail'>
                    <label>Image
                        <span class="text-danger me-1">*</span>
                        </label>
                    <input type='file' accept="image/*" name="ourteam[` + j + `][image]" />
                    <label class='ms-2'>Name
                        <span class="text-danger me-1">*</span>
                        </label>
                    <input type='text' name="ourteam[` + j + `][name]"  />
                    <label class='ms-2'>Position
                        <span class="text-danger me-1">*</span>
                        </label>
                    <input type='text' name="ourteam[` + j + `][position]" />
                    <label class='ms-2'>Experiance
                        <span class="text-danger me-1">*</span>
                        </label>
                    <input type='text' name="ourteam[` + j + `][experiance]"/>
                    <button class='btn btn-danger ms-2 removeourteam'>Remove</button>
                    </div>`
                );
            });

            // arcodian section
            $('#arcodianadd').click(function() {
                ++arcodian;
                $('.arcodiansection').append(
                    `
                    <div class='d-flex addarcodian mb-2'>
                        <label class='form-label mx-2'>Title
                            <span class="text-danger me-1">*</span>
                            </label>
                        <input name="arcodian[` + arcodian + `][title]" style="width:22%" />
                        <label class='form-label mx-2'>Description
                            <span class="text-danger me-1">*</span>
                            </label>
                        <textarea name="arcodian[` + arcodian + `][description]"  style="width:32%"></textarea>
                        <button class=" ms-2 btn btn-danger removearcodian" >Remove</button>
                        </div>
                    `
                )

            });
            $('#aboutappcard').click(function(e) {
                ++aboutapp;
                e.preventDefault();
                $('.aboutappcardsection').append(
                    `
                    <div class='mb-2 ' id='addingcard'>
                        <label class='form-label'>Icon</label>
                        <input type='file' accept='image/*' name="aboutappcard[` + aboutapp + `][image]" />
                        <label class='formlabel'>Title</label>
                        <input style='width:20%' type='text' placeholder='Enter title name' name="aboutappcard[` +
                    aboutapp + `][title]" />
                            <button class='btn btn-danger ms-2 removeappcard'>Remove</button>
                        </div>
                    `
                )
            })


        });
    </script>
@stop
