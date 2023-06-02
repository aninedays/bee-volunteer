@extends('layout')

@section('title')
    Charity | BEEVOLUNTEER
@endsection

<!-- Style section starts  -->
@section('style_css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/charity.css">
@endsection
<!-- Style section ends  -->

<!-- Navbar section -->
@section('navbar')
    @include('partials.navbar')
@endsection

<!-- Content section starts  -->
@section('content')
    <!-- Services section starts  -->
    <section class="services" id="services">

        <h1 class="heading"> Results <span>Activity</span> </h1>

        <div class="swiper Services-slider">
            <div class="swiper-wrapper">

                @foreach ($charity as $item)
                    <div class="swiper-slide box">
                        <img src="{{ $item->charity_img }}" alt="">
                        <div class="content">
                            <div class="icons">
                                <a href="#"> <i class="fas fa-user"></i> {{ $item->organization->user->user_name }}
                                </a>
                                <a href="#"> <i class="fas fa-calendar"></i> {{ $item->charity_date }} </a>
                            </div>
                            <h3>{{ $item->charity_title }}</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                            <a href={{ url('/detail-services') }} class="btn">See More</a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- Services section ends  -->

    <!-- Donations section start -->
    {{-- <section class="donations" id="donations">

        <h1 class="heading"> newest activities <span>Donation</span> </h1>

        <div class="swiper Donations-slider">
            <div class="swiper-wrapper">

                @foreach ($charity as $item)
                    <div class="swiper-slide box">
                        <img src="{{ $item->charity_img }}" alt="">
                        <div class="content">
                            <div class="icons">
                                <a href="#"> <i class="fas fa-user"></i> {{ $item->organization->user->user_name }}
                                </a>
                                <a href="#"> <i class="fas fa-calendar"></i> {{ $item->charity_date }} </a>
                            </div>
                            <h3>{{ $item->charity_title }}</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                            <a href={{ url('/detail') }} class="btn">See More</a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section> --}}
    <!-- Donations section ends -->

    <!-- All Charity section start -->
    {{-- <section class="blogs" id="blogs">

        <h1 class="heading"> All <span>Charity activities</span> </h1>

        <div class="box-container">

            @foreach ($charity as $item)
                <div class="box">
                    <img src="{{ $item->charity_img }}" alt="">
                    <div class="content">
                        <div class="icons">
                            <a href="#"> <i class="fas fa-user"></i> {{ $item->organization->user->user_name }} </a>
                            <a href="#"> <i class="fas fa-calendar"></i> {{ $item->charity_date }} </a>
                        </div>
                        <h3>{{ $item->charity_title }}</h3>
                        <p>{{ $item->charity_excerpt }}</p>
                        <a href={{ url('/detail-activity') }} class="btn">See More</a>
                    </div>
                </div>
            @endforeach

        </div>

    </section> --}}
    <!-- All Charity section ends -->

    {{ $charity->links() }}
@endsection
<!-- Content section ends  -->

@section('js')
    <script src="js/listActivity.js"></script>
@endsection
