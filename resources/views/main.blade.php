@extends('layout')

@section('title')
    Home | BEEVOLUNTEER
@endsection

<!-- Style section starts  -->
@section('style_css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
@endsection
<!-- Style section ends  -->

<!-- Navbar section -->
@section('navbar')
    @include('partials.navbar_volunteer')
@endsection

<!-- Content section starts  -->
@section('content')
    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h3>The Best <span>Place</span> To be Helpful For Others</h3>
            <p>With BeeVolunteer</p>
            <a href={{ url('/about-us') }} class="btn">Learn More</a>
        </div>

    </section>
    <!-- home section ends -->

    <!-- features section starts  -->
    <section class="type" id="type">

        <h1 class="heading"> type of <span>activity</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/Service.jpg" alt="">
                <h3>Services</h3>
                <a href={{ url('/charity') }} class="btn">See More</a> <!-- Mengarah ke Halaman Services Activity -->
            </div>

            <div class="box">
                <img src="images/Donation.jpg" alt="">
                <h3>Donations</h3>
                <a href={{ url('/charity') }} class="btn">See More</a> <!-- Mengarah ke Halaman Services Activity -->
            </div>

        </div>

    </section>
    <!-- features section ends -->

    <!-- categories section starts  -->
    <section class="categories" id="categories">

        <h1 class="heading"> activity <span>categories</span> </h1>

        <div class="box-container">

            @foreach ($home as $category)
                <div class="box">
                    <img src="{{ $category->category->category_image }}" alt="">
                    <h3>{{ $category->category->category_name }}</h3>
                    <a href={{ url('/organization') }} class="btn">see more</a>
                </div>
            @endforeach

        </div>

    </section>
    <!-- categories section ends -->

    <!-- review section starts  -->
    <section class="aboutUs" id="aboutUs">

        <h1 class="heading"> about <span>us</span> </h1>

        <div class="swiper aboutUs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/description.jpg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>Description</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/visi.jpg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>Vison</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/misi.jpg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>Mision</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- review section ends -->

    <!-- blogs section starts  -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>activity</span> </h1>

        <div class="box-container">

            @foreach ($home as $charity)
                <div class="box">
                    <img src="{{ $charity->charity->charity_img }}" alt="">
                    <div class="content">
                        <div class="icons">
                            <a href="#"> <i
                                    class="fas fa-user"></i>{{ $charity->charity->organization->user->user_name }}</a>
                            <a href="#"> <i class="fas fa-calendar"></i>{{ $charity->charity->charity_date }}</a>
                        </div>
                        <h3>{{ $charity->charity->charity_title }}</h3>
                        <p>{{ $charity->charity->charity_excerpt }}</p>
                        <a href={{ url('/detail-services') }} class="btn">See More</a>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
    <!-- blogs section ends -->
@endsection
<!-- Content section ends  -->

@section('js')
    <script src="js/home.js"></script>
@endsection
