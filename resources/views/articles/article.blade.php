@extends('layout')

@section('title')
    Article | BEEVOLUNTEER
@endsection

<!-- Style section starts  -->
@section('style_css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/article.css">
@endsection
<!-- Style section ends  -->

<!-- Content section starts  -->
@section('content')

    <!-- All Charity section start -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> Organization <span>Articles</span> </h1>

        <div class="box-container">

            @foreach ($article as $article)

                <div class="box">
                    <img src="images/foodDonation.jpg" alt="">
                    <div class="content">
                        <div class="icons">
                            <a href="#"> <i class="fas fa-user"></i>{{ $article->organization->user->user_name }}</a>
                            <a href="#"> <i class="fas fa-calendar"></i>{{ $article->created_at }}</a>
                        </div>
                        <h3>{{ $article->title }}</h3>
                        <p>{{ $article->excerpt }}</p>
                        <a href="#" class="btn">See More</a>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
    <!-- All Charity section ends -->
@endsection
<!-- Content section ends  -->

@section('js')
    <script src="js/listActivity.js"></script>
@endsection
