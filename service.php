<!doctype html>
<html lang="en">

<head>
  <title>Kimaya Clinique</title>
  <!-- Favicon -->

  <link rel="icon" type="image/x-icon" href="./image/Kimaya Fav icon.png">
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./asset/css/abt.css">
  <link rel="stylesheet" href="./asset/css/service.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">

  <style>
    .margintoprow {
      margin-top: 3rem !important;
    }

    .cardwidth {
      width: 23rem;
      padding: 1rem;
      background-color: #F8F8F8 !important;
      border: none !important;
    }

    .cardwidth:hover {
      border-radius: 15px !important;
      border: 1px solid #E4BD42 !important;
    }

    .margintop {
      margin-top: 5rem !important;
    }

    #nailframe {
      margin-bottom: 5rem;
    }

    .nailframe {
      margin-bottom: 3rem;
    }

    #nailframe img {
      width: 90%;
    }
  </style>

</head>

<body>
  <header>
    <?php
    include_once "./header.php";
    ?>
  </header>
  <main>
    <!-- Hero 5 - Bootstrap Brain Component -->
    <!-- <section class="bsb-hero-5 px-3 bsb-overlay" style="background-image: url('./images/servbanner.webp');">
      <div class="container">
        <div class="row justify-content-md-center align-items-center">
          <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-8">
            <h1 class="display-1 text-white text-center fw-bold mb-4">Our services</h1>
            <div class="line"></div>
            <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center para">
              <span class="col-12 col-sm-10 col-md-8 col-xxl-9">From skin and hair to dental and nails, Kimaya Clinique
                provides comprehensive beauty and wellness treatments backed by innovation and expertise.</span>
            </p>

          </div>
        </div>
      </div>
    </section> -->
    <img src="./image/ser-ban.webp" class="img-fluid" alt="">
    <div class="container margintop" id="hair">
      <div class="row ">
        <div class="col-4">
          <h2>Hair</h2>
        </div>
        <div class="col-4">

        </div>
        <div class="col-4" id="interfont">
          <select class="form-select" aria-label="Default select example" id="serviceSelect">
            <option selected>Select service</option>
            <option value="1"><a href="./about.php">Hair</a></option>
            <option value="2">Skin</option>
            <option value="3">Dental</option>
            <option value="4">Laser</option>
            <option value="5">Nails</option>
            <option value="6">Advance procedure</option>
            <option value="7">Semi permanent makeup</option>
          </select>
        </div>
      </div>
      <script>
        document.getElementById('serviceSelect').addEventListener('change', function () {
          var selectedValue = this.value;

          // Add your navigation logic based on selected value
          if (selectedValue == '2') {
            window.location.href = '#skin'; // Navigate to about.php for "Hair"
          }
          if (selectedValue == '3') {
            window.location.href = '#dental'; // Navigate to about.php for "Hair"
          }
          if (selectedValue == '4') {
            window.location.href = '#laser'; // Navigate to about.php for "Hair"
          }
          if (selectedValue == '5') {
            window.location.href = '#nail'; // Navigate to about.php for "Hair"
          }
          if (selectedValue == '6') {
            window.location.href = '#advance'; // Navigate to about.php for "Hair"
          }
          if (selectedValue == '7') {
            window.location.href = '#semi'; // Navigate to about.php for "Hair"
          }

          // You can add other conditions for the rest of the options as needed
        });
      </script>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./lasertherapy.php"><img src="./images/card1.webp" alt="card1" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Light Therapy</h5>
              <p class="card-text">And finally, we also provide Light Therapy, utilizing low-level laser light to
                enhance hair growth a</p>

            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./tricell.php"><img src="./images/card2.webp" alt="card2" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Tricell</h5>
              <p class="card-text">Another highly popular choice is Tricell, which combines PRP and growth factors to
                offer a morecomp</p>

            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./gfc.php"><img src="./images/card3.webp" alt="card3" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">GFC</h5>
              <p class="card-text">We also provide GFC [Growth Factor Concentrate], a non-surgical option that harnesses
                growthfactors</p>

            </div>
          </div>
        </div>
      </div>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./prp.php"><img src="./images/card4.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">PRP for Hair</h5>
              <p class="card-text">One of our sought-after treatments is PRP (Platelet-Rich Plasma), which utilizes the
                patient's own b</p>

            </div>
          </div>
        </div>
      </div>

      <!-- -------------------- -->
      <div class="row margintop" id="skin">
        <div class="col-4">
          <h2>Skin</h2>
        </div>

      </div>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./lighten.php"><img src="./images/skin1.webp" alt="card1" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Skin Lightening</h5>
              <p class="card-text">Skin lightening is another form that can be availed atthe clinic to address
                hyperpigmentation and o</p>

            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./vampire.php"><img src="./images/skin2.webp" alt="card2" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Vampire Facial</h5>
              <p class="card-text">The Vampire Facial is a treatment that involves using the patient’s own blood to
                rejuvenate the skin</p>

            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./dermaplant.php"><img src="./images/skin3.webp" alt="card3" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Dermaplaning</h5>
              <p class="card-text">Dermaplaning is a form of exfoliation that removes dead skin cells and vellus hair to
                reveal smoothe</p>

            </div>
          </div>
        </div>
      </div>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./dermastamp.php"><img src="./images/skin4.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Derma Stamp</h5>
              <p class="card-text">Kimaya Clinique also offers Derma Stamp, aminimally invasive treatment that uses a
                device tocreate</p>

            </div>
          </div>

        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./prpskin.php"><img src="./images/skin5.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">PRP-Skin</h5>
              <p class="card-text">Also offered at the clinic are PRP-Skin treatments,which use platelet-rich plasma to
                rejuvenate the</p>

            </div>
          </div>

        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./collagen.php"><img src="./images/skin6.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Collagen Induction Therapy</h5>
              <p class="card-text">Another effective treatment is Collagen Induction Therapy, also known as micro
                needling, which uses </p>

            </div>
          </div>

        </div>
      </div>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./peel.php"><img src="./images/skin7.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Peels</h5>
              <p class="card-text">One popular treatment is chemical peels, which use a variety of acids to remove dead
                skin cells and </p>

            </div>
          </div>

        </div>
      </div>
      <!-- ----------------------------- -->
      <!-- -------------------- -->
      <div class="row margintop" id="dental">
        <div class="col-4">
          <h2>Dental</h2>
        </div>

      </div>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./oral.php"><img src="./images/dental1.webp" alt="card1" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Oral Cancer Screening & Treatment</h5>
              <p class="card-text">We also specialize in early detection and treatment of Oral Cancer through our Oral
                Cancer Screening</p>

            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./ssopt.php
            "><img src="./images/dental2.webp" alt="card2" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Sleep/Sedation Options</h5>
              <p class="card-text">For those with dental anxiety or in need of extensive treatment, we offer
                Sleep/Sedation options to </p>

            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./gdcare.php"><img src="./images/dental3.webp" alt="card3" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">General Dental Care</h5>
              <p class="card-text">We provide comprehensive General Dental Care, including routine check-ups, cleanings,
                and preventive</p>

            </div>
          </div>
        </div>
      </div>
      <div class="row margintoprow">
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./scser.php"><img src="./images/dental4.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Smile Correction Services</h5>
              <p class="card-text">Transform your smile with our Smile Correction Services, including teeth whitening,
                aesthetic writin</p>

            </div>
          </div>

        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./caotho.php"><img src="./images/dental5.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Clear Aligner Orthodontics</h5>
              <p class="card-text">Achieve a Straighter, more attractive smile with our virtually invisible Clear
                Aligner Orthodontic </p>

            </div>
          </div>

        </div>
        <div class="col-sm-5 col-md-4">
          <div class="card cardwidth">
            <a href="./aisolution.php"><img src="./images/dental6.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">Advanced Implant Solutions</h5>
              <p class="card-text">Missing teeth can be replaced with our cutting-edge Advanced Implant Solutions,
                including dental imp
              </p>

            </div>
          </div>

        </div>


        <!-- ----------------------------- -->
        <!-- -------------------- -->
        <div class="row margintop" id="laser">
          <div class="col-4">
            <h2>Laser</h2>
          </div>

        </div>
        <div class="row margintoprow">
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./hwface.php"><img src="./images/laser1.webp" alt="card1" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Hollywood Facial</h5>
                <p class="card-text">For a luxurious and rejuvenating skin treatment, we offer the Hollywood Facial.
                  This laser treatment</p>

              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./skinresurfacing.php"><img src="./images/laser2.webp" alt="card2" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Skin Resurfacing</h5>
                <p class="card-text">For those looking to rejuvenate their skin, we offer Skin Resurfacing. This
                  procedure uses laser tec </p>

              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./hairremoval.php"><img src="./images/laser3.webp" alt="card3" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Hair Removal</h5>
                <p class="card-text">One of our popular laser treatments is Hair Removal. This procedure utilizes light
                  energy to target </p>

              </div>
            </div>
          </div>
        </div>
        <!-- ----------------------------- -->
        <!-- -------------------- -->
        <div class="row margintop" id="nail">
          <div class="col-4">
            <h2>Nails</h2>
          </div>

        </div>
        <div class="row margintoprow">
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./nails.php"><img src="./images/nail1.webp" alt="card1" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Nails</h5>
                <p class="card-text">At our clinic, we offer a range of nail care services to help keep your hands and
                  feet looking neat </p>

              </div>
            </div>
          </div>

        </div>



        <!-- ----------------------------- -->
        <!-- -------------------- -->
        <div class="row margintop" id="advance">
          <div class="col-4">
            <h2>Advance procedures</h2>
          </div>

        </div>
        <div class="row margintoprow">
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./hifu.php"><img src="./images/adv1.webp" alt="card1" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">HIFU</h5>
                <p class="card-text">HIFU (High-Intensity Focused Ultrasound) is a non-invasive cosmetic treatment that
                  uses focused ultr</p>

              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./threads.php"><img src="./images/adv2.webp" alt="card2" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Threads</h5>
                <p class="card-text">Threads are another popular non-surgical cosmetic treatment that can help lift and
                  tighten sagging </p>

              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./fillers.php"><img src="./images/adv3.webp" alt="card3" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Fillers</h5>
                <p class="card-text">Fillers are a popular non-surgical cosmetic treatment that can help restore volume
                  and fullness </p>

              </div>
            </div>
          </div>
        </div>
        <div class="row margintoprow">
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./botox.php"><img src="./images/adv4.webp" alt="card1" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Botox</h5>
                <p class="card-text">Botox is a non-surgical cosmetic treatment that reduces wrinkles by idjecting
                  botulinum toxin </p>

              </div>
            </div>
          </div>
        </div>
        <!-- ----------------------------- -->
        <!-- -------------------- -->
        <div class="row margintop" id="semi">
          <div class="col-4">
            <h2>Semi permanent makeup</h2>
          </div>

        </div>
        <div class="row margintoprow">
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./liptin.php"><img src="./images/perma1.webp" alt="card1" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Lip Tint</h5>
                <p class="card-text">Semi-permanent lip tint involves tattooing pigmentinto the lips for a
                  natural-looking, longlasting </p>

              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./bbglow.php"><img src="./images/perma2.webp" alt="card2" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">BB Glow</h5>
                <p class="card-text">The BB Glow treatment is a semi-permanent makeup and non-surgical procedure. </p>

              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="card cardwidth">
              <a href="./microblading.php"><img src="./images/perma3.webp" alt="card3" style="width:100%;"></a>
              <div class="card-body">
                <h5 class="card-title">Microblading</h5>
                <p class="card-text">Microblading is a semi-permanent makeup technique used to enhance and define
                  eyebrows.</p>

              </div>
            </div>
          </div>
        </div>
        <!-- ----------------------------- -->
      </div>
    </div>
    <!-- -------------------- -->

    <div class="slider" id="slider">
      <div class="slide" style="background-image: url('./images/Section.webp');">
        <div class="container">
          <!-- ------------- -->
          <div class="row sliderow">
            <div class="col-sm-6 col-md-6 contentcol" style="color: #ffff;">
              <h4>Before & After Section</h4>
              <div class="line" style="height: 2.5px;background-color:#FFFFFF; width:30%"></div>
              <h3>Radiant Skin Awaits You</h3>
              <p>From acne scars to signs of aging, our skin treatments rejuvenate and restore your skin’s natural glow.
                Whether you're battling pigmentation, uneven skin tone, or wrinkles, our dermatology experts deliver
                customized solutions for flawless results.</p>
              <p class="fontbold">Testimonial Example:</p>
              <p class="borderleft">I had tried everything for my acne scars, and nothing worked. Kimaya's treatments
                gave me my confidence back.</p>
            </div>
            <div class="col-sm-6 col-md-6 image-container" style="text-align: end;">
              <img src="./images/slideimg.webp" alt="slideimg">
              <a href="./contact.php"><button class="center-button">Visit Us</button></a>
            </div>
          </div>
          <!-- ------------------ -->
        </div>
      </div>
      <div class="slide" style="background-image: url('./images/Section1.webp');">
        <div class="container">
          <!-- ------------- -->
          <div class="row sliderow">
            <div class="col-sm-6 col-md-6 contentcol" style="color: #ffff;">
              <h4>Before & After Section</h4>
              <div class="line" style="height: 2.5px;background-color:#FFFFFF; width:30%"></div>
              <h3>Smooth Skin, Effortlessly
                Laser Hair Removal</h3>
              <p>Say goodbye to unwanted hair with our advanced laser hair removal treatments. Achieve silky smooth skin
                with long-lasting results that save you time and hassle.</p>
              <p class="fontbold">Testimonial Example:</p>
              <p class="borderleft">Laser hair removal at Kimaya was the best decision I ever made. It’s pain-free and
                effective!</p>
            </div>
            <div class="col-sm-6 col-md-6 image-container" style="text-align: end;">
              <img src="./images/slideimg1.webp" alt="slideimg1">
              <a href="./contact.php"><button class="center-button">Visit Us</button></a>
            </div>
          </div>
          <!-- ------------------ -->

        </div>
      </div>
      <div class="slide" style="background-image: url('./images/Section2.webp');">
        <div class="container">
          <!-- ------------- -->
          <div class="row sliderow">
            <div class="col-sm-6 col-md-6 contentcol" style="color: #ffff;">
              <h4>Before & After Section</h4>
              <div class="line" style="height: 2.5px;background-color:#FFFFFF; width:30%"></div>
              <h3>Regain Your Hair, Regain Your Confidence</h3>
              <p>Our hair restoration treatments help revitalize thinning hair and address hair loss through advanced
                procedures such as PRP therapy and hair transplants. We tailor each treatment to the individual’s needs,
                restoring volume and boosting confidence.</p>
              <p class="fontbold">Testimonial Example:</p>
              <p class="borderleft">I was losing my hair rapidly and it was really affecting me. After PRP therapy at
                Kimaya, my hair started growing back, and now I feel like myself again.</p>
            </div>
            <div class="col-sm-6 col-md-6 image-container" style="text-align: end;">
              <img src="./images/slideimg2.webp" alt="slideimg2">
              <a href="./contact.php"><button class="center-button">Visit Us</button></a>
            </div>
          </div>
          <!-- ------------------ -->
        </div>
      </div>
    </div>


    <div class="container nailframe">
      <div class="row">
        <div class="col-sm-6 col-md-6" id="nailframe">
          <img src="./images/nail.webp" alt="nailimg">
        </div>
        <div class="col-sm-6 col-md-6" style="padding-left:2rem">
          <div id="texts" style="white-space:nowrap;">
            <img src="./images/star.webp" align="left" />
            <h5>WHY CHOOSE US</h5>
          </div>
          <h2>Why Kimaya Clinique is Your Trusted Choice for Personalized Beauty </h2>
          <div class="para">
            <p><span><img src="./images/Vector.webp"></span> Expert Team of Professionals</p>
            <p><span><img src="./images/Vector.webp"></span> Personalized Treatment Plans</p>
            <p><span><img src="./images/Vector.webp"></span> Comprehensive Range of Services</p>
          </div>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            style="border: none;">Book a Consultation Now!</button>

        </div>
      </div>
    </div>

  </main>
  <footer>
    <?php
    include_once "./footer.php";
    ?>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    let slideInterval;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active', 'prev');
        if (i === index) {
          slide.classList.add('active');
        } else if (i === (index - 1 + slides.length) % slides.length) {
          slide.classList.add('prev');
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function startSlider() {
      slideInterval = setInterval(nextSlide, 3000); // Slide change every 3 seconds
    }

    function stopSlider() {
      clearInterval(slideInterval);
    }
    showSlide(0);
    // Start the slider and add mouse events to stop/start on hover
    startSlider();
    document.getElementById('slider').addEventListener('mouseover', stopSlider);
    document.getElementById('slider').addEventListener('mouseout', startSlider);

  </script>

</body>

</html>