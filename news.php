<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="dev_raj" />
    <!-- ======== Page title ============ -->
    <title>Suga</title>
    <meta name="description" content="Suga" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/solar/favicon.png" />
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css" />

    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />


    <!-- template main style css file -->
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="responsive.css" />
    <link rel="stylesheet" href="sneha.css" />


</head>


<body class="body-wrapper">
    <!-- start navbar main header  -->
    <?php
    include "header.php";
    ?>
    <!-- end navbar -->
    <!-- welcome content start from here -->

    <!-- main banner section start -->
    <section class="main-inner-banner coverbg" style="background: var(--gbg), url(assets/img/sugas/news-banner.webp)">
        <div class="container">
            <div class="banner-content">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
                <h1>News</h1>
            </div>
        </div>
    </section>
    <!-- Main banner section code end -->

    <section class="main-onair-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 py-2">
                    <div class="sponsor-box-oppor">

                        <div class="video-box">
                            <h4 class="color-secondary pb-2">SPONSOR US</h4>
                            <img class="img-fluid w-100" src="assets/img/suga/sponsor1.png" alt="">
                        </div>
                        <div class="img-btn-box">
                            <img class="img-fluid w-100" src="assets/img/suga/sponsor2.png" alt="">
                            <div class="btntwo btnbox">
                                <a href="" class="m-auto"> DONATE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-xs-12 py-2">
                    <div class="content">
                        <img src="assets/img/sugas/news1.webp" alt="Snow">
                        <div class="centered">
                            <h2>Entertainment</h2>
                        </div>
                    </div>
                    <div class="content">
                        <img src="assets/img/sugas/news2.webp" alt="Snow">
                        <div class="centereddark">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                    <div class="content">
                        <img src="assets/img/sugas/news3.webp" alt="Snow">
                        <div class="centereddark">
                            <h2>Local News</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer code start -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer code end -->
    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>