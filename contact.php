<!DOCTYPE html>
<html lang="en">
<?php
include_once "./header.php";
?>
<style>
    .contact-head {
        padding: 50px 0px;
    }

    .anna_btn {
        width: 200px;
    }

    .cont-icon {
        width: 28px;
    }

    .cont-add {
        text-transform: uppercase;
    }

    .form-card {
        padding: 50px;
        background: #FDFCFB;
        border: 1px solid #DDAB07;
    }

    .cont-btn a {
        padding: 10px 15px;
        background: #DDAB07;
        text-decoration: none;
        color: white;
    }
</style>

<body>

    <div class="contact-banner">
        <img src="./image/contact-ban.webp" class="img-fluid" alt="">
    </div>

    <div class="container">
        <h1 class="contact-head text-center">
            Get in Touch with Kimaya Clinique
        </h1>

        <!-- anna nagar -->
        <div class="img_card text-center">
            <img src="./image/annacont.webp" class="anna_btn" alt="">
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d407.138488004093!2d80.20942739754861!3d13.084709281580075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265aa5f2550e3%3A0x5a00eae3df99c53!2sKIMAYA%20CLINIQUE!5e0!3m2!1sen!2sin!4v1731048614179!5m2!1sen!2sin"
                            style="border:0;width:100%;height: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 mt-5">
                        <img src="./image/abt-right.webp" class="img-fluid" alt="">
                        <div class="cont-det mt-4">
                            <img src="./image/cont-phone.png" class="img-fluid cont-icon" alt="">
                            <p class="pt-2">+91 98845 67000</p>
                        </div>
                        <div class="cont-det mt-4">
                            <img src="./image/time.png" class="img-fluid cont-icon" alt="">
                            <p class="pt-2">Mon-Sun, 10:30 am- 08:30 pm</p>
                        </div>
                        <div class="cont-det mt-4">
                            <img src="./image/add.png" class="img-fluid cont-icon" alt="">
                            <p class="pt-2 cont-add">No 1, First Floor, 2nd Ave, AD Block, Anna Nagar, Chennai, Tamil
                                Nadu 600040
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- adyar -->
        <div class="img_card text-center mt-5">
            <img src="./image/adycont.png" class="anna_btn" alt="">
        </div>

        <div class="row mb-5">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2741.091991618711!2d80.25006807476755!3d13.007040566094593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526746baf022bd%3A0xd17926bc79d3fc22!2sKIMAYA%20CLINIQUE%20-%20ADYAR!5e0!3m2!1sen!2sin!4v1731055064159!5m2!1sen!2sin"
                            style="border:0;width:100%;height:100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 mt-5">
                        <img src="./image/abt-right.webp" class="img-fluid" alt="">
                        <div class="cont-det mt-4">
                            <img src="./image/cont-phone.png" class="img-fluid cont-icon" alt="">
                            <p class="pt-2">+91 98842 87000</p>
                        </div>
                        <div class="cont-det mt-4">
                            <img src="./image/time.png" class="img-fluid cont-icon" alt="">
                            <p class="pt-2">Mon-Sun, 10:30 am- 08:30 pm</p>
                        </div>
                        <div class="cont-det mt-4">
                            <img src="./image/add.png" class="img-fluid cont-icon" alt="">
                            <p class="pt-2 cont-add">NO 29, OLD NO 24 1ST MAIN ROAD, GANDHI NAGAR, <br>
                                ADYAR
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <h2 class="text-center">
                Contact form
            </h2>
            <div class="col-md-5 cont-form mx-auto">
                <div class="card form-card">
                    <div class="mb-4">
                        <label for="email" class="form-label">Your Name</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your name">
                    </div>
                    <div class="mb-4">
                        <label for="tel" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="tel" placeholder="Enter your Phone no.">
                    </div>
                    <div class="mb-4">
                        <label for="tel" class="form-label">Your Message</label>

                        <textarea name="" id="" cols="30" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="cont-btn">
                        <a href="#">Send</a>
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