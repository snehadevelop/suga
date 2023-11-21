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
    <section class="main-inner-banner coverbg" style="background: var(--gbg), url(assets/img/sugas/onair-banner.webp)">
        <div class="container">
            <div class="banner-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Opportunity</li>
                    </ol>
                </nav>
                <h1>Opportunity</h1>
            </div>
        </div>
    </section>

    <!-- Main banner section code end -->
    <section class="main-contact-section">
        <div class="container">
            <div class="main-contact-box">
                <div class="heading-box">
                    <h2 class="color-secondary  text-uppercase pb-4">Opportunity</h2>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form-box py-2">

                            <form>
                                <div class="row">
                                    <div class="col-md-6 p-0">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="form-group">
                                            <label for="">Phone Number</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class=" col-md-6 p-0">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email">
                                        </div>
                                    </div>

                                    <div class="col-md-6 p-0">
                                        <div class="form-group">
                                            <label for="">Subject</label>
                                            <input type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-12 p-0">
                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <textarea name="" id="" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="btncontact pt-2">
                                    <button type="submit">Submit</button>
                                </div>


                            </form>

                            <div class="form-social-box">
                                <ul>
                                    <li><a href="javascript:void;"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void;"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:void;"><i class="fab fa-google"></i></a></li>
                                    <li><a href="javascript:void;"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="javascript:void;"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="contact-details-box py-2">
                            <div class="heading-box">
                                <p class="color-lblack fpw5 pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p class="color-lblack fpw5 pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>


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