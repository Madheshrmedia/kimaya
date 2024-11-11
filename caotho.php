<!doctype html>
<html lang="en">

<head>


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

    <main>
        <div class="container" id="journey">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div id="texts" style="white-space:nowrap;">
                        <img src="./images/star.webp" align="left" />
                    </div>
                    <h5 class="header_ser">Dental </h5>
                    <h1 class="sub_ser">
                        Clear Aligner <br> Orthodontics
                    </h1>
                    <p>Clear Aligner Orthodontics at Kimaya Clinique offers a discreet and comfortable way to straighten
                        your teeth without the need for traditional braces. </p>
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
                    <img src="./image/ca-1.webp" alt="photolaser">
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
                            <h5 class="card-title">Customized Treatment Plans</h5>
                            <p class="card-text">Each clear aligner is custom-made to fit your teeth perfectly. We use
                                advanced 3D imaging technology to design a series of aligners that gradually shift your
                                teeth into the desired position, providing a precise and personalized approach to
                                orthodontic care.</p>

                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4">
                    <div class="card cardwidth">

                        <div class="card-body">
                            <h5 class="card-title">Invisible & Removable <br> Aligners</h5>
                            <p class="card-text">Clear aligners are virtually invisible, making them a popular choice
                                for adults and teens who want a discreet option for teeth straightening. They’re also
                                removable, allowing you to eat, drink, and clean your teeth without any restrictions.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card cardwidth">

                        <div class="card-body">
                            <h5 class="card-title">Effective & Comfortable <br> Teeth Straightening</h5>
                            <p class="card-text">Clear aligners offer a more comfortable alternative to traditional
                                braces, with no metal wires or brackets that can cause irritation. Treatment times vary,
                                but most patients achieve their desired results within 6-18 months, depending on the
                                complexity of the case.</p>

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

                                    <p class="card-text">I was self-conscious about getting braces as an adult, but
                                        clear aligners were the perfect solution. They’re invisible, and I saw my teeth
                                        starting to straighten in just a few months!
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
                                        <p class="spnhead">— Riya M</p>

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

                                    <p class="card-text">The clear aligners fit so comfortably, and I love that I can
                                        remove them whenever I need to. The treatment was easy to follow, and I’m
                                        thrilled with how straight my teeth look now.
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
                                        <p class="spnhead">— Arjun P</p>

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

                                    <p class="card-text">Kimaya Clinique made the process of getting clear aligners so
                                        smooth and personalized. I was able to continue my daily routine without anyone
                                        noticing I was wearing them, and my smile looks amazing!
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
                                        <p class="spnhead">— Sneha V</p>

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
                    <img src="./image/ca-1.webp" alt="faqimg" style="width:80%">
                </div>
                <div class="col-sm-6 col-md-6 ">
                    <div id="texts" style="white-space:nowrap;">
                        <img src="./images/star.webp" align="left" />
                    </div>
                    <h5>Faq</h5>
                    <h2 style="font-weight:600">FAQs about Clear Aligner <br> Orthodontics</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do clear aligners work?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Clear aligners gradually move your teeth into the desired position by applying
                                    gentle pressure. You’ll wear a series of aligners, each one slightly adjusting your
                                    teeth, until the treatment is complete. Aligners are typically worn for 20-22 hours
                                    a day and changed every 1-2 weeks.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are clear aligners suitable for everyone?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Clear aligners are suitable for most people with mild to moderate alignment issues.
                                    However, more complex cases may require traditional braces. A consultation with our
                                    orthodontic specialist will determine if clear aligners are the best option for you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long does treatment with clear aligners take?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Treatment time varies depending on the complexity of the case. On average, clear
                                    aligner treatment takes between 6 and 18 months, but the exact duration will be
                                    determined during your consultation based on your individual needs.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Can I eat and drink with clear aligners on?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Clear aligners should be removed when eating or drinking anything other than water
                                    to prevent staining and damage to the aligners. This also ensures that your teeth
                                    stay clean and your treatment progresses smoothly.
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