<!doctype html>
<html lang="en">

<head>


    <!-- Bootstrap CSS v5.2.1 -->

    <link rel="stylesheet" href="./asset/css/service.css">
    <?php
    include_once "./header.php";
    ?>
    <style>
        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Black.otf') format('opentype');
            font-weight: 900;
            /* Black */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Bold.otf') format('opentype');
            font-weight: 700;
            /* Bold */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Book-.otf') format('opentype');
            font-weight: 400;
            /* Book */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Book-Italic.otf') format('opentype');
            font-weight: 400;
            /* Book Italic */
            font-style: italic;
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Medium.otf') format('opentype');
            font-weight: 500;
            /* Medium */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Semi-Bold.otf') format('opentype');
            font-weight: 600;
            /* Semi-Bold */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Thin.otf') format('opentype');
            font-weight: 100;
            /* Thin */
        }

        * {
            font-family: 'Magenta' !important;
        }

        #journey,
        #misvisframe,
        #testi {
            margin-top: 5rem;
        }

        #journey h2 {
            margin-top: 1rem;
        }

        #journey h6 {
            margin: 3rem 0 1rem 0;
            font-size: 20px;
            font-weight: 600;
        }

        #journey p {
            line-height: 2;
        }

        .framerow {
            margin-top: 3rem;
            border: 1px solid #E4BD42;
            border-radius: 15px;
        }

        .padleft {
            padding-left: 3rem;

        }

        .padleft1 {
            padding-left: 3rem;

        }

        .padleft h4 {
            font-weight: 600;
            color: #FFFFFF;
            padding: 21px 18px;
            background-color: #DDAB07;
            border-radius: 9px;
        }

        .h5margintop {
            margin-bottom: 2rem;
        }

        #cardconts {
            margin-top: 7rem;
        }

        .h5margintops {
            background-color: #FFF8DB;
        }

        .checked {
            color: #E4BD42;
        }

        .spantext {
            font-size: 15px;
            color: #909090;
        }

        .orangebut {
            color: #FFFFFF;
            background-color: #DDAB07;
            padding: 12px 28px;
            border: none;
            border-radius: 25px;
            margin-top: 0rem;
        }

        .padleft {
            text-align: center;
        }

        .padleft img {
            border-radius: 2rem;
            width: 70%;
        }

        .card {
            border: 1px solid #DDAB07;
            width: 100%;
            border-radius: 17px;
            height: 250px;
        }

        .cardpara,
        #accordionExample {
            margin-top: 1rem;
        }

        .bg {
            background-color: rgba(221, 171, 7, 0.1);

        }

        #testi {
            padding: 5rem 0;
        }

        .cardwidth1 img {
            width: 50px;
        }

        .cardwidth1 {
            height: auto;
            padding: 0;
        }

        .paddingbot {
            padding-top: 3%;
        }

        .card-footer {
            background-color: #EFD78A;

        }

        .spntxt {
            color: #805648;
        }

        .spnhead {
            color: #122132;
            font-weight: 600;
            font-size: 21px;
        }

        #cardsframe,
        #faq {
            margin-top: 5rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: #DDAB07;
            color: #FFFFFF;
        }

        .alignright {
            text-align: right;
        }

        .cardwidth2 {
            border: none;
            height: 350px;
            background-color: #F8F8F8;
        }

        .cardwidth2 .card-title {
            font-weight: 600;
        }

        .header_ser {
            text-transform: uppercase;
        }

        .cardwidth {
            margin-top: 10px;
        }

        .cardwidth1 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container" id="journey">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div id="texts" style="white-space:nowrap;">
                        <img src="./images/star.webp" align="left" />
                    </div>
                    <h5 class="header_ser">Semi permanent makeup</h5>
                    <h1 class="sub_ser">
                        Microblading
                    </h1>
                    <p>Kimaya Clinique offers professional Microblading services to help you achieve perfectly shaped,
                        natural-looking eyebrows.</p>
                    <div class="row" style="margin-top: 2rem;">
                        <div class="col-sm-6 col-md-6">
                            <button type="button" class="btn btn-primary orangebut">BOOK NOW</button>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span>5.0</span><br>
                            <span class="spantext">
                                From 120+ reviews
                            </span>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-6 padleft">
                    <img src="./image/md-1.webp" alt="photolaser">
                </div>
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="container" id="cardconts">
            <h4 style="font-weight: 600;">Service Breakdown:</h4>
            <div class="row" id="cardrowlaser">
                <div class="col-sm-6 col-md-4">
                    <div class="card cardwidth">

                        <div class="card-body">
                            <h5 class="card-title">Full Brow Microblading</h5>
                            <p class="card-text">This service is ideal for clients looking to completely reshape or
                                enhance their brows. We create fine, realistic strokes that mimic natural hairs, giving
                                you fuller, symmetrical brows with a natural appearance.</p>

                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4">
                    <div class="card cardwidth">

                        <div class="card-body">
                            <h5 class="card-title">Touch-Up Microblading</h5>
                            <p class="card-text">Designed for clients who have already undergone microblading, this
                                touch-up session ensures your brows maintain their fresh, defined look. It refines and
                                boosts fading pigment to keep your brows looking perfect.</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card cardwidth">

                        <div class="card-body">
                            <h5 class="card-title">Combination Brows</h5>
                            <p class="card-text">A mix of microblading and shading, combination brows offer the best of
                                both worlds. We create realistic hair strokes combined with a soft shading technique to
                                add depth and dimension for a fuller, more defined brow look.</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- --------------------------- -->
        <div class="bg">
            <div class="container" id="testi">
                <div class="row cardpara">
                    <div class="col-sm-6 col-md-6">
                        <div id="texts" style="white-space:nowrap;">
                            <img src="./images/star.webp" align="left" />
                        </div>
                        <h5>Review</h5>
                        <h2 style="font-weight:600">What Our Clients Say</h2>
                    </div>
                </div>
                <div class="row" id="cardsframe">
                    <div class="col-sm-6 col-md-4">
                        <div class="card cardwidth1">
                            <div class="image" style="padding:1rem">
                                <img src="./images/fe_quote-left.png" class="card-img-top" alt="fe_quote-left">


                                <div class="card-body">

                                    <p class="card-text">I was nervous about microblading, but the results were amazing!
                                        My brows look natural and perfectly shaped. No more drawing them in every day!
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer" style=" border-bottom-left-radius: 17px;
      border-bottom-right-radius: 17px;">
                                <div class="row" style="margin: 0 0.5rem;">
                                    <div class="col-sm-6 col-md-6 paddingbot">
                                        <img src="./images/testi1.png" class="card-img-top" alt="fe_quote-left">
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <p class="spnhead">— Ria P</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card cardwidth1">
                            <div class="image" style="padding:1rem">
                                <img src="./images/fe_quote-left.png" class="card-img-top" alt="fe_quote-left">


                                <div class="card-body">

                                    <p class="card-text">Kimaya Clinique did such a fantastic job with my brows. The
                                        shape and color are perfect, and it has completely transformed my face. I’m so
                                        happy with the results!</p>
                                </div>
                            </div>
                            <div class="card-footer" style=" border-bottom-left-radius: 17px;
      border-bottom-right-radius: 17px;">
                                <div class="row" style="margin: 0 0.5rem;">
                                    <div class="col-sm-6 col-md-6 paddingbot">
                                        <img src="./images/testi1.png" class="card-img-top" alt="fe_quote-left">
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <p class="spnhead">— Joanna F</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card cardwidth1">
                            <div class="image" style="padding:1rem">
                                <img src="./images/fe_quote-left.png" class="card-img-top" alt="fe_quote-left">


                                <div class="card-body">

                                    <p class="card-text">I had very thin brows, and after the microblading at Kimaya,
                                        they look full and natural. I get so many compliments, and I don’t have to worry
                                        about filling them in anymore.</p>
                                </div>
                            </div>
                            <div class="card-footer" style=" border-bottom-left-radius: 17px;
      border-bottom-right-radius: 17px;">
                                <div class="row" style="margin: 0 0.5rem;">
                                    <div class="col-sm-6 col-md-6 paddingbot">
                                        <img src="./images/testi1.png" class="card-img-top" alt="fe_quote-left">
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <p class="spnhead">— Neha D</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- --------------------------- -->
        <div class="container" id="faq">
            <div class="row">
                <div class="col-sm-6 col-md-6 ">
                    <img src="./image/md-1.webp" alt="faqimg" style="width:80%">
                </div>
                <div class="col-sm-6 col-md-6 ">
                    <div id="texts" style="white-space:nowrap;">
                        <img src="./images/star.webp" align="left" />
                    </div>
                    <h5>Faq</h5>
                    <h2 style="font-weight:600">FAQs about Our Light<br> Microblading</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long does microblading last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Microblading can last anywhere from 12-24 months, depending on your skin type and
                                    aftercare. Annual touch-ups are recommended to maintain the desired shape and color.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is microblading painful?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A numbing cream is applied to minimize discomfort during the procedure. Most clients
                                    find the sensation tolerable, with some describing it as a light scratching feeling.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What should I expect after the treatment?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    After microblading, your brows may appear darker for the first few days before
                                    softening. There may be mild redness or swelling, but this typically subsides within
                                    a few days. Proper aftercare is crucial to ensure optimal healing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Is microblading safe for all skin types?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, microblading is safe for most skin types. However, during your consultation, we
                                    will evaluate your skin to ensure that microblading is suitable and that you can
                                    achieve the best possible results.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- --------------------------- -->
        <div class="container mb-5" id="journey">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div id="texts" style="white-space:nowrap;">
                        <img src="./images/star.webp" align="left" />
                    </div>
                    <h5>Other Services</h5>
                    <h2 style="font-weight:600">Our Other Beauty <br> Solutions</h2>


                </div>

                <div class="col-sm-6 col-md-6 alignright">
                    <button type="button" class="btn btn-primary orangebut">All Services</button>
                </div>
            </div>
            <div class="row margintoprow">
                <div class="col-sm-5 col-md-4">
                    <div class="card cardwidth2">
                        <a href=""><img src="./images/hairtrans.webp" alt="card1" style="width:100%;"></a>
                        <div class="card-body">
                            <h5 class="card-title">Hair Transplantation</h5>
                            <p class="card-text">For those looking for a more permanent solution, we offer hair
                                transplantation using the latestsurg</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="card cardwidth2">
                        <a href=""><img src="./images/card2.webp" alt="card2" style="width:100%;"></a>
                        <div class="card-body">
                            <h5 class="card-title">Tricell</h5>
                            <p class="card-text">Another highly popular choice is Tricell, which combines PRP and growth
                                factors to offer a morecomp</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="card cardwidth2">
                        <a href=""><img src="./images/card3.webp" alt="card3" style="width:100%;"></a>
                        <div class="card-body">
                            <h5 class="card-title">GFC</h5>
                            <p class="card-text">We also provide GFC [Growth Factor Concentrate], a non-surgical option
                                that harnesses growthfactors</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- --------------------------- -->
    </main>



    <?php
    include_once "./footer.php";
    ?>
</body>

</html>