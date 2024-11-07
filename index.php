<!DOCTYPE html>
<html lang="en">

<?php
include_once "./header.php";
?>
<style>
    .swiper {
        width: 100%;
        height: 100%;
        margin-top: -2px;
        /* background: #000; */
    }

    body {
        overflow-x: hidden;
    }

    .swiper-slide {
        font-size: 18px;
        /* color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box; */
        /* padding: 40px 60px; */
    }

    .parallax-bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 130%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;
    }

    .swiper-slide .title {
        font-size: 41px;
        font-weight: 300;
    }

    .swiper-slide .subtitle {
        font-size: 21px;
    }

    .swiper-slide .text {
        font-size: 14px;
        max-width: 400px;
        line-height: 1.3;
    }

    .heading-top {
        font-size: 24px;
        font-weight: 300;
        color: white;
    }

    .heading-top-span {
        text-decoration: underline;
        color: #E4BD42;
    }

    .heading-middle {
        font-size: 50px;
        font-weight: 500;
        padding-top: 20px;
        padding-bottom: 20px;
        color: white;
        line-height: 130%;
    }

    .heading-bottom {
        font-size: 24px;
        font-weight: 300;
        padding-bottom: 25px;
        color: white;
        line-height: 35.2px;
    }

    .banner-link {
        background-color: #DDAB07;
        text-decoration: none;
        color: white;
        padding: 15px 25px;
        font-size: 16px;
        text-transform: uppercase;
        font-family: "Poppins";
    }

    .banner-hover {
        position: relative;
        margin-top: -720px;
        z-index: 1;
    }

    .italic-text {
        font-style: italic;
    }

    .banner-left-col {
        padding-left: 95px;
    }

    .privilege_service {
        background-image: url("./image/privilege.webp");
        background-size: cover;
        padding-top: 50px;
    }

    .priv-icon {
        width: 20px;
        margin-right: 5px;
    }

    .privilege_service {
        margin-top: 100px;
    }

    .main-cont-priv {
        font-size: 48px;
        font-weight: 400;
    }

    .hr-priv {
        margin: 1rem 0;
        color: #E9C34C;
        border: 0;
        border-top: var(--bs-border-width) solid;
        opacity: 1;
        width: 160px;
    }

    .priv-card:hover {
        border: 1px solid #E4BD42;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Adjust the values for a softer or stronger shadow */
        transition: box-shadow 0.3s ease;
        /* Smooth transition effect */

    }

    .priv-card {
        border-radius: 15px;
        background-color: #F8F8F8;
    }

    .priv-link {
        text-decoration: none;
    }

    .journy_frame {
        margin-top: 100px;
    }

    .journy_subhead {
        font-size: 48px;
        font-weight: 100;
    }

    .why_chs {
        font-size: 24px;
        padding: 15px 10px;
        background-color: #DDAB07;
        border-radius: 4px;
        color: white;
        font-weight: 500;
        text-align: center;
    }

    .journy-right-cont {
        margin-top: 40px;
        padding-left: 48px;
    }

    .top-cont-journy {
        font-size: 20px;

    }

    .journy-cont {
        font-size: 17px;
        font-weight: 100;
    }

    .prof_frame {
        margin-top: 150px;
    }

    .top-cont-prof {
        text-transform: uppercase;
    }

    .prof_frame_sub {
        font-size: 18px;
        font-weight: 300;
    }

    .core_ser_link {
        text-decoration: none;
        padding: 10px 15px;
        background: #DDAB07;
        color: white;
        font-size: 18px;
        border-radius: 3px;
    }

    .af_p-title {
        font-size: 16px !important;
    }

    .client_testi {
        font-size: 48px;
    }

    .ciCnpO a {
        display: none !important;
    }

    .blog_tit {
        font-size: 48px;
    }

    .client_sat {
        background: #F3F3F3;
        padding-top: 40px;
    }

    .home-card {
        border: none;
    }
</style>

