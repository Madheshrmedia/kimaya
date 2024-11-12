<style>
    footer {
        background: #122132;
    }

    .footer-cardfirst,
    .footer-cardsec,
    .footer-cardthir,
    .footer-cardfour {
        color: white;
        border-right: 1px solid rgba(255, 255, 255, 0.3);
        padding: 0px 50px;
    }

    .footer-cardfiv {
        color: white;
        padding: 0px 50px;
    }

    .ser-head {
        font-size: 28px;
    }

    .foot-fb {
        width: 30px;
        margin-bottom: 22px;
    }

    .footer-row {
        padding-top: 50px;
    }

    .foot-serlink a {
        text-decoration: none;
        color: white;
        margin-top: 10px;
        display: inline-block;
        /* Ensure margin is applied correctly on each link */
    }

    .ser-head {
        margin: 30px 0px;
    }

    .foot-serhed,
    .foot-addhed {
        font-weight: 900;
    }

    .add-smal {
        margin-bottom: 10px;
        display: inline-block;
    }

    .end-footer {
        background: #CDB167;
    }
</style>

<footer>
    <div class="container">
        <div class="row footer-row">
            <div class="col-md-3 footer-cardfirst">
                <img src="./image/kimaya_logo.png" class="img-fluid footer-logo" alt="">
                <p class="footer-logo-cont mt-5">
                    Take the first step towards achieving your beauty goals with expert care at Kimaya Clinique
                </p>
            </div>
            <div class="col-md-3 footer-cardsec">
                <p class="ser-det">
                    Skin | Hair | Laser | Dental | Nails
                </p>
                <h5 class="ser-head">
                    Visit the best skin clinic now!
                </h5>

                <p class="ser-time">
                    Monday - Sunday <br>
                    10:30 am- 08:30 pm
                </p>

            </div>
            <div class="col-md-2 footer-cardthir">
                <p class="foot-serhed">
                    Links
                </p>
                <div class="foot-serlink">
                    <a href="#" class="foot-alink">About us</a> <br>
                    <a href="#" class="foot-alink">Our services</a> <br>
                    <a href="#" class="foot-alink">Blog</a>
                </div>
            </div>
            <div class="col-md-3 footer-cardfour">
                <p class="foot-addhed">
                    Say hello to us
                </p>
                <p class="foot-eid mt-4">
                    info@kimayaclinique.com
                </p>
                <p class="foot-add">
                    <small class="add-smal">Address</small><br>
                    No 1, First Floor, 2nd Ave, AD Block, Anna Nagar, Chennai, Tamil Nadu 600040
                </p>
            </div>
            <div class="col-md-1 footer-cardfiv">
                <img src="./image/fb-icon.png" class="foot-fb" alt=""><br>
                <img src="./image/x-icon.png" class="foot-fb" alt=""><br>
                <img src="./image/ig-icon.png" class="foot-fb" alt="">
            </div>
        </div>
    </div>
</footer>
<section class="end-footer">
    <p class="text-center py-3 mb-0">
        © 2024-2027, All Rights Reserved
    </p>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>



    var swiper = new Swiper(".mySwiper", {
        speed: 600,
        parallax: true,
        loop: true, // Enable looping
        autoplay: {
            delay: 4000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    var swiper = new Swiper(".aesthetic_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }
    });

    var swiper = new Swiper(".af_p_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }


    });


    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()


    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.btn_pop').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent form submission

            // Retrieve form values
            const name = document.querySelector('input[placeholder="Full name"]').value;
            const phone = document.querySelector('input[placeholder="Enter Phone No"]').value;
            const date = document.querySelector('input[type="date"]').value;
            const service = document.querySelector('input[placeholder="Enter Service"]').value;
            const message = document.querySelector('textarea[name="message"]').value;
            const location = document.querySelector('select').value;

            // Determine WhatsApp number based on location
            let whatsappNumber;
            if (location === "Anna nagar") {
                whatsappNumber = "+919884567000";
            } else if (location === "Adyar") {
                whatsappNumber = "+919884287000";
            } else {
                alert("Please select a valid location.");
                return;
            }

            // Construct the WhatsApp message
            const whatsappMessage = `This appointment is from the website.\n\nHello, I would like to confirm my appointment. \n\nName: ${name}\nPhone: ${phone}\nDate: ${date}\nService: ${service}\nMessage: ${message}\nLocation: ${location}`;

            // Open WhatsApp with the drafted message
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
            window.open(whatsappURL, '_blank');
        });
    });






</script>