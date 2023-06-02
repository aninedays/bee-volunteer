<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | BEEVOLUNTEER</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/about_us.css">

</head>
<body>

<!-- header section starts  -->

@include('partials.navbar');

<!-- header section ends -->

<!--Deskripsi Produk Section Start-->
<div class="main">
    <div class="img">
        <img src="images/AboutUs.png">
    </div>
    <div class="text">
        <h1>BeeVolunteer</h1>
        <p>Bee Volunteer adalah sebuah website yang bertujuan untuk menjadi perantara antara sukarelawan dan non profit social organization dalam sebuah kegiatan yang diselenggarakan</p>
    </div>
</div>
<!--Deskripsi Produk Section ends-->

<!--Visi Section Start-->
<!--Visi Section ends-->

<!--Misi Section Start-->
<!--Misi Section ends-->

<!-- Our Team Section Start-->

<div class="container">
    <h1 class="heading"> Our <span>Team</span> </h1>

    <div class="sub-container">

        @foreach ($team as $team )

        <div class="teams">
            <img src="images/team.png" alt="">
            <div class="name">{{ $team->name }}</div>
            <div class="desc">{{ $team->jobdesc }}</div>

            <div class="social-links">
                <a href="#"><i class="fa fa-facebook-f fa-2x"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>
        </div>

        @endforeach

    </div>
</div>

<!-- Our Team Section Ends-->


<!-- footer section starts  -->

@include('partials.footer');

<!-- footer section ends -->


<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/home.js"></script>

</body>
</html>
