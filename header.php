<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimaya Clinique</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="./image/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



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
            font-family: 'Magenta';
        }

        #headerall {
            background: #000000 !important;
            z-index: 7;
            position: relative;
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            color: #ffffff;
            font-size: 18px;
        }

        .header {
            padding: 0px;
        }

        .header-cont a {
            margin-right: 15px;
            /* Adjust spacing as needed */
        }

        .header-cont a:last-child {
            margin-right: 0;
            /* Removes margin from the last item */
        }

        .header-logo {
            width: 183px;
        }

        .getstart {
            color: white !important;
        }

        .topbar {
            background-color: #162F33;
        }

        /* .header-logo {
            width: 70px;
            height: 70px;
        } */

        .header-icon {
            width: 40px;
            margin-right: 10px;
        }

        .contact-info {
            color: black;
            text-decoration: none;
        }

        .contact-info p {
            margin: 0;
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-left: 8px;
        }

        .booknow-btn {
            text-decoration: none;
            padding: 10px 25px;
            background: #DDAB07;
            color: white;
            margin-left: 30px;
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            margin-right: 30px;
            font-weight: 300;
        }

        /* .navbar-brand {
            display: none;
        } */

        .header-icon {
            width: 25px;
        }

        @media only screen and (max-width: 600px) {

            /* .navbar-brand {
                display: block;
            } */

            .navbar {
                padding: 0px !important;
                background: #163033;
            }

            .navbar-toggler {
                border-color: white;
                margin-right: 10px;
            }

            .nav-container {
                padding: 0px;
            }

            .navbar-collapse {
                background: white;
                padding: 10px 30px;
            }

            .header-cont {
                display: block !important;
            }

            .contact-info {
                margin-bottom: 25px;
            }

            .booknow-btn {
                margin-left: 0px;
            }
        }
    </style>
</head>


<body>
    <header class="header header-sticky" id="headerall">

        <nav class="navbar navbar-expand-lg navbar-light shadow px-5 py-3">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="#"><img src="./image/kimaya_logo.png" alt="cogni logo"
                        class="header-logo"></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span><i class="fas fa-bars" style="color:white"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">Journey</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">Blog</a>
                        </li>
                    </ul>
                    <div class="d-flex header-cont align-items-center">

                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn">
                            Book Appointment
                        </a>
                        <a href="#" class="contact-info form-inline d-flex">
                            <img src="./image/fb-icon.png" class="header-icon" alt="">
                        </a>
                        <a href="#" class="contact-info form-inline d-flex">
                            <img src="./image/x-icon.png" class="header-icon" alt="">
                        </a>
                        <a href="#" class="contact-info form-inline d-flex">
                            <img src="./image/ig-icon.png" class="header-icon" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>