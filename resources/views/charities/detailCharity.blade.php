@extends('layout')

@section('title')
    Detail Charity | BEEVOLUNTEER
@endsection

<!-- Style section starts  -->
@section('style_css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/footer.css">
@endsection
<!-- Style section ends  -->

<!-- Content section starts  -->
@section('content')
    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="position-relative h-100">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="/assets/5.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="/assets/4.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="images/enviVolunteer.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <div class="row justify-content-between gy-4 mt-4">

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h3>Description</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eaque consequatur, accusamus optio
                            nisi minus recusandae dolorum expedita provident in vel cupiditate ducimus nobis debitis,
                            deleniti magni quae aliquam nemo.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eaque consequatur, accusamus optio
                            nisi minus recusandae dolorum expedita provident in vel cupiditate ducimus nobis debitis,
                            deleniti magni quae aliquam nemo.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eaque consequatur, accusamus optio
                            nisi minus recusandae dolorum expedita provident in vel cupiditate ducimus nobis debitis,
                            deleniti magni quae aliquam nemo.
                        </p>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="portfolio-info">
                        <h3>Activity Information</h3>
                        <ul>
                            <li><strong>Organization</strong> <span>Organisasi A</span></li>
                            <li><strong>Name</strong> <span>Buat Pantai Kembali Bersih!</span></li>
                            <li><strong>Category</strong> <span>Lingkungan</span></li>
                            <li><strong>Type</strong> <span>Services</span></li>
                            <li><strong>Charity Date</strong> <span>22 Oktober 2022</span></li>
                            <li><a href={{ url('/join-services') }} class="btn-visit align-self-start">JOIN ACTIVITY</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Projet Details Section -->

    </main><!-- End #main -->
@endsection

@section('js')
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/home.js"></script>
@endsection
