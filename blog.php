<!DOCTYPE html>
<html lang="en">
<?php
include_once "./header.php";

// Your API endpoint
$api_url = "https://admin-backend.kimayaclinique.com/list-blog";

// Initialize cURL
$ch = curl_init();

$img_url = "https://admin-backend.kimayaclinique.com/upload/";

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only if your API uses HTTPS and you encounter SSL issues

// Execute cURL and fetch the data
$response = curl_exec($ch);

// Close cURL
curl_close($ch);

// Decode JSON response to PHP array
$blogs = json_decode($response, true);

// Check if the data is in the expected format
$blogs = isset($blogs['listblog']) ? $blogs['listblog'] : [];


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
    <?php if (!empty($blogs)): ?>
        <div class="container my-5">


            <div class="row mt-5">
                <?php
                foreach ($blogs as $blog):
                    ?>
                    <div class="col-md-4">

                        <div class="card home-card">
                            <img src="<?php echo $img_url . $blog['thumbnail_image']; ?>" class="card-img-top"
                                alt="best Fiction books">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo !empty($blog['title']) ? $blog['title'] : 'No Title'; ?></h5>
                                <p class="card-text">
                                    <?php echo !empty($blog['short_description']) ? $blog['short_description'] : 'No Description'; ?>
                                </p>
                                <a href="./blog-detail.php?id=<?php echo $blog['_id']; ?>" class="core_ser_link">Read more</a>
                            </div>
                        </div>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    <?php else: ?>
        <p>No blog posts found.</p>
    <?php endif; ?>

    <?php
    include_once "./footer.php";
    ?>
</body>

</html>