<body>

    <!-- banner slider -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ban-1.webp" class="img-fluid" alt="">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ban-3.webp" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ban-4.webp" class="img-fluid" alt="">
                </a>
            </div>

        </div>
    </div>

    <!-- banner content -->
    <div class="container-fluid">
        <div class="row align-items-center banner-hover">
            <div class="col-md-7 banner-left-col">
                <h4 class="heading-top">
                    Discover Personalized
                    <span class="heading-top-span">
                        Skin Care
                    </span>
                </h4>

                <h3 class="heading-middle ">
                    Glow with Confidence – Advanced Skin Care for <br>
                    All Types
                </h3>

                <h4 class="heading-bottom">
                    From acne solutions to anti-aging treatments, <br>
                    <span class="italic-text">Kimaya Clinique</span> is your partner for healthy, radiant skin.
                </h4>


                <a href="#" class="banner-link">
                    Book appointment
                </a>
            </div>
            <div class="col-md-5 pe-0">
                <img src="./image/ban-hover.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <!-- Privilege services frame -->
    <div class="container privilege_service">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="top-cont-priv d-flex">
                    <span>
                        <img src="./image/phead.png" class="priv-icon" alt="">
                    </span>
                    Services
                </p>
                <h4 class="main-cont-priv">
                    Privilege services
                </h4>
                <hr class="hr-priv">

                <div class="row ">
                    <div class="col-md-4 mt-5">
                        <a href="#" class="priv-link">
                            <div class="card priv-card">
                                <img src="./image/priv-1.png" class="card-img-top p-3">
                                <div class="card-body">
                                    <h5 class="card-title">Skin</h5>
                                    <p class="card-text">
                                        Rejuvenate and revitalize your skin with personalized dermatological care
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 mt-5">
                        <a href="" class="priv-link">
                            <div class="card priv-card">
                                <img src="./image/priv-2.png" class="card-img-top p-3">
                                <div class="card-body">
                                    <h5 class="card-title">Laser</h5>
                                    <p class="card-text">
                                        Advanced technology for permanent hair reduction and skin refinement
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-md-4 mt-5">
                        <a href="#" class="priv-link">
                            <div class="card priv-card">
                                <img src="./image/priv-3.png" class="card-img-top p-3">
                                <div class="card-body">
                                    <h5 class="card-title">Hair</h5>
                                    <p class="card-text">
                                        From hair loss treatment to restoration your hair, our priority
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>

                <div class="row justify-content-center">


                    <div class="col-md-4 mt-5">
                        <a href="" class="priv-link">
                            <div class="card priv-card">
                                <img src="./image/priv-4.png" class="card-img-top p-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dental</h5>
                                    <p class="card-text">
                                        Smile brighter with top-tier cosmetic and general dental services
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-md-4 mt-5">
                        <a href="#" class="priv-link">
                            <div class="card priv-card">
                                <img src="./image/priv-5.png" class="card-img-top p-3">
                                <div class="card-body">
                                    <h5 class="card-title">Nail</h5>
                                    <p class="card-text">
                                        Pamper your nails with our specialized treatments for beauty and health
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- journy frame -->

    <div class="container journy_frame">
        <div class="row">
            <div class="col-md-10 mx-auto">


                <div class="row">
                    <div class="col-md-7">
                        <p class="top-cont-priv d-flex">
                            <span>
                                <img src="./image/phead.png" class="priv-icon" alt="">
                            </span>
                            JOURNEY
                        </p>
                        <h4 class="main-cont-priv">
                            Kimaya Clinique:
                        </h4>
                        <p class="journy_subhead">
                            Shaping Impeccable Beauty
                        </p>
                        <img src="./image/jorh.webp" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-5">
                        <p class="why_chs">
                            Why Choose Our Solutions?
                        </p>
                        <div class="journy-right-cont">
                            <p class="top-cont-journy d-flex">
                                <span>
                                    <img src="./image/phead.png" class="priv-icon" alt="">
                                </span>
                                Expert Professionals
                            </p>
                            <p class="journy-cont">
                                Our skilled specialists provide personalized treatments
                            </p>
                        </div>
                        <div class="journy-right-cont">
                            <p class="top-cont-journy d-flex">
                                <span>
                                    <img src="./image/phead.png" class="priv-icon" alt="">
                                </span>
                                Cutting-Edge Technology
                            </p>
                            <p class="journy-cont">
                                We use the latest innovations for effective results
                            </p>
                        </div>
                        <div class="journy-right-cont">
                            <p class="top-cont-journy d-flex">
                                <span>
                                    <img src="./image/phead.png" class="priv-icon" alt="">
                                </span>
                                Patient-Centered Care
                            </p>
                            <p class="journy-cont">
                                Your comfort and satisfaction come first
                            </p>
                        </div>
                        <div class="journy-right-cont">
                            <p class="top-cont-journy d-flex">
                                <span>
                                    <img src="./image/phead.png" class="priv-icon" alt="">
                                </span>
                                Holistic Approach
                            </p>
                            <p class="journy-cont">
                                Comprehensive treatments for all your beauty and wellness needs
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- professionalism  -->
    <div class="container prof_frame">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./image/profh.webp" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-6">
                        <p class="top-cont-prof d-flex">
                            <span>
                                <img src="./image/phead.png" class="priv-icon" alt="">
                            </span>
                            professionalism
                        </p>
                        <h4 class="main-cont-priv">
                            Our Expertise <br>
                            Proficiency in Aesthetics
                        </h4>
                        <p class="prof_frame_sub">Explore our range of specialized treatments, designed to help <br> you
                            look
                            and feel your best.
                        </p>

                        <div class="row">
                            <div class="col-md-10 mt-3">
                                <img src="./image/jrh.webp" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core service -->
    <div class="core_ser_card">
        <div class="row align-items-center" style="height: 100vh;">
            <div class="col-md-5 d-flex justify-content-center">
                <div class="core-ser px-5 ">
                    <p class="top-cont-prof d-flex  align-items-center">
                        <span>
                            <img src="./image/phead.png" class="priv-icon" alt="">
                        </span>
                        Core services
                    </p>
                    <h4 class="main-cont-priv">
                        Signature <br>
                        Treatments
                    </h4>
                    <p>Transform your appearance with our advanced aesthetic treatments. Our expert team offers a range
                        of
                        personalized solutions to enhance your natural beauty, from skin rejuvenation and anti-aging to
                        non-invasive cosmetic procedures.
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Swiper -->
                <div class="swiper af_p_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/serh-1.webp" class="card-img-top" alt="...">
                                <div class="card-body af_p-card-body text-center" style="display: block;">
                                    <h5 class="af_p-title mb-3">KIMAYA GLOW THERAPY</h5>
                                    <a href="#" class="core_ser_link">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/serh-2.webp" class="card-img-top" alt="...">
                                <div class="card-body af_p-card-body text-center" style="display: block;">
                                    <h5 class="af_p-title mb-3">SKIN LIGHTENING</h5>
                                    <a href="#" class="core_ser_link">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/serh-3.webp" class="card-img-top" alt="...">
                                <div class="card-body af_p-card-body text-center" style="display: block;">
                                    <h5 class="af_p-title mb-3">ADVANCED HAIR PRP</h5>
                                    <a href="#" class="core_ser_link">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- testimonial -->
    <div class="client_sat cantainer-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h4 class="client_testi">Client Satisfaction</h4>
                <script src="https://static.elfsight.com/platform/platform.js" async></script>
                <div class="elfsight-app-eb774103-b7d3-43b7-85b9-aa55022e3f0d" data-elfsight-app-lazy></div>
            </div>
        </div>
    </div>

    <!-- blog -->
    <!-- Features Posts -->
    <div class="container my-5">
        <h2 class="blog_tit">Our Blog</h2>

        <div class="row mt-5">
            <div class="col-md-4">

                <div class="card home-card">
                    <img src="./image/blog1.png" class="card-img-top" alt="best Fiction books">
                    <div class="card-body">
                        <h5 class="card-title">5 Skincare Tips for Glowing Skin Year-Round</h5>
                        <p class="card-text">Explore our range of specialized treatments, designed to help you look and
                            feel your best.</p>
                        <a href="#" class="core_ser_link">Read more</a>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <?php
    include_once "./footer.php";
    ?>
</body>

</html>