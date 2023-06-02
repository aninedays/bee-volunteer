@extends('layout')

@section('title')
    Organization | BEEVOLUNTEER
@endsection

@section('style_css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/organization.css">
    <link rel="stylesheet" href="css/navbar.css">
@endsection

<!-- Navbar section -->
@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
    <!-- categories section starts  -->
    <section class="categories" id="categories">

        <h1 class="heading"> Organization <span>categories</span> </h1>

        <div class="box-container">

            {{-- @foreach ($category as $category)
            <div class="box">
                <img src="{{ $category->category_image }}" alt="">
                <h3>{{ $category->category_name }}</h3>
                <a href="#" class="btn">see more</a>
            </div>
            @endforeach --}}

            <div class="box">
                <img src="images/edu.jpg" alt="">
                <h3>Pendidikan</h3>
                <a href="#" class="btn">see more</a>
            </div>

            <div class="box">
                <img src="images/health.jpg" alt="">
                <h3>Kesehatan</h3>
                <a href="#" class="btn">see more</a>
            </div>

            <div class="box">
                <img src="images/sport.jpg" alt="">
                <h3>Olahraga</h3>
                <a href="#" class="btn">see more</a>
            </div>

            <div class="box">
                <img src="images/art.jpg" alt="">
                <h3>Seni</h3>
                <a href="#" class="btn">see more</a>
            </div>

            <div class="box">
                <img src="images/env.jpg" alt="">
                <h3>Lingkungan</h3>
                <a href="#" class="btn">see more</a>
            </div>

        </div>

    </section>
    <!-- categories section ends -->


    <!-- review section starts  -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> all <span>organization</span> </h1>

        <div class="box-container">

            @foreach ($organization as $org)
                <div class="box">
                    <img src="images/description.jpg" alt="">
                    <div class="content">
                        <h3>{{ $org->user->user_name }}</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                        <div class="icons_1">
                            <img src="{{ $org->category->category_image }}" alt="ART">
                            <h3>{{ $org->category->category_name }}</h3>
                        </div>
                        <div class="icons_2">
                            <img src="images/location.png" alt="ART">
                            <h3>{{ $org->org_domicile }}</h3>
                        </div>
                        <a href="#" class="btn">View</a>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
    <!-- review section ends -->
@endsection

@section('js')
    <script src="js/listActivity.js"></script>
@endsection
