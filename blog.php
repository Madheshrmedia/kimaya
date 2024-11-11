<!DOCTYPE html>
<html lang="en">
<?php
include_once "./header.php";
?>

<style>
    .core_ser_link {
        text-decoration: none;
        padding: 10px 15px;
        background: #DDAB07;
        color: white;
        font-size: 18px;
        border-radius: 3px;
    }

    .home-card {
        border: none;
    }
</style>

<body>

    <!-- blog banner -->
    <img src="./image/blogban.webp" class="img-fluid" alt="">

    <div class="container my-5">


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